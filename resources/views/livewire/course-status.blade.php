<div class="mt-8">
    <div class="container grid grid-cols-3 gap-8">
        <div class="col-span-2">
            {!!$current->iframe!!}
            {{$current->name}}
        </div>

        <div class="card">
            <div class="card-body">
                <h1>
                    {{$course->title}}
                </h1>
                <div class="flex items-center">
                    <figure>
                        <img src="{{ $course->teacher->profile_photo_url }}" alt="{{ $course->teacher->name }}">
                    </figure>
                    <p>
                        {{ $course->teacher->name }}
                        <a class="text-blue-500">{{'@'.Str::slug($course->teacher->name, '')}}</a>
                    </p>
                </div>

                <ul>
                    @foreach ($course->sections as $section)
                        <li>
                            <a class="font-bold">{{ $section->name }}</a>
                            <ul>
                                @foreach ($section->lessons as $lesson)
                                    <li>
                                        <a class="cursor-pointer" wire:click="changeLesson({{$lesson}})">{{$lesson->name}} @if ($lesson->completed)
                                            (Completado)
                                        @endif</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
