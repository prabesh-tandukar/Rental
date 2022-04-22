<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'name', 'email', 'subject', 'message', 'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
