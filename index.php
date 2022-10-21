<?php
    require('vendor/autoload.php');

    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Models\ModelName;

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver' => 'sqlite',
        // 'host' => 'localhost',
        'database' => './database/dat.sqlite',
        // 'username' => 'root',
        // 'password' => 'password',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();


    echo ModelName::get()->first()['value'];