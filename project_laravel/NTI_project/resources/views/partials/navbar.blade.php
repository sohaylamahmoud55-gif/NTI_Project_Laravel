<nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="{{ url('/home') }}">
            <i class="fa-solid fa-leaf"></i>
            Natural Glow
        </a>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#skin">Skin Care</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#hair">Hair</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#body">Bath & Body</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}#perfume">Perfume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <!-- search  -->
            <div class="search-box">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </div>

            <div class="icons">
                <i class="fa-solid fa-user"></i>
                <!-- <i class="fa-solid fa-cart-arrow-down"></i> -->
            <div>
            <a href="{{ route('cart') }}">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
    </div>
</nav>