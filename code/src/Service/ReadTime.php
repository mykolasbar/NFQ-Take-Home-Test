<?php
    namespace App\Service;

    class ReadTime {

        // To get the readtime according to the formula provided, I'm removing punctuation marks from the article text so that 
        // they wouldn't skew the word lengths, converting it to an array where each item is a word, filtering out words shorter 
        // than 3 characters, then getting the read time from the length of the array divided by 200.

        public function getReadTime(string $text) : int {
            $text = str_replace(array(',', '.'), '', $text);
            $array = explode(' ', $text);
            $filtered_array = array_filter($array, fn($i) => strlen($i) > 3);
            $readtime = count($filtered_array) / 200;
            return round($readtime);
        }
    }
?>