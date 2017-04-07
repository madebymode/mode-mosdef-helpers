<?php
use Mosdef\Helpers\Support\Pages\Title;

if (!function_exists('title')) {

    /**
     * helper function for getting an instance of the title helper
     * @return Mosdef\Helpers\Support\Pages
     */
    function title() {

        static $title;

        if (!$title) {
            $title = new Title();
        }

        return $title;
    }
}