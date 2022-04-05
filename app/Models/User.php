<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];
    
    protected $guarded=[];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    #accessor
    #here we will make a formate for the attributes we want to. 
    #the php magic method get wiil  be used here. the functon name will start with 'get' and end with 'Attribute' and in the middle of these two we will write the name of the attributes we want to set a formate
    public function getNameEmailAttribute(){
        return $this->name .'-'.$this->email;
    }
}
