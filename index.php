<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data types in php</h1>
    <?php
    $stringword = 'hello Abdul Rehman';
    echo "<h2>String :</h2>";
    echo "value :".$stringword ."<br>";
    echo "data type :". gettype($stringword)."<br>";


$variablelocal = 10;
    echo "<h2>Local variable is :</h2>";
    echo "value :".$variablelocal ."<br>";
    echo "data type :". gettype($variablelocal)."<br>";

    $float = 32.3;
    echo "<h2>Float is  :</h2>";
    echo "value :".$float ."<br>";
    echo "data type :". gettype($float)."<br>";

    $boolean = TRUE;
    echo "<h2>Boolean is :</h2>";
    echo "value :".$boolean."<br>";
    echo "data type :". gettype($boolean)."<br>";

    $Nullvariable = NULL;
    echo "<h2>Null variable is :</h2>";
    echo "value :".$Nullvariable."<br>";
    echo "data type :". gettype($Nullvariable)."<br>";

    $arrayvariable= array("Banana","Allpe","Orange");
  
    echo "<h2> Array:</h2>";
    echo "value : ";
    print_r($arrayvariable);
    echo "<br>";
    echo "datatype : ". gettype($arrayvariable) ."<br><br>";



    // $objectvariable = new stdclass();
    // $objectvariabl->name = "Abdul rehman";
    // $objectvariabl->age = 23;
    // echo "<h2> Objects:</h2>";
    // echo "value : ";
    // print_r($objectvariabl);
    // echo "<br>";
    // echo "datatype : ". gettype($objectvariabl) ."<br><br>";



    ?>
<?php
$text = "Hello, PHP!";
echo "<b>" ."1. The original string is: ". "</b>".$text. "<br>";

$lowercaseText = strtolower($text);
echo "2. Lowercase text:" . $lowercaseText. "<br>";

$uppercaseText = strtoupper($text);
echo "3. Uppercase text: ". $uppercaseText. "<br>";

$length = strlen($text);
echo "4. The length of the string is: ".$length. "<br>";;

$text=" This is test text ";
$trimmedText = trim($text);
echo "5. Trimmed text:" . $trimmedText. "<br>";






$text = "Hello, World!";
$newText = str_replace("World", "PHP", $text);

echo "6. Modified text: " . $newText. "<br>";
$fruits = array("Apple", "Banana", "Orange");

$numberOfFruits = count($fruits);
echo "7. Number of fruits:" . $numberOfFruits. "<br>";

$fileContent = file_get_contents("data.txt");
echo "8. Reading file content: ".$fileContent. "<br>";

echo "9. Today's date is: " . date("Y-m-d");
echo "<br>";

?>
</body>
</html>