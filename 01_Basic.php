<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Php </title>
</head>
<style>
.container{
background: blue;
margin: auto;
max-width: 50%;
}	
</style>
<body>
<div class="container">
	<h2>Letus learn abou php</h2>
	Learn Basic Php
</div>


  

 <?php
 //create  constent
//  define('AKHILESH',"14/11/92");
//   //echo "the value of 5 == 7" ;
// //    echo  var_dump(5 == 7);
// //     echo "the value of 5 != 7" ;
// //    echo  var_dump(5 != 7);
// //     echo " the value of 5 >= 7" ;
// //    echo  var_dump(5 >= 7);
// //    echo "the value of 5 <= 7" ;
// //    echo  var_dump(5 <= 7);  
//   $a =5 ;
//   echo $a++ ; 
//   echo "</br>";
//   echo $a;
//   echo --$a;
//   echo  --$a;
  

//   $ak = (true && true);
//    echo  "</br>";
//    echo var_dump( $ak);
//    $ak= (true and false); echo  "</br>";
//    echo var_dump($ak);
//  echo  "</br>";echo  "</br>";

//     $ak= (true || true); echo  "</br>";
//     echo var_dump($ak);
//      $ak= (true || false); echo  "</br>";
//      echo var_dump($ak);
//      echo  "</br>";echo  "</br>";
//       $ak= (true xor false); echo  "</br>";
//      echo var_dump($ak);
//       $ak= (false xor false); echo  "</br>";
//      echo var_dump($ak);

//        $ak= (true xor false); echo  "</br>";
//      echo var_dump($ak);
//      echo  "</br>";echo  "</br>";


//       $ak= (true != true); echo  "</br>";
//    echo var_dump($ak);
//    $ak= (true != false); echo  "</br>";
//    echo var_dump($ak);
//    $ak= ( false !=  false); echo  "</br>";
//    echo var_dump($ak);
//  echo  "</br>";echo  "</br>";

// $pk = "My name is akhilesh";
// echo var_dump($pk);
//  echo  "</br>";echo  "</br>";
// $pk =  6655;
// echo var_dump($pk);
//  echo  "</br>";echo  "</br>";
// $pk = 5.6;
// echo var_dump($pk);
//  echo  "</br>";echo  "</br>";
// $pk = array('5','dvavav');
// print_r(var_dump($pk));
//  echo  "</br>";echo  "</br>";
// $pk = true;
// echo var_dump($pk);
// echo AKHILESH;

// $a= 10;
// if($a>18){
// 	echo "You Can Go party";

// }
// else if($a==10){
// 	echo "you can go with your mama";
// }
// else if($a<5){
// 	echo "you can not go party in childen";
// }
// else
// {
// 	echo "good bay";
// }

// echo "</br>";

// $c = array("js","node.js","C#","java",1,5,5.6,5.1);
// echo count($c);
// echo  "</br>";
// $b=0;
// while ($b < count($c)) {
// 	echo "</br>" ;
// 	echo $b[$c];
// 	$b++;
// }
// echo "</br>";


// do {
// 	echo "</br>" ;
// 	echo $b;
// 	$b++;
// }while ($b <= count($c));

// for($i=0;$i<count($c);$i++){
// 	echo $i;
// };
// echo "Foreach se ";
// foreach ($c as $value) {
// 	echo $value;
// 	echo "</br>";


// }

// function print_number($number){
// 		echo "your number is this";
// 		echo $number;
// 	}


// print_number(45);

$str="AKHILESH is good boy";
$str_len = strlen($str);
echo "this is string lenth".$str_len."concinet hardoi";
echo "</br>";
echo "this is string lenth".$str_len."and string word lenth".str_word_count($str)."concinet hardoi".strrev($str)."reverse hua";
echo "</br>";
echo "this is postion of boy".strpos($str,"good");
echo "</br>";
echo "this is postion of boy replace is by not".str_replace("is","not",$str) ;




?>
</body>
</html>