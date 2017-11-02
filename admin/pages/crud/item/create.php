<section class="content-header">
  <h1>
  Category
  <small>Create</small>
  </h1>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-10">
      <!-- Horizontal Form -->
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">New Category</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" class="form-horizontal" role="form" action="pages/crud/item/machine.php?action=add" >
          <div class="box-body">
            <div class="form-group">
              <label for="category" class="col-sm-2 control-label">Category</label>
              <div class="col-sm-10">
                <select class="form-control select2 select2-hidden-accessible" name="category">
                  <?php
                  $res=$eng->select("category");
                  while ($category=$res->fetch()) {
                  echo "<option value='$category[id_category]'>
                    $category[name]
                  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="id_unit" class="col-sm-2 control-label">Unit</label>
              <div class="col-md-10">
                <select class="form-control select2 select2-hidden-accessible" name="id_unit">
                  <?php
                  $res=$eng->select("unit");
                  while ($category=$res->fetch()) {
                  echo "<option value='$category[id_unit]'>
                    $category[name]
                  </option>";
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="barcode" class="col-sm-2 control-label">Barcode</label>
              <div class="col-md-10">
                <input type="text" name="barcode" class="form-control" id="name" placeholder="Barcode" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="hpp" class="col-sm-2 control-label">Harga Pokok</label>
              <div class="col-md-10">
                <input type="number" name="hpp" placeholder="Harga Pokok" id="hpp" class="form-control" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="hju" class="col-sm-2 control-label">Harga Jual</label>
              <div class="col-md-10">
                <input type="number" name="hju" class="form-control" id="hju" placeholder="Harga Jual" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="stock" class="col-sm-2 control-label">Stock</label>
              <div class="col-md-10">
                <input type="number" name="stock" class="form-control" id="stock" placeholder="Stock" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="kadaluarsa" class="col-sm-2 control-label">Kadaluarsa</label>
              <div class="col-md-10">
                <input type="date" name="kadaluarsa" class="form-control" id="kadaluarsa" placeholder="Kadaluarsa" required/>
              </div>
            </div>
            <div class="form-group">
              <label for="pic" class="col-sm-2 control-label">Picture</label>
              <div class="col-md-10">
                <img id="uploadPreview" style="width: 150px; height: 150px;" />
                <input id="uploadImage" type="file" name="pic" onchange="PreviewImage();" />
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Acept!</button>
          </div>
          <!-- /.box-footer -->
        </form>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>