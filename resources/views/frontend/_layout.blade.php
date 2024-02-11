<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BIOM</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css" />
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fw-bold sticky-top shadow-sm" id="mainNavbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">BIOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">মুল পাতা </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('courses') }}">কোর্স</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">ব্লগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('contact') }}">যোগাযোগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link registration-btn" href="{{ url('registration') }}">নিবন্ধন করুন</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    @if (@$pageName != 'blog' && @$pageName != 'contact')
    <header>
        <div class="container">
            <h1>Welcome to BIOM</h1>
            <p class="lead">
                ইসলামী জ্ঞান অর্জনের অনলাইনভিত্তিক অনন্য একটি শিক্ষা
                প্রতিষ্ঠান। এতে আরবীভাষা ও সাহিত্যসহ কুরআন-হাদীস-ফিকহ-আকীদা
                ইত্যাদি শরীয়তের বিভিন্ন বিষয়ে রয়েছে পেইড ও ফ্রি কোর্সসমূহ
            </p>
            <button class="btn btn-light banner-button">Read more</button>
        </div>
    </header>
    @endif
    @yield('content')
    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <p>&copy; 2024 Quran Academy</p>
        </div>
    </footer>
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.counterup@2.1.0/jquery.counterup.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".counter").counterUp({
                delay: 10,
                time: 2000,
            });
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                var navbar = $("#mainNavbar");
                if (scroll >= 100) {
                    navbar.addClass("sticky-nav");
                } else {
                    navbar.removeClass("sticky-nav");
                }
            });
        });
    </script>
    @yield('scripts')
</body>
</html>
