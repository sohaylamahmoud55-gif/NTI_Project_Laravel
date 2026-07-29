<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natural Glow</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- font famaily -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white py-3 shadow-sm fixed-top">

        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">
                <i class="fa-solid fa-leaf"></i>
                Natural Glow
            </a>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skin">Skin Care</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hair">Hair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#body">Bath&Body</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#perfume">Perfume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <div class="search-box">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </form>
                </div>
                <div class="icons">
                    
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-cart-arrow-down"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="header">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>
                        Nourish.<br>
                        <span>Glow.</span><br>
                        Repeat.
                    </h1>
                    <p>Gentle skincare inspired by nature,crafted <br> for healthy, radiant skin.</p>
                    <p>Discover premium products for skin, hair, body & fragrance</p>
                    <button class="btn btn-success">Shop Now</button>
                    <div class="features mt-5">
                        <div>
                            <i class="fa-solid fa-leaf"></i>
                            <p>Clean Ingredients</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-heart"></i>
                            <p>Cruelty Free</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-face-smile"></i>
                            <p>For All Skin Types</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Skin Care Products -->
    @foreach($categories as $category)

    <section class="products py-5">

        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>{{ $category->name }}</h2>
                <a href="#" class="btn btn-outline-dark"> View All</a>
            </div>
            <div class="row g-4">

                <!-- cards -->
                @foreach($category->products as $product)

                <div class="col-lg-3 col-md-6">
                    <div class="card product-card">
                        <img src="{{ asset($product->image) }}" class="card-img-top">
                        <div class="card-body">
                            <h5>{{ $product->name }}</h5>
                            <p>{{ $product->description }}</p>
                            <div class="stars">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fa-solid fa-star"></i>
                                    @endfor
                                    ({{ $product->reviews }})
                            </div>

                            <h5 class="price">
                                EGP {{ $product->price }}
                            </h5>

                            <button class="btn btn-success w-100">
                                Add to Cart
                            </button>

                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    @endforeach

    <!-- footer -->
    <footer class="footer">
        <div class="container">

            <div class="footer-content">

                <!-- Logo -->
                <div class="footer-col">
                    <h2>Natural Glow<i class="fa-solid fa-leaf"></i></h2>
                    <p>Inspired by nature.<br>Made for your skin.</p>

                    <div class="social-icons">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                </div>

                <!-- Shop -->
                <div class="footer-col">
                    <!-- <h3>Shop</h3> -->
                    <ul>
                        <h3>Shop</h3>
                        <li><a href="#">All Products</a></li>
                        <li><a href="#">Cleansers</a></li>
                        <li><a href="#">Serums</a></li>
                        <li><a href="#">Moisturizers</a></li>
                        <li><a href="#">Sunscreen</a></li>
                        <li><a href="#">Gift Sets</a></li>
                    </ul>
                </div>

                <!-- Company -->
                <div class="footer-col">
                    <!-- <h3>Company</h3> -->
                    <ul>
                        <h3>Company</h3>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Ingredients</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Help -->
                <div class="footer-col">
                    <!-- <h3>Help</h3> -->
                    <ul>
                        <h3>Help</h3>
                        <li><a href="#">Shipping & Delivery</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-col">
                    <h3>Join Our Community</h3>
                    <p>Sign up for skincare tips, exclusive offers, and more.</p>

                    <form>
                        <input type="email" placeholder="Enter your email">
                        <button>Subscribe</button>
                    </form>
                </div>

            </div>

            <div class="footer-bottom">
                <p> &copy; 2026 Natural Glow. All rights reserved.</p>
            </div>

        </div>
    </footer>

</body>

</html>