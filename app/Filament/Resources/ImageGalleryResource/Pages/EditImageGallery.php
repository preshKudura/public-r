<?php

namespace App\Filament\Resources\ImageGalleryResource\Pages;

use App\Filament\Resources\ImageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditImageGallery extends EditRecord
{
    protected static string $resource = ImageGalleryResource::class;
    protected static ?string $navigationLabel = 'Gallery';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
