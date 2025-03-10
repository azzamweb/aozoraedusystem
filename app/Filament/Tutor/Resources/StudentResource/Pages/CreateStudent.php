<?php

namespace App\Filament\Tutor\Resources\StudentResource\Pages;

use App\Filament\Tutor\Resources\StudentResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
