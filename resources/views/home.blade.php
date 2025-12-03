<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KPopMerch - Home</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .glass-header {
      background: rgba(0,0,0,0.7);
      backdrop-filter: blur(10px);
    }
    .search-box {
      background: rgba(255,255,255,0.1);
      border: 1px solid rgba(255,255,255,0.4);
    }
  </style>
</head>

<body class="bg-black text-white font-sans">

<!-- NAVBAR FIXED -->
<header class="glass-header fixed top-0 left-0 right-0 z-50 border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

    <!-- LOGO -->
    <h1 class="text-pink-400 text-3xl font-extrabold">
      KPop<span class="text-purple-400">Merch</span>💜
    </h1>

    <!-- DESKTOP MENU -->
    <ul class="hidden md:flex space-x-8 text-white/90 font-medium">
      <li><a href="/" class="hover:text-pink-400">Home</a></li>
      <li><a href="/shop" class="hover:text-pink-400">Shop</a></li>
      <li><a href="#" class="hover:text-pink-400">Best Sellers</a></li>
      <li><a href="#" class="hover:text-pink-400">About</a></li>
      <li><a href="#" class="hover:text-pink-400">Contact</a></li>
    </ul>

    <div class="flex items-center space-x-4">

      <!-- SEARCH DESKTOP -->
      <div class="hidden md:block">
        <input type="text" placeholder="Search..."
               class="search-box px-3 py-1 rounded-full text-sm w-40 focus:outline-none">
      </div>

      <!-- CART ALWAYS VISIBLE -->
      <a href="/cart" class="text-2xl hover:text-pink-400 transition">
        <i class="fa-solid fa-cart-shopping"></i>
      </a>

      <!-- HAMBURGER (BESAR) -->
      <button id="menuBtn" class="md:hidden text-4xl focus:outline-none">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>

  </div>

  <!-- DROPDOWN MOBILE -->
  <div id="mobileMenu" class="hidden bg-black/90 backdrop-blur-lg border-t border-white/10 md:hidden">
    <ul class="flex flex-col text-white/90 font-medium p-5 space-y-4">
      <li><a href="/" class="hover:text-pink-400">Home</a></li>
      <li><a href="/shop" class="hover:text-pink-400">Shop</a></li>
      <li><a href="#" class="hover:text-pink-400">Best Sellers</a></li>
      <li><a href="#" class="hover:text-pink-400">About</a></li>
      <li><a href="#" class="hover:text-pink-400">Contact</a></li>

      <!-- Search di Mobile -->
      <input type="text" placeholder="Search..."
             class="search-box px-3 py-2 rounded-full w-full focus:outline-none">
    </ul>
  </div>
</header>

<script>
  document.getElementById("menuBtn").onclick = () => {
    document.getElementById("mobileMenu").classList.toggle("hidden");
  };
</script>

<!-- HERO SECTION -->
<section class="relative h-screen flex items-center justify-center">
  <div class="absolute inset-0 bg-[url('{{ asset('img/kpop-bg.jpeg') }}')] bg-cover bg-center"></div>
  <div class="absolute inset-0 bg-black/60"></div>

  <div class="relative text-center px-6">
    <h2 class="text-4xl md:text-6xl font-extrabold mb-4 text-pink-300">
      Welcome to KPopMerch 💜
    </h2>
    <p class="text-gray-200 text-lg mb-6">Temukan merchandise idol favoritmu hanya di sini!</p>
    <a href="#" class="bg-pink-500 hover:bg-pink-600 px-8 py-3 rounded-full font-semibold shadow-lg">
      Buy Now
    </a>
  </div>
</section>

<!-- SLIDER (TIDAK DIUBAH) -->
<section class="py-16 bg-orange-50 text-black">
  <div class="container mx-auto px-4">

    <div class="relative max-w-6xl mx-auto">

      <div class="overflow-hidden rounded-2xl shadow-xl">
        <div id="productSlider" class="flex transition-transform duration-500">

          <div class="min-w-full relative">
            <img src="{{ asset('img/merch1.webp') }}" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
              <h2 class="text-white text-4xl font-bold p-12">Lightstick BTS</h2>
            </div>
          </div>

          <div class="min-w-full relative">
            <img src="{{ asset('img/merch2.jpg') }}" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
              <h2 class="text-white text-4xl font-bold p-12">Album Blackpink</h2>
            </div>
          </div>

          <div class="min-w-full relative">
            <img src="{{ asset('img/merch3.png') }}" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-black/40 flex items-center">
              <h2 class="text-white text-4xl font-bold p-12">Poster Stray Kids</h2>
            </div>
          </div>

        </div>
      </div>

      <button id="prevBtn" class="absolute left-4 top-1/2 bg-black/60 text-white p-3 rounded-full">
        <i class="fa-solid fa-chevron-left"></i>
      </button>

      <button id="nextBtn" class="absolute right-4 top-1/2 bg-black/60 text-white p-3 rounded-full">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

    </div>

  </div>
</section>


<script>
  let slider = document.getElementById('productSlider');
  let index = 0;

  function slide() {
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  document.getElementById("nextBtn").onclick = () => {
    index = (index + 1) % 3;
    slide();
  };

  document.getElementById("prevBtn").onclick = () => {
    index = (index - 1 + 3) % 3;
    slide();
  };

  setInterval(() => {
    index = (index + 1) % 3;
    slide();
  }, 5000);
</script>

</body>
</html>
