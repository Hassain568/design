<!DOCTYPE html> 
<html dir="rtl"> 
<head>
    <title>اخر التصاميم</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script>
    $(document).ready(function(){
        
    })
    </script>
   <!-- اثناء الضغط على تفاصيل -->
    <script> 
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


</head>
<body>

<div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>

 <div class="container">
  <h2>اخر التصاميم</h2>
  
   <button class="btn btn-primary" onclick="myFunction()" data-toggle="collapse" data-target="#myDIV">طقم رياضي</button>
   
   
   <div id="myDIV" class="collapse collapsed" > <!-- اسفله يكون مخفي الا اذا تم الضغط على اسم الطقم -->

<div class="row">

	<div class="col-xs-6" style="text-align: left">
	 <img src="images/T-shirt.jpg" height="150" width="150">
	</div>
	
  <div>
  
	<div class="col-xs-6">
 <a href="#" id="popover" data-toggle="popover" data-content=" الفالح">التفاصيل</a>
	 </div>	 
  </div>
  
</div>
 

 
 <div class="row">
	<div class="col-xs-6" style="text-align: left">
	  <img src="images/jeans_black.png" height="150" width="150">
	</div>
	
<div>
	<div class="col-xs-6">
   <a href="#" id="popover" data-toggle="popover" data-content=" الفالح">التفاصيل</a>
	</div>
</div>	
 </div>
 <div class="row">
	<div class="col-xs-6" style="text-align: left;padding-left:65px" >
		<img src="images/sho02.jpg" height="50" width="50">
	</div>
<div>	
	<div class="col-xs-6">	
 <a href="#" id="popover" data-toggle="popover" data-content=" ادي داس">التفاصيل</a>	</div>
</div>	
</div>

	</div>

</body>
</html>