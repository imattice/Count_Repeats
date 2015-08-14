<?php
    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase{

        //User inputs a single letter and it is counted in an array with one matching single letter
        // input-> "a" | "a"
        // output-> 1
        function test_countRepeats_single_letter_match()
        {
            $test_countRepeats = new RepeatCounter;
            $input_word = "a";
            $input_list = "a";

            $result = $test_countRepeats->countRepeats($input_word, $input_list);

            $this->assertEquals(1, $result);
        }

        //User inputs a single letter and it is not found in an array without any matching letters
        // input-> "b" | "c"
        // output-> "No matches found."

        //User inputs a single letter and it is found, but does not count the unmatched letters
        // input -> "d" | "d", "e", "f"
        // output-> 1

        //User inputs an array with multiple matches and each match is counted
        //input-> "g" | "g", "g", "n", "g", "t"
        //output-> 3

        //User inputs a two-charactor string and it's match is counted in an array of strings
        // input -> "hh" | "hh", "hi", "ij"
        // output -> 1

        //User can enter full words and parital matches will not be counted
        // input-> "Good" | "Hello", "Goodbye", "Good Morning", "Good"
        // output -> 1

    }
?>
