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
        function test_countRepeats_single_letter_no_match()
        {
            $test_countRepeats = new RepeatCounter;
            $input_word = "b";
            $input_list = "c";

            $result = $test_countRepeats->countRepeats($input_word, $input_list);

            $this->assertEquals("No matches found.", $result);
        }

        //User inputs a single letter and it is found, but does not count the unmatched letters
        // input -> "d" | "d", "e", "f"
        // output-> 1
        function test_countRepeats_single_letter_single_match_in_array()
        {
            $test_countRepeats = new RepeatCounter;
            $input_word = "d";
            $input_list = "d, e, f";

            $result = $test_countRepeats->countRepeats($input_word, $input_list);

            $this->assertEquals(1, $result);
        }

        //User inputs an array with multiple matches and each match is counted
        //input-> "g" | "g", "g", "n", "g", "t"
        //output-> 3
        function test_countRepeats_single_letter_multiple_match_in_array()
        {
            $test_countRepeats = new RepeatCounter;
            $input_word = "g";
            $input_list = "g, g, n, g, t";

            $result = $test_countRepeats->countRepeats($input_word, $input_list);

            $this->assertEquals(3, $result);
        }

        //User inputs a two-charactor string and it's match is counted in an array of strings
        // input -> "hh" | "hh", "hi", "ij"
        // output -> 1

        //User can enter full words and parital matches will not be counted
        // input-> "Good" | "Hello", "Goodbye", "Good Morning", "Good"
        // output -> 1

        //User inputs mixed case input and matches are still found
        //input -> "HeLlO" | "hello, HELLO, hi"
        //output-> 2



    }
?>
