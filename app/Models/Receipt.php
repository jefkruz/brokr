<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function users()
    {
      return $this->belongsTo(User::class,  'user_id');
    }

    public function totalsum($id){
      //  return $this->hasMany(Receipt::class, 'user_id', 'id');
       $property  =  Receipt::where('user_id',$id)->get();
        return $property;
    }

    public function commission()
    {
        return $this->hasMany(Commission::class,'receipt_id');
    }
}
