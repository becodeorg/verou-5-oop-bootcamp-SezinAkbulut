<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'content.php';
require 'article.php';
require 'ads.php';
require 'vacancy.php';

// Create instances of the classes
$article = new Article('Sample Article 1', 'This is the text for Article 1.');
$article2 = new Article('Sample Article 2', 'This is the text for Article 2.');
$ads = new Ads('Sample Ads', 'This is a sample ads text.');
$vacancy = new Vacancy('Sample Vacancy', 'This is a sample vacancy text.');

// Display the content
echo "Article: " . $article->display() . "\n";
echo "<br>";
echo "Article: " . $article2->display() . "\n";
echo "<br>";
echo "Ads: " . $ads->display() . "\n";
echo "<br>";
echo "Vacancy: " . $vacancy->display() . "\n";
echo "<br>";
