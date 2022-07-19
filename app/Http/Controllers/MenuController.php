<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(Request $request, $id, $slug = '')
    {
        $menu = $this->menuService->getId($id);
        $menu_child = $this->menuService->getchild($id);
        if ($menu->parent_id != 0)
            $products = $this->menuService->getProduct($menu, $request);
        else
            $products = $this->menuService->getProduct_menuParent($menu, $request);

//        dd($menu_child);

        return view('menu', [
            'title' => $menu->name,
            'products' => $products,
            'menu'  => $menu,
            'menu_child'=>$menu_child
        ]);
    }
}
