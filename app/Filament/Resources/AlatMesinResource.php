<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlatMesinResource\Pages;
use App\Filament\Resources\AlatMesinResource\RelationManagers;
use App\Models\AlatMesin;
use FFI;
use Filament\Forms;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlatMesinResource extends Resource
{
    protected static ?string $model = AlatMesin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
           ->schema([
    Forms\Components\TextInput::make('nomor_alat')
        ->required()
        ->maxLength(255),

    Forms\Components\TextInput::make('jenis_barang')
        ->required()
        ->maxLength(255),

    Forms\Components\TextInput::make('nama_barang')
        ->required()
        ->maxLength(255),

    Forms\Components\TextInput::make('merk_type')
        ->required()
        ->maxLength(255),

    Forms\Components\TextInput::make('jumlah')
        ->required()
        ->numeric(),

    Forms\Components\TextInput::make('satuan')
        ->required()
        ->maxLength(50),

    Forms\Components\TextInput::make('kondisi') // ← diganti dari Select ke TextInput
        ->required()
        ->maxLength(255),

    Forms\Components\Textarea::make('keterangan')
        ->nullable(),

    Forms\Components\FileUpload::make('foto')
        ->image()
         ->directory('public') // ← Tambahkan baris ini
        ->visibility('public')
        ->nullable(),
])
->columns(2);
           }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_alat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis_barang')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nama_barang')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('merk_type')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jumlah')
                    ->sortable(),

                Tables\Columns\TextColumn::make('satuan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('kondisi')
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan'),

                Tables\Columns\ImageColumn::make('foto')
            
                    ->size(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListAlatMesins::route('/'),
            'create' => Pages\CreateAlatMesin::route('/create'),
            'edit' => Pages\EditAlatMesin::route('/{record}/edit'),
        ];
    }
}
