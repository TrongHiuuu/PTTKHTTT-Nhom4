<?php
$conn = new mysqli("localhost","root","","webbansach_mysqli");

// Check connection
if ($conn->connect_errno) {
  echo "Kết nối tới MySQL không thành công." . $conn->connect_error;
  exit();
}
?>