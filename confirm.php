<?php
  $name = $_POST['name'];
  $contact = $_POST['cont_num'];
  $mail = $_POST['email'];
  $address = $_POST['delv_adr'];

  $connec = new mysqli('localhost', 'root', '', 'mbuddy');

  if($connec -> connect_error){
    die('Connection not successful : '.$connec -> connect_error);
  }
  else {
    $confirm = $connec->prepare("INSERT into orderhist(name, contact, email, address) values(?, ?, ?, ?)");
    $confirm -> bind_param("ssss", $name, $contact, $mail, $address);
    $confirm->execute();
    echo '<script> alert ("Order placement successful!")</script>';
    session_start();
    session_destroy();
    $confirm->close();
    echo '<script> window.location="menu.php"</script>';
  }

?>
