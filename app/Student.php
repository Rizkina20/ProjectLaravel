<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // jika tetap mengguanakan tabel mahasiswa di phpmyadmin tanpa membuat tabel baru
    protected $table = "mahasiswa";
}
