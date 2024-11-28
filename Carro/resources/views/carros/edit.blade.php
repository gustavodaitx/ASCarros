@extends('layout.base');

@section('content');




<form class="max-w-sm mx-auto" action="{{ url('carros/'.$carro->id) }}"  method="POST" enctype="multipart/form-data">

    @csrf
    @method ('PUT')
    
  <div class="mb-5">
      <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
      <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
  </div>
 
  <div class="mb-5">
      <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
      <input type="text" name ="modelo" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
  </div>

  <div class="mb-5">
      <label for="ano" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ano</label>
      <input type="number" name="ano" id="power" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required>
  </div>

  <div>
    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>

  <br>
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Create Car</button> 

</form>

@endsection
