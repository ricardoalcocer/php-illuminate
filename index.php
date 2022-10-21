<?php
    require('vendor/autoload.php');
    require('dbboot.php');

    use App\Models\ModelName;
    
    echo ModelName::get()->first()['value'];