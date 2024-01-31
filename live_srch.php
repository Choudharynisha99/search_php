<?php 

include("coonect.php");

if (isset($_POST['input'])) {
  // code...
  $input = $_POST['input'];

  $query = mysqli_query($con , "SELECT * FROM `employ_table` WHERE name like '{$input}%' OR email like '{$input}%' OR salery like '{$input}%' OR city like '{$input}%' OR department like '{$input}%' LIMIT 3");

  if (mysqli_num_rows($query) > 0) {
    ?>


    <table class="table table-bordered table-striped mt-4">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Salary</th>
          <th>City</th>
          <th>Department</th>
        </tr>
      </thead>


      <tbody>
          <?php 

            while($row = mysqli_fetch_assoc($query)){
              $id = $row['id'];
              $name = $row['name'];
              $email = $row['email'];
              $salary = $row['salery'];
              $city = $row['city'];
              $department = $row['department'];
              ?>

              <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $salary; ?></td>
                <td><?php echo $city ?></td>
                <td><?php echo $department; ?></td>
              </tr>

              <?php
            }

           ?>
      </tbody>
    </table>

<?php
    // code...
  }else{

    echo "<h6 class='text-danger text-center mt-3'>No Data Found<h6>";

  }

}


 ?>