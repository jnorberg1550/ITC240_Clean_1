<?php include 'config.php'?>
<?

/* if it si todau's coffee



place a link to show today's coffee if another day.
  
*/ 

if(isset(S_GET['day']))
	$today $_GET['day'];



//if day is passed via GET, show today's coffee 	
	{
		
		
		
		
	}

//$today = date('l');










echo $today;
die;

?>
<?php include 'header.php'?>

<p><?=$today?>'s special is pumpkin spice</p>   

  
  
<p>Click below to find out each day's special</p>  
<p><a href="daily.php?day = Sunday">Sunday</a></p>  
<p>Clever content goes here!</p>  
<p>Clever content goes here!</p>  
<p>Clever content goes here!</p>  
<p>Clever content goes here!</p>  

<?php include 'footer.php'?>