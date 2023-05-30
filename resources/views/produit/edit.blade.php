@extends('layouts.app')

@section('contenu')
    
<div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 m-auto">
    <form class="space-y-6" action="{{ route('route-update-liste', $produit->id) }}" method="POST">
        @csrf

        @method('PUT')
        <h5 class="text-xl font-medium text-gray-900 dark:text-white">modifier votre requette</h5>
        <div>
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Le titre</label>
            <input type="text" value="{{$produit->title}}" name="title"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" >
            @error('title')
                <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <input type="text" name="description" value="{{$produit->description}}"  placeholder="Description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            @error('description')
                <span class="text-red-600">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">la date de début</label>
            <input type="date" name="date_start" value="{{$produit->date_start}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            @error('date_start')
            <span class="text-red-600">{{$message}}</span>
        @enderror
        </div>

        <div>
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">la date de fin</label>
            <input type="date" name="date_end" value="{{$produit->date_end}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            @error('date_end')
            <span class="text-red-600">{{$message}}</span>
        @enderror
        </div>

        <div>
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">le prix</label>
            <input type="text" name="price" value="{{$produit->price}}"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            @error('price')
            <span class="text-red-600">{{$message}}</span>
        @enderror
        </div>
        
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>

    </form>
</div>

@endsection