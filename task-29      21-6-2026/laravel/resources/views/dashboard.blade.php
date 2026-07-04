<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>

<body>

    <header>

        <div class="container">

            <h2>Dashboard</h2>

            <nav>

                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('posts.index') }}">Posts</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>

            </nav>

        </div>

    </header>

    <div class="container">

        <h1>Project Statistics</h1>

        <div class="cards">

            <div class="card blue">
                <h3>Total Posts</h3>
                <h2>{{ $totalPosts }}</h2>
            </div>

            <div class="card orange">
                <h3>Total Comments</h3>
                <h2>{{ $totalComments }}</h2>
            </div>

            <div class="card red">
                <h3>Featured Posts</h3>
                <h2>{{ $totalFeaturedPosts }}</h2>
            </div>

        </div>

        <div class="table-box">

            <h2>Latest Posts</h2>

            <table>

                <thead>

                    <tr>

                        <th>Title</th>
                        <th>Author</th>
                        <th>Categories</th>
                        <th>Featured</th>

                    </tr>

                </thead>

                <tbody>
                    @foreach ($latestPosts as $latestPost)
                        <tr>

                            <td>{{ $latestPost->title }}</td>
                            <td>{{ $latestPost->user->name }}</td>
                            <td>{{ $latestPost->user->name }}</td>
                            <td>{{ $latestPost->is_featured ? '⭐' : '-' }}</td>

                        </tr>
                    @endforeach


</body>

</html>
