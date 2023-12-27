<x-layout>

    <div class="max-w-lg mx-auto bg-gray-700 p-6 rounded shadow-md">

        <form method="post" action="{{ route('create-exam') }}">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium mb-1">Exam Title:</label>
                <input type="text" name="title" id="title" class="mt-1 p-2 w-full border rounded-md bg-gray-600 text-white" required>
            </div>

            <div class="mb-4">
                <label for="duration" class="block text-sm font-medium mb-1">Exam Duration (minutes):</label>
                <input type="number" name="duration" id="duration" class="mt-1 p-2 w-full border rounded-md bg-gray-600 text-white" required>
            </div>

            <h2 class="text-lg font-semibold mb-2">Questions</h2>

            @foreach(range(0 , 4) as $i)
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Question {{ $i + 1 }}:</label>
                    <input type="text" name="questions[{{ $i }}][value]" class="mt-1 p-2 w-full border rounded-md bg-gray-600 text-white" required>

                    <h3 class="text-md font-semibold mt-2 mb-1">Answers</h3>

                    @foreach(range(0 , 3) as $j)
                        <div class="flex items-center mb-2">
                            <label class="mr-2 block text-sm font-medium mb-1">Answer {{ $j + 1 }}:</label>
                            <input type="text" name="questions[{{ $i }}][answer][{{ $j }}]" class="p-2 border rounded-md bg-gray-600 text-white" required>

                            <label class="ml-2">
                               <input type="radio" name="questions[{{ $i }}][correct_answer]" value="{{ $j }}" required class="mr-1">
                                Correct Answer
                            </label>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Exam</button>
        </form>
    </div>
</x-layout>
