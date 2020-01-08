<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
class usuario extends Model
{
    protected $table='usuario';
    protected  $primaryKey='id';
    protected  $fillable=['id','name','email','password'];

}
