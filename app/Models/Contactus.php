<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

    //arahin ke table tujuan
    protected $table = 'contactuses';

    // yang ingin di isi
    protected $fillable = [
        'fullname', 'email', 'phone', 'subject', 'message'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];
}
