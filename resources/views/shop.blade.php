<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KPopMerch - Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

  <!-- Header -->
  <header class="bg-black text-white py-4 shadow-lg fixed top-0 left-0 right-0 z-50">
    <div class="container mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-pink-400">
        KPopMerch💜
      </h1>
      <a href="/cart" class="flex items-center gap-2 hover:text-pink-400 transition">
        🛒 <span class="font-medium">Keranjang</span>
      </a>
    </div>
  </header>

  <!-- Main Content -->
  <main class="pt-28 pb-16 container mx-auto px-6">
    <h2 class="text-3xl font-bold text-pink-500 text-center mb-10">
      Koleksi Merchandise Terbaru
    </h2>

    <!-- Produk Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

      <!-- Produk 1 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="{{ asset('img/armybomb.webp') }}" alt="Lightstick BTS" class="w-full h-72 object-cover">
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Lightstick BTS</h3>
          <p class="text-pink-500 font-bold mb-4">Rp 650.000</p>

          <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="name" value="Lightstick BTS">
            <input type="hidden" name="price" value="650000">
            <button type="submit"
              class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-full transition">
              Tambah ke Keranjang
            </button>
          </form>
        </div>
      </div>

      <!-- Produk 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="{{ asset('img/albumbp.jpg') }}" alt="Album BLACKPINK" class="w-full h-72 object-cover">
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Album BLACKPINK - Born Pink</h3>
          <p class="text-pink-500 font-bold mb-4">Rp 480.000</p>

          <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="2">
            <input type="hidden" name="name" value="Album BLACKPINK - Born Pink">
            <input type="hidden" name="price" value="480000">
            <button type="submit"
              class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-full transition">
              Tambah ke Keranjang
            </button>
          </form>
        </div>
      </div>

      <!-- Produk 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="{{ asset('img/hoodietwice.jpg') }}" alt="Hoodie TWICE" class="w-full h-72 object-cover">
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Hoodie TWICE Official</h3>
          <p class="text-pink-500 font-bold mb-4">Rp 550.000</p>

          <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="3">
            <input type="hidden" name="name" value="Hoodie TWICE Official">
            <input type="hidden" name="price" value="550000">
            <button type="submit"
              class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-full transition">
              Tambah ke Keranjang
            </button>
          </form>
        </div>
      </div>

      <!-- Produk 4 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="{{ asset('img/seventeenls2.webp') }}" alt="Lightstick Seventeen" class="w-full h-72 object-cover">
        <div class="p-5 text-center">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Lightstick SEVENTEEN Ver.2</h3>
          <p class="text-pink-500 font-bold mb-4">Rp 720.000</p>

          <form action="{{ route('cart.add') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="4">
            <input type="hidden" name="name" value="Lightstick SEVENTEEN Ver.2">
            <input type="hidden" name="price" value="720000">
            <button type="submit"
              class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-full transition">
              Tambah ke Keranjang
            </button>
          </form>
        </div>
      </div>

    </div>
  </main>

</body>
</html>
