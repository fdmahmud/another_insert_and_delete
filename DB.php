<?php

class DB
{
 
    function storedata($datas)
    {


        $host = 'localhost';
        $user = 'root';
        $dbpassword = '';
        $database = 'new_db';
        $connect = mysqli_connect($host, $user, $dbpassword, $database);  //or die("Unable to connect");

        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $email = $datas['email'];
        $password = $datas['password'];
        $add1 = $datas['address1'];
        $add2 = $datas['address2'];
        $city = $datas['city'];
        $state = $datas['state'];
        $zip = $datas['zip'];
        $gay = $datas['gay'];

        $sql = "insert into table1(email, pass, add1, add2, city, state, zip, gay) values ('$email', '$password', '$add1', '$add2', '$city', '$state', '$zip', '$gay')";
        $mysqlquery = mysqli_query($connect, $sql);

        //var_dump($mysqlquery);

        if ($mysqlquery) {
            //echo "Success";
            return $mysqlquery;

            //header("location:table.php");

        }
        die("connection error" . mysqli_connect_error());



    }
    function view()
    {
        $connection = mysqli_connect('localhost','root','','')
    }

}


?>