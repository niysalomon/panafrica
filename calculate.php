<link rel="stylesheet" type="text/css" href="style.css">
<div class="container">
<div class="mydata">
<?php
if(isset($_POST['calculate']))
{
	@$inumber=$_POST['inumber'];
	@$cnumber=$_POST['cnumber'];
	@$categ=$_POST['categ'];
	$different=$cnumber-$inumber;
	if($categ==1)
	{		
	if($different>0)
	
	{
	$tot=$different*323;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    
    else{
    	echo "<label> Current consumption can't be under the initial consumption!! </label> </br>";
    }

}
	if($categ==2)
	{
	
	if(($different>=0) AND ($different<=5))
	{
	$tot=$different*340;
	echo "<label>The amount to be paid is $tot  Rwanda Francs</label> </br>";
    }
    else if(($different>=6) AND ($different<=20))
	{
	$tot=$different*720;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    else if(($different>=21) AND ($different<=50))
	{
	$tot=$different*845;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    else if($different>=50)
	{
	$tot=$different*877;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    else
    {
    	echo "<label> Current consumption can't be under the initial consumption! </label> </br>";
    }
	}
	else if($categ==3){
		if(($different>=0) AND ($different<=50))
	
	{
	$tot=$different*877;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    else if($different>=50)
	{
	$tot=$different*895;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    else{
    	echo "<label>Current consumption can't be under the initial consumption!! </label> </br>";
    }

}

else if($categ==4){
		if($different>=0)
	
	{
	$tot=$different*736;
	echo "<label>The amount to be paid is $tot  Rwanda Francs </label> </br>";
    }
    
    else{
    	echo "<label> Current consumption can't be under the initial consumption! </label> </br>";
    }

}


}	
?>
<a class="button" href='index.php'>Go back</a>
</div>

