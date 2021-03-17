<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="container grid grid-cols-1 md:grid-cols-2 gap-6">
            <figure>
                @if (strpos($course->image->url, "picsum"))
                    <img class="h-60 w-full object-cover" src="{{$course->image->url}}" alt="" />
                @else
                    <img class="h-60 w-full object-cover" src="{{Storage::url($course->image->url)}}" alt="">
                @endif
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">
                    {{$course->title}}
                </h1>
                <h2 class="text-xl mb-3">
                    {{$course->subtitle}}
                </h2>
                <p class="mb-2"><i class="fas fa-chart-line"></i> Nivel: {{$course->level->name}}</p>
                <p class="mb-2"><i class="fas fa-tags"></i> Categoria: {{$course->category->name}}</p>
                <p class="mb-2"><i class="fas fa-users"></i> Alumnos: {{$course->students_count}}</p>
                <p><i class="far fa-star"></i> Calificación: {{$course->rating}}</p>
            </div>
        </div>
    </section>

    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="order-2 lg:col-span-2 lg:order-1">
            <section class="card mb-12">
                <div class="card-body">
                    <h1 class="font-bold text-2xl mb-2">
                        ¿Qué vas a aprender?
                    </h1>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                        @foreach ($course->goals as $goal)
                            <li class="text-gray-700 text-base"><i class="fas fa-check text-gray-600 mr-2"></i>{{$goal->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="mb-12">
                <h1 class="font-bold text-3xl mb-2">
                    Temario
                </h1>

                @foreach ($course->sections as $section)
                    <article class="mb-4 shadow" 
                    @if ($loop->first)
                        x-data="{ open: true }"
                    @else
                        x-data="{ open: false }"
                    @endif
                    >
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">
                                {{$section->name}}
                            </h1>
                        </header>

                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid grid-cols-1 gap-2">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base">
                                        <i class="fas fa-play-circle mr-2 text-gray-600"></i>{{$lesson->name}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>

            <section class="mb-8">
                <h1 class="font-bold text-3xl mb-2">
                    Deberías saber...
                </h1>

                <ul class="list-disc list-inside">
                    @foreach ($course->requirements as $req)
                        <li class="text-gray-700 text-base">
                            {{$req->name}}
                        </li>
                    @endforeach
                </ul>
            </section>

            <section>
                <h1 class="font-bold text-3xl">
                   Descripción del curso 
                </h1>

                <div class="text-gray-700 text-base">
                    {{$course->description}}
                </div>
            </section>
        </div>

        <div class="order-1 lg:order-2">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{$course->teacher->profile_photo_url}}" alt="{{$course->teacher->name}}">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-lg">
                                Prof. {{$course->teacher->name }}
                            </h1>
                            <a class="text-blue-400 text-sm font-bold" href="">{{'@'.Str::slug($course->teacher->name, '')}}</a>
                        </div>
                    </div>
                    <a href="" class="main-btn mt-4">
                        Empezar curso
                    </a>
                </div>
            </section>

            <aside class="hidden lg:block">
                @foreach ($otherCourses as $other)
                    <article class="flex mb-6">
                        @if (strpos($other->image->url, "picsum"))
                            <img class="h-32 w-40 object-cover" src="{{$other->image->url}}" alt="" />
                        @else
                            <img class="h-32 w-40 object-cover" src="{{Storage::url($other->image->url)}}" alt="">
                        @endif
                        <div class="ml-3">
                            <h1>
                                <a href="{{route('courses.show', $other)}}" class="font-bold text-gray-500 mb-3">{{Str::limit($other->title, 30)}}</a>
                            </h1>

                            <div class="flex items-center mb-2">
                                <img class="h-8 w-8 object-cover rounded-full shadow-lg" src="{{$other->teacher->profile_photo_url}}" alt="{{$other->teacher->name}}">
                                <p class="text-gray-700 text-sm ml-2">
                                    {{$other->teacher->name}}
                                </p>
                            </div>
                            <p class="text-sm">
                                <i class="fas fa-star mr-2 text-yellow-400"></i>{{$other->rating}}
                            </p>
                        </div>
                    </article>
                @endforeach
            </aside>
        </div>
    </div>
</x-app-layout>
