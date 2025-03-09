<?php

namespace App\Filament\Student\Resources\GroupResource\Pages;

use App\Filament\Student\Resources\GroupResource;
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
