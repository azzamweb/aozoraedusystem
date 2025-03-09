<?php

namespace App\Filament\Tutor\Resources\GroupResource\Pages;

use App\Filament\Tutor\Resources\GroupResource;
use Filament\Resources\Pages\EditRecord;

class EditGroup extends EditRecord
{
    protected static string $resource = GroupResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
