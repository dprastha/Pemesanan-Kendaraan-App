<!-- Header-->
<header id="header" class="header">
   <div class="top-left">
       <div class="navbar-header">
           <a class="navbar-brand" href="#"><b>Admin Page</b></a>
           <a class="navbar-brand hidden" href="#"><b>Admin Page</b></a>
           <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
       </div>
   </div>
   <div class="top-right">
       <div class="header-menu">

           <div class="user-area dropdown float-right">
               <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <img class="user-avatar rounded-circle" src="{{ asset('images/admin.jpg')}}" alt="User Avatar">
               </a>

               <div class="user-menu dropdown-menu">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                        <button type="submit">Logout</button>
                    </form>
               </div>
           </div>

       </div>
   </div>
</header>
<!-- /#header -->