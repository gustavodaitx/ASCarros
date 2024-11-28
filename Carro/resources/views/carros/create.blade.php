
  <form action="{{ url('carros') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="modelo" placeholder="modelo" required>
    <input type="numeric" name="ano" placeholder="ano" required>
    <div>
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
    <button type="submit">Create Car</button>
</form>


