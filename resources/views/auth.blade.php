@extends("templates.layout")

@section("title")
    Login
@endsection

@section("scripts")
    <script>
        $(document).ready(function () {
            $('#form').submit(function (e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '{{ route("login.post") }}',
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        window.location.href = response.redirect_url;
                    },
                    error: function (error) {
                        const alert = $('#alert');
                        const message = $('#message');

                        alert.removeClass('hidden');
                        message.text(error.responseJSON.message);

                        setTimeout(() => {
                            alert.addClass('hidden');
                            message.text('');
                        }, 5000);
                    },
                });
            });
        });
    </script>
@endsection

@section("content")
    <style>
        input {
            outline: none;
        }
    </style>

    <div
        class="flex justify-center items-center min-w-screen min-h-screen relative"
    >
        <div
            class="absolute bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 right-5 top-5 hidden"
            role="alert"
            id="alert"
        >
            <p class="font-bold">Warning</p>
            <p id="message"></p>
        </div>

        <div
            class="content-container flex self-center border-r-orange-50 shadow-2xl rounded-md w-[50%]"
        >
            <div class="left w-full">
                <form
                    action=""
                    class="flex justify-center items-center flex-col gap-y-5 w-full p-5"
                    id="form"
                >
                    @csrf
                    <h1 class="font-bold text-4xl">Login</h1>
                    <div
                        class="flex relative rounded-sm bg-slate-900/10 w-full"
                    >
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="min-w-full pb-2 pt-2 pr-2 pl-2"
                            placeholder="Email"
                        />
                    </div>

                    <div
                        class="flex relative rounded-sm bg-slate-900/10 w-full"
                    >
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="min-w-full pb-2 pt-2 pr-2 pl-2"
                            placeholder="Password"
                        />
                    </div>

                    <p>
                        Forgot your password?
                        <a href="#" class="text-blue-600">Reset Password</a>
                    </p>

                    <button
                        type="submit"
                        class="bg-green-800 text-white border-2 border-green-800 pt-2 pb-2 w-[50%] rounded-4xl cursor-pointer font-bold hover:bg-transparent hover:text-green-800 transition-all ease-in-out duration-300"
                    >
                        Login
                    </button>
                </form>
            </div>

            <div
                class="right bg-green-800 w-full min-h-full text-white flex flex-col justify-center items-center gap-y-5 p-5 rounded-tr-md rounded-br-md"
            >
                <h1 class="font-bold text-4xl text-center">
                    Don't have an account yet?
                </h1>

                <button
                    class="bg-white text-green-800 border-2 border-white pt-2 pb-2 w-[50%] rounded-4xl cursor-pointer font-bold hover:bg-transparent hover:text-white transition-all ease-in-out duration-300"
                >
                    Register Here
                </button>
            </div>
        </div>
    </div>
@endsection
