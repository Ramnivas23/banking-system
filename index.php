<!DOCTYPE html>
<html lang="en">

<head>

    <title>MANA BANK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP CSS FRAME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
       <!--ICON-->
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
       <!--BOOTSTRAP JAVASCIPT -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<style>
 
  .header {
    
    margin-top: 0; 
    height: 50px;
    font-style: bold;
    margin-left:0;
    margin-right:0;
  }
  h2{
     text-align:center;
     padding-top:20px;
   
  }
 .footer {
    background-color: #4bc5eb;
    height: 200px;
    font-style: italic;
  margin-left: 15px;
    margin-right: 15px; 
  }

 .position {
    margin-top: 20px;
    margin-bottom:220px;
 }
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'navbar.php'; ?>
      <header class="header">
         <div >
             <CENTER>

</CENTER>
        
</div>
</header>
<h2><b><marquee width="60%" direction="left" height="100px">Our bank does not asks for confidential information such as OTP and PASSWORD.Please do not share personal info.</marquee></b></h2><br>
      <div class="container">
          <div class="text-center position">
           <b><h2>Click here to view all the Users.</h2></b>
           <a href="users.php"><input type="button" class="btn btn-info" Value="VIEW USERS"></a><br><br>
           <h2>Click here for Transaction</h2>
           <a href="transactions.php"><input type="button" class="btn btn-success" Value="TRANSACTION HISTORY"></a>
          </div>
      </div>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div >

                    </div>
                </div>
                <div class="row justify-content-center">
                      <div class="col-auto">
                         <p>&copy 2021-<b>ramnivas for sparks foundation </b></p>
<div style="display: flex;justify-content: center;align-items: center;" class="text-center">
                            <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/ram-nivas-8ab401209/"><i class="fa fa-linkedin "></i></a>
                        </div>
                      </div>
                </div>
            </div>
        </footer>
</body>
</html>
