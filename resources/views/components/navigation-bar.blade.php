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
            @if(auth()->user()->roll === 'candidate')
                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Exams') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Examiners') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Result') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                    {{ __('Announcements') }}
                </x-templates.nav-link>
            @endif
            @if(auth()->user()->roll === 'admin')
                <x-templates.nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Dashboard') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Admins') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Candidates') }}
                </x-templates.nav-link>
                <x-templates.nav-link :href="route('login')" :active="request()->routeIs('login')">
                    {{ __('Past-Papers') }}
                </x-templates.nav-link>
            @endif
        </div>

        <div class="  md:flex justify-between space-x-4 items-center">
            <x-templates.dropedown-nav :name=" auth()->user()->name ">
                <x-templates.dropedown-link name="Profile"/>
                @if( auth()->user()->roll === 'admin')
                    <x-templates.dropedown-link name="Dashboard"/>
                    <x-templates.dropedown-link name="Create Admin"/>
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
