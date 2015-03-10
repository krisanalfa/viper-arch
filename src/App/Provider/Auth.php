<?php namespace App\Provider;

use Bono\App;
use Bono\Provider\Provider;
use Exception;
use Norm\Filter\Filter;
use Norm\Norm;
use Slim\Exception\Stop;
use Slim\Route;

class Auth extends Provider
{
    public function initialize()
    {
        $app = $this->app;

        $this->registerAuthFilter($app);
        $this->registerPasswdRouteHandler($app);
    }

    protected function registerAuthFilter(App $app)
    {
        $app->filter('auth.authorize', function ($options) {
            if (is_bool($options)) {
                return $options;
            }

            $allowedRoutes = @$this->options['allowed'] ?: array();

            if (! is_null($this->app->router->getCurrentRoute())) {
                return false;
            } else {
                $route = new Route('', function() {});

                foreach ($allowedRoutes as $key => $value) {
                    $route->setPattern($key);
                    $route->setCallable($value);

                    $pathInfo = $this->app->request->getPathInfo() ?: '/';

                  if ($route->matches($pathInfo)) {
                        $callable = $route->getCallable();
                        $callableReturnValue = $callable();

                        if (is_bool($callableReturnValue)) {
                            return $callableReturnValue;
                        }

                        if (is_null($callableReturnValue)) {
                            return true;
                        }
                    }
                }
            }

            return $options;
        }, 1);
    }

    protected function registerPasswdRouteHandler(App $app)
    {
        $app->get('/passwd', function () use ($app) {
            $app->view->display('passwd', array(
                'entry' => Norm::factory('User')->findOne($_SESSION['user']['$id']),
            ));
        });

        $app->post('/passwd', function () use ($app) {
            $oldPassword = (string) $_SESSION['user']['password'];

            Filter::register('checkPassword', function ($value, $data) use ($oldPassword) {
                if (password_verify($value, $oldPassword)) {
                    return $value;
                } else {
                    throw new Exception('Old password not valid');
                }
            });

            $filter = Filter::create(array(
                'old' => 'trim|required|checkPassword',
                'new' => 'trim|required|confirmed',
            ));

            $data = $app->request->post();

            try {
                $data = $filter->run($data);
                $user = Norm::factory('User')->findOne($_SESSION['user']['$id']);

                $user['password'] = $data['new_confirmation'];
                $user['password_confirmation'] = $data['new_confirmation'];

                $user->save();

                $_SESSION['user'] = $user->toArray();

                if (f('auth.passwd.success', $user)) {
                    h('notification.info', 'Your password is changed.');
                }
            } catch (Stop $e) {

            } catch (Exception $e) {
                h('notification.error', $e);
            }

            $app->view->display('passwd', array(
                'entry' => $data,
            ));
        });
    }
}
