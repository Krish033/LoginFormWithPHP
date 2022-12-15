<?php

// Database Object
class Database
{

  protected $db_host = 'localhost';
  protected $db_name = 'recipe_app';
  protected $db_user = 'root';
  protected $db_passwd = '';

  // Connect to database
  protected function connect()
  {
    $conn = new mysqli($this->db_host, $this->db_user, $this->db_passwd, $this->db_name);

    // Returning the Mysql Connection
    return $conn;
  }
}
