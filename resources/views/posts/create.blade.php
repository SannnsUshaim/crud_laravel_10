@extends("layouts.app")

@section('title', 'Create Posts')

@section('content')
    <div class="row pt-5 mt-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/posts">Data Posts</a></li>
            <li class="breadcrumb-item acrive" aria-current="page">Edit Posts</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded">
          <div class="card-body">
            <h3>ADD POST</h3>
            <hr>
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

              @csrf
              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">GAMBAR</label>
                  <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                  <!-- error message untuk title -->
                  @error('image')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">JUDUL</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}" placeholder="Masukkan Judul Post">

                  <!-- error message untuk title -->
                  @error('title')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <div class="form-group">
                  <label class="font-weight-bold">KONTEN</label>
                  <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5"
                    placeholder="Masukkan Konten Post">{{ old('content') }}</textarea>

                  <!-- error message untuk content -->
                  @error('content')
                    <div class="alert alert-danger mt-2">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>

              <div class="mb-3">
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                <a href="/posts" class="btn">CANCEL</a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('content');
  </script>
@endsection