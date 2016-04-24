<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;  // call the contract 
use Illuminate\Database\Eloquent\Model;

class Organization extends Model implements Authenticatable
{
   use \Illuminate\Auth\Authenticatable; // makes it so your model can use the authencicatable
 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'organizations';
}
