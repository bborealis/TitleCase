<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneLetter(){

            //Arange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "b";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("B", $result);
        }


        function test_makeTitleCase_oneWord(){

            //Arange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf", $result);

        }

        function test_makeTitleCase_multipleWords() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_leaveLowerCase() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf from brighton";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf from Brighton", $result);
        }

        function test_makeTitleCase_nonLetters() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "57 beowulf alternate!!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("57 Beowulf Alternate!!", $result);
        }
        function test_makeTitleCase_allUppercase() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BEOWULF ON THE ROCKS";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf on the Rocks", $result);
        }

        function test_makeTitleCase_wierdUppercase() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "BeoWulf aNd mE";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Beowulf and Me", $result);
        }

        function test_makeTitleCase_unusualNames() {

            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "here's to beowulf and McDuff and O'Malley";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Here's to Beowulf and McDuff and O'Malley", $result);
        }

    }

?>
