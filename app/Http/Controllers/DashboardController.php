<?php

namespace App\Http\Controllers;

use App\Models\PegawaiBaharu;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $pegawai = Schema::hasTable('pegawai_baharu')
            ? PegawaiBaharu::query()->latest('id')->first()
            : null;

        $profileFields = [
            'no_kp', 'nama_penuh', 'tarikh_lahir', 'jantina',
            'status_perkahwinan', 'no_telefon', 'emel', 'alamat',
            'poskod', 'bandar', 'negeri', 'jawatan', 'bahagian', 'tarikh_mula',
        ];

        $completedFields = $pegawai
            ? collect($profileFields)->filter(fn (string $field) => filled($pegawai->{$field}))->count()
            : 0;

        $profileProgress = count($profileFields) > 0
            ? (int) round(($completedFields / count($profileFields)) * 100)
            : 0;

        return view('welcome', compact('pegawai', 'profileProgress'));
    }
}
