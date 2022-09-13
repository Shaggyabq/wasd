<?php
include "database.php";
$result = mysqli_query($connect, "SELECT * FROM `cheliki`");
$arr = mysqli_fetch_all($result);
$num = 18;
$fake = '' ;
?>

<!DOCTYPE html>
<html lang="ru" class="no-js">
<head>
  <meta charset="UTF-8">
  <title>Users</title>
</head>
<style>
	th,td {
		padding: 10px;
	}

	th {
		background: #000000;
		color: #fff; 
	}

	td {
		background: #b5b5b5;
	}
</style>
<body>
<table>
	<tr>
		<th>Id</th>
         <th>Имя</th>
		 <th>Возраст</th>
		 <th>Совершеннолетний</th>
	</tr>
	<?php
	foreach ($arr as $sub) {
	
	?>
	<tr>
<td><?= $sub[0] ?></td>
<td><?= $sub[1] ?></td>  
<td><?= $sub[2] ?></td>
<td><?= $fake ;
 if($sub[2] >= $num) {
	echo "совершеннолетний";
 } else {
	 echo "несовершеннолетний";
	  }?></td>
	</tr>

    <?php }
	
	?>

</table>
</body>
</html>

