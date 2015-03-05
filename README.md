# VIPER Archetype for Bono PHP Framework

### Quickly build your application with:

Make sure you have [bower](http://bower.io/#install-bower) before continue.

```
$ git clone https://github.com/krisanalfa/viper-arch.git my-awesome-project
$ cd my-awesome-project
$ composer install
$ cd vendor/xinix-technology/naked2-theme
$ bower install
$ cd -
$ cd www
$ php -S localhost:8000
```

### Viper archetype use:
- [Bono Blade](https://github.com/krisanalfa/bono-blade) Template Engine based on [blade](https://github.com/illuminate/view)
- Naked v2 Theme ([naked](https://github.com/xinix-technology/naked) based on [blade-theme](https://github.com/krisanalfa/blade-theme))
- [Kraken](https://github.com/krisanalfa/bono-kraken) Dependency Injection
- [Bono Component](https://github.com/krisanalfa/b-comp) as helper

> **NOTE** Naked 2 Theme is proprietary Theme, you may not get the theme if you doesn't have access to xinix git server!

### Philosophy
Viper lets you write your code in easy and neat style.
No worries about class dependency, Kraken will resolve them automagicaly.
Viper focus in testable application, each module can be separated via injecting them to the repository.
With sleek and simple theme, you can quickly develop the protoype without struggle with your UI.
Tired with version management? BComp will do it magically.
Also, support with logging! Read BComp for more information.
Aaand, you don't need any extended PHP modules, viper-arch makes you compatible with Norm Flat File database.
I guarantee, you'll enjoy your development.
Viper makes you suck less.
