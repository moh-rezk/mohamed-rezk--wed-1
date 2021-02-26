<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">


        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
       






<!-- <?php

// 1 - you have an array of numbers. write a script to find minimum and maximum numbers in the array.

$number=[20000,2,3,5,55,8,9,10,100,10000];

$x=0;
for ($i=0; $i <count($number); $i++) { 

if ($x<$number[$i]) {
    $x=$number[$i];
}


}
echo "x = $x";


?> -->

<!-- <?php



//2 - you have a variable that contains any digit from 0 to 9. write a script to display the english equivalent of this number.

$x=3;

switch ($x) {
    case 0:
      echo 'zero'; 
        break;
    case 1:
            echo 'one'; 
              break;
    case 2:
                echo 'two'; 
                  break;
    case 3:
                    echo 'three'; 
                      break;
    case 4:
        echo 'four';   
        break;
    case 5:
        echo 'five';
        break;                   
                          
        
    
    default:
       echo 'not number ';
        break;
}
?> -->








<!-- <?php

//3-     write a script to display this shape:


$star="*";

for ($i=1; $i <=5 ; $i++) { 
    $pyramid="";
    for ($j=1; $j <=$i ; $j++) { 
        $pyramid.=$star." ";
    }
  echo  $pyramid.="<br>";
}

for ($i=5; $i >=1 ; $i--) { 
    $pyramid="";
    for ($j=1; $j <=$i ; $j++) { 
        $pyramid.=$star." ";
    }
    echo  $pyramid.="<br>";
}


?> -->






<!-- 4- write a script to draw the multiplication table

<table align="left" border="1" cellpadding="3" cellspacing="0">

<?php
for ($i=1; $i <=12 ; $i++) { 
   
        ?>
<tr>   
<?php  for ($j=1; $j<=12 ; $j++) {  ?>     
<td>
 <?= "$i * $j =".$i * $j ;?>
</td>
<?php  }?>
</tr>
<?php  }?>
</table> -->






<!-- <?php

//5-write a script that removes any duplicates from an array.

$array = [1,1,1,2,2,3,3,3];
$new_array = [];

foreach ($array as $key => $value) {
    if(isset($new_array[$value]))
       unset( $new_array[$key]) ;
    else
        $new_array[$value] = 1;
}



foreach ($new_array as $fruit => $n) {
    echo $fruit;
    if($n > 1)
        echo "($n)";
    echo "<br />";
}


?> -->









 <!-- <?php
// 6- write a script that displays data in bootstrap cards


$arr=[
    [
      'name' => 'ahmed hamdy',
       'job' => 'front-end',
      'experience' => 3
     ],
  
     [
         'name' => 'mohammed shaker',
         'job' => 'back-end',
         'experience' => 2
     ],
  
     [
         'name' => 'ali hasan',
         'job' => 'full-stack',
         'experience' => 4
     ],
 ];


foreach($arr as $key => $value){ ?>

<div class="card m-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $arr[$key]['name']?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $arr[$key]['job']?></h6>
    <p class="card-text"><?= $arr[$key]['experience'] ." years experience"?></p>
    
  </div>
</div>

<?php }?>  -->





<!-- 
<?php


 

//7-     trace the code & discuss of each statement of value of x and y

$x = 3 ; $y=$x++;
//$x++ // post-in first run line then increment $x
echo $y;//3
//$y+= ++$x;
$y=$y+(++$x);
//++$x // pre-in first increment $x then run line

 echo $y;//8
if ($y == 7) {
 	$x++;
 	echo $x ."<br>";
 }
else if ($y == 8){
 	$x--;

 	echo $x ."<br>";
     // x will equal 4 
	}
else if ($y == 9) {
	$x+=2;
	echo $x ."<br>";
}
else { 
	$x= 0;
	echo $x ."<br>"; }


?>
 -->








    </body>
</html>