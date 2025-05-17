<div class="container navbar">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand h2" href="{{route('dashboard')}}">PMS</a>
                <ul style="margin-left: 950px;" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('products') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('category') }}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('customer') }}">Customers</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('user.logout') }}" class="nav-link active" aria-current="page">
                            <button class="btn btn-primary" return="confirm('Are sure to logout')"
                                type="submit">Logout</button>

                        </form>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</div>
