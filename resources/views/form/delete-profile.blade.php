<section class="max-w-4xl bg-gray-800 min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-red-600">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Delete your profile.") }}
        </p>
    </header>
        <form method="post" action="{{ route('delete-profile') }}" class="p-6 max-w-xl">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-100 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6">
            <x-form.form-input name="password" label="Password" type="password"/>
            </div>

            <div class="mt-6 flex justify-end">
                <x-form.primary-btn name="Delete"/>
            </div>
        </form>
</section>
