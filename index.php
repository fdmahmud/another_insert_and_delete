<?php
require_once 'DB.php';
$check = new DB;

if(isset($_POST['submit'])){

//    $check->store($_POST);
//$check->storedata($_POST);

$feedback = $check->storedata($_POST);

if($feedback){
    header('Location:table.php');

}
    echo "fucked";

}


?>

<html>
    <head>
        <title>Your information table</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet"/>
        <link href="css/style.css" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div class="bodyleg">
            <form action="" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="ex: simple@wow.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="1 to 16 words">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input name="address1" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" name="city" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select name="state" id="inputState" class="form-control">
                            <option value="dhaka" selected>Dhaka</option>
                            <option value="chtj">Chtagong</option>
                            <option value="raj">Rajsahi</option>
                            <option value="khul">Khulna</option>
                            <option value="bari">Barisal</option>
                            <option value="syl">Sylet</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input name="zip" type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="gay" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Are you gay?
                        </label>
                    </div>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </body>
</html>