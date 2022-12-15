<?php

session_start();
require_once "../models/User.php";


class SignupContr extends User
{

  // Create new User
  public function store($name, $email, $password)
  {

    // DB user
    $data = $this->find($email);

    // To get Email adress of Existing User
    if ($data) return $this->redirect('../signup', "Email already exists");

    //Hash Password
    $salt = password_hash($password, PASSWORD_DEFAULT);

    // Create a new User in DB
    $user = new User();
    $user->create($name, $email, $salt);

    // storing email in session
    $_SESSION['name'] = $name;
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
