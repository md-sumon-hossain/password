<!-- header starts-->
<header>
    <div class="left_area">
        <h3>PASSWORD</h3>
    </div>

    {{-- calling accessor --}}
    <div class="right_area">
        {{ Auth::user()->name_email }}
    </div>
</header>
<!-- header ends-->