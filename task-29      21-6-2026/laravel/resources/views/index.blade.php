<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="container">
        <h2>My Blog</h2>

        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('posts.create')}}">Create Post</a>
            <a href="{{route('dashboard')}}">Dashboard</a>
        </nav>
    </div>
</header>

<section class="hero">
    <div class="container">
        <h1>Welcome To My Blog</h1>
        <p>Read the latest articles from our authors.</p>
    </div>
</section>

<div class="container">

    <h2 class="section-title">⭐ Featured Posts</h2>

    <div class="cards">

        <div class="card">
            <span class="badge">Featured</span>
            <h3>Laravel Relationships</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="info">
                <span>Ahmed</span>
                <span>20 Jul 2026</span>
            </div>

            <button>Read More</button>
        </div>

        <div class="card">
            <span class="badge">Featured</span>
            <h3>Mastering PHP</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="info">
                <span>Ali</span>
                <span>18 Jul 2026</span>
            </div>

            <button>Read More</button>
        </div>

    </div>

    <h2 class="section-title">Latest Posts</h2>

    <div class="cards">

        <div class="card">
            <h3>Understanding MVC</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="info">
                <span>Mohamed</span>
                <span>15 Jul 2026</span>
            </div>

            <button>Read More</button>
        </div>

        <div class="card">
            <h3>Laravel Middleware</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="info">
                <span>Omar</span>
                <span>12 Jul 2026</span>
            </div>

            <button>Read More</button>
        </div>

        <div class="card">
            <h3>Query Scopes</h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="info">
                <span>Amir</span>
                <span>10 Jul 2026</span>
            </div>

            <button>Read More</button>
        </div>

    </div>

</div>

</body>
</html>
