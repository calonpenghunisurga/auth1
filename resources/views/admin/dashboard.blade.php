<x-app-layout>
    <div class="flex min-h-screen bg-gradient-to-r from-gray-200 via-gray-400 to-gray-600x">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 shadow-lg p-6 transition-all transform hover:w-80 duration-300 ease-in-out overflow-hidden">
            <h3 class="text-lg font-bold text-white text-center">Admin Panel</h3>
            <ul class="mt-6 space-y-2">
                <li><a href="{{url ('/')}}" class="text-center block p-3 rounded-lg bg-blue-600 text-white shadow-md hover:bg-blue-700 transition-all duration-300 ease-in-out">Dashboard</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-900 p-6 shadow-xl rounded-lg border-l-8 border-blue-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">Total Users</h3>
                    <p class="text-4xl font-bold text-blue-400 animate-bounce">1,250</p>
                </div>
                <div class="bg-gray-900 p-6 shadow-xl rounded-lg border-l-8 border-green-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">New Orders</h3>
                    <p class="text-4xl font-bold text-green-400 animate-bounce">320</p>
                </div>
                <div class="bg-gray-900 p-6 shadow-xl rounded-lg border-l-8 border-purple-500 transform hover:scale-105 transition-all duration-300">
                    <h3 class="text-lg font-semibold text-white">Revenue</h3>
                    <p class="text-4xl font-bold text-purple-400 animate-bounce">$12,500</p>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
