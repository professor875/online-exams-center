<section class="max-w-4xl bg-gray-800 2xl:min-w-[1200px] p-6 rounded-xl">
    <header>
        <h2 class="text-lg font-medium text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form id="profile-update" class="mt-6 space-y-6 max-w-xl">
        @csrf
        @method('patch')
        <div>
            <x-form.update-input label="Name" name="name" :value="old('name', $user->name)" />
            </div>

        <div>
            <x-form.update-input label="Email" name="email" :value="old('name', $user->email)" />
        </div>

        <div class="flex items-center gap-4">
            <x-form.primary-btn id="save" name="Save"/>
            <p id="saved" class="hidden text-gray-400 text-md mx-4">Saved..</p>
        </div>
    </form>

    <script>
        $(document).ready(function (event) {
            $('#profile-update').submit(function (event) {
                event.preventDefault();

                let submitButton = $('#save');

                submitButton.prop('disabled', true);
                submitButton.addClass('disabled');

                let formData = new FormData(this);

                $.ajax({
                    url:'{{ route('profile-update') }}',
                    method:'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success:function (response) {
                        // reloading the profile part of the navbar after form submitting successfully
                        $('#profile-name').load(location.href + ' #profile-name');
                        $('#saved').fadeIn('slow');
                        setTimeout(function () {
                            $('#saved').fadeOut('slow');
                        }, 2000);
                    },
                    error:function (error) {
                        console.log('Error :',error);
                    },
                    complete: function () {
                        // Enable the submit button after 4 seconds
                        setTimeout(function () {
                            submitButton.prop('disabled', false);
                            submitButton.removeClass('disabled');
                        }, 3000);
                    }
                });
            });
        })
    </script>
</section>
