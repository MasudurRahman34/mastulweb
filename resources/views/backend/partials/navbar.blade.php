  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="index.html"><img src=" {{asset('admin/images/Mastul_logo.png')}}" alt="logo"></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler d-none d-lg-block align-self-center mr-2" type="button" data-toggle="minimize">
        <span class="icon-list icons"></span>
      </button>
      {{-- <p class="page-name d-none d-lg-block">{{Auth::user()->name}}</p> --}}
      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item">
         
            <form  action="{{ route('logout') }}" method="POST">
               
              @csrf
              <button class="btn btn-danger" type="submit" >Logout</button>
          
        </form>
         
        
      </li>
      </ul>
        </div>
      </nav>