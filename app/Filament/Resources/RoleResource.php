<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoleResource\Pages;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Spatie\Permission\Models\Role; // <-- PERBAIKAN PENTING: Gunakan model Role dari Spatie

class RoleResource extends Resource
{
    // Gunakan model Role dari Spatie
    protected static ?string $model = Role::class;

    protected static ?string $navigationIcon = 'heroicon-o-finger-print';
    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Field untuk nama Role
                TextInput::make('name')
                    ->label('Role Name')
                    ->required()
                    ->minLength(2)
                    ->maxLength(255)
                    // Pastikan nama role unik (kecuali untuk record yang sedang diedit)
                    ->unique(ignoreRecord: true),

                // Field untuk memilih Permissions yang berelasi
                Select::make('permissions')
                    ->multiple() // Bisa memilih lebih dari satu permission
                    ->relationship('permissions', 'name') // Mengambil data dari relasi 'permissions' dan menampilkan kolom 'name'
                    ->searchable()
                    ->preload(), // Memuat semua opsi permission saat halaman dibuka
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk menampilkan nama Role
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                // Kolom untuk menampilkan tanggal dibuat
                TextColumn::make('created_at')
                    ->dateTime('d-M-Y')
                    ->sortable(),
            ])
            ->filters([
                // Filter bisa ditambahkan di sini jika perlu
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    // PERBAIKAN: Gunakan halaman terpisah untuk List, Create, dan Edit (standar CRUD)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoles::route('/'),
            'create' => Pages\CreateRole::route('/create'),
            'edit' => Pages\EditRole::route('/{record}/edit'),
        ];
    }
}