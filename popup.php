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
			<li><a href="">مستخدم : Fatima</a></li>

		</a></li>
		</ol>
		<label for="check" class="bar">
			<span class="fa fa-bars" id="bars"></span>
			<span class="fa fa-times" id="times"></span>
		</label>
	</nav>
	<section style="position: absolute;top: 140px;">
   <div class="subject">
	   	<span> محافظة 
			   <?php $search = $_GET['govselect'];
			   if ( $search == 1 ){
				$search = "اربيل";
			   } echo $search ?> 
			</span><br>
	<span style="color:rgb(255, 136, 0)">   المواليد حسب المحافظة </span>
     <br>
	 
	 <div class="rightsearch">

<table>
	<tr style="background-color:lightgrey">
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
	<?php include_once ("db_conn.php");?>
         <?php
		     
				$search = $_GET['govselect'];
				if ( $search == 1 ){
				 $search = "اربيل";
			 
			
	
               $sql = "SELECT childname,dateofbirth,birthplace FROM  names WHERE childname like '%$search%'  ";
               $exe = mysqli_query($conn,$sql) or die ("Query Failed") ;
               if(mysqli_num_rows($exe) > 0){
                   while($row = mysqli_fetch_assoc($exe)){
                    $childname =  $row['childname'];
                    $dateofbirth =  $row['dateofbirth'];
                    $birthplace =  $row['birthplace'];
                  
                    
                     echo "   
                     <tr>
                     <td><input type='text' value='$childname'</td>
                     <td><input type='text' value='$dateofbirth'</td>
                     <td><input type='text' value='$birthplace'</td>
                     </tr>  
                      ";
                   }
               }
         ?>
</table>
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
<?php }?>