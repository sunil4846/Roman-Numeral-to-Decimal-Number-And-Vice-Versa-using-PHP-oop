<html>
    <title>Roman Numeral To Decimal in PHP</title>
    <style>
    body {
    font-family: arial;
    font-size: 18px;
    font-weight: bold;
    };
    </style>
    <body>
    <?php
    error_reporting(0);
    $input_A = $_POST['inputFirst'];
    if(isset($_POST['ClearButton'])){
    $input_A="";
    $display_result="";
    }
    ?>
    <br>
    <h2>Roman Numeral To Decimal  </h2>
    <form action="" method="post">
    Enter Roman Numeral
    <input type="text" name="inputFirst"
    value="<?php echo $input_A; ?>" size="5" autofocus required/>
    <br><br>
    <input type="submit" name="SubmitButton" value="Ok"/>
    &nbsp;&nbsp;&nbsp;
    <input type="submit" name="ClearButton" value="Clear"/>
    </form>
    <?php
    function roman_convert($input_roman){
    $di=array('I'=>1,
         'V'=>5,
         'X'=>10,
         'L'=>50,
         'C'=>100,
         'D'=>500,
         'M'=>1000);
    $result=0;
    if($input_roman=='') return $result;
    for($i=0;$i<strlen($input_roman);$i++){
    $result=(($i+1)<strlen($input_roman) and
    $di[$input_roman[$i]]<$di[$input_roman[$i+1]])?($result-$di[$input_roman[$i]])
    :($result+$di[$input_roman[$i]]);
    }
    return $result;
    }
    if(isset($_POST['SubmitButton'])){
    $original = $input_A;
    $value = roman_convert($input_A);
    echo "<br>";
    $display_result = "The Decimal equivalent of " .$original. " is "
    .$value.".";
    echo $display_result;
    echo "<br>";
    }

    ?>
    </body>
    </html>

