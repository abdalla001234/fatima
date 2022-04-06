<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>طباعة</title>
    <link rel="stylesheet" href="printcss.css">
</head>
<body>
    
    <?php
    //------------------------------------------------------------------------------------------php select
    include_once 'db_conn.php';
    $sql = "SELECT * FROM names where childname='عبدالله اسعد خالد'";
    // execute query and store result
    $result = mysqli_query($conn, $sql);
    
    // print data until no more rows in result
    while($row = mysqli_fetch_assoc($result)) {
    
    $childname= $row['childname'] ;
    $dateofbirth = $row['dateofbirth'] ;
          
    }
    mysqli_close($conn);
    //-------------------------------------------------------------------------------------------php select
    ?>
       



    <div class="print"> 

     <table class="htable">
         <tr>
             <td class="htd">
                <span>: التاريخ</span><br>
                <span>: التسلسل</span>
             </td>
             <td class="htd">
                <span class="hcenter">شهادة ميلاد</span>
                <span class="shcenter">وزارة الصحة العراقية</span>
             </td>
             <td class="htd">
                <span>شهادة الميلاد العراقية</span>
                 <br>
                 <span>قسم الاحصاء الصحي</span>
             </td>
         </tr>
     </table>
    <br>
     
    
    <table class="table">
        
        <tr>
           
            <td class="td"><span>: الناحية</span></td>
            <td class="td"><span>: القضاء </span></td>
            <td class="td"><span> : محل الولادة (المحافظة) </span></td>
            <td class="td"><span>: الجنس</span><span>........</span><span><?php echo $dateofbirth ;?></span></td>
            <td colspan="2" class="td"><span> اسمه : </span><span>........</span><span><?php echo $childname ;?></span></td>
            <td class="td">: الوليد</td>
            <td rowspan="10" class="td"></td>

    
        </tr>
     
        <tr>
            <td class="td"> الديانة :</td>
            <td class="td"> الجنسية :</td>
            <td class="td"> المهنة :</td>
            <td  class="td">العمر :</td>
            <td colspan="2" class="td">الاسم الثلاثي : </td>
            <td class="td">: الاب</td>

    
        </tr>
        <tr>
            <td class="td"> الديانة :</td>
            <td class="td"> الجنسية :</td>
            <td class="td"> المهنة :</td>
            <td  class="td">العمر :</td>
            <td colspan="2" class="td">الاسم الثلاثي : </td>
            <td class="td">: الام</td>

    
        </tr>
        <tr>
          
            <td colspan="2"  class="td"><span>:  اللذين ولدوا امواتا  </span></td>
            <td colspan="2" class="td"><span>:   اللذين ولدو ثم ماتوا </span></td>
            <td colspan="2" class="td"><span>:  الاحياء  </span></td>
            <td  class="td"><span>عدد ولادات الام قبل هذه الولادة </span></td>    
        </tr>
        <tr>
            
            <td colspan="2" class="td"><span>: مكان الولادة</span></td>
            <td colspan="2" class="td"><span> : وزن الطفل</span></td>
            <td colspan="3" class="td"><span>: مدة الحمل </span></td>
    
        </tr>
        <tr>
           
            <td colspan="2" class="td"><span>: المحلة</span></td>
            <td colspan="2" class="td"><span> : القضاء</span></td>
            <td colspan="2" class="td"><span>: المحافظة</span></td>
            <td class="td"><span>: العنوان الدائم لعائلة المولود</span></td>
    
        </tr>
        <tr>
            
            
            <td class="td"><span>: المحافظة</span></td>
            <td colspan="3" class="td"><span> : دائرة الجنسية والاحوال </span></td>
            <td class="td"><span>: الصحيفة</span></td>
            <td class="td"><span>: السجل</span></td>
            <td class="td">معلومات خاصة بدائرة الاحوال المدنية </td>


        </tr>
        <tr>
         
            <td class="td">: عنوانه</td>
            <td class="td">: صلته بالوليد </td>
            <td colspan="2" class="td">: المخبر</td>
    
        </tr>
        <tr>
            <td colspan="4" class="td">: اشهد ان هذا الطفل ولد حيا في التاريخ المبين اعلاه<br><br><span>اسم المولد</span><br><br><span>التوقيع والختم </span></td>
        </tr>
        <tr>
          
            
            <td class="td"></td>
            <td colspan="3" class="td"><span>مدير المستشفى او من ينوب عنه </span><br><span> : الاسم والتوقيع</span> </td>
    
        </tr>
      
       

    </table>
</div>

</body>
</html>