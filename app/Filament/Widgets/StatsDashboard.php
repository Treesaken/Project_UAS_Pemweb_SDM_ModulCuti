<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsDashboard extends BaseWidget
{
    protected function getStats(): array
    {
        $countDivisi = \App\Models\Divisi::count();
        $countPegawai = \App\Models\Pegawai::count();
        $countPengajuanCuti = \App\Models\PengajuanCuti::count();
        $countJatahCuti = \App\Models\JatahCuti::count();
        return [
            Stat::make('Jumlah Divisi', $countDivisi . ' Divisi'),
            Stat::make('Jumlah Pegawai', $countPegawai . ' Pegawai'),
            Stat::make('Jumlah Pengajuan Cuti', $countPengajuanCuti . ' Pengajuan Cuti'),
            Stat::make('Jumlah Jatah Cuti', $countJatahCuti . ' Jatah Cuti'),
        ];
    }
}
