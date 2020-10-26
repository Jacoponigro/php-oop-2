<?php

class User {
    public $name;
    public $lastname;
    public $username;

    function __construct($name, $lastname, $username)
        {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->username = $username;
        }
    }

class Info extends User {
    public $email;
    public $password;
}

$jacoponigro = new Info("Jacopo", "Nigro", "jacopo99");
$jacoponigro->email = "jacoponigro@gmail.com";
$jacoponigro->password = "jacopo_1999";

$marcoacerbi= new Info("Marco", "Acerbi", "marchino01");
$marcoacerbi->email = "marcoacerbi@gmail.com";
$marcoacerbi->password = "marchino2001";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>php-oop2</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
          <th>Cognome</th>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
      <tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $jacoponigro->name ?></td>
        <td><?php echo $jacoponigro->lastname ?></td>
        <td><?php echo $jacoponigro->username ?></td>
        <td><?php echo $jacoponigro->email ?></td>
        <td><?php echo $jacoponigro->password ?></td>
      </tr>
      <tr>
        <td><?php echo $marcoacerbi->name ?></td>
        <td><?php echo $marcoacerbi->lastname ?></td>
        <td><?php echo $marcoacerbi->username ?></td>
        <td><?php echo $marcoacerbi->email ?></td>
        <td><?php echo $marcoacerbi->password ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>
