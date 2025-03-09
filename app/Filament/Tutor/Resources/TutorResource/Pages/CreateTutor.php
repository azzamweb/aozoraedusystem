<?php

namespace App\Filament\Tutor\Resources\TutorResource\Pages;

use App\Filament\Tutor\Resources\TutorResource;
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
