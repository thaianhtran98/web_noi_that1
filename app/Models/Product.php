<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'menu_id',
        'price',
        'price_sale',
        'active',
        'thumb',
        'view',
        'id_sp',
        'color',
        'size',
        'material',
        'style',
        'origin',
        'warranty',
    ];

    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')
            ->withDefault(['name' => '']);
    }
}
