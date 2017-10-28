<!-- sidebar: style can be found in sidebar.less -->

  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="?page=profile"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treevie">
      <a href="index.php">
        <i class="fa fa-home"></i> <span>Home</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-tags"></i>
        <span>Category</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="treeview"><a href=""><i class="fa fa-cubes"></i>
          <span>
            Items
          </span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
          <ul class="treeview-menu">
            <?php
              $res=$eng->select("category");
              while ($data=$res->fetch()) {
            ?>
            <li><a href="?page=crud/item/index&category=<?=$data['name']?>"><i class="fa fa-circle-o"></i>  <?=$data['name']?></a></li>
            <?php
              }
            ?>
            <li><a href="?page=crud/item/create"><i class="fa fa-plus"></i><span> Add New Item</span></a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li class="treevie">
      <a href="?page=transfer">
        <i class="fa fa-credit-card"></i> <span>Transfer</span>
      </a>
    </li>
    <li class="treevie">
      <a href="?page=user">
        <i class="fa fa-user"></i> <span>User</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-share"></i> <span>Multilevel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-circle-o"></i> Level One
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Level Two
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
      </ul>
    </li>
  </ul>
<!-- /.sidebar -->