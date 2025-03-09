<?php

namespace App\Filament\Tutor\Resources\StudentResource\Pages;

use App\Filament\Tutor\Resources\StudentResource;
use Filament\Resources\Pages\EditRecord;

class EditStudent extends EditRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
