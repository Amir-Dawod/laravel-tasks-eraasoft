<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Choose Image</label>
        <input type="file" name="image">
    </div>

    @error('image')
        <p style="color:red">{{ $message }}</p>
    @enderror

    <br>
    {{-- <img src="{{asset('storage/images'. $path }}" alt=""> --}}
    <button type="submit">Upload</button>
</form>

@if (session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif
