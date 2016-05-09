<?
include('../includes/config.php');

$name = $_POST['name'];
$phone = $_POST['phone'];
$town = $_POST['town'];

$data = Array ("name" => $name,
               "phone" => $phone,
               "town" => $town
);

$id = $_GET['ID'];
$db->where('id', $id);
$id = $db->update('contacts', $data);

header("location:../#$id");


?>