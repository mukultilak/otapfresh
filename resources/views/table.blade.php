<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1>Tabele</h1>
<table border="1" >
	
	<?php
	
	foreach ($ui as $key) {
		echo "<tr> ";
			echo "<td>".$key->gr_no."</td>";
			echo "<td>".$key->fname."</td>";
			echo "<td>".$key->id."</td>";

		echo "</tr>";

		# code...
	}
		

		
	?>
	</tr>




</table>

</body>
</html>

