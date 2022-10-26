<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Notifications
            </a>
            <ul class="dropdown-menu"  >
                @foreach (Auth::user()->unreadNotifications as $notification)
                    <li><a class="dropdown-item" href="{{ $notification->data['action_url'] }}">{{ $notification->data['message'] }}</a></li>
                @endforeach
            </ul>
        </li>
    </ul>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-info px-3" href="#" onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out</button>
            </form>

        </div>
    </div>
</header>