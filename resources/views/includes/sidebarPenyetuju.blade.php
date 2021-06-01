<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
   <nav class="navbar navbar-expand-sm navbar-default">
       <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                <a href="{{ route('home') }}"><i class
                    ="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>

                <li class="menu-title">Pemesanan</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route('orderpenyetuju.index') }}"> <i class="menu-icon fa fa-list"></i>Daftar Pemesanan</a>
                    </li>               
                    <li class="">
                        <a href="{{ route('orderpenyetuju.create') }}"> <i class="menu-icon fa fa-plus"></i>Tambah Pemesanan</a>
                    </li>               
                </li>
            </ul>
       </div><!-- /.navbar-collapse -->
   </nav>
</aside>
<!-- /#left-panel -->