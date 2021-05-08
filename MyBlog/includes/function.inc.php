<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidUid($username) {
  $result;
  if (preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
  $result;
  if ($pwd === $pwdRepeat) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}

function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtfailed");
    exit(); 
  }

  mysqli_stmt_bind_param();
  
}