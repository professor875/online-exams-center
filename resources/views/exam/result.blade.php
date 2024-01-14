<x-student-layout>
    <div class="flex justify-center space-x-8 p-8">
        <p class="text-xl text-green-500 font-bold">Correct Answers: {{ $correct }}</p>
        <p class="text-xl text-red-500 font-bold">Wrong Answers: {{ $wrong - $correct }}</p>
        @if( $wrong - $correct > $correct)
            <p class="text-red-500 font-semibold text-xl">FAIL</p>
        @else
            <p class="text-green-500 font-semibold text-xl">Pass</p>
        @endif
    </div>
</x-student-layout>
