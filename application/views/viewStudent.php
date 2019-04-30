<!DOCTYPE html>
<html>
<head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th	{
    background-color: black;
    color: white;
}
</style>
</head>
<body>
    <a href="http://localhost/studentReg/index.php/student/addStudent" style="float:right">Add Student</a>
    <table id="t01">
      <tr>
        <th>Studet Name</th>
        <th>Student Cource</th>		
        <th>Student semester</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
      <tr>
          <?php
            
            foreach($students as $student){
           ?>
          <tr>
            <td><?= $student['student_name']?></td>
            <td><?= $student['student_cource']?></td>		
            <td><?= $student['student_semester']?></td>
            <td><?= $student['student_address']?></td>
            <td><a href="http://localhost/studentReg/index.php/student/editStudent/<?= $student['id']?>">Edit</a> / <a href="http://localhost/studentReg/index.php/student/deleteStudent/<?= $student['id']?>">Delete</a></td>
          </tr>
          <?php
            }
          ?>
      </tr>
      
    </table>

</body>
</html>