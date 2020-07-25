<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Teacher extends Authenticatable implements MustVerifyEmail
{
    use Sortable;
    public $timestamps = false;
     protected $table = 'users';
     public $sortable = ['name','email','id','role'];
    
}
