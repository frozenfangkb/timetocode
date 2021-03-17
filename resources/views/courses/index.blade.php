<x-app-layout>
    <section class="bg-cover" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url({{asset('img/courses/work.jpg')}});">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 z-50">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">
                    Los mejores cursos GRATIS y en español
                </h1>
                <p class="text-white text-lg mt-2 mb-4">
                    Encuentra el curso que estabas buscando para convertirte en un desarrollador web profesional
                </p>
                @livewire('search')
            </div>
        </div>
    </section>
    @livewire('course-index')
</x-app-layout>