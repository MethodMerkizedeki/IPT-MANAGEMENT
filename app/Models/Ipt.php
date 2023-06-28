<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipt extends Model
{
    use HasFactory;
    protected $table='ipts';
    protected $fillable=[
        
        'description',
        'region',
        'vacancy',
        'status','category','hr'
    ]; 
    public function useript()
    {
        return $this->hasMany(Useript::class);
    } 
    

 //Timestamps
 public $timestamp = 'datetime';
}
