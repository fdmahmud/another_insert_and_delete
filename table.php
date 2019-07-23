<?php
    require_once'DB.php';
    $table = new DB;

    $tabledata = $table->view();


?>

<html>
    <head>
        <title>Your table bitch</title>
        <link href="css/bootstrap.css" type="text/css" rel="stylesheet" />

    </head>
    <body>
        <div class="container">
            <a href="index.php" class="btn btn-success">Go to previous page.</a>
        </div>

        <div class="container">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_array($tabledata)) { ?>
                <tr>
                    <th scope="row"><?php echo $row['email']; ?></th>
                    <td><?php echo $row['pass']; ?></td>
                    <td><?php echo $row['add1']; ?></td>
                    <td><?php echo $row['add2']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><?php echo $row['gay']; ?></td>
                </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>

    </body>


</html>
