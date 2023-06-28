<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useript extends Model
{
    use HasFactory;
    protected $table='useripts';
    protected $fillable=[
        'user_id',
        'ipt_id',
        'remark','hr'
    ];
    public function user()
    {
        return $this->BelongsTo(User::class, 'user_id','id');
    } 
    public function ipt()
    {
        return $this->BelongsTo(Ipt::class, 'ipt_id','id');
    } 
}
