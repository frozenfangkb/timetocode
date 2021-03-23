<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1 class="font-bold text-lg mb-4">
                Editar curso
            </h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="">Información del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Lecciones del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Objetivos del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Alumnos</a>
                </li>
            </ul>
        </aside>

        <div class="col-span-4 card">
            <div class="card-body text-gray-600">
                <h1 class="text-2xl font-bold">
                    Información del curso
                </h1>
                <hr class="mt-2 mb-6">

                {!! Form::model($course, ['route' => ['instructor.courses.update', $course], 'method' => 'put']) !!}
                <div class="mb-4">
                    {!! Form::label('title', 'Título') !!}
                    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' => 'form-input block w-full mt-1']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('subtitle', 'Subtítulo') !!}
                    {!! Form::text('subtitle', null, ['class' => 'form-input block w-full mt-1']) !!}
                </div>
                <div class="mb-4">
                    {!! Form::label('description', 'Descripción') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>

        <script>
            document.getElementById("title").addEventListener('keyup', slugChange);

            function slugChange() {

                title = document.getElementById("title").value;
                document.getElementById("slug").value = slug(title);

            }

            function slug(str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }

            ClassicEditor
                .create(document.querySelector('#description'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'blockQuote'],
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            }
                        ]
                    }
                })
                .catch(error => {
                    console.log(error);
                });

        </script>
    </x-slot>
</x-app-layout>
