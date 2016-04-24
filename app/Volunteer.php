<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model implements Authenticatable
{
     use \Illuminate\Auth\Authenticatable;

 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'volunteers';
}
