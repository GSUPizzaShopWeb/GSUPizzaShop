<?php include("header.php");?>
	
<main>

	<table id="cart-table" cellpadding="12">
		<tr>
			<th>Item</th>
			<th>Quantity</th>
			<th>Price</th>
		</tr>
		<tr>
			<?php
				foreach($_SESSION['cart'] as $item){
					echo "<td> " . ucfirst($item->itemSize) . " ";
					if($item->itemCrust=="pan"){
						echo "Pan ";
					} else{
						echo "Hand-Tossed ";
					}
					echo " " .$item->itemName . "</td> ";
					echo "<td>" . $item->itemQuantity . "</td> ";
					echo "<td>" . $item->itemPrice . "</td><br>";
					echo "</tr>";
				}
			?>
	</table>
		<button type='submit' id="clearCart" name='clear'>Clear Cart</input>
		
	<?php
			if(isset($_POST['clearCart'])){
				echo "<sript type='text/javascript'>alert('Cart cleared')</script>";
			}	
	?>	
</main>
	
<?php include("footer.php");?>