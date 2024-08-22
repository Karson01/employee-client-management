<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientWork extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'client_work';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'client_id', 'employee_id', 'check_date', 'check_in1', 'user_in_type1', 'user_in_id1', 'check_out1', 'user_out_type1', 'user_out_id1', 'is_active', 'created_at', 'updated_at'
    ];
}
