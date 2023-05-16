<?php 
$conn = mysqli_connect("localhost", 'root' , '', "6ft3") or die("Connection fail");


$websiteTitle = "Makima.in"; // Website Name
$websiteUrl = "//{$_SERVER['SERVER_NAME']}";  // Website URL
$websiteLogo = $websiteUrl . "/files/images/logo.png"; // Logo
$contactEmail = "786aijazusmaan@gmail.com"; // Contact Email

$version = "0.4";

//Donate 
$donate = "#";

// Socials 
$telegram = "https://t.me/#"; // telegram
$discord = "https://discord.com/#"; // Discord
$redit = "#"; // Reddit
$twitter = "#"; // Twitter
 


$disqus = "https://indianime.disqus.com"; // Disqus


// API URL
$api = "https://makima-api.vercel.app";


$banner = $websiteUrl . "/files/images/banner.png";  //Banner
?>
