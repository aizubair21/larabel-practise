<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    //by default 'contact' model coresponding with 'contacts' table.
    // but if this coresponding isn't correct. you have to speify it yourself.

    protected $table = 'contacts';

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
