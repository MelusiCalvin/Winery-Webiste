<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Items On Your Shopping Basket</title>
	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="css/shop.css">
	
<style>
.myHeader{
	background: rgba(0, 0, 0, 0.7);
}
#btnEmpty {
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
}

</style>

</head>
<body>
<?php
	include('header.php');
	include('links.php');

	
if(!$_SESSION['username'])
{
    header('location: shop.php');
}
?>
	<center>
<div class="txt-heading">Items On Your Shopping Basket</div>
	</center>
<div class="small-container cart-page">
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table>
	<tr>
		<th>Product</th>
		<th>Code</th>
		<th>Quantity</th>
		<th>Unit Price</th>
		<th><center>Remove</center></th>
		<th>Price</th>
	<a style="margin-right: 0;" id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
	</tr>
	
<?php		
foreach ($_SESSION["cart_item"] as $item){
    $item_price = $item["quantity"]*$item["price"];
?>
	<tr>
		<td>
			<div class="cart-info">
				<img src="<?php echo $item["image"]; ?>"  class="cart-item-image">
				<div>
					<p><?php echo $item["name"]; ?></p>
					<small>Price: <?php echo "R ".$item["price"]; ?></small>
				</div>
			</div>
		</td>
		<td><?php echo $item["code"]; ?></td>
		<td><?php echo $item["quantity"]; ?></td>
		<td><?php echo "R ".$item["price"]; ?></td>
		<td><center><a href="cart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></center></td>
		<td><?php echo "R ". number_format($item_price,2); ?></td>
	</tr>
<?php
	$total_quantity += $item["quantity"];
	$total_price += ($item["price"]*$item["quantity"]);
	}
?>
</table>
<div class="total-price">
<table>
	<tr>
		<td>Total Items:</td>
		<td><strong><?php $_SESSION['status'] = $total_quantity;  echo $total_quantity; ?></strong></td>
	</tr>
	<tr>
		<td>Total:</td>
		<td><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
	</tr>
</table>
<?php
} else {
	echo '<div class="no-records">'."Your Cart Is Empty".'</div>';
}
?>

</div>
</body>
</html>