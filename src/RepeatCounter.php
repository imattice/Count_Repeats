<?php
    class RepeatCounter {
        function countRepeats($input_word, $input_array){

            $lcinput_word = strtolower($input_word);
            $lcinput_array = strtolower($input_array);
            $count = 0;
            $exploded_array = explode(", ", $lcinput_array);
            $result = "";

            //var_dump($exploded_array);
            foreach ($exploded_array as $match){
                if ($lcinput_word == $match) {
                    $count++;
                };
            };

            if ($count == 0){
                $result = "No matches found.";
            } else {
                $result = $count;
            }
            return $result;
        }
    }
?>
