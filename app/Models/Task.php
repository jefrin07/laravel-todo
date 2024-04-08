<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'description',
        'user_id', // Add 'user_id' to the $fillable array
    ];

    public function isCompleted()
    {
        return $this->completed_at !== null;
    }
}
