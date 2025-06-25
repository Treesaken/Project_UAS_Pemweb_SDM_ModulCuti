<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengajuanCutiResource\Pages;
use App\Models\PengajuanCuti;
use App\Models\Pegawai; // Pastikan model Pegawai di-import
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PengajuanCutiResource extends Resource
{
    protected static ?string $model = PengajuanCuti::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Management SDM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('tanggal_awal')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_akhir')
                    ->required(),
                Forms\Components\TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('ket')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(1)
                    ->default('P') // Default status 'Pending'
                    ->hidden(), // Sembunyikan dari form, karena status diatur oleh Admin
                
                // --- PERUBAHAN UTAMA DI SINI ---
                // Mengganti TextInput menjadi Select untuk NIP Pegawai
                Forms\Components\Select::make('pegawai_nip')
                    ->label('NIP Pegawai')
                    // Mengambil semua NIP dari tabel pegawais untuk dijadikan pilihan
                    ->options(Pegawai::query()->pluck('nip', 'nip'))
                    ->searchable()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pegawai_nip')
                    ->label('NIP Pegawai')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_awal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_akhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'P' => 'warning',
                        'A' => 'success',
                        'R' => 'danger',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('ket')
                    ->searchable()
                    ->limit(30) // PERBAIKAN: Gunakan ->limit() untuk membatasi panjang teks di tabel
                    ->tooltip("Lihat selengkapnya"), // Menampilkan teks penuh saat hove
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
            'index' => Pages\ListPengajuanCutis::route('/'),
            'create' => Pages\CreatePengajuanCuti::route('/create'),
            'edit' => Pages\EditPengajuanCuti::route('/{record}/edit'),
        ];
    }

     public static function getModelLabel(): string
    {
        return 'Pengajuan Cuti'; // label di CRUD
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pengajuan Cuti'; // label di sidebar dan tabel
    }

    public static function getNavigationLabel(): string
    {
        return 'Pengajuan Cuti'; // label di sidebar
    }
}
