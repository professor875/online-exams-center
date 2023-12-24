<x-layout>
    <div class="meow">
        @guest()
            <nav class=" flex justify-around space-x-4 items-center mx-10 my-4">
                <x-templates.logo/>

                <div class=" hidden md:flex justify-between space-x-4 items-center">
                    <x-templates.register_btn route="register" />
                    <x-templates.login_btn route="login" />
                </div>

            </nav>
        @endguest

        <div class="relative brightness-75 transition-all flex px-8 md:px-[20%] py-20 bg-cover bg-center h-[550px]" style="background-image: url({{ asset('images/banner.jpg') }});">
            <div class="">
                <p class="text-2xl text-[#111827] font-bold">DO YOU WANT TO CONDUCT ONLINE EXAMS ?</p>
                <p class="text-lg text-[#111827] font-bold">Test your skills and test yourself in your own way!! <br> Best place for your right choices , Don't miss the opportunity !!</p>
                <p class="text-2xl text-red-600 font-bold">Create an account NOW !!</p>

                <p class="text-2xl text-[#111827] mt-16 font-bold">BECOME A CREATOR !!</p>
                <p class="text-lg text-[#111827] font-bold">Test Other's skills and test your creativity in your own way!! Best place for your teaching skills. <br> Bless students by your knowledge !! <br>
                    We are desperate to see you ^^</p>
                <p class="text-2xl text-red-600 font-bold">Join us NOW !!</p>

            </div>
        </div>
    </div>
</x-layout>
