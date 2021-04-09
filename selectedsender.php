<?php 
include('config.php');
if(isset($_POST['submit']))
{
  $sender = $_GET['id'];
  $recipient = $_POST['to'];
  $amount = $_POST['amount'];
 

  $sql = "SELECT * FROM `usertable` WHERE `s.no`= $sender";
  $query = mysqli_query($conn,$sql);
  $sql1 = mysqli_fetch_array($query);

  $sql = "SELECT * FROM `usertable` WHERE `s.no`= $recipient";
  $query = mysqli_query($conn,$sql);
  $sql2 = mysqli_fetch_array($query);

  $sendername = $sql1['Name'];
  $recipientname = $sql2['Name'];

  if($amount<0) 
  {
    echo '<script type="text/javascript">';
    echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
    echo '</script>'; 
  }

  elseif($amount > $sql1['current_balance'])
  {
    echo '<script >';
    echo ' alert("sorry! insufficient balance")';  // showing an alert box.
    echo '</script>'; 

  }

  else {

    $newbalance = $sql1['current_balance'] - $amount;

    $sql = "UPDATE `usertable` set `current_balance` = $newbalance WHERE `s.no` = $sender";
    mysqli_query($conn,$sql);

    $newbalance = $sql2['current_balance'] + $amount;
    $sql = "UPDATE `usertable` set `current_balance` = $newbalance WHERE `s.no` = $recipient";
    mysqli_query($conn,$sql);

    
    
    $sql = "INSERT INTO transaction(`sender`, `recipient`, `amount`,`balance`) VALUES ('$sendername','$recipientname','$amount','$newbalance')";
    $query = mysqli_query($conn,$sql);

    if($query)
    {
      ?>
      <script >
         alert("Transaction Succesful");
       window.location = "transactionhistory.php";
     </script>
     <?php
    }
    
 $newbalance = 0;
  $amount = 0;


  }

 
}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>money transfer</title>
  </head>
  <body>
  

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid ">
          <a class="navbar-brand" href="index.php"> <img src="https://image.shutterstock.com/image-vector/bank-icon-logo-vector-260nw-399995245.jpg" width="100px" height="100px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-lg-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home1">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#home">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"> Contact us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
      <?php
      
      include('config.php');
      $sid = $_GET['id'];
      $sql = "SELECT * FROM `usertable` WHERE `s.no` = $sid";
      
      $result = $conn->query($sql);
      if(!$result)
      {
          echo "Error : ".$sql."<br>".mysqli_error($conn);
      }
      $rows=mysqli_fetch_assoc($result);
      






?>

  <form method="POST" class="form">
    <table class="table   table-hover">
                <thead>
                  <tr>
                    <th scope="col">S.No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">E-mail Id</th>
                    <th scope="col">Current Balance</th>
    
                  </tr>
                </thead>
                <tbody>
    <tr>
                    <!--FETCHING DATA FROM EACH 
                        ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['s.no'];?></td>
                    <td><?php echo $rows['Name'];?></td>
                    <td><?php echo $rows['Email_id'];?></td>
                    <td><?php echo $rows['current_balance'];?></td>
                </tr>
        </tbody>
        </table>
        <label for="reciever"  > <b>To :</b></label> <br><br>
        <select name="to" class="form-select"  aria-label="reciever">
          <option selected>select the recipient</option>
          <option value="1"> Raghav Sha</option>
          <option value="2">Amisha Jain</option>
          <option value="3">shubham dus
    </option>
          <option value="4">Harshvardha</option>
          <option value="5">Sushil Bhar
    </option>
          <option value="6">keshav
    </option>
          <option value="7">pratham</option>
          <option value="8">jyoti</option>
          <option value="9">sushant</option>
          <option value="10">prince</option>
        </select>
        <br><br>
        <div class="mb-3">
      <label for="amount" class="form-label"><b>Amount : </b></label> <br><br>
      <input type="number" class="form-control" name="amount" placeholder="">
    </div>
    <input type="submit" name= "submit" class="btn btn-primary" value="transfer">
    </form>
    
</div>







      
          
    
    
    

    <footer class="bg-light text-center my-4" style="padding: 40px;">
        &copy The sparks Foundation 
        created By Ashish Jain
      </footer>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->


  </body>
</html>