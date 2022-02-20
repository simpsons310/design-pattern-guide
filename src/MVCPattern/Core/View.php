<?php

namespace App\MVCPattern\Core;

use Exception;

class View
{
    public static function render($view, $arguments = [])
    {
        extract($arguments, EXTR_SKIP);

        $file = dirname(__DIR__) . "\\views\\$view";

        if (is_readable($file)) {
            require $file;
        } else {
            throw new Exception("$file not found.");
        }
    }

    public function getButtonHtml($id, $mode = 'update', $method = 'POST')
    {
        return "<form method='$method' action='/run.php/$mode'>\n
            <input type='hidden' name='id' value='$id'>\n
            <input type='submit' name='submit' value='$mode'>\n
            </form>";
    }
}
