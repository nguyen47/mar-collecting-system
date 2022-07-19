<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterProgram extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "project_id", "position"];

    public function projects()
    {
        return $this->belongsTo(Project::class, "project_id");
    }

    public function users()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
