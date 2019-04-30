<!DOCTYPE html>
<html>
<body>

<form action="http://localhost/studentReg/index.php/student/updateStudent/<?=$student[0]['id']?>" method="post">
  <fieldset>
    <legend>Student information:</legend>
    Student name:<br>
    <input type="text" name="studentName" value="<?=$student[0]['student_name']?>" >
    <br>
    Student Cource:<br>
    <input type="text" name="studentCource" value="<?=$student[0]['student_cource']?>">
    <br>
      Student semester:<br>
    <input type="text" name="studentSemester" value="<?=$student[0]['student_semester']?>" >
    <br>
    <br>
      Student Address:<br>
    <textarea name="studentAddress"><?=$student[0]['student_address']?></textarea>
    <br><br>
    <input type="submit" value="Submit">
  </fieldset>
</form>

</body>

<!-- Mirrored from www.w3schools.com/html/tryit.asp?filename=tryhtml_form_legend by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Mar 2016 11:02:55 GMT -->
</html>