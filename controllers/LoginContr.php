<?php

session_start();
require_once "../models/User.php";


class LoginContr extends User
{

  // Login User
  public function index($email, $password)
  {

    // Getting user data
    $user = $this->find($email);

    // if User Does not Exists 
    if (!$user || empty($user)) {

      $this->redirect('../index', 'Incorrect email or password');
      return;
    }

    // Checkinh password
    $match = password_verify($password, $user['password']);

    // Matching Passwords
    if (!$match) {

      $this->redirect('../index', 'Incorrect email or password');
      return;
    }

    // storing email in session
    $_SESSION['name'] = $user['name'];
    $_SESSION['email'] = $email;

    // Redirect to Homepage
    $this->redirect('../homepage', "null");
  }

  private function redirect($loc, $err)
  {
    header("Location: $loc.php?error=$err");
    exit();
    return;
  }
}
