<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [

        'mainTitle',
        'animalTitle',
        'animalSubtitle',
        'animalContent1',
        'animalContent2',

        'courierTitle',
        'courierSubtitle',
        'courierContent',

        'wardTitle',
        'wardSubtitle',
        'wardContent',

        'techiesTitle1',
        'techiesSubtitle1',
        'techiesContent1',
        'techiesTitle2',
        'techiesContent2',

    ];
}
