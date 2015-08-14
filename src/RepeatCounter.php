<?php
    class RepeatCounter {
        function countRepeats($input_word, $input_array){

            $count = 0;
            $exploded_array = explode(", ", $input_array);
            $result = "";

            //var_dump($exploded_array);
            foreach ($exploded_array as $match){
                if ($input_word == $match) {
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
