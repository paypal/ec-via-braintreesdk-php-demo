<?php
require_once ("incl.header.php");

$checkout = (isset($_POST["checkout"])) ? $_POST["checkout"] : "";
$first_name = (isset($_POST["first-name"])) ? $_POST["first-name"] : "";
$last_name = (isset($_POST["last-name"])) ? $_POST["last-name"] : "";
$recipient = (isset($_POST["recipient"])) ? $_POST["recipient"] : "";
$line1 = (isset($_POST["line1"])) ? $_POST["line1"] : "";
$line2 = (isset($_POST["line2"])) ? $_POST["line2"] : "";
$city = (isset($_POST["city"])) ? $_POST["city"] : "";
$state = (isset($_POST["state"])) ? $_POST["state"] : "";
$postal_code = (isset($_POST["postal-code"])) ? $_POST["postal-code"] : "";
$country_code = (isset($_POST["country-code"])) ? $_POST["country-code"] : "";
?>

<div class="container-fluid">
	<div class="row">

		<div class="col-sm-5">
			<div class="divBorder" style="min-height: 460px;">

				<h3>Order Complete</h3>
				<br />

				<h4>Order details:</h4>

				<strong>Item:</strong> <?php echo $item_description ?> <br /> <strong>Transaction
					ID:</strong> <?php echo $transactionid ?>  <br /> <strong>Status:</strong> <?php echo $status ?>  <br />
				<strong>Total Amount:</strong> <?php echo $total_amount ?>    <?php echo $currency ?> <br />

				<br /> <br />

				<h4>Ship to:</h4>

				<address>
					<strong><?php echo $recipient ?> </strong><br />
							<?php echo $line1 ?> <br />
							<?php echo ($line2 == "") ? "" : $line2 . "<br />" ?> 
							<?php echo $city ?>, <?php echo $state ?>  <?php echo $postal_code ?><br />
	 						<?php echo $country_code ?>
						</address>

			</div>

		</div>

		<div class="col-sm-7">
			<div class="divBorder" style="min-height: 460px;">
				<h3>Payment Flow</h3>
 	 	 	 	 	 	
						<?php
    if ($checkout == 'classic') {
        echo '<img class="img-responsive" id="flow-step" src="../img/classic-flow-4.png">';
    } else {
        echo '<img class="img-responsive" id="flow-step" src="../img/pay-now-flow-4.png">';
    }
    ?>

					</div>
		</div>


		<div class="col-xs-12">
			<div style="text-align: center;">
				<h3>
					Return to <a href='../index.php'>Home Page</a>
				</h3>
			</div>
		</div>


	</div>
</div>

<?php require_once("incl.footer.php"); ?>
