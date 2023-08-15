<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPage extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'subtitle1',
        'content1',
        'title2',
        'subtitle2',
        'content2',
        'title3',
        'subtitle3',
        'content3',
        'title4',
        'subtitle4',
        'content4',
        'title5',
        'subtitle5',
        'content5',
        'title6',
        'subtitle6',
        'content6',
    ];
}
