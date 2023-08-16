<x-app-layout>
    <section class='bg-cover' style="background-image: url({{asset('img/cursos/portada.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            
            <div class="w-full md:w-3-/4 lg:w-1/2"> 
                <h1 class="text-white fond-bold text-5xl"> Busca, selecciona e ingresa a uno de muchos cursos de CENEC </h1>
                <p class="text-white text-lg mt-2">¡Aqui encontraras todo nuestro catalago de cursos que tenemos disponibles para Ti!</p>
             

                {{-- Esta es la barra SEARCH --}}
                <div class=" flex flex-col justify-center">
                    <div class="relative p-1 w-full sm:max-w-2xl sm:mx-auto">
                        <div class="overflow-hidden z-0 rounded-full relative p-1">
                            <form role="form" class="relative flex z-50 rounded-full">
                                    <input type="text" placeholder="¿No encuentras tu curso?, buscalo aqui"
                                    class="rounded-full flex-1 px-6 py-2 text-gray-700 focus:outline-none" />
                                <button
                                    class="bg-indigo-500 text-white rounded-full font-semibold px-8 py-2 hover:bg-indigo-400 focus:bg-indigo-600 focus:outline-none">BUSCAR</button>
                            </form>
                            <div
                                class="glow glow-1 z-10 animate-glow1 bg-pink-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute">
                            </div>
                            <div
                                class="glow glow-2 z-20 animate-glow2 bg-purple-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute">
                            </div>
                            <div
                                class="glow glow-3 z-30 animate-glow3 bg-yellow-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute">
                            </div>
                            <div
                                class="glow glow-4 z-40 animate-glow4 bg-blue-400 rounded-100 w-120 h-120 -top-10 -left-10 absolute">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Aqui acaba el SEARCH --}}
            </div>

        </div>

    </section>


    @livewire('course-index')

</x-app-layout>