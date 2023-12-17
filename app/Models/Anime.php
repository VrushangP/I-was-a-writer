<?php

namespace App\Models; // Make sure to update the namespace based on your actual directory structure

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'anime_gallery'; // Replace 'your_table_name' with your actual table name
    protected $fillable = ['anime_name', 'anime_character', 'msc']; // Replace with your actual column names

    // Optionally, if you want to disable timestamps
    public $timestamps = false;
}
