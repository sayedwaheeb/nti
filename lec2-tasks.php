<?php
  
                //task1
function NextCharacter($cha) {
    $next_cha = ++$cha;
    if (strlen($next_cha) > 1) 
    {
     $next_cha = $next_cha[0];
     }
    echo $next_cha;
}               

NextCharacter('a') ;





               // task2

 function getWord(){

       $my_url = 'http://www.example.com/5478631';
       echo substr($my_url, strrpos($my_url, '/' )+1);
 }           

 getWord();




    


?>