<!DOCTYPE html>
<html>
<head>
	<title>ادخال جديد</title>
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
			<li><a href="home.php">الرئيسية</a></li>
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
   
		<div class="container">
		<div class="left">
            
            <div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>  عدد ولادات الام قبل هذه الولادة </p></div>
		<table>
                <tr>
                   
                    <td>
                        <label  for="childname"><p>: اللذين ولدوا امواتا </p></label>
                        <input class="inputs" type="number" min="1" max="50" placeholder="اللذين ولدوا امواتا  " name="borndied">
                    </td>
                    <td>
                        <label  for="childname"><p>: اللذين ولدوا ثم ماتوا </p></label>
                        <input class="inputs" type="number" min="1" max="50" placeholder="اللذين ولدوا ثم ماتوا  " name="bornanddied">
            
                    </td>
                    <td>
                        <label  for="childname"><p>: الاحياء  </p></label>
                        <input class="inputs" type="number" min="1" max="50" placeholder="  الاحياء " name="alive">
            
                    </td>
                </tr>
                <tr>
                    <td>
                        <label  for="childname"><p>: مكان الولادة  </p></label>
                        <input class="inputs" type="text"  placeholder="  مكان الولادة " name="bornplace">
            
                    </td> <td>
                        <label  for="childname"><p>: وزن الطفل  </p></label>
                        <input class="inputs" type="number" min="1" max="50" placeholder="  وزن الطفل " name="weight">
            
                    </td> <td>
                        <label  for="childname"><p>: (اشهر) مدة الحمل  </p></label>
                        <input class="inputs" type="number" min="1" max="50" placeholder="  مدة الحمل " name="duration">
            
                    </td>
                </tr>
            </table>
            <div style=" border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>: معلومات السكن الدائم</p></div>
            <table>
                <tr>
                  
                    <td>
                        <label  for="childname"><p>: المحلة </p></label>
                        <input class="inputs" type="text" placeholder="المحلة  " name="adress">
                    </td>
                    <td>
                        <label  for="childname"><p>: القضاء </p></label>
                        <input class="inputs" type="text" placeholder="القضاء  " name="city">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:   المحافظة</p></label>
                        <input class="inputs" type="text" placeholder="   المحافظة" name="goverment">
            
                    </td>
                </tr>
            </table>
            <div style=" border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>:  معلومات  خاصة بدائرة الاحوال المدنية والشهود والمستشفى</p></div>
            <table>
                <tr>
                  
                    <td>
                        <label  for="childname"><p>: مدير المستشفى </p></label>
                        <input class="inputs" type="text" placeholder="مدير المستشفى  " name="hospitalmanager">
                    </td>
                    <td>
                        <label  for="childname"><p>: دائرة الاحوال  </p></label>
                        <input class="inputs" type="text" placeholder="دائرة الجنسية والاحوال  " name="daeera">
                    </td>
                    <td>
                        <label  for="childname"><p>: الصحيفة </p></label>
                        <input class="inputs" type="text" placeholder="الصحيفة  " name="sahefa">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:   السجل</p></label>
                        <input class="inputs" type="text" placeholder="   السجل" name="sejel">
            
                    </td>
                </tr>
                <tr>
                   
                    <td>
                        <label  for="childname"><p>:   اسم المولد</p></label>
                        <input class="inputs" type="text" placeholder="   اسم المولد" name="moled">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:   عنوانه</p></label>
                        <input class="inputs" type="text" placeholder="   عنوانه" name="telleradress">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:  صلته بالوليد </p></label>
                        <input class="inputs" type="text" placeholder="  صلته بالوليد" name="relashion">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:  المخبر</p></label>
                        <input class="inputs" type="text" placeholder=" المخبر" name="teller">
            
                    </td>
                </tr>
            </table>
		</div>
        
		<div class="right">
			<img style="width:50px" src="save.png" alt="">
            <br>
			<span>ادخال بيانات المولود</span>
			<br>
		    <br>
            <div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>معلومات اساسية ومعلومات الاسرة</p></div>

            <div style="overflow-x:auto;">

           
            <table>
                <tr>
                    <td>
                        <label  for="childname"><p>: محل الولادة </p></label>
                        <input class="inputs" type="text" placeholder="محل الولادة  " name="childname">
                    </td>
                    <td>
                        <label  for="childname"><p>:  الجنس</p></label>
                        <select class="inputs" name="gender" id="">
                            <option value="male">ذكر</option>
                            <option value="female">انثى</option>
                        </select>
                    </td>
                    <td>
                        <label  for="childname"><p>: إسم المولود</p></label>
                        <input class="inputs" type="text" placeholder="اسم المولود الرباعي" name="childname">
            
                    </td>
                </tr>
            </table>
            <br>
            <div style=" border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>: معلومات الاب</p></div>
            <table>
                <tr>
                    <td>
                        <label  for="childname"><p>:  الديانة </p></label>
                        <input class="inputs" type="text" placeholder="الديانة   " name="regiondad">
                    </td>
                    <td>
                        <label  for="childname"><p>:  الجنسية </p></label>
                        <input class="inputs" type="text" placeholder="الجنسية   " name="nationality">
                    </td>
                    <td>
                        <label  for="childname"><p>: المهنة </p></label>
                        <input class="inputs" type="text" placeholder="المهنة  " name="dadjob">
                    </td>
                    <td>
                        <label  for="childname"><p>: العمر </p></label>
                        <input class="inputs" type="text" placeholder="اسم المولود الرباعي" name="dadage">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:  اسم الاب</p></label>
                        <input class="inputs" type="text" placeholder="  اسم الاب" name="dadname">
            
                    </td>
                </tr>
            </table>
            <div style="border: 1px solid blue;text-align: right;padding: 2px 10px;border-radius: 3px;color: rgb(10, 0, 97);"><p>: معلومات الام</p></div>
            <table>
                <tr>
                    <td>
                        <label  for="childname"><p>:  الديانة </p></label>
                        <input class="inputs" type="text" placeholder="الديانة   " name="regionmom">
                    </td>
                    <td>
                        <label  for="childname"><p>:  الجنسية </p></label>
                        <input class="inputs" type="text" placeholder="الجنسية   " name="nationalitymom">
                    </td>
                    <td>
                        <label  for="childname"><p>: المهنة </p></label>
                        <input class="inputs" type="text" placeholder="المهنة  " name="momjob">
                    </td>
                    <td>
                        <label  for="childname"><p>: العمر </p></label>
                        <input class="inputs" type="text" placeholder="العمر  " name="momage">
            
                    </td>
                    <td>
                        <label  for="childname"><p>:  اسم الام</p></label>
                        <input class="inputs" type="text" placeholder="  اسم الام" name="momname">
            
                    </td>
                </tr>
            </table>


              <br>
              <input class="startBtn" name="submit" type="submit" value="ادخال لقاعدة البيانات">
              <input class="startBtn" name="print" type="submit" value="وادخال PDF\طباعة">

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
	</section>
</body>
</html>