<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Message;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\MessageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MessageResource\RelationManagers;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('phone'),

                TextInput::make('email')
                    ->required(),
                MarkdownEditor::make('content')
                    ->columnSpan('full')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('d-M-Y')
                    ->label('Received'),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'view' => Pages\ViewMessage::route('/{record}'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}
