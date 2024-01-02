<x-layout>
    <div class="meow">


        <div class="relative transition-all flex px-8 md:px-[20%] py-20 bg-cover bg-center h-[550px]" style="background-image: url({{ asset('images/banner.jpg') }});">
            <div class="">
                <p class="text-2xl text-[#111827] font-bold">DO YOU WANT TO CONDUCT ONLINE EXAMS ?</p>
                <p class="text-lg text-[#111827] font-bold">Test your skills and test yourself in your own way!! <br> Best place for your right choices , Don't miss the opportunity !!</p>
                <a href="{{ route('register') }}" class="text-2xl text-red-600 font-bold">Create an account NOW !!</a>

                <p class="text-2xl text-[#111827] mt-16 font-bold">BECOME A CREATOR !!</p>
                <p class="text-lg text-[#111827] font-bold">Test Other's skills and test your creativity in your own way!! Best place for your teaching skills. <br> Bless students by your knowledge !! <br>
                    We are desperate to see you ^^</p>
                <a href="{{ route('register') }}" class="text-2xl text-red-600 font-bold">Join us NOW !!</a>
            </div>
        </div>
    </div>

    <main class="py-10 px-16 duration-1000 transition-transform">
        <div class="border-r-2 border-b-2 transform transition-transform hover:scale-105 border-red-500 p-4 rounded-2xl">
            <img class=" rounded-2xl max-w-4xl shadow-2xl shadow-white" src="{{ asset('images/leptop.jpeg') }}" alt="">
        </div>

    </main>
</x-layout>
