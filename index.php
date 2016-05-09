<?
include('includes/config.php');


//$db->where ('town', 'København');


?>

<head>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


</head>


<body>



<?
if($_GET['rediger'])
{


	$db->where ("id", $_GET['ID']);
	$row = $db->getOne("contacts");
	?>
	<form method="post" class="col-md-3" action="actions/gem.php?ID=<? echo $row['id'];?>">
		Navn:<br/>
		<input type="text" name="name" class="form-control" value="<? echo $row['name'];?>" required="" />
		Tlf:<br/>
		<input type="text" name="phone" class="form-control" value="<? echo $row['phone'];?>" required="" />
		By:<br/>
		<input type="text" name="town" class="form-control" value="<? echo $row['town'];?>" required="" />
		<button class="btn btn-success" type="submit">Gem</button>
	</form>
	<?
}else{

	?>
	<form method="post" class="col-md-3" action="actions/add.php">
		Navn:<br/>
		<input type="text" name="name" class="form-control" required="" />
		Tlf:<br/>
		<input type="text" name="phone" class="form-control" required="" />
		By:<br/>
		<input type="text" name="town" class="form-control" required="" />
		<button class="btn btn-success" type="submit">Tilføj</button>
	</form>
	<?

}


$db->orderBy("name","asc");
$users = $db->get('contacts');
?>

<table class="table">
<tr>
	<td>Navn</td>
	<td>Tlf</td>
	<td>By</td>
	<td>Ret/slet</td>
</tr>
<?


foreach ($users as $row)
{
	?>
	<tr>
		<td><? echo $row['name']; ?></td>
		<td><? echo $row['phone']; ?></td>
		<td><? echo $row['town']; ?></td>
		<td><a href="?rediger=true&ID=<? echo $row['id'];?>" class="btn btn-default">Rediger</a> <a href="actions/slet.php?ID=<? echo $row['id'];?>" class="btn btn-danger">Slet</a></td>
	</tr>
	<?
}
?>
</table>


</body>