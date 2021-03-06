<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Banking System</title>
  </head>
  <body>
    <?php
include('config.php');
$sql = "SELECT * FROM `transaction`";
$result = mysqli_query($conn,$sql);


?>

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

      <h2 class="text-center my-4">Transaction History</h2>
    <div class="container bg-light min-vh-100" style="border-radius: 50px; margin-top: 40px;padding: 30px; border-style: solid;padding: 20px">
           <table class="table   table-hover">
            <thead>
              <tr>
                
                <th scope="col">Sender</th>
                <th scope="col">recipient</th>
                <th scope="col">Amount</th>
                

              </tr>
            </thead>
            <tbody>
            <?php   // LOOP TILL END OF DATA 
                while($rows=mysqli_fetch_assoc($result))
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['sender']?></td>
                <td><?php echo $rows['recipient']?></td>
                <td><?php echo $rows['amount']?></td>
                <td></td>

            
            </tr>
            <?php
                }

                
     
             ?>
             
            </tbody>
          </table>
    
    </div>


      <footer class="bg-light text-center" style="padding: 40px;">
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