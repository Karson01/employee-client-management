<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //use HasFactory;
    //protected $fillable=['name'];

    protected $primaryKey = 'id';
    protected $table = 'client';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The users that belong to the branch.
     */

}
