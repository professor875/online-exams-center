<x-layout>
    <div class=" min-h-screen w-full px-24 py-16 ">
        <form action="{{ route('create-exam') }}" method="POST">
            @csrf
            <select id="roll" name="roll"
                    class="border my-5 text-sm text-gray-300 border-red-400 p-2 w-full rounded-lg bg-gray-800 ">
                <option value="" disabled selected>Select Subject</option>
                <option value="physics">Physics</option>
                <option value="laravel">Laravel</option>
                <option value="php">Php</option>
                <option value="html">HTML</option>

            </select>
            {{--Question No 1--}}
            <div>
                <x-form.form-input name="question1" label="Question . 1"/>
                <div class="lg:flex lg:space-x-8 items-center">
                    <div class="flex space-x-8">
                        <x-form.form-input name="cAnsq1" label="Correct Answer"/>
                        <x-form.form-input name="wAnsq1.a" label="Wrong Answer"/>
                    </div>
                    <div class="flex space-x-8">
                        <x-form.form-input name="wAnsq1.b" label="Wrong Answer"/>
                        <x-form.form-input name="wAnsq1.c" label="Wrong Answer"/>
                    </div>
                </div>
            </div>
            {{--Question No 2--}}
            <div>
                <x-form.form-input name="question2" label="Question . 2"/>
                <div class="lg:flex lg:space-x-8 items-center">
                    <div class="flex space-x-8">
                        <x-form.form-input name="cAnsq2" label="Correct Answer"/>
                        <x-form.form-input name="wAnsq2.a" label="Wrong Answer"/>
                    </div>
                    <div class="flex space-x-8">
                        <x-form.form-input name="wAnsq2.b" label="Wrong Answer"/>
                        <x-form.form-input name="wAnsq2.c" label="Wrong Answer"/>
                    </div>
                </div>
            </div>
            {{--Question No 3--}}
            <div>
                <x-form.form-input name="question3" label="Question . 3"/>
                <div class="lg:flex lg:space-x-8 items-center">
                    <div class="flex space-x-8">
                        <x-form.form-input name="cAnsq3" label="Correct Answer"/>
                        <x-form.form-input name="wAnsq3.a" label="Wrong Answer"/>
                    </div>
                    <div class="flex space-x-8">
                        <x-form.form-input name="wAnsq3.b" label="Wrong Answer"/>
                        <x-form.form-input name="wAnsq3.c" label="Wrong Answer"/>
                    </div>
                </div>
            </div>
            {{--Question No 4--}}
            <div>
                <x-form.form-input name="question4" label="Question . 4"/>
                <div class="lg:flex lg:space-x-8 items-center">
                    <div class="flex space-x-8">
                        <x-form.form-input name="cAnsq4" label="Correct Answer"/>
                        <x-form.form-input name="wAnsq4.a" label="Wrong Answer"/>
                    </div>
                    <div class="flex space-x-8">
                        <x-form.form-input name="wAnsq4.b" label="Wrong Answer"/>
                        <x-form.form-input name="wAnsq4.c" label="Wrong Answer"/>
                    </div>
                </div>
            </div>
            {{--Question No 5--}}
            <div>
                <x-form.form-input name="question5" label="Question . 5"/>
                <div class="lg:flex lg:space-x-8 items-center">
                    <div class="flex space-x-8">
                        <x-form.form-input name="cAnsq5" label="Correct Answer"/>
                        <x-form.form-input name="wAnsq5.a" label="Wrong Answer"/>
                    </div>
                    <div class="flex space-x-8">
                        <x-form.form-input name="wAnsq5.b" label="Wrong Answer"/>
                        <x-form.form-input name="wAnsq5.c" label="Wrong Answer"/>
                    </div>
                </div>
            </div>

            <x-form.primary-btn name="Submit"/>
        </form>
    </div>

    <div class="max-w-lg mx-auto bg-gray-700 p-6 rounded shadow-md">

        <form method="post" action="{{ route('welcome') }}">
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

            @for($i = 0; $i < 5; $i++)
                <div class="mb-4">
                    <label for="questions[{{ $i }}][text]" class="block text-sm font-medium mb-1">Question {{ $i + 1 }}:</label>
                    <input type="text" name="questions[{{ $i }}][text]" class="mt-1 p-2 w-full border rounded-md bg-gray-600 text-white" required>

                    <h3 class="text-md font-semibold mt-2 mb-1">Answers</h3>

                    @for($j = 0; $j < 4; $j++)
                        <div class="flex items-center mb-2">
                            <label for="questions[{{ $i }}][answers][{{ $j }}][text]" class="mr-2 block text-sm font-medium mb-1">Answer {{ $j + 1 }}:</label>
                            <input type="text" name="questions[{{ $i }}][answers][{{ $j }}][text]" class="p-2 border rounded-md bg-gray-600 text-white" required>

                            <label class="ml-2">
                                <input type="radio" name="questions[{{ $i }}][correct_answer]" value="{{ $j }}" required class="mr-1">
                                Correct Answer
                            </label>
                        </div>
                    @endfor
                </div>
            @endfor

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Create Exam</button>
        </form>
    </div>
</x-layout>
