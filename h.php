<?php if(!empty($_SESSION['cart'])){
	?>
<?php
 $pdtid=array();
  $pdq=array();
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

				array_push($pdtid,$row['id']);
				array_push($pdq,$quantity);
				
//print_r($_SESSION['pid'])=$pdtid;exit;
	?>						
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="product-details.php?pid=<?php echo htmlentities($pd=$row['id']);?>"><?php echo $row['productName'].$quantity.$pdtid.$_SESSION['id'];?></a></h4>
<?php $_SESSION['sid']=$pd; ?>
								<p>Web ID: 1089772</p>
							</td>
<?php $rt=mysqli_query($con,"select * from productreviews where productId='$pd'");
$num=mysqli_num_rows($rt);
{
	
?>
							<td class="cart_price">
								<p><?php echo "Rs"." ".$row['productPrice']; ?>.00</p>
							</td>
							<?php echo htmlentities($num);?> Reviews 
							<?php } ?>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>" name="quantity[<?php echo $row['id']; ?>]" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo ($_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge']); ?>.00</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
				<?php } }
$_SESSION['pid']=$pdtid;
$_SESSION['piq']=$pdq;
				?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>What would you like to do next?</h3>
				<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							<li>
								<input type="checkbox">
								<label>Use Coupon Code</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Use Gift Voucher</label>
							</li>
							<li>
								<input type="checkbox">
								<label>Estimate Shipping & Taxes</label>
							</li>
						</ul>
						<ul class="user_info">
							<li class="single_field">
								<label>Country:</label>
								<select>
									<option>United States</option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Region / State:</label>
								<select>
									<option>Select</option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Zip Code:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Get Quotes</a>
						<a class="btn btn-default check_out" href="">Continue</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>RS.<?php echo " ". $totalprice ?>.00</span></li>
							<li>Services Tax <span>RS.<?php echo " ". $servicesTax = 30?>.00</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>RS.<?php echo " ". $totalprice+$servicesTax ?>.00</span></li>
						</ul>
							
							<form action="" method="post">
							<input class="btn btn-default check_out" type="submit" name="ordersubmit" value ="Check Out">
							<input class="btn btn-default update" type="submit" name="ordersubmit" value ="Update" ></a>
							</form>
					</div>
				</div>
			</div>
		</div>
<?php } else {
echo "Your shopping Cart is empty";
		}?>		
	</section><!--/#do_action-->