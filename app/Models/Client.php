<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'client';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','vat','indirizzo_fatturazione','consorzio_id','contract_id','zone_id','indirizzo_negozio','referente','tel','email','is_active','created_by','updated_by'
    ];

}
