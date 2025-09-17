<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'setting',
        'levels',
        'user_id',
        'slug',
        'last_updated'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
