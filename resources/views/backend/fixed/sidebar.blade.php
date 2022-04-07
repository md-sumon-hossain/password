<div class="sidebar">
    <a href="#"><i class="fa-solid fa-house-chimney-window"></i><span> Home</span></a>
    <a href="#"><i class="fa-solid fa-coins"></i><span> Product</span></a>
    <a href="{{ route('backend.userlist') }}"><i class="fa-solid fa-user"></i><span> User</span></a>
    <a href="{{ route('employeelist') }}"><i class="fa-solid fa-user"></i><span> Employee</span></a>
    <a href="#"><i class="fa-solid fa-circle-info"></i><span> About</span></a>


    @if (Auth::user())
        <a href="{{route('logout') }}" class="logout_button"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
    @else
    <a href="{{ route('loginform') }}"><i class="fa-solid fa-right-to-bracket"></i><span> Login</span></a>
    @endif


    

</div>