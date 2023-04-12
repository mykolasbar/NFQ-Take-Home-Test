<?php
namespace App\Service;

    class ReadTime {

        public function getReadTime(string $text) : float {
            $array = explode(' ', $text);
            $filtered_array = array_filter($array, fn($n) => strlen($n) > 3);
            $readtime = count($filtered_array) / 200;
            return round($readtime, 1);
        }
    }

?>