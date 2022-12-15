<?php

require "../controllers/LoginContr.php";

$email = emptyPostInputs('email')
  ? emptyPostInputs('email')
  : error('Email is Required');

$password = emptyPostInputs('password')
  ? emptyPostInputs('password')
  : error('Password is Required');


// Check for Empty Inputs
function emptyPostInputs($val)
{
  // checking if Value Exists
  if (empty($_POST[$val])) {
    return false;
  }
  return $_POST[$val];
}

// Show Error Messages
function error($err)
{
  header("Location: ../index.php?error=$err");
  exit();
}

$user = new LoginContr();
$user->index($email, $password);
