<?php

namespace App\Filament\Resources\JatahCutiResource\Pages;

use App\Filament\Resources\JatahCutiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJatahCuti extends EditRecord
{
    protected static string $resource = JatahCutiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
