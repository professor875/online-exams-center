<section class="max-w-4xl bg-gray-800 2xl:min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-gray-100">
            {{ __('Password Update') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's password.") }}
        </p>
    </header>
    <form id="password-update" class="mt-6 space-y-6 max-w-xl">
        @csrf
        @method('patch')

        <x-form.form-input label="Current Password" name="current_password" type="password" />
        <x-form.form-input label="New Password" name="password" type="password" />
        <x-form.form-input label="Confirm Password" name="password_confirmation" type="password" />
        <p id="password-error" class="text-red-500 text-xs"></p>

        <div class="flex items-center gap-4">
            <x-form.primary-btn id="password-save" name="Save"/>
            <p id="password-saved" class="hidden text-gray-400 text-md mx-4">Saved..</p>
        </div>
    </form>

    <script>
        $(document).ready(function (event) {
            $('#password-update').submit(function (event) {
                event.preventDefault();

                let submitButton = $('#password-save');

                submitButton.prop('disabled', true);
                submitButton.addClass('disabled');

                let formData = new FormData(this);

                $.ajax({
                    url:'{{ route('update-password') }}',
                    method:'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success:function (response) {
                        $('#password-saved').fadeIn('slow');
                        setTimeout(function () {
                            $('#password-saved').fadeOut('slow');
                        }, 2000);
                    },
                    error:function (error) {
                        $('#password-error').fadeIn().text(error['responseJSON']['message']);
                    },
                    complete: function () {
                        // Enable the submit button after 4 seconds
                        setTimeout(function () {
                            $('#password-error').fadeOut();
                            submitButton.prop('disabled', false);
                            submitButton.removeClass('disabled');
                        }, 3000);
                    }
                });
            });
        })
    </script>
</section>
