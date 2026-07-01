       <div style="border:1px solid #ccc; margin:15px; padding:15px">

            <h2>{{ $post->title }}</h2>

            <p>{{ $post->des }}</p>

            <strong>Category:</strong>
            {{ $post->category->name }}
            <div class="text-end mt-3">
                <a href="{{ route('home')}}"
                    style="display:inline-block; margin-top:10px; padding:10px 18px; background:#0d6efd;
 color:white;
      text-decoration:none;
      border-radius:6px;
   ">
                    Go To Home
                </a>

            </div>

        </div>
