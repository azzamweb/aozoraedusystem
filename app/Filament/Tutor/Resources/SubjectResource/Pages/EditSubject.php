<?php

namespace App\Filament\Tutor\Resources\SubjectResource\Pages;

use App\Filament\Tutor\Resources\SubjectResource;
use Filament\Resources\Pages\EditRecord;

class EditSubject extends EditRecord
{
    protected static string $resource = SubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
