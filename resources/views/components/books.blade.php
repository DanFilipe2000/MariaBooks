<section class="content-part d-flex justify-content-center align-items-center me-5 h-100">
    <div class="books-container d-flex flex-wrap">
        @if ($books->isEmpty())
            <h2>Os seus livros aparecerão aqui!</h2>
        @endif
        @foreach ($books as $item)
            <div class="card mr-3 mb-3 ms-4" style="width: 18rem;">
                <div class="card-body" href="/books/edit/{{ $item->id }}">
                    <div>
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $item->autor }}</h6>
                    </div>
                    <p class="card-text">
                        @if ($item->status == 'read')
                            <span><i class="bi bi-circle-fill" style="color: green"></i> Lido</span>
                        @elseif ($item->status == 'in-progress')
                            <span><i class="bi bi-circle-fill" style="color: orange"></i> Lendo</span>
                        @else
                            <span><i class="bi bi-circle-fill" style="color: red"></i> Nunca lido</span>
                        @endif
                    </p>
                    <a href="#" class="btn btn-primary" style="background-color: #1E90FF">Ver detalhes</a>
                    <a href="/books/edit/{{ $item->id }}" class="btn btn-secondary">Editar</a>
                </div>
            </div>
        @endforeach
    </div>
</section>