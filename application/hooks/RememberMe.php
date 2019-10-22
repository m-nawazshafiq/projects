<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RememberMe
{

    public function rememberUser()
    {
        if (isset($_COOKIE['remember_me'])) {

            if (!isset($_SESSION['userid'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "eshopper_bigwigy";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $email=$_COOKIE['remember_me'];
                $sql = "select * from customer where EmailAddress='".$email."'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $_SESSION['userid'] = $row['Id'];
                        $_SESSION['userName'] = $row['UserName'];
                        $_SESSION['email'] = $row['EmailAddress'];
                    }
                }
                $conn->close();
            }
        }
    }
}
