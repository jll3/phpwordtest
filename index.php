<?php
$file = file_get_contents("The Agile approach (2).dat");

//echo $file."<br><br><br>";

$count=$percentage=$wordcount = 0;
$words = '';

$s = explode(" ", $file);
foreach ($s as $word){
	if (strpos(strtolower($word), 's') === 0){
		$words = $words.' '.$word;
		$count++;
	}
	$wordcount++;
}
$percentage = round($wordcount/$count, 2);

echo 'Words beginning with s: <br>'.$words.'<br><br>Number of words starting with s: '.$count.'<br><br>Pecrentage of words starting with s: '.$percentage.'%';
?>