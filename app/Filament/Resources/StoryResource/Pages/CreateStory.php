<?php

namespace App\Filament\Resources\StoryResource\Pages;

use App\Filament\Resources\StoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStory extends CreateRecord
{
    protected static string $resource = StoryResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        foreach ($data['youtube_links'] as $key => $value) {
            $data['youtube_links'][$key] = str_replace('watch?v=', 'embed/', $value);
        }

        foreach ($data['youtube_links'] as $key => $value) {
            $data['youtube_links'][$key] = str_replace('youtu.be', 'www.youtube.com/embed/', $value);
        }

        foreach ($data['youtube_links'] as $key => $value) {
            $data['youtube_links'][$key] = str_replace('shorts', 'embed', $value);
        }

        return $data;
    }
}
