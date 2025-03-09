<?php

namespace App\Filament\Tutor\Resources\TutorResource\Pages;

use App\Filament\Tutor\Resources\TutorResource;
use Filament\Resources\Pages\EditRecord;

class EditTutor extends EditRecord
{
    protected static string $resource = TutorResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
