<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';   
    protected $fillable = ['title', 'description', 'image', 'category_id'];

    public function category(){
        return $this->hasOne(Project::class);
    }
}
