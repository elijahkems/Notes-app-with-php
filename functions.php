<?php 
function uriIs ($value) {
   return $_SERVER["REQUEST_URI"] === $value;
}
function  dd ($value) {
   echo "<pre>";
   var_dump ($value);
   echo "</pre>";
}

function displayArray ($array) {
   foreach($array as $user) {
       echo "<li> $user[name] said: $user[note] </li>"; 
   }
}