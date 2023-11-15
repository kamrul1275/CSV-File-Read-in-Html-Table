<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employee Salary </title>
</head>

<body>
    <h3 class="text-center mb-5 py-3 bg-secondary">EMPLOYEE_ID Employee Salary Sheet CSV File Read</h3>

    <?php
    // Specify the path to your CSV file
    $csvFilePath = 'employees.csv';

    // Read the CSV file into an array
    $csvData = array_map('str_getcsv', file($csvFilePath));

    // Check if the file was successfully loaded
    if ($csvData === false) {
        die("Error: Unable to read the CSV file.");
    }

    // Remove the header row
    $header = array_shift($csvData);

    ?>

    <div class="container">
        <table class="table">
            <thead>

                <tr>
                    <th>EMPLOYEE_ID</th>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE_NUMBER</th>
                    <th>JOB_ID</th>
                    <th>SALARY</th>
                </tr>

            </thead>

            <?php

            $total = 0;

            foreach ($csvData as $data) {
                // while (!feof($CSVfp)) {
                //$data = fgetcsv($CSVfp, 1000, ",");

                if (count($data) >= 7) {
                    // Assuming the salary is in the second column (index 1)
                    $total += (int)$data[6];
                } else {
                    // Handle invalid rows (you might want to log or display a warning)
                    echo "Warning: Invalid row encountered\n";
                }

                if (!empty($data)) {
            ?>
                    <tr class="data">
                        <td><?php echo $data[0]; ?></td>

                        <td><?php echo $data[1]; ?></td>

                        <td><?php echo $data[2]; ?></td>

                        <td><?php echo $data[3]; ?></td>

                        <td><?php echo $data[4]; ?></td>
                        <td><?php echo $data[5]; ?></td>

                        <td><?php echo $data[6]; ?></td>
                    </tr>

                <?php }
                ?>

            <?php
            }

            ?>
            <tfoot>
                <tr>
                    <td colspan=6   style=" font-weight: bold;" > Total: </td>
                    <td><?php echo $total; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>

    <?php


    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>