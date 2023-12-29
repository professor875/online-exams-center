<x-layout>

        <div class="grid grid-cols-4 gap-8 py-10 mx-44 min-h-screen text-red-500">
            @foreach( $exams as $exam )
                    <a href="/view/{{ $exam->id }}" target="_blank" class=" p-8 min-w-72 max-h-96 transition-all cursor-pointer border hover:outline hover:outline-red-500 border-red-500 rounded-xl ">
                        <h1 class=" text-lg mb-4 font-bolded">
                            Number: {{ $loop->iteration }}
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
