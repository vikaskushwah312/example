<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shareGeniusList extends Model
{
    use HasFactory;
    protected $table = 'share_genius_list';

    protected $fillable = ['name','cmp','20_high','20_low','today_low','output'];
}
