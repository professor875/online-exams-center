<x-layout>
    <div class="">

        <!-- Page Heading -->
        <header class=" dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class=" font-bold text-xl text-red-500 leading-tight">
                    Manage Exams
                </h2>
            </div>
        </header>

        <!-- Page Content -->

        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        @foreach($exams as $exam)
                            <div class="p-6 md:flex hover:bg-gray-900 transition-all justify-between items-center">
                                <div class="flex w-full justify-between lg:justify-around">
                                    <div class="text-gray-400 text-lg min-w-[200px]">
                                        <p class="text-xs text-red-500">Title</p>
                                        {{ $exam->title }}
                                    </div>

                                    <div class="text-gray-400 min-w-[200px]">
                                        <p class="text-xs text-red-500">Examiner</p>
                                        {{ $exam->examiner }}
                                    </div>
                                </div>

                                <div class="flex w-full justify-between lg:justify-around space-x-4">
                                    <div class="text-gray-400 min-w-[200px]">
                                        <p class="text-xs text-red-500">Duration</p>
                                        {{ $exam->duration }} minutes
                                    </div>

                                    <div class="flex items-center justify-between space-x-4 min-w-[200px]">
                                        <form action="/delete-exam/{{ $exam->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-4 py-2 bg-red-500 hover:bg-red-700 transition-all text-white font-bold rounded-lg">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
