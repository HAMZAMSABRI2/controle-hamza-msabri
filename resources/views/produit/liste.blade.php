@extends('layouts.app')

@section('contenu')

<h1 class="text-center text-xl font-normal">liste des élément</h1>
    
<div class="relative overflow-x-auto py-56">
    <table class="w-96 text-sm  py-2 text-left text-gray-500 dark:text-gray-400 m-auto ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 ">
            <tr class="p-10">
                <th scope="col" class="px-6  py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    title
                </th>
                <th scope="col" class="px-6 py-3">
                    description
                </th>
                <th scope="col" class="px-6 py-3">
                    date de début
                </th>

                <th scope="col" class="px-6 py-3">
                    date de fin
                </th>

                <th scope="col" class="px-6 py-3">
                    price
                </th>

                <th scope="col" class="px-6 py-3">
                    date de création
                </th>

                <th scope="col" class="px-6 py-3">
                    date de fin
                </th>

                
                <th scope="col" class="px-6 py-3">
                    modification
                </th>

                
                <th scope="col" class="px-6 py-3">
                    Supression
                </th>
            </tr>
            

            @foreach ($produit as $item)
                <tr>
                    <td scope="col" class="px-6 py-3">
                        {{$item->id}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->title}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->description}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->date_start}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->date_end}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->price}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->created_at->diffforhumans()}}
                    </td>

                    <td scope="col" class="px-6 py-3">
                        {{$item->updated_at->diffforhumans()}}
                    </td>

                    <td>

                        <a href="{{ route('route-edit-liste', $item->id) }}">Modifier</a>

                    </td>

                    <td class="flex px-6 py-4 space-x-8">
                        


                        <div x-data="{ showModal: false }">

                            <form action="{{ route('route-delete-produit', $item->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <a href="#" onclick="toggleModal('modal-id{{ $item->id }}')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">supprimer</a>
                                <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-10 outline-none focus:outline-none justify-center items-center"
                                    id="modal-id{{ $item->id }}">
                                    <div class="relative w-auto mx-auto max-w-[30%]">
                                        
                                        <div
                                            class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                                            
                                            <div
                                                class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                                                <h3 class="text-3xl font-semibold">
                                                    voulez vous supprimer 
                                                </h3>
                                                <button
                                                    class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                                    onclick="toggleModal('modal-id{{ $item->id }}')">
                                                    <span
                                                        class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                                        ×
                                                    </span>
                                                </button>
                                            </div>
                                            
                                            <div class="relative p-3 flex-auto">
                                                <p class="my-4 text-slate-500 text-lg leading-relaxed">
                                                    confirmation
                                                </p>
                                            </div>
                                            
                                            <div
                                                class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                                                <button
                                                    class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="button"
                                                    onclick="toggleModal('modal-id{{ $item->id }}')">
                                                    Close
                                                </button>
                                                <button
                                                    class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="submit"
                                                    onclick="toggleModal('modal-id{{ $item->id }}')">
                                                    Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop">
                                </div>
                                <script type="text/javascript">
                                    function toggleModal(modalID) {
                                        document.getElementById(modalID).classList.toggle("hidden");
                                        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                                        document.getElementById(modalID).classList.toggle("flex");
                                        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                                    }
                                </script>
                            </form>
                        </div>
                        
                    </td>



                </tr>
            @endforeach
        </thead>
        <tbody>



        </tbody>
    </table>
</div>


@endsection