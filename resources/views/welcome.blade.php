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

    <main class="py-10 mb-16 px-16 flex-col space-y-8 duration-1000 transition-transform">
        <div class=" flex-col md:flex-row space-x-8 text-white welcome-image border-r-2 border-b-2 transform transition-transform hover:scale-105 border-red-500 p-4 rounded-2xl">
            <div class="flex "><img class=" rounded-2xl w-full shadow-2xl shadow-white" src="{{ asset('images/leptop.jpeg') }}"></div>
            <div class="flex-col space-y-8">
                <h1 class="text-2xl mb-8 font-semibold">🚀 Welcome to QuickQuizCenter - Your Gateway to Knowledge!</h1>
                <p class="text-lg">✅ Explore a Variety of Exams: Dive into a diverse range of exams catering to different subjects and skill levels.</p>
                <p class="text-lg">✅ Seamless User Experience: Our user-friendly interface ensures a smooth and hassle-free exam-taking experience.</p>
                <p class="text-lg">✅ Track Your Progress: Monitor your performance and progress over time with detailed analytics.</p>
                <p class="text-lg">✅ Join a Community of Learners: Connect with fellow candidates, share insights, and enhance your knowledge together.</p>
                <p class="text-lg">✅ Quick and Easy Registration: Sign up in seconds and unlock a world of educational opportunities.</p>
                <p class="text-lg">Join QuickQuizCenter now and take the first step towards a smarter, more informed you!</p>
                <p class="text-lg">🔗 <a href="{{ route('register') }}" class="text-blue-500">Sign Up Now</a> and start your learning journey!</p>
            </div>
        </div>

        <div class=" flex space-x-8 text-white welcome-image border-l-2 border-b-2 transform transition-transform hover:scale-105 border-red-500 p-4 rounded-2xl">
            <div class="flex-col space-y-4">
                <h1 class="text-2xl mb-8 font-semibold">🍎 Calling All Educators! Elevate Your Teaching with QuickQuizCenter!</h1>
                <p class="text-lg">✅ <span class="font-semibold">Intuitive Exam Creation:</span> Easily build customized exams tailored to your curriculum with our user-friendly interface.</p>
                <p class="text-lg">✅ <span class="font-semibold">Diverse Question Formats: </span>From multiple-choice to open-ended questions, our platform supports various question formats to suit your teaching style.</p>
                <p class="text-lg">✅ <span class="font-semibold">Instant Grading:</span>Save time on grading! QuickQuizCenter automates the grading process, providing instant feedback to both you and your students.</p>
                <p class="text-lg">✅ <span class="font-semibold">Progress Monitoring:</span> Track the performance of your students with detailed analytics, enabling targeted and effective teaching.</p>
                <p class="text-lg">✅ <span class="font-semibold">Collaborate and Share:</span> Collaborate with fellow educators, share resources, and contribute to a vibrant educational community.</p>
                <p class="text-lg">Join QuickQuizCenter and revolutionize your approach to assessments! Empower your students to succeed and make learning a truly engaging experience.</p>
                <p class="text-lg">🔗 <a href="{{ route('register') }}" class="text-blue-500">Sign Up Now</a> and take the lead in shaping the future of education!</p>
            </div>
            <img class=" rounded-2xl max-w-3xl shadow-2xl shadow-white" src="{{ asset('images/screen.jpg') }}">
        </div>
    </main>
    <div class="footer w-full bg-gray-800 p-20">
        <div class="text-center">
            <h1 class="text-2xl text-white font-semibold">🌐 QuickQuizCenter - Connect. Learn. Excel.</h1>
            <p class="text-sm text-gray-300 my-4">QuickQuizCenter is your all-in-one platform for seamless online assessments. Whether you're a student eager to test your knowledge <br> or a teacher looking to create engaging exams, we've got you covered.</p>
        </div>

        <div class=" grid grid-cols-1 space-y-8 md:space-y-0 md:space-x-8 md:grid-cols-2 my-10 text-center ">
            <div class="flex-col">
                <h1 class="text-xl text-white font-semibold">For Students</h1>
                <p class="text-sm text-gray-300 my-4">🌐 Explore a diverse range of exams, from academic subjects to skill assessments.</p>
                <p class="text-sm text-gray-300 my-4">🚀 Experience a user-friendly platform for quick and stress-free exam-taking.</p>
                <p class="text-sm text-gray-300 my-4">📈 Track your progress and receive instant feedback to fuel your learning journey.</p>
            </div>
            <div class="flex-col">
                <h1 class="text-xl text-white font-semibold">For Teachers</h1>
                <p class="text-sm text-gray-300 my-4">📚 Empower your teaching with intuitive exam creation and automated grading.</p>
                <p class="text-sm text-gray-300 my-4">🤝 Collaborate with fellow educators, share resources, and contribute to a vibrant community.</p>
                <p class="text-sm text-gray-300 my-4">📊 Gain valuable insights into student performance with detailed analytics.</p>
            </div>
        </div>

    </div>
</x-layout>
