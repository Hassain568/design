<?php 
require("secure.php"); 
include("conn.php");
?>
<!doctype html>
<html dir="rtl">

<head>
   <title>اضافة صور ملابس</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script>
        $(document).ready(function() {

        })

    </script>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <?php include("nav.php"); ?>
    </div>



    <div class="container">


        <h2 align="center">اضافة صور ملابس</h2>

   
   

          
          
        <?php 	
        if(@$_POST["Action"] == "addCloth"){
            
$target_dir = "images/uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);	
		
			 

			
			

			
			
			
			
				
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $picName = basename( $_FILES["file"]["name"]);          
            
            echo "The file $picName has been uploaded.";
            
            

            mysqli_query($conn, "INSERT INTO clothes (ty_id, details, pic, us_id, date) VALUES(
            '$_POST[label]',
            '$_POST[details]',
            '$picName',
            '$_SESSION[us_id]',
            NOW())");
            
            
            
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }            
            
}
        ?>










        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="Action" value="addCloth">
            <div class="row">
                <div class="col-sm-2">
                    <label class="custom-file">ادخل صورة</label>
                </div>
                <div class="col-sm-10">
                    <input type="file" name="file" id="file" class="custom-file-input">
                    <span class="custom-file-control"></span>

                </div>
            </div>
            <br>




            <div class="row">
                <div class="col-sm-2">
                    <label for="cl">نوع اللباس</label>
                </div>


                <div class="col-sm-10">


                    <select name="label" id="cl" class="btn btn-primary btn-sm">
                            
                            <option>اختر لباس</option>
                        
                        <?php
                        
                        $result = mysqli_query($conn,"SELECT * FROM types");
                        
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                        <option value="<?= $row['id']?>"><?= $row['label']?></option>
                        <?php
                        }
                        
                        
                        ?>
                        

                        </select>

                </div>
            </div>
            <br>




            <div class="row">
                <div class="bd-example" data-example-id="">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="fo">التفاصيل</label>
                        </div>
                    </div>




                    <div class="col-sm-10">

                        <textarea name="details"></textarea>


                    </div>
                </div>
            </div>

            <br>



            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-7">
                    <button type="submit" class="btn btn-primary">اضافة</button>
                    <button type="result" class="btn btn-danger">الغاء</button>
                </div>
            </div>

        </form>



    </div>
</body>

</html>
