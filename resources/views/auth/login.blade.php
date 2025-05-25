<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css"/>
</head>
<body class="bg-gray-50">

    <div class="flex flex-col md:flex-row min-h-screen">
        <!-- Hero Section (Left) -->
        <div class="md:w-1/2 flex items-center justify-center bg-blue-700 relative overflow-hidden">
            <!-- Decorative Circles -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-blue-900 opacity-30 rounded-full blur-2xl -translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-800 opacity-20 rounded-full blur-3xl translate-x-1/3 translate-y-1/3"></div>
            <section id="home" class="w-full px-8 py-24 text-center text-white relative z-10">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 animate__animated animate__fadeInDown drop-shadow-lg">
                Tracer Study <br>
                <span class="bg-gradient-to-r  bg-blue-950  bg-clip-text ">Lulusan TI - UNG</span>
            </h1>
            <p class="text-lg md:text-2xl mb-8 animate__animated animate__fadeInUp font-light">
                Selamat datang di portal tracer study untuk alumni Teknik Informatika Universitas Negeri Gorontalo.
            </p>
            </section>
        </div>
        <!-- Login Form (Right) -->
        <div class="md:w-1/2 flex items-center justify-center bg-gradient-to-br from-gray-100 via-white to-gray-200">
            <section class="w-full max-w-md px-8 py-10 bg-white shadow-2xl rounded-3xl border border-gray-100 relative">
                <!-- Decorative Icon -->
                <div class="absolute -top-12 left-1/2 transform -translate-x-1/2">
                    <div class="bg-gradient-to-tr from-indigo-500 to-blue-400 p-4 rounded-full shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12A4 4 0 1 1 8 12a4 4 0 0 1 8 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold mb-6 text-center text-indigo-700 mt-6">Login</h2>
                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf
                    <!-- NIM -->
                    <div>
                        <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">NIM</label>
                        <input type="text" id="nim" name="nim" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition" placeholder="Masukkan NIM">
                    </div>
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                        <input type="password" id="password" name="password" required class="block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-400 focus:border-indigo-500 transition" placeholder="Masukkan Password">
                    </div>
                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember_me" class="ml-2 text-sm text-gray-600">Remember me</label>
                    </div>
                    <div class="flex justify-between items-center">
                        <a href="/password-reset" class="text-sm text-blue-500 hover:text-blue-700 transition">Forgot your password?</a>
                        <button type="submit" class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white py-2 px-6 rounded-full font-semibold shadow-md hover:from-indigo-600 hover:to-blue-600 transition transform hover:-translate-y-1 hover:scale-105">Log in</button>
                    </div>
                </form>
                <div class="mt-8 text-center text-gray-400 text-xs">
                    &copy; {{ date('Y') }} Teknik Informatika UNG. All rights reserved.
                </div>
            </section>
        </div>
    </div>

</body>
</html>
