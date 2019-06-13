<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'street_number','street_name','email','question',
        'phone_number','province','city','postal_code','country','opt_in'
    ];
    
    
}
