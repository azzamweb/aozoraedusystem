<?php

namespace App\Filament\Guardian\Resources\TutorResource\Pages;

use App\Filament\Guardian\Resources\TutorResource;
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
