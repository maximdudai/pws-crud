
<?php



class Auth {

  public function __construct()
  {
    session_start();
  }

  public function checkAuth($username, $password) {

    $logUsername = 'maxim';
    $logPass = '123123';

    if($logPass == $password && $logUsername == $username) {
      $_SESSION['username'] = $username;
    }

    return isset($_SESSION['username']);
  }

  public function isLoggedIn()
  {
    return (isset($_SESSION['username']));
  }

  public function logout()
  {
    session_destroy();
  }
  
}