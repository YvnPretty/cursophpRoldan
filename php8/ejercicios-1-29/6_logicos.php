<?php

print (true && true); //true papu

var_dump(true && true);  // true papu
var_dump(true && false);  // false papu
var_dump(false && true);  // false papu
var_dump(false && false);  // false papu

echo true && false; // Esto no imprime nada
echo "<br>";
echo (int) (true && false); // Esto imprime 0
echo "<br>";

// O usando var_dump para ver el tipo y valor
var_dump(true && false); // bool(false)
echo "<br>";

// 'or' y '||'
echo (int) (true || false); // 1
echo "<br>";
echo (int) (false || false); // 0


//operador logic and
var_dump(true || true);//true papu
echo "<hr>";
var_dump(true || false);//true papu
echo "<hr>";
var_dump(false || true);//true papu
echo "<hr>";
var_dump(false || false);//false papu
echo "<hr>";

//operador logic or
var_dump(true || true);//true papu
echo "<hr>";
var_dump(true || false); //true papu
echo "<hr>";
var_dump(false || true);//true papu
echo "<hr>";
var_dump(false || false);//false papu
echo "<hr>";

//operador xor
var_dump(true xor true);//false papu
echo "<hr>";
var_dump(true xor false);//true papu
echo "<hr>";
var_dump(false xor true);//true papu
echo "<hr>";
var_dump(false xor false);//false papu
echo "<hr>";

//operador not
var_dump(!true);//false papu
echo "<hr>";
var_dump(!false);//true papu
echo "<hr>";
?>