<section class="max-w-4xl bg-gray-800 2xl:min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-gray-100">
            {{ __('Password Update') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's password.") }}
        </p>
    </header>
    <form method="post" action="{{ route('update-password') }}" class="mt-6 space-y-6 max-w-xl">
        @csrf
        @method('patch')

        <x-form.form-input label="Current Password" name="current_password" type="password" />
        <x-form.form-input label="New Password" name="password" type="password" />
        <x-form.form-input label="Confirm Password" name="password_confirmation" type="password" />

        <div class="flex items-center gap-4">
            <x-form.primary-btn name="Save"/>
        </div>
    </form>
</section>
