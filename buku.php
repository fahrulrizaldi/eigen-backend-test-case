<body>

<?php include "koneksi.php"; ?>
<!-- Start Header -->
<?php include "layout/header.html" ?>
<!-- End Header -->

<!-- Main Navbar -->

<?php $sql = "SELECT * FROM books"; 


?>
<div class="contrainer">
<div class="headerdata">
  <h2> Data Buku </h2>
  <a href="backend/buku/tambah.php" class="btn btn-primary" role="button">Tambah Data</a>
<div>

<table class="table">
<thead>
<tr>
  <th scope="col">Code</th>
  <th scope="col">title</th>
  <th scope="col">Author</th>
  <th scope="col">Stok</th>
  <th scope="col">Action</th>
</tr>
</thead>

<tbody class="table-group-divider">
<?php

$query = mysqli_query($mysqli, $sql);

while ($row = mysqli_fetch_array($query))
{
  if ($row['stok'] != 0 ){
    echo '
    <tr>
      <td>'.$row['code'].'</td>
      <td>'.$row['title'].'</td>
      <td>'.$row['author'].'</td>
      <td>'.$row['stok'].'</td>
     <td><a href="pinjam.php"><i data-feather="plus-circle" ></i></a><a href="#"><i data-feather="trash"></a></i></td>
    </tr>';
  }else {

  }

}
 ?>


</tbody>
</table>
</div>
<!-- End Navbar -->


<!-- Start Footer -->
<?php include "layout/footer.html" ?>
<!-- End Footer -->
