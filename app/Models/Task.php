<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model //tasks table
{
    public $table = 'tasks';

    protected $fillable = [
        'description',
    ];

    public function isComplete() {
        return $this->completed_at !== null;
    }
}
