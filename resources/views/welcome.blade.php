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
                @livewire('search')
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
