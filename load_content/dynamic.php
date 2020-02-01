<?php
/**************************************************************
* This script is brought to you by Vasplus Programming Blog
* Website: www.vasplus.info
* Email: info@vasplus.info
****************************************************************/


//This is just a demonstration external page contents. It could possibly be contents from your database and so on...

srand((float) microtime() * 10005224);

$This_Page_Content = array(
"Create New Accounts and Login via PHP and Mysql", 
"Create New Accounts and Login via Jquery, Ajax, PHP and MySql", 
"Secure Registration and Login via PHP and Mysql", 
"Secure Sign-up and Login via Jquery, Ajax, and PHP", 
"Creating Designers CSS3 share buttons", 
"Whether you're designing a website or a web application, you'll need a button for it.", 
"Whether you're designing a website or a web application, you'll need a button for it. Now, with CSS3â€²s help, it was never easier to create nice looking button.", 
"How to create an animated old letter", 
"In this tutorial, you'll learn how to create cool CSS3 buttons in just a few steps. View the demo and download the code if you like what you see.", 
"There's a feature to emulate the errors that will be erased during typing. Please click on the Demo button below to see the animated letter writing in action and download if you like what you see.", 
"Continuation of Displaying Data from a Database Table", 
"This tutorial teaches you how to create an animated old letter. In this letter, we will use an animated pen. When the pen dries out while writing, we will dip it in the ink and continue writing.", 
"Single Records and Error Trapping", 
"In the past two parts of this tutorial I have shown you how to take data out of the database and display it on screen. ", 
"Updating and Deleting records from the database", 
"o far you have learnt how to put information into your MySql database, view the information in it and select which information you would like to view. In this part, I will show you how to do the two final actions, updating your database and deleting records from it.", 
"Just some other awesome CSS3 buttons", 
"So far in this tutorial, you have created a database and put information into it. In this part I will show you how to create an input page for your database, and how to display the whole contents.", 
"Displaying Data from a Database Table", 
"Over the past two parts, I have explained what I am planning to do in this tutorial and have shown you how to create a database to use with the tutorial. In this part I will be showing you how to insert some information into your database so that it is more useful.", 
"Inserting Information via MySql Queries", 
"In this article youâ€™ll learn how to create some cool CSS3 buttons in just a few steps.");

$This_Page_Content_Rand_Keys = array_rand($This_Page_Content, 2);
$This_Page_Content_Displayer = $This_Page_Content[$This_Page_Content_Rand_Keys[0]] . "\n";
echo strip_tags($This_Page_Content_Displayer);
?>