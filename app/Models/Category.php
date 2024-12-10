<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
     protected $guarded = [];

    /** @use HasFactory<CategoryFactory> */
    use HasFactory, Notifiable;
}
