<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Story;
use App\Enums\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\StoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StoryResource\RelationManagers;

class StoryResource extends Resource
{
    protected static ?string $model = Story::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';






    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Success Story')
                ->icon('heroicon-m-information-circle')
                ->collapsible()

                ->schema([
                    // Select::make('animal_id')
                    //     ->relationship('animal', 'name')
                    //     ->native(false)
                    //     ->required(),
                    // Select::make('animal_id')
                    //     ->relationship('animal', 'name', modifyQueryUsing: fn (Builder $query) => $query->where('status', 'Adopted'))
                    //     ->label('Adopted animal (success story can only be created for animals with status "adopted")')
                    //     ->nullable()
                    //     ->native(false),
                    TextInput::make('animal_name')
                        ->required()
                        ->label('Animal name')
                        ->maxLength(255)
                        ->nullable(),
                    TextInput::make('adopter_name')
                        ->required()
                        ->label('Name of the adopter')
                        ->maxLength(255),
                    TextInput::make('title')
                        ->required()
                        ->label('Short title for the story')
                        ->maxLength(255),
                    Textarea::make('description_short')
                        ->maxLength(65535)
                        ->label('Short story')
                        ->columnSpan('full'),
                    MarkdownEditor::make('description_long')
                        ->required()
                        ->label('Long story'),
                    // Textarea::make('description_long')
                    //     ->maxLength(65535)
                    //     ->label('Success Story - long description')
                    //     ->columnSpan('full'),
                    Select::make('adoption_country')
                        ->required()
                        ->native(false)
                        ->label('Adoption Country')
                        ->options(Location::class),
                    FileUpload::make('photo_main')

                        ->acceptedFileTypes($types = ['jpg', 'jpeg', 'png'])
                        ->image()
                        ->maxSize(15000) // Set the maximum size of files that can be uploaded, in kilobytes.
                        ->label('Main Photo')
                        ->directory(fn ($get) => str_replace(' ', '', 'images/story' . $get('name')))
                        ->imageEditor(),

                    FileUpload::make('photos_additional')
                        ->label('Additional Photos')
                        ->multiple()
                        ->directory(fn ($get) => str_replace(' ', '', 'images/story' . $get('name')))
                        ->reorderable()
                        ->appendFiles()
                        ->maxFiles(5),
                    //->imagePreviewHeight('250')

                    KeyValue::make('youtube_links')
                        ->label('Youtube URL (example: Key: video1 & Value: https://www.youtube.com/watch?v=1234567890)')

                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo_main')->circular(),
                TextColumn::make('animal_name')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('adopter_name')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('adoption_country')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])])
            ->emptyStateActions([Tables\Actions\CreateAction::make()]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStories::route('/'),
            'create' => Pages\CreateStory::route('/create'),
            'view' => Pages\ViewStory::route('/{record}'),
            'edit' => Pages\EditStory::route('/{record}/edit'),
        ];
    }
}
