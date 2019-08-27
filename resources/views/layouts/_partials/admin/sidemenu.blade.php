<!-- Sidebar user panel (optional) -->
<div class="user-panel">
    <div class="pull-left image">
        <img src=" {{ asset('images/user-m-default.png') }} " class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Digvijay Suryawanshi</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>

<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search..." autocomplete="off">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
    </div>
</form>
<!-- /.search form -->
<!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Manage</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active">
        <router-link to="/dashboard">
            <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
        </router-link>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Users Management</span>
            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">List</a></li>
            <li><a href="#">Create</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-th-large" aria-hidden="true"></i>
            <span>Campaigns Management</span>
            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            <li><router-link to="/campaigns">List</router-link></li>
            <li><a href="#">Update</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span>Multilevel</span>
            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="#">List</a></li>
            <li><a href="#">Link in level 2</a></li>
        </ul>
    </li>
</ul>
<!-- /.sidebar-menu -->
