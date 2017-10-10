<?php

//database login info
$dbuser = "root";
$dbpw = "123456";
$db = "btctest";

//blockchain info API Key and your xpub BIP32 public key
$api_key = "b0bdf0cd-b041-4a06-939c-b8cc2880af99";
$xpub = "xpub6DENvF2FEzytYeivQAYUR6sZeuUCV7Tirczp5xuuuXcWY7VH27uwW9Jtqe3QNFFnJpUXMbo79QA5tWobDa5Aymoo6X9gMvYRqmrpb2CZvje";
$secret = "your_secret"; //this can be anything you want

//Specific to you the store owner
$storeName = "Shop Name";
$rootURL = "http://localhost:8080/shop"; //example https://mysite.org  or http://yourhomepage.com/store
$yourEmail = "86322989@qq.com";  //email notifications will be sent to this email when a new order is placed

//pw to access the admin pages
$adminPW = "honeybadgerbubblegum"; 

//connect to the database
$conn = mysqli_connect("localhost:3306", $dbuser, $dbpw, $db);
if(!$conn){
  die('Connection Error: '.mysqli_errno());
}

?>