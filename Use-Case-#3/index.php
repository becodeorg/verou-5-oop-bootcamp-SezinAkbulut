<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'content.php';
require 'article.php';
require 'ads.php';
require 'vacancy.php';

// Create instances of the classes
$article1 = new Article('Sample Article 1', 'This is the text for Article 1.', true);
$article2 = new Article('Sample Article 2', 'This is the text for Article 2.');
$ads = new Ads('Sample Ads', 'This is the text of ads.');
$vacancy = new Vacancy('Sample Vacancy', 'This is the text of vacancy.');

// Create an array with the content
$contentArray = [$article1, $article2, $ads, $vacancy];

// Display the array structure
//var_dump($contentArray);

print_r($contentArray);
echo "<br>";
echo "<br>";

// Display all content types
foreach ($contentArray as $content) {
    echo $content->display() . "<br>";
}
/*
// Display the content
echo "Article: " . $article1->display() . "\n";
echo "<br>";
echo "Article: " . $article2->display() . "\n";
echo "<br>";
echo "Ads: " . $ads->display() . "\n";
echo "<br>";
echo "Vacancy: " . $vacancy->display() . "\n";
echo "<br>";
*/