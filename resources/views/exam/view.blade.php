<x-layout>
    @foreach( $exams as $exam )
        <div class=" p-6 text-red-500 rounded shadow-md">
            <div class=" lg:flex justify-between items-center lg:space-x-8">
                <h1 class=" my-5 text-xl p-2 w-full "> Examiner : {{ $exam->examiner }}</h1>
                <h1 class=" my-5 text-xl p-2 w-full "> Title : {{ $exam->title }}</h1>
                <h1 class=" my-5 text-xl p-2 w-full "> Duration : {{ $exam->duration }} Minutes</h1>
            </div>

            <h2 class="text-lg font-semibold mb-2">MCQ's</h2>

            @foreach( $exam->questions as $question )
                <div class="mb-4">
                    <h1 class=" my-5 text-lg p-2 w-full "> Question : {{ $question->question }}</h1>
                    <div class=" xl:flex xl:space-x-14 justify-around">
                        @foreach( $question->answers as $answer )
                            <div class=" underline underline-offset-8 cursor-pointer min-w-64 max-w-72 flex items-center mb-2">
                                <h1 class=" my-5 text-lg p-2 w-full ">{{ $answer->answer }}</h1>
                                <input type="radio" name="questions[correct_answer]" required class="mr-1">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <x-form.primary-btn name="Submit"/>
        </div>
    @endforeach
</x-layout>
