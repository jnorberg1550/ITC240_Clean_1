<?php
/*
config.php

Stores configuration data for our application


*/

//echo basename ($_SERVER['PHP_SELF']);

define('THIS_PAGE', basename ($_SERVER['PHP_SELF']) );
//echo'the constant is storing:' . THIS_PAGE;
//die;

//default page values
$title = THIS_PAGE;
$sitename = 'Site Name';
$slogan = 'whatever';
$pageHeader = 'Developer forgot to put in pageheader;
$subHeader = 'Developer forgot to put in subheader';

switch(THIS_PAGE) {
    case 'template.php':
        $title = 'My template page';
        
    break;
	
	case 'daily.php':
        $title = 'My Daily Page';
		$subHeader = 'all our coffee is special';
        
    break;
        
    case 'contact.php':
        $title = 'My contact page';   
	    $pageHeader = 'Please contact us':
		$subHeader = 'we appreciate your feedback':
        
    break;
        
    default:
        $title = THIS_PAGE;
		
        
        
        
        
}

