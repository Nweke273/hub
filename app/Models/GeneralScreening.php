<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralScreening extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullName',
        'cEmail',
        'age',
        'qualification',
        'occupation',
        'motivation',
        'communication',
        'location',
        'laptop',
        'technical_background',
        'logical_reasoning'
    ];

    public function screening() {
        //using this, belongTo and class keyword to match the appropriate id
        return $this->belongsTo(Bootcamp::class,'bootcamp_id','id');
    }
}
