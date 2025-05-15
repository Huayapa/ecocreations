<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function convertImg($list) {
        return $list->map(function ($item) {
            if (!empty($item->imagen)) {
                $item->imagen_base64 = base64_encode($item->imagen);
            }
            return $item;
        });
    }
}
