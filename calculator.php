<?php
$cal = 0;

//isset = check ว่ามีค่าเข้ามาหรือยัง floatval = ทำให้เป็นตัวเลข
if (isset($_GET['upper']) && isset($_GET['lower']) && isset($_GET['op'])) {
    $upperNumber = floatval($_GET["upper"]);
    $lowerNumber = floatval($_GET["lower"]);
    $value = $_GET["op"];
    $cal = myCal($upperNumber, $lowerNumber, $value);
    $textCal = "$upperNumber $value $lowerNumber";
} 

function myCal($upperNumber, $lowerNumber, $value){
    if ($value == "+"){
        return $upperNumber+$lowerNumber;
    } 
    else if ($value == "-"){
        return $upperNumber-$lowerNumber;
    } 
    else if ($value == "*"){
        return $upperNumber*$lowerNumber;
    }
    else if ($value == "/"){
        if ($lowerNumber == 0){
            return "can't division by zero";
        }
        else{
            return $upperNumber/$lowerNumber;
        }
        
    } 
    else if ($value == "%"){
        return $upperNumber%$lowerNumber;
    }
    else{
        return "not in op";
    }
}

