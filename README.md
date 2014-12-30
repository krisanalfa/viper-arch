# VIPER Archetype for Bono PHP Framework

### Quickly build your application with:

```
$ mkdir my-project
$ cd my-project
$ xpax init viper-arch // or xpax init https://github.com/krisanalfa/viper-arch.git
$ xpax serve
```
Or without xpax:

```
$ git clone https://github.com/krisanalfa/viper-arch.git my-awesome-project
$ cd my-awesome-project
$ composer install
$ cd www
$ php -S localhost:8000
```

### Viper archetype use:
- Bono Blade Template Engine ([bono-blade](https://github.com/krisanalfa/bono-blade)) based on [blade](https://github.com/illuminate/view)
- Zurb Foundation Theme ([blade-foundation](https://github.com/krisanalfa/blade-foundation) based on [blade-theme](https://github.com/krisanalfa/blade-theme))
- Kraken Dependency Injector ([bono-kraken](https://github.com/krisanalfa/bono-kraken))

### Philosophy
Viper lets you write your code in easy and neat style.
No worries about class dependency, Kraken will resolve them automagicaly.
Viper focus in testable application, each module can be separated via injecting them to the repository.
With sleek and simple theme, you can quickly develop the protoype without struggle with your UI.
Tired with `echo`? Blade Template Engine will make it fun.
I guarantee, you'll enjoy your development.
Viper makes you suck less.
