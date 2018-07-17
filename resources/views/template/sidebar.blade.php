<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="height: 60px">
            <div class="pull-left image">
                <img src="{{ asset('/img/photo_member/'. Auth::user()->photo) }}" style=" height:45px; width:auto important;"
                     class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search by name">
                <span class="input-group-btn">
                    <a href="">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
              </button>
                        </a>
            </span>
            </div>
        </form>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
                <a href="{{route('welcome')}}">
                    <i class="treeview glyphicon glyphicon-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Posts</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>List Post</a></li>
                    <li class=""><a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i>Tambah Post</a></li>
                </ul>
            </li>
            
                <li class="">
                    <a href="{{route('category.index')}}">
                        <i class="fa fa-spinner"></i> <span>Kategori</span>
                    </a>
                </li>

            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Acara</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('event.index')}}"><i class="fa fa-circle-o"></i>List Acara</a></li>
                    <li class=""><a href="{{route('event.create')}}"><i class="fa fa-circle-o"></i>Tambah Acara</a></li>
                </ul>
            </li>

          <!--   <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Member</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('member.index')}}"><i class="fa fa-circle-o"></i>List Member</a></li>
                    <li class=""><a href="{{route('member.create')}}"><i class="fa fa-circle-o"></i>Tambah Member</a></li>
                </ul>
            </li> -->

             <!-- <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Loker</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('post.index')}}"><i class="fa fa-circle-o"></i>List Loker</a></li>
                    <li class=""><a href="{{route('post.create')}}"><i class="fa fa-circle-o"></i>Tambah Loker</a></li>
                </ul>
            </li> -->

            <li class="treeview ">
                <a href="">
                    <i class="fa fa-users"></i> <span>Komunitas</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('community.index')}}"><i class="fa fa-circle-o"></i>List Komunitas</a></li>
                    <li class=""><a href="{{route('community.create')}}"><i class="fa fa-circle-o"></i>Tambah Komunitas</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>