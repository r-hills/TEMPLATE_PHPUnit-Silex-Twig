<?php

	require_once "src/anagramGenerator.php";

	class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
	{

		function test_makeAnagram_blah()
		{
				$test_AnagramGenerator = new AnagramGenerator;
				$input = "bread";

				//Act
				$result = $test_AnagramGenerator->makeAnagram($input);

				//Assert
				$this->assertEquals("beard", $result);

		}

	}

?>