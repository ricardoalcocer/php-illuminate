<?php

    namespace App\Models;

    use illuminate\Database\Eloquent\Model;

    class ModelName extends Model{
        protected $table        = "actual_table_name";
        public $timestamps      = false;
        protected $fillable     = []; // fields you want to make available on the create method
    }