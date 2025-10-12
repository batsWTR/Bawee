<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MessageContact extends Model
{
    use HasFactory;
    protected $fillable = ['email','message','visitor_id'];

    public function visitor(){
        return $this->belongsTo(Visitor::class);
    }


}
