

@foreach($carros as $carro)
    <div>
        <h3>{{ $carro->nome }}</h3>
        <p>{{ $carro->tipo }}</p>
        <p>{{ $carro->pontos }}</p>
        <a href="{{ url('carros/'.$carro->id.'/edit') }}">Edit</a>
        <form action="{{ url('carros/'.$carro->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach