<?php

namespace App\Filament\Guardian\Resources\TutorResource\Pages;

use App\Filament\Guardian\Resources\TutorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTutors extends ListRecords
{
    protected static string $resource = TutorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
