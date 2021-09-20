<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mana Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">All Transactions</h1>
            <hr>
            <?php
                include 'config.php';

                $sql = "SELECT * FROM transaction";

                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                if(mysqli_num_rows($result) > 0) {   

            ?>
            <center>
            <table id = "customers-table">
                <thead>
                    <th>Id</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date and Time</th>
                </thead>

                <tbody>
                    <?php 

                        while($row = mysqli_fetch_assoc($result)) {

                     ?>
                    <tr>
                        <td><?php echo $row['sno']; ?></td>
                        <td><?php echo $row['sender']; ?></td>
                        <td><?php echo $row['receiver']; ?></td>
                        <td><?php echo $row['amount']; ?></td>
                        <td><?php echo $row['datetime']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else {
                    echo "No rows in the table";
                } 
            ?>
            </div>    
        </div>
    </section>
            </center>
</body>
</html>