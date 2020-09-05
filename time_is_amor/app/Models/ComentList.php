<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ComentList;
use Carbon\Carbon;

class ComentList extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
      'comentDate'=> 'required',
      'comentTitle' => 'required',
    );
}