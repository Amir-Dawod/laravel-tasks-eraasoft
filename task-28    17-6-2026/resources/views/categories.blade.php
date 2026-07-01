<h1>Categories</h1>
@foreach ($categories as $category)
    <h4 style="width:200px;background-color: #1989df;margin:15px auto; padding:15px;text-align:center;color:white;">
        {{ $category->name }}
    </h4>
    @foreach ($category->posts as $post)
        <div style="border:1px solid #ccc; margin:15px; padding:15px">

            <h2>{{ $post->title }}</h2>
            <h2>{{ $post->des }}</h2>


        </div>
    @endforeach
@endforeach











{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1 class="mb-4">{{ $category->name }}</h1>

    <div class="row">

        {{-- @forelse($category->posts as $post)

            <div class="col-md-6 mb-4">
                <div class="card shadow-sm h-100">

                    <div class="card-body">

                        <h4 class="card-title">
                            {{ $post->title }}
                        </h4>

                        <p class="text-muted">
                            {{ $category->name }}
                        </p>

                        <p class="card-text">
                            {{ Str::limit($post->content, 100) }}
                        </p>

                        <a href="{{ route('post.single', $post->id) }}" class="btn btn-primary">
                            Read More
                        </a>

                    </div>

                </div>
            </div>

        @empty

            <div class="col-12">
                <div class="alert alert-warning">
                    No posts found in this category.
                </div>
            </div>

        @endforelse --}}

</div>

<a href="{{ url('/') }}" class="btn btn-secondary mt-3">
    Back Home
</a>

</div>

</body>

</html> --}}
