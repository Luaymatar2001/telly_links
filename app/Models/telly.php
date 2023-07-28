<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class telly extends Model
{
    use HasFactory;
    protected $table = 'tellies';
    protected $fillable = ['link', 'name'];
    //Globle Scope
    protected static function booted()
    {

        //listiner for create the slug before save the model data
        parent::boot();
        //static call all variable static from the tally model

        static::created(function ($model) {
            if (!empty($model->name)) {
                $model->slug =  Str::slug($model->name . random_int(1, 900));
            } else {
                $model->slug =  Str::slug(Str::random(10) . random_int(1, 10));
            }
            // dd($model->slug);
            $model->save();
        });
    }
}
