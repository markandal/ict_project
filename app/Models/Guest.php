<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Make sure to use this trait
use Illuminate\Notifications\Notifiable;

class Guest extends Authenticatable
{
    use Notifiable;

    // Add any fields for the 'guests' table
    protected $fillable = ['name', 'email', 'password'];
    
    // Optionally, you can add additional functionality for your Guest model here
}

