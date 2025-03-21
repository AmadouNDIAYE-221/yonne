@extends('layout')

@section('content')
    <div class="w-full  -auto p-6 bg-white rounded-2xl  flex justify-center items-start min-h-full">

        <!-- Vérifier s'il y a des besoins -->
        @if($besoins->isEmpty())
            <p>Aucun besoin traité pour le moment.</p>
        @else
            <table class="min-w-full table-auto m-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Articles</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Quantité</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Prix Unitaire</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Totaux</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Catégorie</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($besoins as $besoin)
                        <tr>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->items }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->quantite }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->prixUnitaire }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->totaux }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->categorie }}</td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                      </svg>
                                </a>
                                  
                            </td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                      </svg>
                                </a>
                                  
                            </td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                      </svg>
                                </a>
                                  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
@extends('layout')

@section('content')
    <div class="w-full  -auto p-6 bg-white rounded-2xl  flex justify-center items-start min-h-full">

        <!-- Vérifier s'il y a des besoins -->
        @if($besoins->isEmpty())
            <p>Aucun besoin Accepté.</p>
        @else
            <table class="min-w-full table-auto m-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Articles</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Quantité</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Prix Unitaire</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Totaux</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10">Catégorie</th>
                        <th class="px-4 py-2 text-center text-blue-900 h-10" colspan="3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($besoins as $besoin)
                        <tr>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->items }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->quantite }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->prixUnitaire }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->totaux }}</td>
                            <td class="px-4 py-2 text-center h-10">{{ $besoin->categorie }}</td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                      </svg>
                                </a>
                                  
                            </td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                      </svg>
                                </a>
                                  
                            </td>
                            <td class="px-4 py-2 text-center h-10">
                                <a href="">
                                    <svg class="h-10 w-6 cursor-pointer text-blue-900 hover:text-[#c44241]"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                      </svg>
                                </a>
                                  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
