<?php

  class Users {

    public $name;
    public $lastName;
    public $email;
    public $userName;

    public function __construct($name, $lastName, $email) {

      $this-> name = $name;
      $this-> lastName = $lastName;
      $this-> email = $email;
    }

    public function __toString() {

      $userProfile = '<strong>Nome Utente: </strong>'. $this-> name . '<br>'
      . '<strong>Cognome Utente: </strong>'. $this-> lastname . '<br>'
      . '<strong>Email Utente: </strong>'. $this-> email . '<br>';

      if ($this-> userName) {
        $userProfile .= '<strong>UserName Utente: </strong>'. $this-> userName . '<br>';
      } else {
        $userProfile .= '<strong>UserName Utente: </strong>'. 'NOT FOUND <br>';
      }

      return $userProfile;
    }

  }

  $user1 = new User('Stefano', 'Zaccaria', 'stefano.zaccaria29@gmail.com');
  $user2 = new User('Mario', 'Rossi', 'mario.rossi@gmail.com');

  $user1 -> userName = 'MisterX';

  echo $user1;
  echo "<br>";
  echo $user2;


?>
