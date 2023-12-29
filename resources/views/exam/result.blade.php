<x-student-layout>
    <div class="flex justify-center space-x-8 p-8">
        <p class="text-xl text-green-500 font-bold">Correct Answers: {{ $correct }}</p>
        <p class="text-xl text-red-500 font-bold">Wrong Answers: {{ $wrong }}</p>
        @if($correct > $wrong)
            <p class="text-xl text-green-500 font-bold">Result : PASS</p>
        @else
            <p class="text-xl text-red-500 font-bold">Result : FAIL</p>
        @endif

    </div>
</x-student-layout>
