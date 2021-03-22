<div>
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 overflow-hidden focus:outline-none" wire:click="resetFilters">
                <i class="fas fa-chalkboard text-xs mr-2"></i> Todos los cursos
            </button>

            <!-- Dropdown -->
            <div class="relative mr-4" x-data="{ open: false }">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 overflow-hidden focus:outline-none" x-on:click="open = true">
                <i class="fas fa-tags text-sm mr-2"></i>
                Categoría
                <i class="fas fa-angle-down text-sm ml-2"></i>
            </button>
            <!-- Dropdown Body -->
            <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                @foreach ($categories as $category)
                    <a class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-red-500 hover:text-white cursor-pointer" wire:click="$set('category_id', {{$category->id}})" x-on:click="open = false">{{$category->name}}</a>
                @endforeach
            </div>
            <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4 overflow-hidden focus:outline-none" x-on:click="open = true">
                    <i class="fas fa-glasses text-sm mr-2"></i>
                    Nivel
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    @foreach ($levels as $level)
                        <a class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-red-500 hover:text-white cursor-pointer" wire:click="$set('level_id', {{$level->id}})" x-on:click="open = false">{{$level->name}}</a>
                    @endforeach
                </div>
                <!-- // Dropdown Body -->
                </div>
                <!-- // Dropdown -->
        </div>
    </div>

    <div class="mt-12 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($courses as $course)
            <x-course-card :course="$course" />
        @endforeach
    </div>

    <div class="mt-12 mb-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{$courses->links()}}
    </div>
</div>
