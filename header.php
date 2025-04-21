<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	

<?php		
foreach ($_SESSION["cart_item"] as $item){
    $item_price = $item["quantity"]*$item["price"];
?>
<?php
	$total_quantity += $item["quantity"];
	$total_price += ($item["price"]*$item["quantity"]);
	}
?>
<header class="myHeader">
	
<a href="#" class="myLogo">Soweto's Finest Winery</a>
<ul>
    <li><a href="index.php" >HOME</a></li>
    <li><a href="shop.php" >SHOP</a></li>
	<li><a href="brochure.php">BROCHURE</a></li>
	<li><a href="contact.php" >CONTACT US</a></li>
	<li style="text-transform: uppercase;"><a href= "forms.php" ><?php 
	if(isset($_SESSION['username']))
	{
		echo '<form action="customer.php" method="post">
		<button class="btn3" name="btn3" style="background: transparent; outline: none; border: none; color: #fff; font-weight: 700; text-transform: uppercase;" >'.$_SESSION['username'].'</button>
		</form>';
	}else
	{
		echo "<a href='forms.php'>ACCOUNT</a>";
	} ?>
	</a></li>
	<li><a href="cart.php" ><i class="fa fa-shopping-basket">
	<strong><?php echo $total_quantity; ?> 
	<?php                                
                } else {
                    ?>

                    <header class="myHeader">
					<a href="#" class="myLogo">Soweto's Finest Winery</a>
                    <ul>
                        <li><a href="index.php" >HOME</a></li>
                        <li><a href="shop.php" >SHOP</a></li>
						<li><a href="brochure.php">BROCHURE</a></li>
						<li><a href="contact.php" >CONTACT US</a></li>
						<li style="text-transform: uppercase;"><?php if(isset($_SESSION['username']))
							{
								echo '<form action="customer.php" method="post">
								<button class="btn3" name="btn3" style="background: transparent; outline: none; border: none; color: #fff; font-weight: 700; text-transform: uppercase;" >'.$_SESSION['username'].'</button>
								</form>';
							}else
							{
								echo "<a href='forms.php'>SIGN IN</a>";
							} ?></li>
                        <li>
						<?php if(isset($_SESSION['username'])):?>
						<a href="cart.php" ><i class="fa fa-shopping-basket">
                            <strong>0</strong>
                            </i></a>
                        <?php  endif; ?>
						</li>
            
                </ul>
                </header>
                <?php
                }
                ?>
            </strong>
                </i></a>
            </li>

    </ul>
    </header>