<?php 
/*use Firebase\Token\TokenException;
use Firebase\Token\TokenGenerator;*/

require_once('vendor/firebase/token-generator/src/TokenException.php');
require_once('vendor/firebase/token-generator/src/TokenGenerator.php');

try {
    $generator = new TokenGenerator('64QzS77eJ3kf06FJ2FpRtG1nNqCPsWiqLkyyJibU');
    $token = $generator
        ->setData(array('uid' => '4rDlG7ehiIcUaoUsYksLzNp5Okl2'))
        ->create();
} catch (TokenException $e) {
    echo "Error: ".$e->getMessage();
}

echo $token;


?>