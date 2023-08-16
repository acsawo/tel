<?php
function build($b)    
{        
 
$build =$b; 
$buildCut = Array("อาคารชั่วคราว","อาคารผู้ป่วยนอก","อาคาร33ปี","อาคารกาญจนาภิเษก","อาคารส่งเสริมบริการ");         
$buildThai=$buildCut[$build];        
return "$buildThai";   
} 
?>