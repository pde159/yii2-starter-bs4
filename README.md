
Yii 2 Basic Project with Adminlte 3 and Bootstrap 4

based on Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for rapidly creating small projects.

The template contains the following features:
- bootstrap 4
- adminlte 3.0
- fontawesome 5
- yii2-usuario forked with bs4 compatibility
- kartik widgets

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP >= 7.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar create-project --prefer-dist --stability=dev pde159/yii2-starter-bs4 myapp
~~~

Now you should be able to access the application through the following URL, assuming `myapp` is the directory directly under the Web root.

~~~
http://localhost/myapp/web/
~~~

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2db',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

Execute the migration:

```sh
php yii migrate
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.