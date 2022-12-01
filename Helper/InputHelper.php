<?php

namespace Helper {
    class inputHelper
    {
        static function input(string $info): string
        {
            echo "$info : ";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}
