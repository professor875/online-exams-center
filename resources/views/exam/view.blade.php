<x-student-layout>
    <div class=" p-6 text-red-500 rounded shadow-md mt-8">
        <form method="post" action="{{ route('submit-exam') }}">
            @csrf
            <div class="flex justify-around">
                <h1 class="text-xl font-bold">Examiner : {{ $exam->examiner }}</h1>
                <h1 class="text-xl font-bold">Title : {{ $exam->title }}</h1>
                <h1 class="text-xl font-bold">Duration : {{ $exam->duration }} minutes</h1>
            </div>
            <input type="number" name="examId" value="{{ $exam->id }}" class="hidden">

            <h2 class="text-lg font-semibold mb-4">Questions</h2>

            @foreach( $exam->questions as $question )
                <div class="mb-16">
                    <h1 class="text-xl font-bold">Q {{ $loop->iteration }}: {{ $question->question }}</h1>

                    <div class=" xl:flex xl:space-x-4 2xl:space-x-16">
                        @foreach( $question->answers as $answer )
                            <div class="text-gray-300">
                                <div class=" flex items-center mb-2 max-w-[400px] min-w-[300px] justify-between">
                                    <h1 class="text-xl font-bold underline underline-offset-8">{{ $answer->answer }}</h1>
                                    <label class="ml-2 text-green-500">
                                        <input type="radio" name="answer[{{ $question->id }}]" value="{{ $answer->id }}" required class="mr-1">
                                        Correct
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <x-form.primary-btn name="Submit"/>
        </form>
    </div>
</x-student-layout>
