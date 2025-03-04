<x-app-layout>
    <div class="flex min-h-screen bg-gradient-to-br from-gray-700 via-gray-900 to-black animate-gradient">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 shadow-lg p-6 transition-transform transform hover:scale-10 rounded-lg">
            <h3 class="text-lg font-bold text-white text-center">User Panel</h3>
            <ul class="mt-4 space-y-3">
                <li><a href="{{url ('/')}}" class="text-center block p-3 rounded-lg bg-blue-600 text-white shadow-md hover:bg-blue-700 transition-all duration-300">Dashboard</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-800 p-6 shadow-xl rounded-lg border-l-8 border-blue-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">Total Books</h3>
                    <p class="text-4xl font-bold text-blue-400 animate-bounce">125</p>
                </div>
                <div class="bg-gray-800 p-6 shadow-xl rounded-lg border-l-8 border-green-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">Books Read</h3>
                    <p class="text-4xl font-bold text-green-400 animate-bounce">87</p>
                </div>
                <div class="bg-gray-800 p-6 shadow-xl rounded-lg border-l-8 border-purple-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">Wishlist</h3>
                    <p class="text-4xl font-bold text-purple-400 animate-bounce">38</p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
