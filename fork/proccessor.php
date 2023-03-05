<?php

// Define regular expressions
$name_regex = "/^[a-zA-Z ]+$/";
$address_regex = "/^[a-zA-Z0-9\s,'-]*$/";
$apt_regex = "/^[a-zA-Z0-9\s,'-]*$/";
$city_regex = "/^[a-zA-Z\s]*$/";
$state_regex = "/^[a-zA-Z]{2}$/";
$zip_regex = "/^\d{5}(?:[-\s]\d{4})?$/";
$phone_regex = "/^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/";
$email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST["namef"];
  $lname = $_POST["lastnamef"];
  $address = $_POST["addressf"];
  $apt = $_POST["Aptf"];
  $city = $_POST["cityf"];
  $state = $_POST["statef"];
  $zip = $_POST["zipf"];
  $phone = $_POST["phoneNumf"];
  $email = $_POST["emailf"];

  if (!preg_match($name_regex, $fname)) {
    $errors["name"] = "Please enter a valid first name";
  }

  if (!preg_match($name_regex, $lname)) {
    $errors["lastname"] = "Please enter a valid last name";
  }

  if (!preg_match($address_regex, $address)) {
    $errors["address"] = "Please enter a valid address";
  }

  if (!preg_match($apt_regex, $apt)) {
    $errors["apt"] = "Please enter a valid apt/suite";
  }

  if (!preg_match($city_regex, $city)) {
    $errors["city"] = "Please enter a valid city";
  }

  if (!preg_match($state_regex, $state)) {
    $errors["state"] = "Please enter a valid state abbreviation";
  }

  if (!preg_match($zip_regex, $zip)) {
    $errors["zip"] = "Please enter a valid ZIP/postal code";
  }

  if (!preg_match($phone_regex, $phone)) {
    $errors["phone"] = "Please enter a valid phone number";
  }

  if (!preg_match($email_regex, $email)) {
    $errors["email"] = "Please enter a valid email address";
  }

  if (count($errors) == 0) {
    // Process form inputs if all fields are valid
    session_start();

    // Store form data in session variables
    $_SESSION['namef'] = $fname;
    $_SESSION['lastnamef'] = $lname;
    $_SESSION['addressf'] = $address;
    $_SESSION['Aptf'] = $apt;
    $_SESSION['cityf'] = $city;
    $_SESSION['statef'] = $state;
    $_SESSION['zipf'] = $zip;
    $_SESSION['phoneNumf'] = $phone;
    $_SESSION['emailf'] = $email;

    // Redirect to index page if form was successfully processed
    header("Location: card.php");
    exit();
  }
}

// Redirect to index page with error messages if any
session_start();
$_SESSION["errors"] = $errors;
header("Location: index.php");
exit();

?>




