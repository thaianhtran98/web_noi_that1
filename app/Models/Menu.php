<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active',
        'sort',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'menu_id', 'id');
    }

    public function menu_parent($child)
    {
        return Menu::where('id',$child->parent_id)->first();
    }

    public function menu_child($parent)
    {
        return Menu::where('parent_id',$parent->id)->get();
    }
}
