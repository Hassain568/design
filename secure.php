<?php 
session_start();
$err = "";
$allow = 0;


if(@$_SESSION["status"] == "Logged"){
	if(@$_GET["do"] == "logOut"){session_destroy();}else{$allow=1;}
}else{
	if(@$_POST){
		
		
		
$user = strtolower($_POST["user"]);
$pass = crypt($_POST['pass'],	$user);

include("conn.php");
        
$result = mysqli_query($conn, "SELECT pass, id FROM users WHERE email='$user'") or die(mysqli_error($conn));		
$row = mysqli_fetch_assoc($result);

		
		
		if($row['pass'] == $pass){
			$_SESSION["status"] = "Logged";
            $_SESSION["us_id"] = $row['id'];
			$allow = 1;
		}else{$err = "<div style='color:red'>عفوا، اسم المستخدم و كلمة المرور خطأ</div>";}
	}
}
	if(!$allow){
?>
<!doctype html>
<html dir='rtl'>

<head>
    <meta charset='utf-8'>
    <title>تسجيل الدخول</title>
</head>

<body>
    <form method='post'>
        الاسم:<input name='user'><br> المرور:
        <input type='password' name='pass'>
        <input type='submit'>
    </form>
    <?= $err ?>
</body>

</html>
<?php
exit();
} 
?>
