<?php include "../layout/header.html" ?>

<div class="tambah">
<section class="menu-kiri">
<h3> Tambah buku</h3>

</section>
<section class="menu-kanan">
<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="title" class="form-control" id="exampleInputEmail1">
    <div id="title" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Author</label>
    <input type="author" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Stok</label>
    <input type="stok" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</section>

<?php include "../layout/footer.html" ?>