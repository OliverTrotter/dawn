<?php
  function db() {
    $dbhost = "localhost";
    $dbuser = "todouser";
    $dbpass = "todo1234";
    $db = "todolist";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn -> error);

    return $conn;
  }

  function closeConn($conn) {
    $conn -> close();
  }
?>
