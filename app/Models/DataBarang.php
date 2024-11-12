<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $table = 'data_barang';
    protected $primaryKey = 'id_barang';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'id_barang', 
        'nama_barang',
        'harga',
        'stok',
        'foto',
    ];
}

