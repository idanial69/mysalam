<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PegawaiBaharu extends Model
{
    protected $table = 'pegawai_baharu';

    protected $fillable = [
        'no_kp',
        'nama_penuh',
        'gelaran',
        'tarikh_lahir',
        'jantina',
        'status_perkahwinan',
        'no_telefon',
        'emel',
        'alamat',
        'poskod',
        'bandar',
        'negeri',
        'jawatan',
        'bahagian',
        'tarikh_mula',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'tarikh_lahir' => 'date',
            'tarikh_mula' => 'date',
        ];
    }
}
