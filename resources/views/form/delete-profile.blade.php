<section class="max-w-4xl bg-gray-800 2xl:min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-red-600">
            {{ __('Delete Account') }}
        </h2>
    </header>
        <form id="delete-profile" class="p-6 max-w-xl">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-100 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6 ">
            <x-form.form-input name="password" label="Password" type="password"/>
                <p id="delete-error" class="text-red-500 text-xs"></p>
            </div>

            <div class="mt-6 flex justify-end">
                <x-form.primary-btn id="delete-btn" name="Delete"/>
            </div>
        </form>

    <script>
        $(document).ready(function (event) {
            $('#delete-profile').submit(function (event) {
                event.preventDefault();

                let submitButton = $('#delete-btn');

                submitButton.prop('disabled', true);
                submitButton.addClass('disabled');

                let formData = new FormData(this);

                $.ajax({
                    url:'{{ route('delete-profile') }}',
                    method:'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success:function (response) {
                        location.reload();
                    },
                    error:function (error) {
                        $('#delete-error').fadeIn().text(error['responseJSON']['message']);
                    },
                    complete: function () {
                        // Enable the submit button after 4 seconds
                        setTimeout(function () {
                            $('#delete-error').fadeOut();
                            submitButton.prop('disabled', false);
                            submitButton.removeClass('disabled');
                        }, 3000);
                    }
                });
            });
        })
    </script>
</section>
