@extends('layouts.windmill')
@section('contenido')

 
        <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              Productos

            </h4>

            

            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-10 py-3">Nombre</th>
                      <th class="px-10 py-3">Marca</th>
                      <th class="px-10 py-3">Descripción</th>
                      <th class="px-4 py-3">Categoría</th>
                      <th class="px-4 py-3">Precio</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    @foreach($productos as $prod)
         
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="https://thumbs.dreamstime.com/b/dog-paw-icon-logo-stock-illustration-dog-paw-icon-logo-stock-illustration-isolated-white-background-164565120.jpg"
                              alt=""
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true">
                            </div>
                          </div>
                          <div>
                            <p class="font-semibold">

                            <button class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-md active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        <a href="{{route('productos.show',$prod->id)}}"> {{ $prod -> nombre }} </a>
                            </p>
                        </button>
                             
                        
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              Editar/Eliminar
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-10 py-3 text-sm">
                       {{ $prod->marca }}
                      </td>
                     

                      <div>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                        >
                          {{ $prod->descripcion }}
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                      {{ $prod->categoria }}
                      </td>
                       </div>

                       <div>
                        </td>
                      <td class="px-4 py-3 text-sm">
                      MXN {{ $prod->precio }}
                      </td>
                      </div>

                    </tr>

                        @endforeach

                    
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
 
                <span class="col-span-2"></span>

                <br>
 <button type="submit"
    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
 <a href="{{route('productos.create')}}">Agregar producto</a>
 </button>


@endsection


