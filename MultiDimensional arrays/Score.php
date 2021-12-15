<?php
$highestscore = array(
    "Sachin" => array (
        "oneday" => 200,
        "test" => 223,
    ),
    "Kohli" => array (
         "oneday" => 183,
         "test" => 265,
    ),
    "Rohit" => array (
        "oneday" => 264,
        "test" => 156,
    ),
    "Yuvraj" => array (
        "oneday" => 184,
        "test" => 188,
    ),
);

echo "HighestScore  of Sachin  in oneday : " . $highestscore['Sachin']['oneday'] . "\n";
echo "HighestScore  of Kohli  in test  : " . $highestscore['Kohli']['test'] . "\n";
?>