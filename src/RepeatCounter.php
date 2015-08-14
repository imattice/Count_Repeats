<?php
    class RepeatCounter {
        function countRepeats($input_word, $input_array){

            //shifts all input to lowercase to create equal comparisons between input and array
            $lcinput_word = strtolower($input_word);
            $lcinput_array = strtolower($input_array);
            //counter
            $count = 0;
            //takes the input list string and converts to an array
            $exploded_array = explode(" ", $lcinput_array);
            //empty result variable which will hold the result of our logic
            $result = "";

            //var_dump($exploded_array);

            //loops though each word in the input array
            foreach ($exploded_array as $match){
                //if a match is found, the match counter is increased by one
                if ($lcinput_word == $match) {
                    $count++;
                };
            };

            //if no matches have been found, return string notifying the user
            if ($count == 0){
                $result = "No matches found.";
            //if matches were found, replaces the empty variable with the numner of matches
            } else {
                $result = $count;
            }
            return $result;
        }
    }
?>
