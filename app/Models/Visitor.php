<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable =['visitor_id','ip','country','city','isp','user_agent','lat','lon','cv_downloaded'];
}
