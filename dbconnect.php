<?php

    class DBconnect {

        function storedata($datas) {

            $host = 'localhost';
            $user = 'root';
            $dbpassword = '';
            $database = 'new_db';
            $connect = mysqli_connect($host,$user,$dbpassword,$database) or die("Unable to connect");

            $email = $datas['email'];
            $password = $datas['password'];
            $add1 = $datas['address1'];
            $add2 = $datas['address2'];
            $city = $datas['city'];
            $state = $datas[''];
            $zip = $datas[''];
            $gay = $datas[''];


        }

    }


?>