<?php
define("DBS_HOST", "localhost");
define("DBS_NAME", "todos");
define("USERNAME", "root");
define("PASSWORD", "");

function connectDB () {
  
  $dns = "mysql:host" . DBS_HOST . "". DBS_NAME . "charset=utf8";
  
  try {
    $conn = new PDO($dns, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "connexion réussir !!";
    return $conn;
  } catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

  };
};

connectDB();