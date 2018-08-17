<?php 
use Illuminate\Database\Eloquent\Model as Elouqent;

class User extends Elouqent
{
    public $name;
    public $timestamp = [];
    protected $fillable = ['username', ' email'];

}