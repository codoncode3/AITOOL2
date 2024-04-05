<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/icon-1.jpg" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <style>
            .indent-text {
                padding-left: 120px; /* Lùi dòng chữ vào trong 20px từ phía trái */
            }
            .square {
                width: 500px; /* Đảm bảo kích thước cố định */
                height: 300px; /* Đảm bảo kích thước cố định */
            }
            .button {
                width: 100px; /* Đảm bảo kích thước cố định */
                height: 40px; /* Đảm bảo kích thước cố định */
            }


            </style>
        <title>SuperAI Tools</title>
    </head>
    <body class="mb-48">
        <x-card>
        <nav class="flex justify-between items-center mb-4">
            <a href="/supertool"
                ><img class="w-24" src={{"images/logo-2.png"}} alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">

                @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{auth()->user()->account_name}}
                    </span>
                </li>
                <li>
                    <a href="listings/create" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Submit</a
                    >
                </li>
                <li>
                    <a href="listings/manage" class="hover:text-laravel"
                        ><i class="fa-solid fa-gear"></i>
                        Manage Listing </a
                    >
                </li>
                <li>

                    @csrf

                      <a href="/">  <i  class="fa-solid fa-door-closed"></i> Back
                      </a>
                    </form>
                </li>
                @else

                <li>
                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>

                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                @endauth
            </ul>
        </nav>
        </x-card>

    <main>
        {{$slot}}
    </main>


    <footer>

        <h1 class="text-3xl text-center font-bold my-6 uppercase text-green-400">
            THE BEST PAGE ABOUT AI
          </h1>
    </footer>
    <x-flash-message />
</body>
</html>