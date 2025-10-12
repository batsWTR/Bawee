<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Visitor extends Model
{
    use HasFactory;
    protected $fillable =['visitor_id','ip','country','city','isp','user_agent','lat','lon','cv_downloaded'];

    public function messages(){
        return $this->HasMany(MessageContact::class);
    }
}
