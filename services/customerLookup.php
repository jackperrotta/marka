<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/employeesDb.php"; ?>

<?php

$cust = getUsers();

$arr = array();
for ($i=0; $i < sizeof($cust); $i++) {
   // $x = $data[$i][0];
   // $y = $data[$i][1];
   $obj = new \stdClass();
   $obj->x = $cust[$i][0];
   $obj->y = $cust[$i][1];
   array_push($arr, $obj);
}

$json = json_encode($arr);

// get the q parameter from URL
$q = filter_input(INPUT_GET,'q');


$hints[] = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($json as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hints[0] === "") {
                $hints[0] = $name;
            } else {
                $hints[] = $name; //appending a new item to the array
            }
        }
    }
}

// echo json_encode($hints);
echo implode(",", $hints , ":");

?>
