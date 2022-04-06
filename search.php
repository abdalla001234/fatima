<!DOCTYPE html>
<html>
<head>
	<title> البحث والتعديل</title>
	<link rel="stylesheet" type="text/css" href="search.css">
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
			<li><a href="home.php">الرئيسية</a></li>
			<li><a href="#">طباعة</a></li>
			<li><a href="search.php">بحث</a></li>
			<li><a href="input.php">ادخال جديد</a></li>
			<li><a href="#" style="border-radius: 5px; color: rgb(255, 255, 255);background-color: rgba(255, 0, 0, 0.315);">تسجيل الخروج
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
	<span> بحث </span><br>
	<span style="color:rgb(255, 136, 0)">   لنقم بعملية بحث </span>
	<p>قم بإدخال اسم المولود ليتم البحث عنه في قاعدة البيانات <br>اذا وجدت اوليات ومعلومات عن المولود المدخل تستطيع التعديل ومحو الشهادة وغيرها </p>
     <br>
	 <br>
	 <input class="startBtn" type="button" value="البدأ" onclick="go(vv)">
	 <br>
	 <br>
    </div>
	<br>
		
	<div class="container" id="vv">
	
		<div class="rightsearch">
        <form action="searcha.php" method="get">
			<img style="width:50px" src="search.png" alt="">
            <br>
            <span>البحث</span>
            <div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p> قم باختيار شهادة الميلاد من خلال اسم المولود </p></div>
            <label for="searchbox"> <p>: ادخل اسم المولود</p> </label>
            <input type="text" class="inputs" name="searchbox" placeholder="اسم المولود">
            <input class="startBtn" type="submit" name="searchsubmit" id="" value="ابحث" >
        </form>
		</div>
        <br>
        
   
		
	</div>

	<br>
    <div class="rightsearch">

       <table>
           <tr>
               <td>: اسم المولد</td>
               <td>: الجنس</td>
               <td>: القظاء</td>
               <td>: الناحية</td>
               <td>: محل الولادة</td>
               <td>: اسم الاب</td>
               <td>: العمر</td>
               <td>: المهنة</td>
               <td>: الجنسية</td>
               <td>: الديانة</td> 
               <td>: اسم الام</td>
               <td>: العمر</td>
               <td>: المهنة</td>
               <td>: الجنسية</td>
               <td>: الديانة</td>
               <td>: ولادات احياء</td>
               <td>: ولدوا ثم ماتو</td>
               <td>: ولدو امواتا</td>
               <td>: مدة الحمل</td>
               <td>: وزن الطفل</td>
               <td>: مكان الوالدة</td>
               <td>:  السكن الدائم</td>
               <td>: القضاء</td>
               <td>: السجل</td>
               <td>: الصحيفة</td>
               <td>: دائرة الاحوال</td>
               <td>: المحافظة</td>
               <td>: المخبر</td>
               <td>: صلته </td>
               <td>: عنوانه</td>
               <td>: مدير المشفى</td>
           </tr>
         
       </table>
       <br>
     
    </div>
    <br>
    <center><input class="startBtn" type="submit" name="searchsubmit" id="" value="تعديل" >            <input class="startBtn" type="submit" name="searchsubmit" id="" value="حذف" >
        <input class="startBtn" type="submit" name="searchsubmit" id="" value="طباعة" >

       </center>
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