<?php 

// Define regular expressions
$name_regex = "/^[a-zA-Z ]+$/";
$cardnumber_regex = "/^[0-9]{16}$/";
$expirationdate_regex = "/^(0[1-9]|1[0-2])\/[0-9]{2}$/";
$securitycode_regex = "/^[0-9]{3}$/";

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $cardnumber = filter_var($_POST['cardnumber'], FILTER_SANITIZE_STRING);
  $expirationdate = filter_var($_POST['expirationdate'], FILTER_SANITIZE_STRING);
  $securitycode = filter_var($_POST['securitycode'], FILTER_SANITIZE_STRING);

  if (!preg_match($name_regex, $name)) {
    $errors["name"] = "Name must contain only letters and spaces";
  }

  if (!preg_match($cardnumber_regex, str_replace(" ", "", $cardnumber))) {
    $errors["cardnumber"] = "Card Number must be 16 digits";
  }

  if (!preg_match($expirationdate_regex, $expirationdate)) {
    $errors["expirationdate"] = "Expiration Date must be in the format MM/YY";
  }

  if (!preg_match($securitycode_regex, $securitycode)) {
    $errors["securitycode"] = "Security Code must be 3 digits";
  }

  if (count($errors) == 0) {
    // Process form inputs if all fields are valid
    session_start();

    // Store form data in session variables
    $_SESSION['name'] = $name;
    $_SESSION['cardnumber'] = $cardnumber;
    $_SESSION['expirationdate'] = $expirationdate;
    $_SESSION['securitycode'] = $securitycode;

    // Redirect to dbprocessor page if form was successfully processed
    header("Location: dbprocessor.php");
    exit();
  }
}

// Store errors in session variable
session_start();
$_SESSION["errorsCard"] = $errors;

// Redirect to index page with error messages
header("Location: card.php");
die();

?>