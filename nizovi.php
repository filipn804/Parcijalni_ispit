<?php

$primeNumbers = ["2", "3", "5", "7", "11"];

print_r($primeNumbers);


$wheres5 = array_search('5', $primeNumbers);
var_dump($wheres5);

$primeNumbers[] = '13';

var_dump(count($primeNumbers));


var_dump($primeNumbers);

var_dump(rsort($primeNumbers));





?>





<?php


$users = [
   [
      'ime' => 'Filip',
      'prezime' => 'Novak',
      'godine' => 30,
      'spol' => 'muško'
   ],
   [
      'ime' => 'Josip',
      'prezime' => 'Blažinovic',
      'godine' => 24,
      'spol' => 'muško'
   ]
];
print_r($users);

foreach($users as $user) {
   unset($user['spol']);
}

print_r($users);

$users[] =  [
   'ime' => 'Ivan',
   'prezime' => 'Ivanovic',
   'godine' => 30,
];
print_r($users);
?>