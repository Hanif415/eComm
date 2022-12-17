@php
    use App\Http\Controllers\ProductController;
    $total = 0;
    if (Session::has('user')) {
        $total = ProductController::cartItem();
    }
@endphp

<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">E-Comm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
                <li class="nav-item">

                </li>
            </ul>
            <ul class="navbar-nav">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                </form>
                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">Cart({{ $total }})</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Session::has('user'))
                        {{ Session::get('user')->name }}
                        @else
                            Guest
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        @if (Session::has('user'))
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        @else
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                        @endif
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav>