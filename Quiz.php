<?php
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	$q4 = $_POST["q4"];
	$q5 = $_POST["q5"];
	$score = 0;

	echo "Question 1: What year was Google founded?<br>";
	if ($q1 == a)
	{
		echo "You answered: a) 1996";
	} elseif ($q1 == b)
	{
		echo "You answered: b) 1997";
	} elseif ($q1 == c)
	{
		echo "You answered: c) 1998";
		$score++;
	} elseif ($q1 == d)
	{
		echo "You answered: d) 1999";
	}
	echo "<br>Correct answer: c) 1998<br><br>";

	echo "Question 2: What is the top speed of an ostrich?<br>";
	if ($q2 == a)
	{
		echo "You answered: a) 30 mph";
	} elseif ($q2 == b)
	{
		echo "You answered: b) 36 mph";
	} elseif ($q2 == c)
	{
		echo "You answered: c) 43 mph";
		$score++;
	} elseif ($q2 == d)
	{
		echo "You answered: d) 50 mph";
	}
	echo "<br>Correct answer: c) 43 mph<br><br>";
	
	echo "Question 3: How many chromosomes do goats have?<br>";
	if ($q3 == a)
	{
		echo "You answered: a) 46";
	} elseif ($q3 == b)
	{
		echo "You answered: b) 50";
	} elseif ($q3 == c)
	{
		echo "You answered: c) 54";
	} elseif ($q3 == d)
	{
		echo "You answered: d) 60";
		$score++;
	}
	echo "<br>Correct answer: d) 60<br><br>";

	echo "Question 4: What type of fruit is a winter banana?<br>";
	if ($q4 == a)
	{
		echo "You answered: a) banana";
	} elseif ($q4 == b)
	{
		echo "You answered: b) berry";
	} elseif ($q4 == c)
	{
		echo "You answered: c) apple";
		$score++;
	} elseif ($q4 == d)
	{
		echo "You answered: d) pear";
	}
	echo "<br>Correct answer: c) apple<br><br>";

	echo "Question 5: What color is a mirror?<br>";
	if ($q5 == a)
	{
		echo "You answered: a) silver";
	} elseif ($q5 == b)
	{
		echo "You answered: b) black";
	} elseif ($q5 == c)
	{
		echo "You answered: c) green";
		$score++;
	} elseif ($q5 == d)
	{
		echo "You answered: d) white";
	}
	echo "<br>Correct answer: c) green<br><br>";
	echo "You got a total of ".$score." correct! That's a score of ".($score * 20)."%<br>";
?>
