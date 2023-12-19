<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Treatment;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\TreatmentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TreatmentResource\RelationManagers;

class TreatmentResource extends Resource
{
    protected static ?string $model = Treatment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Treatment Information')
                ->icon('heroicon-m-information-circle')
                ->collapsible()
                ->schema([
                    Select::make('animal_id')
                        ->relationship('animal', 'name')
                        ->native(false)
                        ->required(),
                    TextInput::make('name')
                        ->required()
                        ->maxLength(255),
                    MarkdownEditor::make('notes')
                        ->columnSpan('full')
                        ->required(),
                    DatePicker::make('treatment_date')
                        ->native(false)
                        ->required(),
                    TextInput::make('price')
                        ->numeric()
                        ->prefix('€')
                        ->maxValue(20000),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('price')
                    ->money('EUR')
                    ->sortable(),
                TextColumn::make('animal.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')->dateTime('d-m-Y'),
            ])
            ->filters([
                //
            ])
            ->actions(
                [
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                    ]
            )
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
            'index' => Pages\ListTreatments::route('/'),
            'create' => Pages\CreateTreatment::route('/create'),
            'view' => Pages\ViewTreatment::route('/{record}'),
            'edit' => Pages\EditTreatment::route('/{record}/edit'),
        ];
    }
}
