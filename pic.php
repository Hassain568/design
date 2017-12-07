<?php 
require("secure.php"); 
include("conn.php");
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>صوري</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script>
        $(document).ready(function() {

        })

    </script>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <?php include("nav.php"); ?>
    </div>


    <div style="padding-right:16px">


        <!-- Page Content -->
        <div class="container">
            <h1 class="my-4 text-center">مجموعة من الصور قمت برفعها على الموقع</h1>



            <div class="row text-center text-lg-left" style="margin-top: 70px">



                <?php 
          
          
                     
                        
                        $result = mysqli_query($conn,"SELECT * FROM clothes");
                        
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" style="height:200px" src="images/uploads/<?= $row["pic"] ?>" alt="">
                    </a>
                </div>

                <?php } ?>

            </div>

        </div>
        <!-- /.container -->

        <!-- Footer الحقوق
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      -->
        <!-- /.container -->
        </footer>
</body>

</html>
