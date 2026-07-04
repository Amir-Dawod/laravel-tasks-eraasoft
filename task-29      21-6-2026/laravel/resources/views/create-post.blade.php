<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="{{ asset('css/create-post.css') }}">
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

        <div class="form-card">

            <h1>Create New Post</h1>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('post.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Post Title</label>
                    <input type="text" placeholder="Enter title" name="title" value="{{ old('title') }}">
                </div>
                @error('title')
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror


                <div class="form-group">
                    <label>Category</label>
                    <select name="category_id" id="category" placeholder="Enter category">
                        <option value=''>selected</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }} @selected(old('category_id') == $category->id)>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category_id')
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label>Content</label>
                    <textarea rows="10" placeholder="Write your post..."name="content" {{ old('content') }}></textarea>
                </div>
                @error('content')
                    <div class="alert alert-danger"> {{ $message }}</div>
                @enderror


                <div class="checkbox">

                    <input type="checkbox" name="is_featured"value=1 @checked(old('is_featured'))>

                    <label>Featured Post</label>

                </div>

                <button type="submit">
                    Publish Post
                </button>

            </form>

        </div>

    </div>

</body>

</html>
