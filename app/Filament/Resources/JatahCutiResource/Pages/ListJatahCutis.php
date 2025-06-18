<?php

namespace App\Filament\Resources\JatahCutiResource\Pages;

use App\Filament\Resources\JatahCutiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJatahCutis extends ListRecords
{
    protected static string $resource = JatahCutiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
