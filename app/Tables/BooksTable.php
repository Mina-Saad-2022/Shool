<?php

namespace App\Tables;

use App\Models\Book;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class BooksTable extends AbstractTable
{
    /**
     * Configure the table itself.
     *
     * @return \Okipa\LaravelTable\Table
     * @throws \ErrorException
     */
    protected function table(): Table
    {
        return (new Table())->model(Book::class)
            ->routes([
//                'index'   => ['name' => 'books.index'],
//                'create'  => ['name' => 'book.create'],
//                'edit'    => ['name' => 'book.edit'],
//                'destroy' => ['name' => 'book.destroy'],
            ])
            ->destroyConfirmationHtmlAttributes(fn(Book $book) => [
                'data-confirm' => __('Are you sure you want to delete the entry :entry?', [
                    'entry' => $book->database_attribute,
                ]),
            ]);
    }

    /**
     * Configure the table columns.
     *
     * @param \Okipa\LaravelTable\Table $table
     *
     * @throws \ErrorException
     */
    protected function columns(Table $table): void
    {
        $table->column('id')->sortable();
        $table->column('title')->sortable();
        $table->column('description')->sortable();

        $table->column('created_at')->dateTimeFormat('d/m/Y H:i')->sortable();
        $table->column('updated_at')->dateTimeFormat('d/m/Y H:i')->sortable(true, 'desc');
    }

    /**
     * Configure the table result lines.
     *
     * @param \Okipa\LaravelTable\Table $table
     */
    protected function resultLines(Table $table): void
    {
        //
    }
}
