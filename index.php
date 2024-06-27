<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAMBDAS-IN-PHP</title>
</head>
<body>


  
<h1>Sorting-Algorithms</h1>


<?php

$numbers = [5, 2, 8, 3, 1];

usort($numbers, function ($a, $b) {
    return $b - $a;
});




print_r($numbers);

?>


<p>

    <?php



    $numbers = [5, 2, 8, 3, 1];

    usort($numbers, function ($a, $b) {
        return $b - $a;
    });

    echo "[" . implode(", ", $numbers) . "]";



    ?>

</p>




    <h1>Filtering-Arrays</h1>

    <?php

    $names = ['Alice', 'Bob', 'Amy', 'Charlie'];

    $filteredNames = array_filter($names, function($name) {

      return substr($name, 0, 1) === 'A';

    });





    print_r($filteredNames);

    ?>




<p>


    <?php

    $names = ['Alice', 'Bob', 'Amy', 'Charlie'];

    $filteredNames = array_filter($names, function($name) {
      return substr($name, 0, 1) === 'A';
    });

    echo "[" . implode(", ", $filteredNames) . "]";

    ?>



</p>




<p>


  <h1>Callback-function</h1>



   <?php

    //the array_map --> function to transfor each element of an array by squaring the numbers each

    $numbers = [1,2,3,4,5];

    $squaredNumbers = array_map(function ($number){

      return $number * $number;

    }, $numbers);



    print_r($squaredNumbers);

?>



</p>




<p>

    <?php 
      $numbers = [1,2,3,4,5];

        $squaredNumbers = array_map(function ($number){

          return $number * $number;

        }, $numbers);


         echo "[" . implode(", ", $squaredNumbers) . "]";



    ?>

  
</p>





</body>
</html>