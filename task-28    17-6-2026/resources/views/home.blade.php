<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>

    <h1>All Posts</h1>
    <form method="GET" action="{{ route('home')}}" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search posts..."
            value="{{ request('search') }}">
    </form>
    @foreach ($posts as $post)
        <div style="border:1px solid #ccc; margin:15px; padding:15px">

            <h2>{{ $post->title }}</h2>


            <strong>Category:</strong>
            {{ $post->category->name }}
            <div class="text-end mt-3">
                <a href="{{ route('post', $post->id) }}"
                    style="
      display:inline-block;
      margin-top:10px;
      padding:10px 18px;
      background:#0d6efd;
      color:white;
      text-decoration:none;
      border-radius:6px;
   ">
                    View Details
                </a>

            </div>

        </div>
    @endforeach
</body>

</html>
