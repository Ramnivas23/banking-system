  <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname= "manabank";
    $con= mysqli_connect($servername, $username, $password, $dbname);
    if(!$con)
      {
       die("ERROR! Couldn't connect to the database. ".mysqli_connect_error());
      }
    if(isset($_POST['submit'])) {
        $from = $_GET['id'];
        $to = $_POST['to'];
        $amount = $_POST['amount'];

        $sql = "select * from users where id = {$from}";
        $query = mysqli_query($con, $sql);
        $sql1 = mysqli_fetch_array($query);

        $sql = "select * from users where id = {$to}";
        $query = mysqli_query($con, $sql);
        $sql2 = mysqli_fetch_array($query);

        if (($amount)<0)
        {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
        }


  
    // constraint to check insufficient balance.
        else if($amount > $sql1['balance']) 
        {  
            echo '<script type="text/javascript">';
            echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
            echo '</script>';
        }
    


    // constraint to check zero values
        else if($amount == 0){
             echo "<script type='text/javascript'>";
             echo "alert('Oops! Zero value cannot be transferred')";
             echo "</script>";
         }
    
        else {
            
                    // deducting amount from sender's account
                    $newbalance = $sql1['balance'] - $amount;
                    $sql = "UPDATE users set balance=$newbalance where id=$from";
                    mysqli_query($conn,$sql);
                 

                    // adding amount to reciever's account
                    $newbalance = $sql2['balance'] + $amount;
                    $sql = "UPDATE users set balance=$newbalance where id=$to";
                    mysqli_query($con,$sql);
                    
                    $sender = $sql1['name'];
                    $receiver = $sql2['name'];
                    $sql = "INSERT INTO transaction(sender, receiver, amount) VALUES ('$sender','$receiver','$amount')";
                    $query=mysqli_query($con,$sql);

                    if($query){
                         echo "<script>                                           window.location='transferdata.php';
                               </script>";
                    }

                    $newbalance= 0;
                    $amount =0;
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRS Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/customer.css">
    <link rel="stylesheet" href="css/transferstyle.css">
</head>
<body>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">Transfer</h1>
            <hr>
            <form method = "post" class = "transfer-frm">
            <h2 id = "from">From<h2>
            <?php
                $servername="localhost";
                $username="root";
                $password="";
                $dbname= "manabank";
                $con= mysqli_connect($servername, $username, $password, $dbname);
                if(!$con)
                  {
                   die("ERROR! Couldn't connect to the database. ".mysqli_connect_error());
                  }

                $customer_id = $_GET['id'];

                $sql = "SELECT * FROM users where id = {$customer_id}";

                $result = mysqli_query($con, $sql) or die("Query Unsuccessful");

                if(mysqli_num_rows($result) > 0){                
            ?>
            <table id = "customers-table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Gmail</th>
                    <th>Available Balance</th>
                </thead>
                <tbody>
                    <?php 
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td name = "cus_id"><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['balance']; ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
                <?php }

                else {
                    echo "No rows in the table";
                }
                ?>
            <h2 id="to">To</h2>
            <?php  
                $sql = "SELECT * FROM users where id != {$customer_id}";

                $result = mysqli_query($con, $sql) or die("Query Unsuccessful");

                if(mysqli_num_rows($result) > 0) {

            ?>
            <select name = "to" class = "drop-down">
                <option value = "" selected disabled>Select Recipient</option>
                <?php 
                    while($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value = "<?php echo $row['id']; ?>">
                   
                    <?php echo $row['name'] ;?> (Balance: 
                    <?php echo $row['balance'] ;?> )

                    </option>
                <?php } ?>
            </select>

            <?php } 
                else {
                    echo "No rows in the table";
                } 

            ?>
            <button type="submit" name = "submit" class = "transfer-btn">Transfer</button>
            <input type="number" name = "amt" placeholder="Amount" required id ="amount">
            <!-- <div id = "msg">
            <h3>Message</h3>
            <p>
                Balance insufficient
            </p>
            </div> -->
            </form>   
        </div>
    </section>
</body>
</html>