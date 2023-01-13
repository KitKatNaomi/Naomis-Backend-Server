<?php

// Make variables
$site = "none";
$text = "error";
$bg = "black";
$fg = "white";

// For loop for variables
foreach($_GET as $key => $value) {
  if ($key == "site") {$site = $value;}
  if ($key == "bg") {$bg = $value;}
  if ($key == "fg") {$fg = $value;}
}

// Encode site name
$sitename = urlencode($site);

// Initialize a new cURL session
$ch = curl_init();

// Set the URL to be requested
curl_setopt($ch, CURLOPT_URL, "https://neocities.org/api/info?sitename=".$sitename);

// Return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$result = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Decode JSON
$json = json_decode($result, true);

// Set $text to json -> info -> views
$text = $json["info"]["views"];

if ($site == "none") {
  $text = "?site=*";
}

// Create a new Imagick object
$imagick = new \Imagick();

// Set the image size
$imagick->newImage(60, 20, $bg);

// Set the text color and point size
$imagick->setImageFormat("png");
$draw = new \ImagickDraw();
$draw->setFillColor($fg);
$draw->setFontSize(15);

// Position the text in the center of the image
$draw->setGravity(\Imagick::GRAVITY_CENTER);

// Draw the text on the image
$draw->annotation(0, 0, $text);
$imagick->drawImage($draw);

// Save the image
header('Content-Type: image/jpeg');
echo $imagick->getImageBlob();

?>