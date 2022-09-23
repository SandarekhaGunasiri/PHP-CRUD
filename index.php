<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title> My shop</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"></link>
        </meta>
        </meta>
        </meta>
    </head>
    <body>
        <div class="container my-5">
            <h2>List of clients</h2>
            <a class="btn btn primary" href="/myshop/create.php" role="button">
                New client
            </a>
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myshop";

        $connection = new mysqli($servername, $username, $password, $database , 3307);
        if ($connection->
                        connect_error) {  
            die("Connection failed:" . $connection->connect_error);
        }


        
        $sql = "SELECT * FROM clients";
        $result = $connection->query($sql);

        if(!$result){

            die("Invaid query: " . $connection->error);

        
        }  
        while($row = $result->fetch_assoc()) {
            echo "
                        <tr>
                            <td>$row[id]</td>
                            <td> $row[name] </td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[address]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class= 'btn btn-primary btn-sm' href='/myshop/edit.php?id=$row[id]'>Edit</a>
                                <a class= 'btn btn-danger btn-sm' href='/myshop/delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
        }

        ?>
                    </tbody>
                </table>
            </br>
        </div>
    </body>
</html>