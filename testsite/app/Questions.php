<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Questions extends Model
{
	use Sortable;
	public $timestamps = false;
     protected $table = 'questions';
     public $fillable = ['id','title','question','category','answer','questionimage','answerimage'];

}
