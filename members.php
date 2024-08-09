  <body>

    <?php include "koneksi.php"; ?>
    <!-- Start Header -->
    <?php include "layout/header.html" ?>
    <!-- End Header -->

    <!-- Main Navbar -->

    <?php $sql = "SELECT * FROM members"; 
    
    
    ?>
  <div class="contrainer">
    <div class="headerdata">
      <h2> Data Members </h2>
      <a href="backend/members/tambah.php" class="btn btn-primary" role="button">Tambah Data</a>
    <div>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  
  <tbody class="table-group-divider">
  <?php
 
  $query = mysqli_query($mysqli, $sql);

  while ($row = mysqli_fetch_array($query))
{
  echo '
    <tr>
      <td>'.$row['code'].'</td>
      <td>'.$row['name'].'</td>
      <td><a href="#"><i data-feather="edit" ></i></a><a href="#"><i data-feather="trash"></a></i></td>
    </tr>';
 }
     ?>

  
  </tbody>
</table>
</div>
    <!-- End Navbar -->


    <!-- Start Footer -->
    <?php include "layout/footer.html" ?>
    <!-- End Footer -->
