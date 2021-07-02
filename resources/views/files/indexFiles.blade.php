@extends('layouts.windmill')
@section('contenido')

 
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Galeria Mascotas
         </h4>
       
         

            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">  
                      
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @foreach($files as $file)

                    <div class="flex flex-wrap my-8 -mx2"> 
                    <div class="mb-4 px-2 w-1/2 md:w-1/3 lg:w-1/6">
                    <div class="column flex-warp " >
                   {{-- <div class="flex flex-wrap">--}}
                   {{-- <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4 bg-gray-500"></div> --}}
                    <img  src="{{$file->url}}" width="300" height="400">
                    </div>
                    </div>
                    </div>

                        @endforeach

                    
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
            <tag>Agrega una foto de tu mascota a nuestra galeria</tag>
              <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
 <a href="{{route('files.create')}}">Agregar foto a galeria</a>
 </button>
 
                <span class="col-span-2"></span>

                <br>
 


@endsection


