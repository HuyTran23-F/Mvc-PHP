<?php

use Mvc\Controllers\StudentController;
$stud = $student->get();
$id = $stud['id'];
if (isset($_POST['submit'])) {
   $object = new StudentController;
   $object->edit($id);
}
?>
<h1>Edit Sinh Vien</h1>
<form method='post' action='<?php $_SERVER['PHP_SELF'] ?>'>
    <div class="form-group">
        <label for="ten">Ten</label>
        <input type="text" class="form-control" id="ten" placeholder="Nhap ten" name="ten" value ="<?php if (isset($stud["ten"])) echo $stud["ten"];?>">
    </div>

    <div class="form-group">
        <label for="dateofbirth">Date of Birth</label>
        <input type="date" class="form-control" id="dateofbirth" placeholder="Nhap ngay thang nam" name="dateofbirth" value ="<?php if (isset($stud["dateofbirth"])) echo $stud["dateofbirth"];?>">
    </div>
  
    <div class="form-group">
        <label for="tuoi">Gioi Tinh</label>
        <input type="text" class="form-control" id="gioitinh" placeholder="Nhap gioi tinh" name="gioitinh" value ="<?php if (isset($stud["gioitinh"])) echo $stud["gioitinh"];?>">
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>