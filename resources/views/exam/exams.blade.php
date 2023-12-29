<x-layout>

        <div class="flex py-16 mx-44 min-h-screen justify-around text-red-500 overflow-auto space-x-8">
            @foreach( $exams as $exam )
                    <a href="/view/{{ $exam->id }}" class=" p-8 min-w-72 max-h-96 cursor-pointer border hover:outline hover:outline-red-500 border-red-500 rounded-xl ">
                        <h1 class="text-lg font-bolded">
                            Number: <br> {{ $exam->id }}
                        </h1>
                        <h1 class="text-lg font-bolded">
                            Title: <br> {{ $exam->title }}
                        </h1>
                        <h1 class="text-lg mt-8 font-bolded">
                            Examiner: <br> {{ $exam->examiner }}
                        </h1>
                        <h1 class="text-lg mt-8 font-bolded">
                            Duration: <br> {{ $exam->duration }} Minutes
                        </h1>
                    </a>
            @endforeach
        </div>
</x-layout>
