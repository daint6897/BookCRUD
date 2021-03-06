<?php

namespace daint\BookCRUD\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    protected $fillable = ['title', 'author'];
}
