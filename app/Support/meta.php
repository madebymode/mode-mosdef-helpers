<?php
use Mosdef\Helpers\Support\Meta;

if (!function_exists('meta')) {

    /**
     * helper function for getting an instance of the meta helper
     * @return Mosdef\Helpers\Support\Meta
     */
    function meta() {

        static $meta;

        if (!$meta) {
            $meta = new Meta();
        }

        return $meta;
    }
}