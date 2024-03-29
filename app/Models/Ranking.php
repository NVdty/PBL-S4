<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['user', 'aspek'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function aspek()
    {
        return $this->belongsTo(Aspek::class);
    }
}
