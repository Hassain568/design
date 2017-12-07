<!DOCTYPE html>
<html dir="rtl">

<head>
    <title>حول</title>
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

    <div class="topnav" id="myTopnav"><?php include("nav.php"); ?></div>
    <div class="container">
    <br>
    <br>
    <div class="media">
    <div class="media-body">
      <h4 class="media-heading">تم إنشاء هذا التطبيق بواسطة طلاب المشروع في الكلية التقنية ببريدة 1439هـ</h4>
      <p>هذا البرنامج يقوم بمساعدتك على تنسيق ملابسك .</p>
      <br>
      <p>تم بناء هذا التطبيق تحت إشراف الاستاذ: محمد العبودي وطلاب المشروع :</p>
      
      <ul>
      
<script>
	//هذه العملية ل الترتيب العشوائي للاسماء
names = new Array("محمد الجويعد","فيصل العنزي","محمد الحربي","رواف الرواف")
		 
array = names
  var arrLngth = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== arrLngth) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * arrLngth);
    arrLngth -= 1;

    // And swap it with the current element.
    temporaryValue = array[arrLngth];
    array[arrLngth] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }
	  
for(i=0;i<4;i++){
  document.write("<li>"+ array[i] +"</li>")

}
</script>
      
   
   </ul>
    </div>
    <div class="media-right">
      <img src="images/tvtc.png" class="media-object" style="width:200px">
    </div>
  </div>
</div>
 </div>
  <hr>
	

</body>

</html>
