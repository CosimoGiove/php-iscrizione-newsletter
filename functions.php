<?php 
  function validateEmail($email)
  {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return true;
      } else {
          return false;
      }
  }

  if (isset($_GET['email'])) {
      $email = $_GET['email'];
      if (validateEmail($email)) {
          echo "<div class='alert alert-success'>l'indirizzo email contiene un punto e una chiocciola $email</div>";
        
      } else {
          echo "<div class='alert alert-warning'>
           errore, l'email non contiene un punto è una chiocciola $email
        </div>";
      }
  }

?>