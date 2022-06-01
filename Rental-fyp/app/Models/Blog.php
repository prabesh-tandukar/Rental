<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title', 'description', 'image'
    ];

    public function getBlogById($id)
    {
        $blog = Blog::where('id', $id)->first();
        return $blog;
    }

    public function getLatestBlog($type = false, $limit = 4, $offset = 0)
    {
        if ($type)
            return Blog::type($type)->orderBy('created_at', 'DESC')->take($limit)->skip($offset)->paginate($limit);
        else
            return Blog::orderBy('created_at', 'DESC')->take($limit)->skip($offset)->paginate($limit);
    }
}
