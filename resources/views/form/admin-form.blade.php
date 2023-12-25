<x-layout>
    <div class=" w-full flex pt-32 justify-center items-center ">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </div>

    <div class=" w-full flex justify-center items-center ">
        <form class="max-w-[400px] w-full my-8 " action="{{ route('admin-register')}}" method="POST">
            @csrf

            <select id="roll" name="roll"
                    class="border my-5 text-sm text-gray-300 border-red-400 p-2 w-full rounded-lg bg-gray-800 ">
                <option value="candidate">Candidate</option>
                <option value="examiner">Examiner</option>
                <option value="sub-admin" selected>Sub-Admin</option>
            </select>

            <x-form.form-input label="Name" name="name" />
            <x-form.form-input label="Email" name="email" type="email" />
            <x-form.form-input label="Password" name="password" type="password" />
            <x-form.form-input label="Confirm Password" name="password_confirmation" type="password" />

            <div class="flex justify-between my-2">
                <a href="{{ route('login') }}" class="text-gray-500 hover:underline cursor-pointer">
                    Already registered?
                </a>
                <x-form.primary-btn name="Register"/>
            </div>
        </form>
    </div>

</x-layout>
