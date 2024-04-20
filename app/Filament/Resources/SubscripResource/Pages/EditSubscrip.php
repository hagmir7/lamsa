<?php

namespace App\Filament\Resources\SubscripResource\Pages;

use App\Filament\Resources\SubscripResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscrip extends EditRecord
{
    protected static string $resource = SubscripResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
