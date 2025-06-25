<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JatahCutiResource\Pages;
use App\Models\JatahCuti;
use App\Models\Pegawai; // Pastikan model ini di-import
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JatahCutiResource extends Resource
{
    protected static ?string $model = JatahCuti::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Management SDM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric()
                    ->length(4)
                    ->default(now()->year),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),

                Forms\Components\Select::make('nip')
                    ->label('NIP Pegawai')
                    ->options(Pegawai::query()->pluck('nip', 'nip'))
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // PERBAIKAN: Tampilkan kolom 'nip' langsung dari tabel jatah_cutis
                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP Pegawai')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListJatahCutis::route('/'),
            'create' => Pages\CreateJatahCuti::route('/create'),
            'edit' => Pages\EditJatahCuti::route('/{record}/edit'),
        ];
    }

     public static function getModelLabel(): string
    {
        return 'Jatah Cuti'; // label di CRUD
    }

    public static function getPluralModelLabel(): string
    {
        return 'Jatah Cuti'; // label di sidebar dan tabel
    }

    public static function getNavigationLabel(): string
    {
        return 'Jatah Cuti  '; // label di sidebar
    }
}
