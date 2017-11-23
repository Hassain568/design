<!DOCTYPE html>
<html dir="rtl">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">

    <script src="js/script.js"></script>
    <style>
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 10px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }


        .backbtn {
            width: auto;
            padding: 20px 20px;
            background-color: blue;
        }



        .imgcontainer {
            text-align: center;
            margin: 24px 0 24px 0;
        }



        .container {
            padding: 20px;
        }

        span.psw {
            float: right;
            padding-top: 20px;
        }

        /* Change styles for span and cancel button on extra small screens */

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
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

    <h2>تسجيل الدخول</h2>
    <a href="#" data-toggle="modal" data-target="#login-modal">Login</a>



    <form action="add.php" method="post">

        <div class="container">
            <label><b>اسم المستخدم</b></label>
            <input type="text" placeholder="ادخل الاسم" name="uname" required>

            <label><b>كلمة المرور</b></label>
            <input type="password" placeholder="ادخل كلمة المرور" name="psw" required>
            <button type="submit">تسجيل</button>

            <input type="checkbox" checked="checked"> تذكرني
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">الغاء </button>



            </div>


        </div>
        <span class="psw"> <a href="file:///F:/rwaf/sgin.html">إنشاء حساب?</a></span>
        <br>

        <span class="psw"> <a href="#">نسيت كلمة المرور?</a></span>
    </form>

</body>

</html>
