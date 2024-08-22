<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'employee';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'sur_name', 'codice_fiscale', 'negozio_principale_id', 'email', 'mansione', 'tel', 'contract_id', 'tipe_of_contract', 'ccnl_id', 'livello', 'ore_contratto', 'orario_notturno', 'data_assunzione', 'data_scadenza','is_active','created_by','updated_by'
    ];
}
