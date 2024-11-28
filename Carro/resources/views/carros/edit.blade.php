<form action="{{ url('carros/'.$carros->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="modelo" placeholder="modelo" required>
    <input type="numeric" name="ano" placeholder="ano" required>
    <button type="submit">Editar Product</button>
</form>