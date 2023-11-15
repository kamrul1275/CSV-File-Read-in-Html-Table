






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 




<h3 class="text-center py-3">CSV File Read</h3>





<?php
$CSVfp = fopen("stock.csv", "r");
if ($CSVfp !== FALSE) {
    ?>
    <div class="container">
        <table class="table">
            <thead>

                <tr>
                    <th>Symbol</th>
                    <th>Company</th>
                    <th>Price</th>
                </tr>

            </thead>

        <?php

            while (! feof($CSVfp)) {
                $data = fgetcsv($CSVfp, 1000, ",");
                if (! empty($data)) {
                    ?>
                    <tr class="data">
                        <td><?php echo $data[0]; ?></td>
                            
                        <td><?php echo $data[1]; ?></td>

                        <td><?php echo $data[2]; ?></td>

                    </tr>
        <?php }
        ?>

        <?php
            }
            ?>
             </table>
            </div>

        <?php
        }
        fclose($CSVfp);
        ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>





















