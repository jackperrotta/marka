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

$json = $arr;

// get the q parameter from URL
$q = filter_input(INPUT_GET,'q');
$q = strtolower($q);

$qwe = array_filter($json, function($page) use ($q) {
  $t = strtolower($page->x . $page->y);
  return strpos($t, $q) !== false;
});


// $len = strlen($qwe);
// echo 'awd';
//
// if (!empty($qwe)) {
//   echo 'awd';
//   $qwe = $json;
// }

// $results = [];
//
// foreach($qwe as $name) {
//
//                 $results[] = $name; //appending a new item to the array
//
//     }

$jsonn = json_encode($qwe);
// echo "<tr><td>" . $qwe . "</td></tr>";
echo $jsonn;
// echo implode(",", $results);
?>
