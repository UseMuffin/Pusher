# Pusher

[![Build Status](https://img.shields.io/travis/UseMuffin/Pusher/master.svg?style=flat-square)](https://travis-ci.org/UseMuffin/Pusher)
[![Coverage](https://img.shields.io/coveralls/UseMuffin/Pusher/master.svg?style=flat-square)](https://coveralls.io/r/UseMuffin/Pusher)
[![Total Downloads](https://img.shields.io/packagist/dt/muffin/pusher.svg?style=flat-square)](https://packagist.org/packages/muffin/pusher)
[![License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE)

Pusher Webservice (API) for CakePHP 3

## Install

Using [Composer][composer]:

```
composer require muffin/pusher:dev-master
```

You then need to load the plugin. You can use the shell command:

```
bin/cake plugin load Muffin/Pusher
```

or by manually adding statement shown below to `bootstrap.php`:

```php
Plugin::load('Muffin/Pusher');
```

## Usage

In your `app.php`, configure your Pusher service like any other configuration, by adding a new element to the configure array:

```
    'Webservices' => [
        'pusher' => [
            'className' => 'Muffin\Webservice\Connection',
            'service' => 'Muffin/Pusher.Pusher',
        ]
    ]
```

## Patches & Features

* Fork
* Mod, fix
* Test - this is important, so it's not unintentionally broken
* Commit - do not mess with license, todo, version, etc. (if you do change any, bump them into commits of
their own that I can ignore when I pull)
* Pull request - bonus point for topic branches

To ensure your PRs are considered for upstream, you MUST follow the [CakePHP coding standards][standards].

## Bugs & Feedback

http://github.com/usemuffin/pusher/issues

## License

Copyright (c) 2015, [Use Muffin][muffin] and licensed under [The MIT License][mit].

[cakephp]:http://cakephp.org
[composer]:http://getcomposer.org
[mit]:http://www.opensource.org/licenses/mit-license.php
[muffin]:http://usemuffin.com
[standards]:http://book.cakephp.org/3.0/en/contributing/cakephp-coding-conventions.html
