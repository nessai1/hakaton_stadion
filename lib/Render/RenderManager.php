<?php

namespace App\Render;

class RenderManager
{
    public static function renderList()
    {
        ob_start();
        include __DIR__.'/../../view/edit_list.php';
        $rs = ob_get_clean();
        return $rs;
    }

    public static function getListElement()
    {
    }
}