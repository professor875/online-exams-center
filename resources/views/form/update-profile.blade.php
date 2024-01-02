<section class="max-w-4xl bg-gray-800 min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form method="post" action="{{ route('profile-update') }}" class="mt-6 space-y-6 max-w-xl">
        @csrf
        @method('patch')
        <div>
            <x-form.update-input label="Name" name="name" :value="old('name', $user->name)" />
            </div>

        <div>
            <x-form.update-input label="Email" name="email" :value="old('name', $user->email)" />
        </div>

        <div class="flex items-center gap-4">
            <x-form.primary-btn name="Save"/>
        </div>
    </form>
</section>
