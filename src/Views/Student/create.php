<?php
use MVC\Controllers\StudentController;

if (isset($_POST['submit'])) {
    $object = new StudentController;
    $object->create();
}
?>
<h1>Create Student</h1>
<form method='post' action='<?php $_SERVER['PHP_SELF'] ?>'>
    <div class="form-group">
        <label for="ten">Name</label>
        <input type="text" class="form-control" id="ten" placeholder="Nhap ten" name="ten">
    </div>

    <div class="form-group">
        <label for="title">Date of birth</label>
        <input type="date" class="form-control" id="title" placeholder="Nhap ngay sinh" name="dateofbirth">
    </div>

    <div class="form-group">
        <label for="description">Giới tính</label>
        <input type="text" class="form-control" id="description" placeholder="Nhap gioi tinh" name="gioitinh">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>