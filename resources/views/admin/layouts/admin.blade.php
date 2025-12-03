<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - @yield('title', 'Admin')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* sedikit spacing supaya konten tidak tertutup navbar */
    body { padding-top: 64px; }
  </style>
</head>

<body class="bg-gray-100 min-h-screen">

  <!-- NAVBAR -->
  <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50 px-6 py-3 flex justify-between items-center">
    <div class="flex items-center">
      <!-- Hamburger (hp) -->
      <button id="openSidebar" class="text-2xl md:hidden mr-3 focus:outline-none">☰</button>
      <h1 class="text-lg font-bold">Admin Dashboard</h1>
    </div>

    <div class="hidden md:flex items-center bg-gray-100 rounded-full px-3 py-1 w-80">
      <input type="text" placeholder="Search..." class="bg-transparent w-full focus:outline-none text-sm">
      <i class="fa-solid fa-magnifying-glass text-gray-500 ml-2"></i>
    </div>
  </nav>

  <!-- SIDEBAR -->
  <aside id="sidebar"
         class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-40">
    <div class="p-5 border-b flex justify-between items-center">
      <h2 class="text-xl font-bold">Menu</h2>
      <button id="closeSidebar" class="text-2xl md:hidden">&times;</button>
    </div>

    <ul class="mt-4">
      <li><a href="{{ url('/admin') }}" class="block px-6 py-3 hover:bg-gray-100">Dashboard</a></li>
      <li><a href="{{ route('admin.products.index') }}" class="block px-6 py-3 hover:bg-gray-100">Kelola Produk</a></li>
      <li><a href="{{ route('admin.users.index') }}" class="block px-6 py-3 hover:bg-gray-100">Kelola User</a></li>
      <li><a href="{{ route('admin.orders.index') }}" class="block px-6 py-3 hover:bg-gray-100">Kelola Order</a></li>
      <li><a href="{{ url('/logout') }}" class="block px-6 py-3 hover:bg-gray-100 text-red-600">Logout</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="pt-6 md:ml-64 p-6">
    <div class="container mx-auto">
      @yield('content')
    </div>
  </main>

  <script>
    const openSidebar = document.getElementById("openSidebar");
    const closeSidebar = document.getElementById("closeSidebar");
    const sidebar = document.getElementById("sidebar");

    if(openSidebar) openSidebar.addEventListener("click", () => {
      sidebar.classList.remove("-translate-x-full");
    });

    if(closeSidebar) closeSidebar.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
    });
  </script>
</body>
</html>
