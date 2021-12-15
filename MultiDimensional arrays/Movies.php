<?php
$movies = array(
  array(
    "title" => "RamLeela",
    "director" => "SanjaLeela Vanshali",
    "year" => 2015
  ),
  array(
    "title" => "Wanted",
    "director" => "Sanjay manjrekar",
    "year" => 2014
  ),
  array(
    "title" => "RRR",
    "director" => "Puri Jagannath",
    "year" => 2021
  )
);

foreach ( $movies as $movie ) {

  foreach ( $movie as $key => $value ) {
    echo $key . " " .$value ."\n";
  }

  echo "\n";
}
?>