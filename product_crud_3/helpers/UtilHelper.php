<?php
    namespace app\helpers;

    class UtilHelper {
        public static function randomString($length) {
            $characters = "01234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $string = "";
            for ($index = 0; $index < $length; $index++) {
                $index = round(0, strlen($characters) - 1);
                $string .= $characters[$index];
            }
            return $string;
        }
    }
?>