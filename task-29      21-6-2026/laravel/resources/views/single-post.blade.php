<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
</head>

<body>

    <header>
        <div class="container">
            <h2>My Blog</h2>

            <nav>
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('posts.index') }}">Posts</a>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </nav>
        </div>
    </header>

    <div class="container">

        <article class="post">
            @if ($post->is_featured)
                <span class="badge">Featured</span>
            @endif

            <h1>{{ $post->title }}</h1>

            <div class="meta">
                <span>✍ {{ $post->user->name }}</span>
                <span>📅 {{ $post->created_at }}</span>
                <span>💬 {{ $post->comments->count() }} Comments</span>
            </div>

            <img src="https://picsum.photos/1000/450" alt="">

            <p>
                {{ $post->content }}
            </p>

        </article>

        <section class="comments">

            <h2>Comments</h2>

            @foreach ($post->comments as $comment)
                <div class="comment">

                    <h4>{{ $comment->author_name }}</h4>

                    <span>{{ $comment->created_at }}</span>

                    <p>
                        {{ $comment->content }}
                    </p>

                </div>
            @endforeach

        </section>

        <section class="add-comment">

            <h2>Leave a Comment</h2>
<div class="comment-form">

    <h2>Leave a Comment</h2>

    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf

        <div class="form-group">

            <label>Author Name</label>

            <input
                type="text"
                name="author_name"
                placeholder="Your Name"
                value="{{ old('author_name') }}">

            @error('author_name')
                <small class="error">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <label>Comment</label>

            <textarea
                rows="6"
                name="content"
                placeholder="Write your comment...">{{ old('content') }}</textarea>

            @error('content')
                <small class="error">{{ $message }}</small>
            @enderror

        </div>

        <button type="submit" class="comment-btn">
            Submit Comment
        </button>

    </form>

</div>


        </section>

    </div>

</body>

</html>
