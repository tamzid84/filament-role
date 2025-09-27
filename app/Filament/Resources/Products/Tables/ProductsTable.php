<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
// Add the following import if StatusEnum exists in your project
use App\Enums\StatusEnum;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use App\Exports\ExcellCollectionExport;
use Filament\Tables;
use Filament\Actions\Action;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Tables\Actions\BulkAction;


class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->sortable()->searchable(),
                TextColumn::make('description')->label('Description')->limit(50)->sortable()->searchable(),
                TextColumn::make('price')->label('Price')->money('usd', true)->sortable(),
                TextColumn::make('category.name')->label('Category')->sortable()->searchable(),
                TextColumn::make('tags.name')->label('Tags')->counts('tags')->sortable(),
                TextColumn::make('status')->label('Status')->searchable()->badge()->sortable(),
                TextColumn::make('created_at')->label('Created At')->toggleable(),
                //
            ])
            ->filters([

                SelectFilter::make('status')
                    // ->options([
                    //     'active' => 'Active',
                    //     'inactive' => 'Inactive',
                    // ])
                    ->options(StatusEnum::class)
                    ->label('Status'),
                SelectFilter::make('category')
                ->relationship('category', 'name')
                ->multiple()
                ->label('Category'),
            ])
           

            ->recordActions([
                EditAction::make()
                ->visible(fn ($record) => auth()->user()->can('edit products')),
                DeleteAction::make()
                ->visible(fn ($record) => auth()->user()->can('delete products')),
    
                
            ])
          
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                    ->visible(fn () => auth()->user()->can('delete products')),
                ]),
               
                Action::make('Export Excel')
                ->icon('heroicon-o-document-arrow-down')
                ->action(function () {
                    return Excel::download(new ProductsExport, 'products.xlsx');
                }),
            ])
            ->headerActions([
                // BulkActionGroup::make([
                //     DeleteBulkAction::make()
                //     ->authorize(fn () => auth()->user()?->hasRole('Admin')),
               
               Action::make('Export PDF')
                ->icon('heroicon-o-document-arrow-down')
                ->action(function () {
                    $products = \App\Models\Product::all();

                    $pdf = Pdf::loadView('pdf.products', [
                        'products' => $products,
                    ]);

                    return response()->streamDownload(
                        fn() => print($pdf->output()),
                        'products.pdf'
                    );
                }),

                

               
            ]);
    }

//     public static function canCreate(): bool
// {
//     return auth()->user()?->can('create products');
// }

// public static function canEdit($record): bool
// {
//     return auth()->user()?->can('edit products');
// }

// public static function canDelete($record): bool
// {
//     return auth()->user()?->can('delete products');
// }
}
