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

    <main class="py-10 px-16 flex-col space-y-16 duration-1000 transition-transform">
        <div class=" xl:flex space-y-8 xl:space-y-0 xl:space-x-8 text-white welcome-image border-r-2 border-b-2 transform transition-transform hover:scale-105 border-red-500 p-4 rounded-2xl">
            <div class="flex xl:max-w-2xl"><img class=" rounded-2xl w-full shadow-2xl shadow-white" src="{{ asset('images/leptop.jpeg') }}"></div>
            <div class="flex-col space-y-8">
                <h1 class=" xl:text-2xl text-xl mb-8 font-semibold">🚀 Welcome to QuickQuizCenter - Your Gateway to Knowledge!</h1>
                <p class=" xl:text-lg text-sm">✅ Explore a Variety of Exams: Dive into a diverse range of exams catering to different subjects and skill levels.</p>
                <p class=" xl:text-lg text-sm">✅ Seamless User Experience: Our user-friendly interface ensures a smooth and hassle-free exam-taking experience.</p>
                <p class=" xl:text-lg text-sm">✅ Track Your Progress: Monitor your performance and progress over time with detailed analytics.</p>
                <p class=" xl:text-lg text-sm">✅ Join a Community of Learners: Connect with fellow candidates, share insights, and enhance your knowledge together.</p>
                <p class=" xl:text-lg text-sm">✅ Quick and Easy Registration: Sign up in seconds and unlock a world of educational opportunities.</p>
                <p class=" xl:text-lg text-sm">Join QuickQuizCenter now and take the first step towards a smarter, more informed you!</p>
                <p class=" xl:text-lg text-sm">🔗 <a href="{{ route('register') }}" class="text-blue-500">Sign Up Now</a> and start your learning journey!</p>
            </div>
        </div>

        <div class=" xl:flex space-y-8 xl:space-y-0 xl:space-x-32 text-white  welcome-image border-l-2 border-b-2 transform transition-transform hover:scale-105 border-red-500 p-4 rounded-2xl">
            <div class="flex-col space-y-4">
                <h1 class="text-2xl mb-8 font-semibold">🍎 Calling All Educators! Elevate Your Teaching with QuickQuizCenter!</h1>
                <p class="t xl:text-lg text-sm">✅ <span class="font-semibold">Intuitive Exam Creation:</span> Easily build customized exams tailored to your curriculum with our user-friendly interface.</p>
                <p class="t xl:text-lg text-sm">✅ <span class="font-semibold">Diverse Question Formats: </span>From multiple-choice to open-ended questions, our platform supports various question formats to suit your teaching style.</p>
                <p class="t xl:text-lg text-sm">✅ <span class="font-semibold">Instant Grading:</span>Save time on grading! QuickQuizCenter automates the grading process, providing instant feedback to both you and your students.</p>
                <p class="t xl:text-lg text-sm">✅ <span class="font-semibold">Progress Monitoring:</span> Track the performance of your students with detailed analytics, enabling targeted and effective teaching.</p>
                <p class="t xl:text-lg text-sm">✅ <span class="font-semibold">Collaborate and Share:</span> Collaborate with fellow educators, share resources, and contribute to a vibrant educational community.</p>
                <p class="t xl:text-lg text-sm">Join QuickQuizCenter and revolutionize your approach to assessments! Empower your students to succeed and make learning a truly engaging experience.</p>
                <p class="t xl:text-lg text-sm">🔗 <a href="{{ route('register') }}" class="text-blue-500">Sign Up Now</a> and take the lead in shaping the future of education!</p>
            </div>
            <div class="flex w-[100%]"><img class=" rounded-2xl max-w-3xl shadow-2xl shadow-white" src="{{ asset('images/screen.jpg') }}"></div>
        </div>
    </main>
</x-layout>
