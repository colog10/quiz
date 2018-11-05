<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function answers()
    {
        return $this->hasMany(Answer::class,'question_id','id_question');

    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id_category');
    }
}
