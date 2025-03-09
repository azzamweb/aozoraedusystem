<?php

namespace App\Filament\Tutor\Resources\GroupResource\Pages;

use App\Filament\Tutor\Resources\GroupResource;
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
