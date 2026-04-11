<?php

namespace App\Filament\Resources\Products\Schemas;

use Dom\Text;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Tiptap\Core\Mark;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            ]);
    }
}
