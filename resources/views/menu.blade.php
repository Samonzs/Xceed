
<nav>
    <div class="logo">
        <h4>Backend Management</h4>
    </div>

    <ul class="menu">
        @foreach ($menu as $v)
            <li class="menu-item  ">
                <a href="{{ $v->url }}" class="menu-link ">
                    <span class="title">{{ $v->title }}</span>
                </a>
            </li>
        @endforeach


        <li><a href="action/loginOut.php" >Log Out</a></li>
    </ul>
</nav>
