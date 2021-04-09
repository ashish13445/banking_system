<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles.css">
    <title>Banking System</title>
  </head>
  <body>
    <?php
include('config.php');

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
      <div id = "home1" class="container-fluid  text-center vh-100 d-flex align-items-center justify-content-center" style="background-image: url('https://image.freepik.com/free-photo/macro-shot-financial-concept_53876-14671.jpg');background-repeat: no-repeat;background-size: cover;">
        <div class="row">
          
          <h2 class="text-dark">
        <b>WELCOME </b>
        <button class="btn btn btn-primary " style="transform: none;"><a class="text-light text-decoration-none" href= "#home">Get Started</a></button>
       </h2>
       
       

        </div>
        <div class="row">
          

        </div>
        
      </div>


      <!--about the bank -->
      <div id="about" class="container min-vh-100 bg-light" style="width: 50%; padding: 40px; border-radius: 50px;height: 30%;margin-top: 30px; border-style: solid; background-image: url('https://image.freepik.com/free-photo/male-fingers-hold-credit-card-terminal_151013-10871.jpg');background-repeat: no-repeat;background-position-y: bottom;background-position-x: center;">
        
        
        
        
        
        
        
        
        
        <h2 class="text-center">About Us</h2>
        <b><p>
          welcome to the sparks foundation bank . It was created for the sole purpose of training young developers.
          please feel free to leave remarks in the contact us section about the page.
          <p>To inspire, motivate and encourage students to learn, create and help build a better society.</p>

<p>Innovate
To teach new ways of thinking, to innovate and solve the problems on their own.</p>

<p>Integrate
To let the students integrate, and help each other, learn from each other and do well together.</p>

        </p>
</b>
      </div>
      

      <!--choose what to do in the banking system-->
      <div class="container min-vh-100" id="home" style="margin-top: 30px;">
        <div class="row">
            <div class="col col-sm">
              <a href="customers.php" style="text-decoration: none;"><button >
                  
                    <div class="container-sm" id="create">
                <img class="my-4" id="account" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxsIVGXUz77jSd-Zgau2ZqRpL_STVm4gbxWQ&usqp=CAU">
                <h4 class="my-4">All existing Customers</h4>
               </div> 
                </button>
               </a>
                
            </div>
            <div class="col col-sm">
              <a href="transfermoney.php" style="text-decoration: none;"><button>
                    <div class="container-sm" id="transfer">
                <img class="my-4" id="tr-money" src="https://cdn0.iconfinder.com/data/icons/mintab-outline-for-ios-2/30/transfer-shuffle-arrow-back-forward-512.png">
                <h4 class="my-4">Transfer Money</h4>
               </div> 
                </button></a>
                
            </div>
            <div class="col col-sm">
              <a href="transactionhistory.php" style="text-decoration: none;"><button>
                    <div class="container-sm" id="history">
                <img class="my-4" id="transaction" src="data:image/png;base64,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">
                <h4 class="my-4">Transaction History</h4>
               </div> 
                </button></a>
                
                
                
            </div>

        </div>
      </div>

      <div class="container vh-100 my-4" id="contact" >
        <h2 class="text-center"> Contact Us</h2>
        <form class="bg-light " style="padding: 30px; border-radius: 30px;">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="writethemessage" class="form-label">message</label>
            <input type="text" class="form-control " id="message">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


        <div class="container text-center">
        <div class="justify-content-center" >
            <a class="btn btn-social-icon btn-github"  href="https://github.com/ashish13445?tab=overview&from=2020-05-01&to=2020-05-31"><i class="fa fa-github fa-lg"></i> </a>
            <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/ashish-jain-05b3b31a5/"><i class="fa fa-linkedin fa-lg"></i> </a>
            <a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/ashish13445/"> <i class="fa fa-instagram fa-lg"></i> </a>
            
            <a class="btn btn-social-icon btn-envelope-o" href="mailto:jashish430.aj@gmail.com"> <i class="fa fa-envelope-o fa-lg"></i> </a>
        </div>
    </div>
      

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