<div x-data="{ open: true }" @click.outside="open = true" @close.stop="open = false" class="flex justify-center space-x-2 items-center hover:brightness-150 transition-all cursor-pointer">
    <img @click="open = !open" src="{{ asset('images/logo.png') }}">
    <p x-show="open"
       x-transition:enter="transition ease-out duration-600"
       x-transition:enter-start="opacity-0 scale-95"
       x-transition:enter-end="opacity-100 scale-100"
       x-transition:leave="transition ease-in duration-6005"
       x-transition:leave-start="opacity-100 scale-100"
       x-transition:leave-end="opacity-0 scale-95"
       class="hidden sm:flex transition-all text-2xl font-bold text-red-500"
       style="display: none;"
       @click="open = false">
        QuickQuizCenter</p>
</div>
