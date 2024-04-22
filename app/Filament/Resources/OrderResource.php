<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatusEnum;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Infolist;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function getModelLabel(): string
    {
        return __("Commande");
    }


    public static function getNavigationBadge(): ?string
    {
        return parent::getEloquentQuery()->where('status', 1)->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')
                    ->label(__("Nom et prénom"))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->label(__("Ville"))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label(__("Adress"))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->label(__("Téléphone"))
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->label(__("État"))
                    ->native(false)
                    ->options(OrderStatusEnum::toArray())
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->native(false)
                    ->label(__('Utilisateur'))
                    ->relationship('user', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label(__("Nom et prénom"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->label(__("Ville"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->label(__("Adress"))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label(__("Téléphone"))
                    ->searchable(),

                Tables\Columns\TextColumn::make('products_count')
                    ->counts('products')
                    ->label(__("Produits"))
                    ->badge()
                    ->searchable(),
                Tables\Columns\SelectColumn::make('status')
                    ->label(__("État"))
                    ->options(OrderStatusEnum::class),

                Tables\Columns\TextColumn::make('created_at')
                    ->label("Commandé à")
                    ->dateTime()
                    ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }




    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('full_name')->label(__("Nom et prénom")),
                TextEntry::make('city')->label(__("Ville")),
                TextEntry::make('address')->label(__("Adress")),
                TextEntry::make('phone')->label(__("Téléphone")),
                TextEntry::make('status')->label(__("État")),
                TextEntry::make('user.name')->label(__('Utilisateur')),
                RepeatableEntry::make('products')
                    ->label('Produits')
                    ->schema([
                        TextEntry::make("name")
                            ->label("Nom de produit"),
                        TextEntry::make("price")
                            ->label("Prix"),
                        TextEntry::make("status")
                            ->label("Etat")
                    ])->columns(3)
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
