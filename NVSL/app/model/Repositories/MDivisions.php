<?php
require("../../../config.php");
/*require("../../../config/Db.class.php");

$db =  new DB();

$divisions = $db->query("Select * from Divisions");

print_r($divisions);

function getList(){
$db = new DB();
$sql = "Select * from Divisions";

$divisions = $db->query($sql);



}//end getList
*/

 //Require the person class file
 require_once(RAIZ."/app/model/CCRUD/Divisions.class.php");
 // Instantiate the person class
   $division  = new Division();

$divisiones = $division->allIsHidden(0);  
print_r($divisiones);


?>
