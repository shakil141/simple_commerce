<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menufacture extends Model
{
    use HasFactory;

    protected $table = 'tbl_menufactures';

    protected $primaryKey = 'menufacture_id';

    protected $fillable = [
        'manufacture_name',
        'manufacture_description',
        'menufacture_status'
    ];
}
