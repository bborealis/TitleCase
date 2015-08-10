<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_of_words = explode(" ", $input_title);
            $output_titlecased = array();
            $ignore_lowercase = array("from", "to", "in", "the", "a", "and", "but", "for",
                                    "or", "nor", "so", "yet", "on");

            $firstword = 0;
            foreach ($input_array_of_words as $word) {
                $lower_case_count = 0;
                $firstword++;
                $mcname = "hi";

                if (strlen($word) != 1) {
                    $mcname = $word[0] . $word[1];
                }

                if (!(($mcname == "Mc") || ($mcname == "O'"))) {
                    $word = strtolower($word);
                }

                foreach ($ignore_lowercase as $lowercase) {
                    if ($word == $lowercase) {
                        $lower_case_count++;
                    }
                }

                if ((($lower_case_count == 0) || ($firstword == 1)) &&
                    !(ctype_digit($word)))  {
                        array_push($output_titlecased, ucfirst($word));
                } else {
                        array_push($output_titlecased, $word);
                }

            }
            return implode(" ", $output_titlecased);

        }
    }
?>
