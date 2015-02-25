<?php 

function get_info($find){
	
$people=array(
"Darragh" => 1,
"Ian" => 2,
"Cathal" => 3,
"Sean" => 4

);

foreach($people as $human => $info)
{
	
if($human==$find)

{
	
	return $info;
	break;

}

}

}
?>
