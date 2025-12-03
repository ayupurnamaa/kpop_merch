<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons (Heroicons) -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <style>
        .sidebar {
            transition: 0.3s ease-in-out;
        }

        .sidebar-hidden {
            transform: translateX(-100%);
        }

        .card-hover {
            transition: 0.2s ease;
        }

        .card-hover:hover {
            transform: translateY(-3px);
            box-shadow: 0px 10px 25px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body class="bg-gray-100 flex">

    <!-- SIDEBAR -->
    <aside id="sidebar" class="sidebar bg-white w-64 h-screen shadow-xl p-6 fixed md:relative">
        <h1 class="text-2xl font-bold text-indigo-600 mb-10">
            Admin Panel
        </h1>

        <nav class="space-y-4">
            <a href="/admin" class="flex items-center gap-3 text-gray-700 hover:text-indigo-600">
                <i class="ph ph-gauge"></i> Dashboard
            </a>

            <a href="/admin/products" class="flex items-center gap-3 text-gray-700 hover:text-indigo-600">
                <i class="ph ph-package"></i> Produk
            </a>

            <a href="/admin/users" class="flex items-center gap-3 text-gray-700 hover:text-indigo-600">
                <i class="ph ph-users-three"></i> User
            </a>

            <a href="/admin/orders" class="flex items-center gap-3 text-gray-700 hover:text-indigo-600">
                <i class="ph ph-shopping-cart"></i> Pesanan
            </a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 ml-0 md:ml-64">
        
        <!-- TOP NAVBAR -->
        <header class="bg-white shadow p-4 flex justify-between items-center sticky top-0 z-10">
            <button onclick="toggleSidebar()" class="md:hidden">
                <i class="ph ph-list text-3xl"></i>
            </button>
            <h2 class="font-semibold">Selamat Datang, Admin</h2>

            <a href="/logout" class="text-red-500">Logout</a>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('sidebar-hidden');
        }
    </script>

</body>

</html>
