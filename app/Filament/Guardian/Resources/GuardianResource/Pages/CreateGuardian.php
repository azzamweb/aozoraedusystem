<?php

namespace App\Filament\Guardian\Resources\GuardianResource\Pages;

use App\Filament\Guardian\Resources\GuardianResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGuardian extends CreateRecord
{
    protected static string $resource = GuardianResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
