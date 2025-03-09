<?php

namespace App\Filament\Guardian\Resources\StudentResource\Pages;

use App\Filament\Guardian\Resources\StudentResource;
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
