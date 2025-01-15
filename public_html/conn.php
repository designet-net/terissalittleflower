<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "novus6sk_grace");
    define("DB_PASS", "12#anthmunyoz#");
    define("DB_NAME", "novus6sk_grace");

  // 1. Create a database connection
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " .
         mysqli_connect_error() .
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>