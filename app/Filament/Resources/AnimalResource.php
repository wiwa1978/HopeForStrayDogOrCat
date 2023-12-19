<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Animal;
use App\Enums\Location;
use Filament\Forms\Form;
use App\Enums\AnimalSize;
use App\Enums\AnimalType;
use Filament\Tables\Table;
use App\Enums\AnimalGender;
use App\Enums\AnimalStatus;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ViewField;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use Filament\Infolists\Components\Tabs\Tab;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\AnimalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnimalResource\RelationManagers;

class AnimalResource extends Resource
{
    protected static ?string $model = Animal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('General Information')
                        ->schema([
                            Section::make('General Information')
                            ->icon('heroicon-m-information-circle')
                            ->collapsible()
                            ->schema([

                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(255),
                                MarkdownEditor::make('description')
                                    ->required(),
                                Select::make('type')
                                    ->required()
                                    ->native(false)
                                    ->label('Animal Type')
                                    ->options(AnimalType::class),
                                Select::make('size')
                                    ->required()
                                    ->native(false)
                                    ->label('Animal Size')
                                    ->options(AnimalSize::class),
                                Select::make('gender')
                                    ->required()
                                    ->native(false)
                                    ->options(AnimalGender::class),
                                Select::make('location')
                                    ->required()
                                    ->native(false)
                                    ->label('Current location of the animal')
                                    ->options(Location::class),
                                Radio::make('age')
                                    ->options([
                                        '0-1 years' => '0-1 years',
                                        '1-2 years' => '1-2 years',
                                        '2-3 years' => '2-3 years',
                                        '3-4 years' => '3-4 years',
                                        '4-5 years' => '4-5 years',
                                        '5-6 years' => '5-6 years',
                                        '6-7 years' => '6-7 years',
                                        '7-8 years' => '7-8 years',
                                        '8-9 years' => '8-9 years',
                                        '9-10 years' => '9-10 years',
                                        'older than 10 years' => 'older than 10 years',
                                        'older than 15 years' => 'older than 15 years',
                                    ])
                                    ->columns(3)
                                    ->gridDirection('row')
                                    ->required(),

                        ])->compact(),
                    ])->columnSpan('full'),


                    Wizard\Step::make('Medical & Social Information')
                        ->schema([
                            Section::make('Medical & Social Information')
                            ->icon('heroicon-m-rectangle-stack')
                            ->collapsible()
                            ->columns(2)
                            ->schema([
                                Toggle::make('chipped')->required(),
                                Toggle::make('kids_friendly')->required(),

                                Toggle::make('vaccinated')->required(),
                                Toggle::make('cats_friendly')->required(),

                                Toggle::make('rabies')->required(),
                                Toggle::make('dogs_friendly')->required(),

                                Toggle::make('sterilized')->required(),


                                Select::make('status')
                                ->required()
                                ->label('Adoption Status')
                                ->native(false)
                                ->options(AnimalStatus::class)->columnSpan('full'),

                                MarkdownEditor::make('environment')
                                    ->label('Describe the environment the animal would ideally have (e.g garden, no children, etc...)')
                                    ->required()
                                    ->columnSpan('full'),
                            ]),
                    ])->columnSpan('full'),


                    Wizard\Step::make('Media')
                        ->schema([
                            Section::make('Media')
                            ->icon('heroicon-m-photo')
                            ->collapsible()
                            ->schema([
                                FileUpload::make('photo_main')
                                    ->acceptedFileTypes($types = ['jpg', 'jpeg', 'png'])
                                    ->image()
                                    ->maxSize(15000) // Set the maximum size of files that can be uploaded, in kilobytes.
                                    ->label('Main Photo (max 1 photo | only jpg, jpeg, png extensions)')
                                    ->directory(fn ($get) => str_replace(' ','', 'media/' . $get('name')))
                                    ->imageEditor(),

                                FileUpload::make('photos_additional')
                                    ->label('Additional Photos (max 20 photos | only jpg, jpeg, png extensions)')
                                    ->multiple()
                                    ->directory(fn ($get) => str_replace(' ','', 'media/' . $get('name')))
                                    ->reorderable()
                                    ->appendFiles()
                                    ->maxFiles(20),
                                    //->imagePreviewHeight('250')
                                    // ->imageCropAspectRatio('16:9')
                                    // ->imageResizeTargetWidth('1920')
                                    // ->imageResizeTargetHeight('1080')

                                FileUpload::make('videos')
                                    ->multiple()
                                    ->maxSize(50000)
                                    ->maxFiles(4)
                                    ->acceptedFileTypes($types = ['video/mp4'])
                                    ->label('Media (max 4 videos | max 50MB |  mp4 only)')
                                    ->directory(fn ($get) => str_replace(' ','', 'media/' . $get('name')))
                                    ->previewable(true),

                                KeyValue::make('youtube_links')
                                    ->label('Youtube URL (example: Key: video1 & Value: https://www.youtube.com/watch?v=1234567890)')

                            ]),
                        ]),
                    ])->columnSpan('full'),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo_main')
                    ->circular(),
                TextColumn::make('name')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('age')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                ->options(AnimalType::class),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\TreatmentsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnimals::route('/'),
            'create' => Pages\CreateAnimal::route('/create'),
            'edit' => Pages\EditAnimal::route('/{record}/edit'),
        ];
    }
}
