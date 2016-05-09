<?
include('../includes/config.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$town = $_POST['town'];

$data = Array ("name" => $name,
               "phone" => $phone,
               "town" => $town
);
$id = $db->insert ('contacts', $data);

header("location:../#$id");


?>