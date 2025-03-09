<?php

namespace App\Filament\Student\Resources\TutorResource\Pages;

use App\Filament\Student\Resources\TutorResource;
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
