<x-layout>

    <div class=" p-6 text-red-500 rounded shadow-md">

        <form method="post" action="{{ route('create-exam') }}">
            @csrf

            <select id="roll" name="examiner"
                    class=" border my-5 text-sm text-gray-300 border-red-400 p-2 w-full rounded-lg bg-gray-800 ">
                <option value="{{ auth()->user()->name }}" selected>{{ auth()->user()->name }}</option>
            </select>

            <div class="mb-4">
                <x-form.form-input name="title" label="Exam Title" />
            </div>

            <div class="mb-4 max-w-[250px]">
                <x-form.form-input name="duration" type="number" label="Duration in minutes" />
            </div>

            <h2 class="text-lg font-semibold mb-2">Questions</h2>

            @foreach(range(0 , 4) as $i)
                <div class="mb-4">
                    <x-form.form-input name="questions[{{ $i }}][value]" label="Question {{ $i + 1 }}" />

                <div class=" xl:flex xl:space-x-14">
                    @foreach(range(0 , 3) as $j)
                        <div class=" flex items-center mb-2">
                            <x-form.form-input name="questions[{{ $i }}][answer][{{ $j }}]" label="Answer {{ $j + 1 }}" />
                            <label class="ml-2">
                                <input type="radio" name="questions[{{ $i }}][correct_answer]" value="{{ $j }}" required class="mr-1">
                                Correct
                            </label>
                        </div>
                    @endforeach
                </div>
                </div>
            @endforeach

            <x-form.primary-btn name="Create"/>
        </form>
    </div>
</x-layout>
