<?php

    class Login 
    {
        public static $user; // $this doesn't work with static attributes

        public static function verifyLogin()
        {
            echo self::$user . " logged in!";
        }
    }

    Login::$user = "adminnnn";
    Login::verifyLogin();
   
?>