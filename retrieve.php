<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js
"></script>
<body>
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6">
                <h1 class="text-center text-danger text-uppercase">DATA FETCHING</h1>
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                       
                            <th scope="col">first_name</th>
                            <th scope="col">last_name</th>
                            <th scope="col">email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            include ('conn.php');

                            $sql = "SELECT * FROM `computer`";
                            $query = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($query) > 0)
                            {
                                while($row = mysqli_fetch_array($query))
                                {
                                   
                                ?>
                                
                                    <tr>

                                    
                                         
                                        <td><?php  echo $row[0]; ?></td>
                                        <td><?php  echo $row[1]; ?></td>
                                        <td><?php  echo $row[2]; ?></td>
                                        <td><?php  echo $row[3]; ?></td>
                                        <td><img src=<?php echo "image/".$row['image']; ?> alt="" width="50px" height="50px">
                                    </td>
                                    <td><button type="button" class="btn btn-danger" name="delete" ><a href="delete.php?id=<?php echo $row[0]; ?>"> Delete</a></button>
</td>
<td><button type="button" class="btn btn-warning" name="Update" ><a href="update.php?id=<?php echo $row[0]; ?>"> Edit</a></button>
</td>
                                    </tr>

                        <?php
                                }
                            }
                            else
                            {
                                ?>

                            <tr>
                                <td colspan="5">No Record Found</td>
                            </tr>

                        <?php
                            }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>