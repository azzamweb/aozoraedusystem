<?php

namespace App\Filament\Student\Resources\StudentResource\Pages;

use App\Filament\Student\Resources\StudentResource;
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
