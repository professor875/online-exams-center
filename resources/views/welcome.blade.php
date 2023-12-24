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
        @auth()
                <nav class=" flex justify-around space-x-4 items-center mx-10 my-4">
                    <x-templates.logo/>

                    <div class=" hidden md:flex justify-between space-x-4 items-center">
                        <x-templates.dropedown-nav :name=" auth()->user()->name ">
                            <x-templates.dropedown-link name="Profile"/>
                            @if( auth()->user()->roll === 'admin')
                                <x-templates.dropedown-link name="Dashboard"/>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                                    Logout
                                </button>
                            </form>

                        </x-templates.dropedown-nav>
                    </div>

                </nav>
        @endauth



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
