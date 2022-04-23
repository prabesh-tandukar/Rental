<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function getAboutUsById($id)
    {
        $about = About::where('id', $id)->first();
        return $about;
    }
}
