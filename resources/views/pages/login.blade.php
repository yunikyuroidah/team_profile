<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-100 to-pink-100">

    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-2 text-gray-800">
            Selamat Datang 👋
        </h2>
        <p class="text-center text-gray-500 mb-6 text-sm">
            Masukkan username atau email untuk melanjutkan
        </p>

        <form method="POST" action="/login" class="space-y-5">
            @csrf

            <!-- Username / Email -->
            <div>
                <label class="block text-sm font-medium text-gray-600 mb-1">
                    Username / Email
                </label>
                <input
                    type="text"
                    name="user"
                    placeholder="contoh: fitaa atau fitaa@gmail.com"
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </div>

            <!-- Remember (AKTIF, TIDAK DIMATIKAN) -->
            <div class="flex items-center gap-2">
                <input
                    type="checkbox"
                    name="remember"
                    class="accent-purple-500"
                    checked>
                <label class="text-sm text-gray-600">
                    Simpan data selama 30 hari
                </label>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-500 to-pink-500 text-white py-2.5 rounded-lg font-semibold hover:opacity-90 transition">
                Masuk
            </button>
        </form>
    </div>

</body>

</html>