<?php

require '../controllers/SignupContr.php';

// Check for Empty Inputs
function emptyPostInputs($val)
{
  // checking if Value Exists
  if (empty($_POST["$val"])) {
    return false;
  }
  return $_POST["$val"];
}

// Show Error Messages
function error($err)
{
  header("Location: ../signup.php?error=$err");
  exit();
}

// Redirect functions
function redirectOnRequest($location, $err)
{
  header("Location: $location?error=$err");
  exit();
}

// Username
$name = emptyPostInputs('name')
  ? emptyPostInputs('name')
  : error('Username is Required');

// Email
$email = emptyPostInputs('email')
  ? emptyPostInputs('email')
  : error('Email is Required');

// Password
$password = emptyPostInputs('password')
  ? emptyPostInputs('password')
  : error('Password is Required');


// Creating a new User
$user = new SignupContr();
$user->store($name, $email, $password);
