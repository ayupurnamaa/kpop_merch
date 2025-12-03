<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

  <!-- NAVBAR -->
  <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50 px-6 py-3 flex justify-between items-center">
    
    <!-- LEFT: Hamburger -->
    <button id="openSidebar" class="text-3xl md:hidden text-gray-700 focus:outline-none">
      ☰
    </button>

    <!-- TITLE -->
    <h1 class="text-xl font-bold ml-3">Admin Dashboard</h1>

    <!-- SEARCH BAR -->
    <div class="hidden md:flex items-center bg-gray-100 rounded-full px-4 py-2 w-80">
      <input type="text" placeholder="Search..."
        class="bg-transparent w-full focus:outline-none text-sm">
      🔍
    </div>
  </nav>


  <!-- SIDEBAR -->
  <aside id="sidebar"
    class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-300 z-50">
    
    <div class="p-5 border-b flex justify-between items-center">
      <h2 class="text-xl font-bold">Menu</h2>

      <!-- CLOSE BUTTON HP -->
      <button id="closeSidebar" class="text-3xl md:hidden">&times;</button>
    </div>

    <ul class="mt-4 space-y-1">

      <li>
        <a href="/admin" class="block px-6 py-3 hover:bg-gray-200">Dashboard</a>
      </li>

      <li>
        <a href="/admin/products" class="block px-6 py-3 hover:bg-gray-200">Kelola Produk</a>
      </li>

      <li>
        <a href="/admin/users" class="block px-6 py-3 hover:bg-gray-200">Kelola User</a>
      </li>

      <li>
        <a href="/admin/orders" class="block px-6 py-3 hover:bg-gray-200">Kelola Transaksi</a>
      </li>

      <li>
        <a href="/logout" class="block px-6 py-3 hover:bg-gray-200 text-red-500 font-semibold">Logout</a>
      </li>

    </ul>
  </aside>


  <!-- MAIN CONTENT -->
  <main class="pt-20 md:ml-64 p-6">
      @yield('content')
  </main>


  <script>
    const openSidebar = document.getElementById("openSidebar");
    const closeSidebar = document.getElementById("closeSidebar");
    const sidebar = document.getElementById("sidebar");

    openSidebar.addEventListener("click", () => {
      sidebar.classList.remove("-translate-x-full");
    });

    closeSidebar.addEventListener("click", () => {
      sidebar.classList.add("-translate-x-full");
    });
  </script>

</body>
</html>
