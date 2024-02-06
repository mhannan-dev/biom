<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran Academy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('frontend') }}/style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Quran Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">মুল পাতা </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ফ্রী কোর্স</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">্পেইড কোর্স</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ব্লগ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">পরিচিতি</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">সাদকাহ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-secondary text-center py-5">
        <div class="container">
            <h1>Welcome to Quran Academy</h1>
            <p class="lead">Learn, Recite, Understand</p>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="py-5">
        <div class="container">
            <h2>About Quran Academy</h2>
            <p>Quran Academy is dedicated to providing quality Quranic education...</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <p>&copy; 2024 Quran Academy</p>
        </div>
    </footer>
    <!-- Bootstrap JS Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
