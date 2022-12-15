<?php

require_once "../database/config.php";

class User extends Database
{

  // Create new User
  protected function create($name, $email, $passwd)
  {

    try {
      // sql Statement
      $sql = "insert into users (name, email, password) values (?,?,?)";

      // Connection
      $conn = $this->connect();

      // Preaparing the Statement
      $stmt = $conn->prepare($sql);

      // Binding Params
      $stmt->bind_param('sss', $name, $email, $passwd);

      // Exexuting Statement
      $stmt->execute();
      return true;

      // Exepyion
    } catch (RuntimeException $e) {

      throw $e;
    }
  }

  // Create new User
  protected function find($email)
  {

    // sql Statement
    $sql = "select name, email, password from users where email = ?";

    // Connection
    $conn = $this->connect();

    // Preaparing the Statement
    $stmt = $conn->prepare($sql);

    // Binding Params
    $stmt->bind_param('s', $email);

    // Exexuting Statement
    $stmt->execute();

    $data = $stmt->get_result();
    $data = mysqli_fetch_assoc($data);


    return $data;
  }
}
