<x-layout>
    <div class=" w-full flex pt-32 justify-center items-center ">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="">
        </div>
    </div>

    <div class=" w-full flex justify-center items-center ">
        <form class="max-w-96 w-full " action="{{ route('login')}}" method="POST">
            @csrf

            <x-form.form-input label="Email" type="email" name="email" />
            <x-form.form-input label="Password" name="password" type="password" />

            <div class="flex justify-between my-2">
                <a class="text-gray-500 hover:underline cursor-pointer">
                    Forgotten your password?
                </a>
                <x-form.primary-btn name="Login"/>
            </div>
        </form>
    </div>

</x-layout>
