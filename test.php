<?php
require_once './src/RandomQuotes.php';

// Creates a new object of RandomQuotes class.
$rq = new \RandomQuotes\RandomQuotes();
$rq = $rq->generate();
echo "<li>Author : " .$rq['quoteAuthor']. "</li>";
echo "\n";
echo "<li>Quotes : " .$rq['quoteText']. "</li>";
// Generates a random quote.
//print_r( $rq->generate() );

echo "\n";