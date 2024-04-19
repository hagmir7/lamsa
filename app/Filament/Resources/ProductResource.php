<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Enums\ProductStatusEnum;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function getModelLabel(): string
    {
        return __("Produits");
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label("Nom de produit")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('category_id')
                            ->relationship('category', 'name')
                            ->native(false)
                            ->searchable()
                            ->preload()
                            ->label("Catégorie"),
                        Forms\Components\TextInput::make('price')
                            ->label("Prix")
                            ->required()
                            ->numeric()
                            ->prefix('MAD'),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),

                        Grid::make(2)->schema([
                            Forms\Components\Select::make('colore')
                                ->label(__("Color"))
                                ->relationship('colors', 'name')
                                ->native(false)
                                ->multiple()
                                ->nullable()
                                ->searchable()
                                ->preload()
                                ->live()
                                ->createOptionForm(self::ColorForm())
                                ->createOptionModalHeading(__("Color"))
                                ->createOptionUsing(function (array $data): int {
                                    $color = Color::create($data);
                                    return $color->getKey();
                                }),


                            Forms\Components\Select::make('size')
                                ->label(__("Size"))
                                ->relationship('sizes', 'name')
                                ->native(false)
                                ->multiple()
                                ->nullable()
                                ->searchable()
                                ->preload()
                                ->live()
                                ->createOptionForm(self::SizeForm())
                                ->createOptionModalHeading(__("Size"))
                                ->createOptionUsing(function (array $data): int {
                                    $color = Size::create($data);
                                    return $color->getKey();
                                }),
                        ]),


                        Forms\Components\RichEditor::make('body')
                            ->label("Contune")
                            ->required()
                            ->maxLength(65535)
                            ->columnSpanFull(),
                ])->columns(3),

            Grid::make()
                ->schema([
                    Forms\Components\Repeater::make('images')
                        ->relationship("images")
                        ->schema([
                            Forms\Components\FileUpload::make('path')
                                ->label(false)
                                ->image()
                                ->required(),
                        ])
                        ->grid(3)
                ])
                ->columns(1)

            ]);





    }


    public static function ColorForm()
    {
        return [
            Forms\Components\Section::make()
                ->schema([Forms\Components\TextInput::make('name')
                    ->label(__("Colore"))
                    ->required()
                    ->maxLength(255),
                Forms\Components\ColorPicker::make('code')
                    ->required(),
                ])->columns(2)
        ];
    }


    public static function SizeForm()
    {
        return [
            Forms\Components\Section::make()
                ->schema([Forms\Components\TextInput::make('name')
                    ->label(__("Taille"))
                    ->required()
                    ->maxLength(255),
                ])->columns(2)
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("Nom de produit")
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label("Catégorie")
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label(__("Prix"))
                    ->money("MAD")
                    ->badge()
                    ->sortable(),

                Tables\Columns\SelectColumn::make('status')
                    ->sortable()
                    ->label("État")
                    ->options(ProductStatusEnum::toArray())
                    ->afterStateUpdated(function () {
                        Notification::make()
                            ->success()
                            ->title(__("État modifié"))
                            ->send();
                    }),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
