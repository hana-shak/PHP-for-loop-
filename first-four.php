<?php

/*-- First Question -- */
for ($i=1; $i<10; $i++) {
    echo $i."-";
    } 
echo "10";
echo "<br>";
echo "<hr>";


/*--  Q2 --*/
$sum = $i = 0;
for ($i=0; $i <=30; $i++) {
    $sum +=$i;
   // echo $sum;
}
echo $sum;
echo "<br>";
echo "<hr>";




/* Q3-3c */
$lett = ["A","B","C","D","E"];
for($i=0; $i<=5 ;$i++ ){ 
    //for ($x=0; $x<5; $x++){}
         echo str_repeat( "A" , 5-$i);
         echo str_repeat( $lett[$i-1] , $i);    
         echo "<br>";     
            }
            echo "<hr>";


/* Q3-3b */



/*  Q4 */
for ($i=0; $i<5 ;$i++ ) {
   // $b=array_fill(0,5,0);
   // $a =array_fill(0, 5, $i+1 );
   //echo $a[$i].$b[$i]."<br>";
} 




/* Q5 */
function fac($x){
    $fa=1;
    for ($i=1; $i<=$x ; $i++ ) {
        $fa *=$i;
    }
    return $fa;
}
echo fac(6);
echo "<hr>";


/* Q6 */
$n1=0;
$n2=1;
$sum=0;
echo $n1." ".$n2;
 for ($i=0; $i < 15; $i++) {
     $n3=$n1+$n2;
     echo $n3." ";
     $n1=$n2;
     $n2=$n3;      
     }
     echo "<hr>";

/* Q7 */
$sen='Orangeacadccemccy';
$r=0;
//$r= array(str_split($sen;1));
for ($i=0; $i<strlen($sen) ; $i++) {
           if ($sen[$i]=='c') {
             $r +=1 ;
             echo $r;
       }
}
echo "<hr>";

/* Q8 */
/* Q9 */
/* Q10 */
/* Q11 */
/* Q12 */
/* Q13 */
/* Q14 */
/* Q15 */
/* Q16 */



?>