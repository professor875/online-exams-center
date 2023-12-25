<x-layout>
    <div class="">

        <!-- Page Heading -->
            <header class=" dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h2 class=" font-bold text-xl text-red-500 leading-tight">
                        Admin Dashboard
                    </h2>
                </div>
            </header>

        <!-- Page Content -->
        <main>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 flex justify-between">
                            @foreach($subAdmins as $subAdmin)

                                <div class="text-gray-400 text-lg">
                                    <p class="text-xs text-red-500">Name</p>
                                    {{ $subAdmin->name }}
                                </div>

                                <div class="text-gray-400">
                                    <p class="text-xs text-red-500">role</p>
                                    {{ $subAdmin->roll }}
                                </div>

                                <div class="text-gray-400">
                                    <p class="text-xs text-red-500">email</p>
                                    {{ $subAdmin->email }}
                                </div>

                                <div class="flex items-center justify-between space-x-4">
                                    <form action="/delete-user/{{ $subAdmin->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="px-4 py-2 bg-red-500 hover:bg-red-700 transition-all text-white font-bold rounded-lg">Delete</button>
                                    </form>
                                </div>



                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-layout>
