<?
include('../includes/config.php');


$id = $_GET['ID'];

$db->where('id', $id);
$db->delete('contacts');

header("location:../#$id");

?>