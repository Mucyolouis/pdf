<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Marriage;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MarriageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MarriageResource\RelationManagers;

class MarriageResource extends Resource
{
    protected static ?string $model = Marriage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([Section::make('Bride Info')
            ->description('Info about the bride')
            ->aside()
            ->schema([
                Forms\Components\TextInput::make('bride_first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bride_last_name')
                    ->required()
                    ->maxLength(255),
            ]),
            Section::make('Groom Info')
            ->description('Info about the groom')
            ->aside()
            ->schema([
                Forms\Components\TextInput::make('groom_first_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('groom_last_name')
                    ->required()
                    ->maxLength(255),
            ]),
            Section::make('Godparents Info')
            ->description('Info about the godparents')
            ->aside()
            ->schema([
                Forms\Components\TextInput::make('god_mother_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('god_father_name')
                    ->required()
                    ->maxLength(255),
            ]),
            Section::make('Other info')
    ->description('Additional data')
    ->aside()
    ->schema([
        DatePicker::make('marriage_date'),
        Forms\Components\TextInput::make('telephone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_approved'),
    ]),
    Section::make('Clergy')
    ->description('the padiri who approved this marriage')
    ->aside()
    ->schema([
        Forms\Components\TextInput::make('clergy_id')
                    ->required()
                    ->numeric(),
    ])
                
                
                
                
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clergy_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bride_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('bride_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('groom_first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('groom_last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('god_mother_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('god_father_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telephone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_approved')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMarriages::route('/'),
            'create' => Pages\CreateMarriage::route('/create'),
            'edit' => Pages\EditMarriage::route('/{record}/edit'),
        ];
    }
}
