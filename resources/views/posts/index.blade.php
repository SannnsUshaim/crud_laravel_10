@extends("layouts.app")

@section('title', 'Data Posts')

@section('content')
<div class="row pt-5 mt-3">
  <div class="col">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Posts</li>
      </ol>
    </nav>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card border-0 shadow-sm rounded">
      <div class="card-body">
        <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">GAMBAR</th>
              <th scope="col">JUDUL</th>
              <th scope="col">CONTENT</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
              <tr>
                <td class="text-center">
                  <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded" style="width: 150px">
                </td>
                <td>{{ $post->title }}</td>
                <td>{!! $post->content !!}</td>
                <td class="text-center">
                  <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                    action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                  </form>
                </td>
              </tr>
            @empty
              <div class="alert alert-danger">
                Data Post belum Tersedia.
              </div>
            @endforelse
          </tbody>
        </table>
        {{ $posts->links() }}
      </div>
    </div>
  </div>
</div>
@endsection