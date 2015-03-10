<?php namespace App\Auth\Driver;

use ROH\BonoAuth\Driver\NormAuth;
use Bono\App;
use Norm\Norm as NotORM;

class Norm extends NormAuth
{
    public function authenticate(array $options = array())
    {
        $app = App::getInstance();

        if (! isset($options['username']) or ! isset($options['password'])) {
            return null;
        }

        $userCollection = NotORM::factory(@$this->options['userCollection'] ?: 'User');

        $user = $userCollection->findOne(array(
            '!or' => array(
                array('username' => $options['username']),
                array('email'    => $options['username']),
            ),
        ));

        if (is_null($user)) {
            return null;
        }

        if (! password_verify($options['password'], $user['password'])) {
            return null;
        }

        if (empty($options['keep'])) {
            $app->session->reset();
        } else {
            $app->session->reset(array(
                'lifetime' => 365 * 24 * 60 * 60
            ));
        }

        $_SESSION['user'] = $user->toArray();

        return $_SESSION['user'];
    }
}
