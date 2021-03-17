<x-app-layout>
    <section class="bg-cover" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url({{asset('img/home/code-landscape.jpg')}});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 z-50">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">
                    Aprende desarrollo web en Time to Code
                </h1>
                <p class="text-white text-lg mt-2 mb-4">
                    Aquí encontrarás cursos, manuales y artículos para convertirte en un desarrollador web profesional
                </p>
                <!-- component -->
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                            width="512px" height="512px">
                            <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">
            CONTENIDO
        </h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/building-4929371_640.jpg')}}" alt="" />
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Cursos y proyectos
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt cum blanditiis temporibus modi
                    </p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/stork-5828727_640.jpg')}}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Manuales
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt cum blanditiis temporibus modi
                    </p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/women-5963963_640.jpg')}}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Blog
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt cum blanditiis temporibus modi
                    </p>
                </header>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/flowers-5452263_640.jpg')}}" alt="" />
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">
                        Desarrollo web
                    </h1>
                    <p class="text-sm text-gray-500">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt cum blanditiis temporibus modi
                    </p>
                </header>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">
            ¿No sabes qué curso escoger?
        </h1>
        <p class="text-center text-white">
            Echa un vistazo a los cursos por categoría
        </p>
        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Catálogo
            </a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">
            ÚLTIMOS CURSOS
        </h1>

        <div class="mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
                <x-course-card :course="$course" />
            @endforeach
        </div>
    </section>
</x-app-layout>
