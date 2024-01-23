    @guest()
        <nav class=" flex justify-around space-x-4 items-center mx-10 my-4">
            <div class="flex space-x-8">
                <x-templates.logo/>
                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Home') }}
                </x-templates.nav-link>

            </div>
            <div class=" hidden md:flex justify-between space-x-4 items-center">
                @if(! request()->routeIs('register'))
                    <x-templates.register_btn route="register" />
                @endif
                @if(! request()->routeIs('login'))
                    <x-templates.login_btn route="login" />
                @endif
            </div>

        </nav>
    @endguest
    @auth()
        <nav class=" flex justify-around space-x-4 items-center mx-10 my-4">
            <x-templates.logo/>

            <div class="hidden lg:flex justify-between items-center space-x-8">

                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Home') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('exams')" :active="request()->routeIs('exams')">
                    {{ __('Exams') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('quick-quiz')" :active="request()->routeIs('quick-quiz')">
                    {{ __("Quick Quiz's") }}
                </x-templates.nav-link>
                @if(auth()->user()->roll === 'admin')
                    <x-templates.nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-templates.nav-link>
                    <x-templates.nav-link :href="route('candidate')" :active="request()->routeIs('candidate')">
                        {{ __('Candidates') }}
                    </x-templates.nav-link>
                    <x-templates.nav-link :href="route('exams-dashboard')" :active="request()->routeIs('exams-dashboard')">
                        {{ __('Manage-Exams') }}
                    </x-templates.nav-link>
                    <x-templates.nav-link :href="route('create-exam')" :active="request()->routeIs('create-exam')">
                        {{ __('Create-Exams') }}
                    </x-templates.nav-link>
                @endif
                @if(auth()->user()->roll === 'examiner' || auth()->user()->roll === 'sub-admin')
                    <x-templates.nav-link :href="route('candidate')" :active="request()->routeIs('candidate')">
                        {{ __('Candidates') }}
                    </x-templates.nav-link>
                    <x-templates.nav-link :href="route('create-exam')" :active="request()->routeIs('create-exam')">
                        {{ __('Create-Exams') }}
                    </x-templates.nav-link>
                @endif

            </div>

            <div id="profile-name" class="  md:flex justify-between space-x-4 items-center">
                <x-templates.dropedown-nav :name=" auth()->user()->name ">
                    <x-templates.dropedown-link route="profile" name="Profile"/>
                    @if( auth()->user()->roll === 'admin')
                        <x-templates.dropedown-link name="Dashboard" route="dashboard"/>
                        <x-templates.dropedown-link name="Create Accounts" route="admin-form"/>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out hover:text-red-500">
                            Logout
                        </button>
                    </form>

                </x-templates.dropedown-nav>
            </div>
        </nav>
    @endauth
