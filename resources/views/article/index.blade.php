<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1 fw-bold">Tutti gli Articoli</h1>
            </div>
        </div>
    </div>


  @if (session('articleDeleted'))
    <div class="alert alert-success">
      {{ session('articleDeleted') }}
    </div>
  @endif

    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-around">
                @foreach ($articles as $article)
                    <div class="col-3 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
                                <p class="card-text">{{$article->body}}</p>
                                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
