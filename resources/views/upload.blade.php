<form method="POST" action="{{ route('do-upload') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" multiple name="hinh_anh" />
    <button type="submit">Upload</button>
    <div>kiểm tra thay đổi</div>
</form>