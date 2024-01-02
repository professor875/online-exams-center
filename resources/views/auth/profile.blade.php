<x-layout>
    <header class=" dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class=" font-bold text-xl text-white leading-tight">
                Profile
            </h2>
        </div>
    </header>
    <main class=" p-10 flex justify-center items-center">
       <div class="flex-col space-y-10">
           @include('form.update-profile')

           @include('form.update-password')

           @include('form.delete-profile')

       </div>

    </main>
</x-layout>
