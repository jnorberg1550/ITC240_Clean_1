<?php
/*
config.php

Stores configuration data for our application

*/

ob_start(); //prevemts header errors
define('DEBUG',TRUE); #we want to see all errors


include 'credentials.php'; //database credentials
define('THIS_PAGE', basename ($_SERVER['PHP_SELF']));


//default page values
$title = THIS_PAGE;
$siteName = 'Site Name';
$slogan = 'whatever';
$pageHeader = 'Developer forgot to put in pageheader';
$subHeader = 'Developer forgot to put in subheader';

switch(THIS_PAGE) {
    case 'template.php':
        $title = 'My template page';
        $pageHeader = 'Put Page ID here';
		$subHeader = 'put more info here';
        
    break;
	
	case 'daily.php':
        $title = 'My Daily Page';
        $pageHeader = 'Daily Coffee specials';
        $subHeader = 'All our coffee is special';
        
    break;
        
    case 'contact.php';
        $title = 'My contact page';   
	    $pageHeader = 'Please contact us';
		$subHeader = 'We appreciate your feedback';
        
    break;
        
      
        
}



function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}



