<form method="POST" action="{{ route('do-upload') }}" enctype="multipart/form-data">
    @csrf
    <p>Hãy nhập hình ảnh </p>
    <input type="file" multiple name="hinh_anh" />
    <button type="submit">Upload</button>

</form>