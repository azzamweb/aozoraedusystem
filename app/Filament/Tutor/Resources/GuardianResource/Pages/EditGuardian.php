<?php

namespace App\Filament\Tutor\Resources\GuardianResource\Pages;

use App\Filament\Tutor\Resources\GuardianResource;
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
