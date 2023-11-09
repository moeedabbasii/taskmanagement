<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillable = ['title', 'priority', 'dueDate', 'description','completed'];
    use HasFactory;
}
