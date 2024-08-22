<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consorzio extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'consorzio';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','is_active','created_by','updated_by'
    ];
}
