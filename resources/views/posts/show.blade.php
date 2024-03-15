@extends("layouts.app")

@section('title', 'Show Posts')

@section('content')
    <div class="row pt-5 mt-3">
      <div class="col">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/posts">Data Posts</a></li>
            <li class="breadcrumb-item acrive" aria-current="page">Show Posts</li>
          </ol>
        </nav>
      </div>
    </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $post->title }}</h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection