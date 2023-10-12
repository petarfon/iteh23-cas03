<?php

class User
{
    public $id;
    public $username;
    public $password;

    //pokazati php manual
    public function __construct($id = null, $username = null, $password = null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function logIn(User $user, mysqli $conn)
    {
        //iskljucivo dvostruki navodnici
        $query_string = "SELECT * FROM user WHERE username='$user->username' AND password='$user->password'";

        //konekcija sa bazom
        return $conn->query($query_string);
    }
}
