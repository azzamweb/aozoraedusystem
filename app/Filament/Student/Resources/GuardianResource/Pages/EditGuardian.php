<?php

namespace App\Filament\Student\Resources\GuardianResource\Pages;

use App\Filament\Student\Resources\GuardianResource;
use Filament\Resources\Pages\EditRecord;

class EditGuardian extends EditRecord
{
    protected static string $resource = GuardianResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
