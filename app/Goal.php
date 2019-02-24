<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goal
 *
 * @property-read \App\Course $course
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal query()
 * @mixin \Eloquent
 */
class Goal extends Model
{
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
