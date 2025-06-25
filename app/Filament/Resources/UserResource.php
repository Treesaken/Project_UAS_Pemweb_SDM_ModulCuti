<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User; // Pastikan ini model user Anda
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    // Pengaturan Navigasi
    protected static ?string $navigationLabel = 'System Users';
    protected static ?string $navigationIcon = 'heroicon-o-shield-check';
    protected static ?string $navigationGroup = 'Admin Management';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        // Form ini fokus pada data login dan role, bukan biodata pegawai.
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->dehydrateStateUsing(fn (string $state): string => Hash::make($state))
                    ->dehydrated(fn (?string $state): bool => filled($state))
                    ->required(fn (string $context): bool => $context === 'create'),
                
                // Dropdown untuk memilih role
                Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        // Mengisi tabel dengan kolom yang relevan
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                // Menampilkan nama role dari user
                Tables\Columns\TextColumn::make('roles.name')
                    ->searchable()
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
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Filter untuk hanya menampilkan user dengan role 'Admin'
        public static function getTabs(): array
    {
        return [
            'all' => Tab::make('All Users'),
            'admins' => Tab::make('Admins')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('roles', fn ($query) => $query->where('name', 'Admin'))),
            'pegawai' => Tab::make('Pegawai')
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas('roles', fn ($query) => $query->where('name', 'Pegawai'))),
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
