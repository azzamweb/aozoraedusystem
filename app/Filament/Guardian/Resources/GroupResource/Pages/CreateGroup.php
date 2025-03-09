<?php

namespace App\Filament\Guardian\Resources\GroupResource\Pages;

use App\Filament\Guardian\Resources\GroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateGroup extends CreateRecord
{
    protected static string $resource = GroupResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
