
<?php

function addFunction($num1, $num2) {
	$sum = $num1 + $num2;
	return $sum;
}
$ruturn_value = addFunction (20, 30);

echo "$ruturn_value";

?>
<br />
<?php
$name = "alicia";
echo "$name ";
?>
<br />
<?php
$students = array("John", "Jody", "Frank");

for($i=0; $i < count($students); $i++){
	echo "for loop: student $i is" . $students[$i] . "<br/>";

}
?>
//my work up
// Georges work below

<?php
function integer(int $parameter) {
	return($parameter * 2);
}

function string(string $parameter) {
	$return = str_repeat($parameter, 10);
	return($return . " ". "Batman!");
}

function arrayMethod(array $array) {
	$newArray = [];
	foreach($array as $value) {
		$newArray[] = $value . " " . $value;
	}
	return $newArray;
}

$return1 = integer(9);
var_dump($return1);

$return2 = string("Na");
var_dump($return2);

$return3 = arrayMethod(["na", "na", "hey"]);
var_dump($return3);




