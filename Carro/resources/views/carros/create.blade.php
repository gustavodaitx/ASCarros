
  <form action="{{ url('carros') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="modelo" placeholder="modelo" required>
    <input type="numeric" name="ano" placeholder="ano" required>
    <button type="submit">Create Car</button>
</form>


