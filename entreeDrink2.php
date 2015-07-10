
<?php
	/* menu items chosen */
	$appetizer = 'peanuts';	
	$entree = $_GET["my_entree"];
	$dessert = 'ice cream';
	
	/*assign drink based on entree */
	function select_beverage($dinner) {
	if ($dinner == "steak") {
		return "Red Wine";
	}  else if ($dinner == "salmon"){
		return "White Wine";
	}  else if ($dinner == "barbecue pork") {
		return "Ale";
	}  else if ($dinner == "chicken") {
		return "Wheat Beer";	
	}	
	}
	/* price of items */
	$appetizer_price = 5.00;
	$drink_price = 3.00;
	$entree_price = 10.00;
	$dessert_price = 4.00;
	/* tax and tip additions */
	$sales = .08;
	$tip = .15;
	$subtotal = $appetizer_price + $drink_price + $entree_price + $dessert_price;
	$tax = $subtotal * $sales;
	$tip = ($subtotal + $tax) * $tip;
	$grand = $subtotal + $tax + $tip;
	$drink = select_beverage($entree);
?>
<br/>
<h1>Here is what I ate and what it cost</h2>
	<ul>
		<li>As an appetizer I had <? echo $appetizer; ?> which cost $<? echo $appetizer_price; ?></li>
		<li>I drank <? echo $drink; ?> which cost $<? echo $drink_price; ?></li>
		<li>I ordered <? echo $entree; ?> which cost $<? echo $entree_price; ?></li>
		<li>For dessert, I ate <? echo $dessert; ?> which cost $<? echo $dessert_price; ?></li>
		
		<h3>My subtotal came to $<? echo number_format((float)$subtotal, 2, '.', ''); ?></h3>
		<h3>Uncle Sam&rsquo;s share was $<? echo number_format((float)$tax, 2, '.', ''); ?></h3>
		<h3>My tip on the subtotal and tax came to $<? echo number_format((float)$tip, 2, '.', ''); ?>
		<h3>Add that all up, and I forked out $<? echo number_format((float)$grand, 2, '.', ''); ?>
		
		
	</ul>
</ol>
	
	