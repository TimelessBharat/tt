<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TMELESS BHARAT - Tourism Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="Datatables/Main_Jquery.js"></script>
    <script src="Datatables/datatables.js"></script>
    <link rel="stylesheet" href="Datatables/datatables.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h3>ADMIN PANEL</h3>
                </div>
                <div class="col-12 text-center mt-2">
                    <h4>Booked Data</h4>
                </div>

                <table id="myTable">
                    <!-- ... your existing table content ... -->
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Date & Time</th>
                            <th>Destination</th>
                            <th>Persons</th>
                            <th>kids</th>
                            <th>Special Request</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                              require "database/connection.php";


                                $sql = "SELECT * FROM booking_table";
                                $result =mysqli_query($coon,$sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo"<tr>";
                                        echo "<td>{$row['Your_Name']}</td>";
                                        echo "<td>{$row['Your_Email']}</td>";
                                        echo "<td>{$row['Date_Time']}</td>";
                                        echo "<td>{$row['Destination']}</td>";
                                        echo "<td>{$row['Person']}</td>";
                                        echo "<td>{$row['Kids']}</td>";
                                        echo "<td>{$row['Special_request']}</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }

                            
                            ?>
                    </tbody>
                </table>
            </div>
            <hr/>
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h4>Contact Data</h4>
                </div>

                
                <table id="myTable2">
                    <!-- ... your existing table content ... -->
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                              require "database/connection.php";


                                $sql = "SELECT * FROM contact";
                                $result =mysqli_query($coon,$sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo"<tr>";
                                        echo "<td>{$row['Your_Name']}</td>";
                                        echo "<td>{$row['Your_Email']}</td>";
                                        echo "<td>{$row['Subject']}</td>";
                                        echo "<td>{$row['Message']}</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "0 results";
                                }

                            
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
    $(document).ready(function () {
        $('#myTable2').DataTable();
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</html>