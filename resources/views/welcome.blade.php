<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dorjarpar.online | a website make by sohag hossain</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="container mx-auto flex flex-col justify-center items-center h-screen">
    <h2 class="text-3xl font-bold text-center">
        Welcome to Dorjarpar.online
    </h2>
    <button class="mt-4">
        <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Login
        </a>
    </button>
    <button class="mt-4">
        <a href="{{ route('register') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Register
        </a>
    </button>
</body>

</html>
