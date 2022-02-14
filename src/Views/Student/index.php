<h1>Student</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/Student/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($student as $stud)
        {
            $stud = $stud->get();
            echo '<tr>';
            echo "<td>" . $stud['id'] . "</td>";
            echo "<td>" . $stud['ten'] . "</td>";
            echo "<td>" . $stud['dateofbirth'] . "</td>";

            if($stud['gioitinh'] == "1"){
                $stud['gioitinh'] = "Nam";
            }else{
                $stud['gioitinh'] = "Nữ";
            }
            echo "<td>" . $stud['gioitinh'] . "</td>";

            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc/Student/edit/" . $stud["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvc/Student/delete/" . $stud["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>