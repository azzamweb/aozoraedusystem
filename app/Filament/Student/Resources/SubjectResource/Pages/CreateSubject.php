<?php

namespace App\Filament\Student\Resources\SubjectResource\Pages;

use App\Filament\Student\Resources\SubjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSubject extends CreateRecord
{
    protected static string $resource = SubjectResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
