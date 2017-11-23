<?php 
include("conn.php");
?>
<!DOCTYPE html>
<html dir="rtl">

<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

    <style>
        /* Full-width input fields */

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */

        input[type=submit],
        input[type=reset] {
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        /* Extra styles for the cancel button */

        .cancelbtn {
            padding: 10px 10px;
            background-color: #f44336;
        }

        backbtn {
            padding: 10px 10px;
            background-color: green;
        }


        /* Float cancel and signup buttons and add an equal width */

        .cancelbtn,
        .signupbtn {
            float: left;
            width: 30%;
        }

        /* Add padding to container elements */

        .container {
            padding: 16px;
        }

        /* Clear floats */

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */

        @media screen and (width: 50px) {
            .cancelbtn,
            .signupbtn {
                width: 50%;
            }
        }

    </style>
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
        <h2>صفحة تسجيل الدخول</h2>




        <?php 
    if(@$_POST["Action"] == "addUser"){
$email = strtolower($_POST["email"]); 	        
$pass = crypt($_POST['pass'],	$email);

	$sql = "INSERT INTO users (name, email, pass, mobile)VALUES ('$_POST[name]', '$email', '$pass', $_POST[mobile])";

	if (mysqli_query($conn, $sql)) {
		    ?>
        <div class="alert alert-success">تم تسجيلك بنجاح.</div>
        <?php 

    } else {
        
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


    }else{
 ?>



        <form action="signup.php" method="post">
            <label><b>الاسم</b></label>
            <input type="hidden" name="Action" value="addUser">
            <input type="text" placeholder="ادخل اسمك" name="name" required>

            <label><b>الايميل</b></label>
            <input type="text" placeholder="ادخل البريد الالكتروني" name="email" required>

            <label><b>كلمة المرور</b></label>
            <input pattern=".{3,}" type="password" id="pass" title="ثلاث احرف" placeholder="ادخل كلمة المرور" name="pass" required>

            <label><b>اعد كتابة كلمة المرور</b></label>
            <input type="password" placeholder="اعادة كلمة المرور" name="pswRepeat" required>

            <label><b>الجوال</b></label>
            <input type="text" placeholder="رقم الجوال" name="mobile" required>


            <input type="checkbox" checked="checked"> تذكر


            <div class="clearfix">
                <input type="submit" class="signupbtn" value="انشاء الحساب">
                <input type="reset" class="cancelbtn" value="الغاء">

            </div>
        </form>

        <?php }    ?>



    </div>
</body>

</html>
