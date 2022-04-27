
<?php 	
	echo "<link rel='stylesheet' href='style.css'>";
	$pass = $_POST["passW"];
	$user = $_POST["user"];
	$ship = $_POST["ship"];
	$Qpop = $_POST["Qpop"];
	$Qclusters = $_POST["Qclusters"];
	$Qdough = $_POST["Qdough"];

	$Tpop = 15*$Qpop;
	$Tclusters = 12*$Qclusters;
	$Tdough = 13*$Qdough;

	if($ship == "Express")
	{
		$shipCost = 5;
	}
	elseif($ship == "Next Day")
	{
		$shipCost = 50;
	}
	else
	{
		$shipCost = 0;
	}

	$total = $Tpop + $Tclusters + $Tdough + $shipCost;

	echo "<b>Welcome ". $user ."</b><br><br>";
	echo "Password: ". $pass;
	echo "<br><br>Your Order was a Success<br><br>";
	echo "Here is your receipt:<br><br>";
	echo "<table>";
	for ($i = 0; $i < 6 ; $i++)
	{	
		echo "<tr>";
		if($i == 0)
		{	
			echo "<th></th>";
			echo "<th>Quantity</th>";
			echo "<th>Cost Per Item</th>";
			echo "<th>Sub Total</th>";
		}
		elseif($i == 1)
		{
			echo "<th>Popcorn Balls</th>";
			echo "<td>".$Qpop."</td>";
			echo "<td>$15</td>";
			echo "<td>$".$Tpop.".00</td>";
		}
		elseif($i == 2)
		{
			echo "<th>Milk Chocolate<br>Caramel Clusters</th>";
			echo "<td>".$Qclusters."</td>";
			echo "<td>$12</td>";
			echo "<td>$".$Tclusters.".00</td>";
		}
		elseif($i == 3)
		{
			echo "<th>Chocolate Chip<br>Cookie Dough</th>";
			echo "<td>".$Qdough."</td>";
			echo "<td>$13</td>";
			echo "<td>$".$Tdough.".00</td>";
		}
		elseif($i == 4)
		{
			echo "<th>Shipping</th>";
			echo "<td colspan='2'>".$ship."</td>";
			echo "<td>$".$shipCost.".00</td>";
		}
		else
		{
			echo "<th colspan='3'>Total Cost</th>";
			echo "<th>$".$total.".00</th>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>
