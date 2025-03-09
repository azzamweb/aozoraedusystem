<?php

namespace App\Filament\Student\Resources\TutorResource\Pages;

use App\Filament\Student\Resources\TutorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTutor extends CreateRecord
{
    protected static string $resource = TutorResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
