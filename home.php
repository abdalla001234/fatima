<!DOCTYPE html>
<html>

<head>
	<title>الصفحة الرئيسية</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js.js"></script>
</head>
<body>
	<input type="checkbox" id="check">
	<nav>
		<div class="icon" style="  color: rgb(83, 83, 83);">قســم الحاسبـــات </div>
		<div class="search_box">
			<input type="search" placeholder="بحث هنا">
			<span class="fa fa-search"></span>
		</div>
		<ol>
			<li><a href="#">الرئيسية</a></li>
			<li><a href="#">طباعة</a></li>
			<li><a href="search.php">بحث</a></li>
			<li><a href="input.php">ادخال جديد</a></li>
			<li><a href="logout.php" style="border-radius: 5px; color: rgb(255, 255, 255);background-color: rgba(255, 0, 0, 0.315);">تسجيل الخروج
			<li><a href=""> Fatima : مستخدم </a></li>

		</a></li>
		</ol>
		<label for="check" class="bar">
			<span class="fa fa-bars" id="bars"></span>
			<span class="fa fa-times" id="times"></span>
		</label>
	</nav>
	<section style="position: absolute;top: 140px;">
   <div class="subject">
	<span>قاعدة بيانات </span><br>
	<span style="color:rgb(255, 136, 0)"> شهادات الميلاد العراقية </span>
	<p>يتيح هذا التطبيق للمسؤول صلاحية اضافة وتعديل والاطلاع على قاعدة البيانات والوصول الكلي لها <br>ويمكن تكوين تقرير كامل عن معلومات المولود ويعطي احصائيات بالوقت الحقيقي عن المدخلات </p>
     <br>
	 <br>
	 <input class="startBtn" type="button" value="البدأ" onclick="go(vv)">
	 <br>
	 <br>
    </div>
	<br>
		<div class="container" id="vv">
		<div class="left">
			<img style="width:50px" src="sta.png" alt="">
            <br>
			<span>احصائيات</span>
			<br>
			<p>هذا القسم يظهر عدد البيانات المدخله من بداية تشغيل هذا التطبيق<br>يمكنك معرفة العدد الكلي لشهادات الولادة المدخلة او يمكن تفعيل احد الخيارات ادناه <br>مثل فرز بواسطة المحافظة او تاريخ الميلاد  </p>		
		     <br>
			<div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>إختر احد عمليات الفرز الاتية</p></div>
		    <br>
			<div class="selectors"> 

				<form action="popup2.php" method="get">
				<span>فرز بتاريخ الميلاد</span>
              <input style="height: 40px;width: 100%;text-align: center; border: 1px solid blue;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"  type="date" name="dateselect" id="" >
			  <br><br>
			  <input class="startBtn" type="submit" value="فرز بتاريخ الميلاد">

			  <br>
				</form>
			

			  <br>
			  <span>فرز  بالمحافظة</span>
			  <form action="popup.php" method="get">
			  <select name="govselect" style="height: 40px;  width: 100%; border: 1px solid blue;text-align:center;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);" name="" id="">
				<option value="1">اربيل</option>
				<option value="1">بغداد</option>
				<option value="1">البصرة</option>
				<option value="1">كركوك</option>
				<option value="1">سليمانية</option>
				<option value="1">ديالى</option>
				<option value="1">كربلاء</option>
			</select>
			<br><br>
			  <input class="startBtn" type="submit" name="govsubmit" value="فرز ب المحافظة ">
			  </form>
			</div>
		</div>
		
		<div class="right">
			<img style="width:50px" src="sa.png" alt="">
            <br>
			<span>ادخال وطباعة</span>
			<br>
			<p>في هذا القسم يمكن للمستخدم الذهاب الى  صفحة ادخال لشهادة ولادة جديده <br> يتيح التطبيق امكانية طباعة مستند شهادة الولادة او حفظها على صيغة بي دي اف <br>  المسؤول فقط يمكنه الوصول الى قاعدة البانات والتعديل عليها  </p>		
		     <br>
			<div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>اختر الصفحة المطلوبة </p></div>
		    <br>
			<div style="text-align: center;" class="selectors">
			  <input class="startBtn" type="button" value="طباعة مستندة  ">
			  <span>  طباعة شهادة ميلاد</span>

			  <br>
			  <input class="startBtn" type="button" value="ادخال جديد ">
			  <span>ادخال شهادة ميلاد</span>

			</div>
		</div>
   
		
	</div>
	<br>
	<div  class="footer">
		<br>
		
		<center><p>جامعة كركوك <br>كلية علوم الحاسوب<br>قسم الشبكات </p></center>
	  
		<p>هذا التطبيق جزء من متطلبات مشروع التخرج للمرحلة الرابعة جميع الحقوق محفوظة  2022</p>

	</div>
	<br>
	<script>
		function go(pageElement) {    
    var positionX = 0,         
        positionY = 0;    

    while(pageElement != null){        
        positionX += pageElement.offsetLeft;        
        positionY += pageElement.offsetTop;        
        pageElement = pageElement.offsetParent;        
        window.scrollTo(positionX, positionY);    
    }
}

var pageElement = document.getElementById("vv");
scrollToElement(pageElement);
	</script>
	</section>
</body>
</html>