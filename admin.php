<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Home</title>
</head>

<body>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">user name</th>
                <th scope="col">Email</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        <tbody>



            <?php


            include 'database.php';

            $sql = "SELECT * FROM users ";

            if ($result = mysqli_query($conn, $sql)) {
                // Fetch one and one row
                while ($row = mysqli_fetch_row($result)) {
                    echo "
                        <tr>
                            <td>" . $row[0] . "</td>
                            <td>" . $row[1] . "</td>
                            <td>" . $row[2] . "</td>
                            <td>" . $row[3] . "</td>
                            </tr>
                                 ";


                    // echo (" id : $row[0]   userName :  $row[1]  password : $row[2]");
                };
                // Free result set
                mysqli_free_result($result);
            }

            mysqli_close($conn);
            ?>



        </tbody>
    </table>



    <script src="./assets/js/jquery-3.4.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/min.js"></script>
</body>

</html>