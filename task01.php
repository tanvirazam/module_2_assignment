


<?php 
// for loop using

function isEven($start,$end,$stape){
    $start+=1;
    for($i=$start;$i<=$end;$i+=$stape){
               
                 echo   $i." ";
               
    }
   
    

}

isEven(1,20,2);


// While loop using
function isEven($start,$end,$step){
    $start+=1;
    $i=$start;
    while($i<=$end){
        echo $i." ";
        $i+=$step;

    }
}

isEven(1,20,2);


// do while loop using

function isEven($start,$end,$step){
   
    $start+=1;
    $i=$start;
    do{
        
        echo $i." ";
        $i+=$step;
        
    }while($i<=$end);
}

isEven(1,20,2);