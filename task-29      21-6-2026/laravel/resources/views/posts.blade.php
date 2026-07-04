<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <h2>My Blog</h2>
            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('posts.create') }}">Create Post</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </nav>

        </div>
    </header>

    <section class="posts-section">

        <div class="container">
            <div class="search-box">

                <form action="{{ route('posts.index') }}" method="GET">

                    <input type="text" name="search" placeholder="Search by post title..."
                        value="{{ request('search') }}">

                    <button type="submit">
                        🔍 Search
                    </button>

                </form>

            </div>

            <h1>Latest Posts</h1>

            <div class="posts-grid">
                @foreach ($posts as $post)
                    <div class="post-card">
                        @if ($post->is_featured)
                            <span class="featured">Featured</span>
                        @endif


                        <h3>{{ $post->title }}</h3>

                        <p>
                            {{ $post->content }}

                        </p>

                        <div class="author">
                            By {{ $post->user->name }}
                        </div>

                        <a href="{{ route('posts.show', $post) }}" class="btn">
                            Read More
                        </a>

                    </div>
                @endforeach

                {{--
                <div class="post-card">

                    <h3>Mastering Eloquent ORM</h3>

                    <p>
                        Learn how to retrieve and manage database
                        records using Eloquent.
                    </p>

                    <div class="author">
                        By Amir Dawod
                    </div>

                    <a href="single-post.html" class="btn">
                        Read More
                    </a>

                </div>

                <div class="post-card">

                    <span class="featured">Featured</span>

                    <h3>Laravel Validation</h3>

                    <p>
                        Validate user input easily with Laravel rules.
                    </p>

                    <div class="author">
                        By Omar Ali
                    </div>

                    <a href="single-post.html" class="btn">
                        Read More
                    </a>

                </div> --}}

            </div>

        </div>

    </section>

</body>

</html>
