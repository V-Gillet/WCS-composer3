<?php

use CowSay\Cow;

require 'vendor/autoload.php';


$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;
