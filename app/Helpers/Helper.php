<?php


namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td>' . $menu->id . '</td>
                        <td>' . $char . $menu->name . '</td>
                        <td>' . self::active($menu->active) . '</td>
                        <td>' . $menu->updated_at . '</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="'. route('edit_danhmuc',$menu->id) . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm"
                                onclick="removeRow(' . $menu->id . ',\''. route('delete_danhmuc') .'\')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                ';

                unset($menus[$key]);

                $html .= self::menu($menus, $menu->id, $char . '|--');
            }
        }

        return $html;
    }

    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs">NO</span>'
            : '<span class="btn btn-success btn-xs">YES</span>';
    }

    public static function menus($menus, $parent_id = 0) :string{
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                if ($menu->parent_id == 0){
                    $html .= '
                    <li>
                        <a href="#">
                            ' . $menu->name . '
                        </a>';
                }else{
                    $html .= '
                    <li>
                        <a href=" '. route('index_danhmuc',[$menu->id,Str::slug($menu->name, "-")]).' ">
                            ' . $menu->name . '
                        </a>';
                }


                if (self::isChild($menus, $menu->id)) {
                    $html .= '<ul class="sub-menu">';
                    $html .= self::menus($menus, $menu->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    public static function menus_m($menus1, $parent_id = 0) :string{
        $html1 = '';
        foreach ($menus1 as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                if ($menu->parent_id == 0){
                    $html1 .= '
                    <li>
                        <a href="#">
                            ' . $menu->name . '
                        </a>';
                }else{
                    $html1 .= '
                    <li>
                        <a href=" '. route('index_danhmuc',[$menu->id,Str::slug($menu->name, "-")]).' ">
                            ' . $menu->name . '
                        </a>';
                }

                unset($menus1[$key]);

                if (self::isChild($menus1, $menu->id)) {
                    $html1 .= '<ul class="sub-menu-m">';
                    $html1 .= self::menus_m($menus1, $menu->id);
                    $html1 .= '</ul>';
                    $html1 .= '<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>';
                }
                $html1 .= '</li>';
            }
        }

        return $html1;
    }


    public static function isChild($menus, $id) : bool
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }

        return false;
    }

    public static function price($price = 0, $priceSale = 0)
    {
        if ($priceSale != 0) return number_format($priceSale);
        if ($price != 0)  return number_format($price);
        return '<a href="/lien-he.html">Liên Hệ</a>';
    }
}
