<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KPopMerch - Home</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome v6 (biar ikon pasti muncul) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* efek blur kaca pada header */
    .glass-header {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* style input search */
    .search-input {
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.3);
      color: white;
      transition: all 0.3s ease;
    }

    .search-input::placeholder {
      color: rgba(255, 255, 255, 0.6);
    }

    .search-input:focus {
      background: rgba(255, 255, 255, 0.2);
      outline: none;
      border-color: rgba(255, 255, 255, 0.6);
    }
  </style>
</head>
<body class="bg-black text-white font-sans">

  <!-- HEADER -->
  <header class="glass-header fixed top-0 left-0 right-0 z-40">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between py-4">
        
        <!-- Logo -->
        <div class="flex items-center space-x-2">
          <h1 class="text-pink-400 text-2xl font-extrabold">KPop<span class="text-purple-400">Merch</span>💜</h1>
        </div>

        <!-- Menu -->
        <ul class="hidden md:flex items-center space-x-8 text-white/90 font-medium">
          <li><a href="#" class="hover:text-pink-400 transition">Home</a></li>
          <li><a href="/shop" class="hover:text-pink-400 transition">Shop</a></li>
          <li><a href="#" class="hover:text-pink-400 transition">Best Sellers</a></li>
          <li><a href="#" class="hover:text-pink-400 transition">About</a></li>
          <li><a href="#" class="hover:text-pink-400 transition">Contact</a></li>
        </ul>

        <!-- Search & Cart -->
        <div class="flex items-center space-x-3">
          <input type="text" placeholder="Search..." 
                 class="search-input px-3 py-1 rounded-full text-sm w-32 md:w-44">

          <!-- Ikon keranjang -->
          <a href="/cart"
             class="text-2xl hover:text-pink-400 transition transform hover:scale-110 hover:drop-shadow-[0_0_6px_rgba(236,72,153,0.8)]">
             <i class="fa-solid fa-cart-shopping"></i>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- HERO SECTION -->
  <section class="relative h-screen flex items-center justify-center">
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('{{ asset('img/kpop-bg.jpeg') }}')] bg-cover bg-center"></div>
    <div class="absolute inset-0 bg-black/60"></div>

    <!-- Content -->
    <div class="relative text-center px-6">
      <h2 class="text-4xl md:text-6xl font-extrabold mb-6 drop-shadow-lg text-pink-300">
        Welcome to KPopMerch 💜
      </h2>
      <p class="text-gray-200 mb-6 text-lg">Temukan merchandise idol favoritmu hanya di sini!</p>
      <a href="#"
         class="bg-pink-500 hover:bg-pink-600 text-white font-semibold px-8 py-3 rounded-full transition transform hover:scale-105 shadow-lg">
        Buy Now
      </a>
    </div>
  </section>

  <!-- Product Slider Section -->
<section class="py-16 bg-orange-50">
    <div class="container mx-auto px-4">
        <div class="relative max-w-6xl mx-auto">
            
            <!-- Slider Container -->
            <div class="slider-container overflow-hidden rounded-2xl shadow-2xl">
                <div class="slider-wrapper flex transition-transform duration-500 ease-in-out" id="productSlider">
                   
                    <!-- Slide 1 -->                         
                    <div class="slide min-w-full relative">
                        <a href="#" class="block">
                            <img src="{{ asset('img/merch1.webp') }}" alt="Lightstick BTS" class="w-full h-96 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                                <div class="text-white p-8 md:p-12">
                                    <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight hover:underline">
                                        Lightstick BTS<br>
                                        Original Official<br>
                                        Lengkap Bluetooth<br>
                                        Concert Mode!
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Slide 2 -->
                    <div class="slide min-w-full relative">
                        <a href="#" class="block">
                            <img src="{{ asset('img/merch2.jpg') }}" alt="Album Blackpink" class="w-full h-96 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                                <div class="text-white p-8 md:p-12">
                                    <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight hover:underline">
                                        Album Blackpink<br>
                                        Born Pink Limited<br>
                                        Photobook + Poster<br>
                                        Eksklusif!
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="slide min-w-full relative">
                        <a href="#" class="block">
                            <img src="{{ asset('img/merch3.png') }}" alt="Poster Stray Kids" class="w-full h-96 object-cover">
                            <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                                <div class="text-white p-8 md:p-12">
                                    <h2 class="text-3xl md:text-5xl font-bold mb-4 leading-tight hover:underline">
                                        Poster Stray Kids<br>
                                        Desain Terbaru<br>
                                        Kualitas Premium<br>
                                        Koleksi Wajib!
                                    </h2>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white rounded-full p-3 transition-all duration-300 z-10" id="prevBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 hover:bg-opacity-70 text-white rounded-full p-3 transition-all duration-300 z-10" id="nextBtn">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            
            <!-- Slide Indicators -->
            <div class="flex justify-center mt-6 space-x-2">
                <button class="w-3 h-3 rounded-full bg-pink-500 indicator active" data-slide="0"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 indicator" data-slide="1"></button>
                <button class="w-3 h-3 rounded-full bg-gray-300 indicator" data-slide="2"></button>
            </div>
        </div>
    </div>
</section>

<!-- Slider Script -->
<script>
    const slider = document.getElementById('productSlider');
    const slides = document.querySelectorAll('.slide');
    const next = document.getElementById('nextBtn');
    const prev = document.getElementById('prevBtn');
    const indicators = document.querySelectorAll('.indicator');
    let index = 0;

    function showSlide() {
        slider.style.transform = `translateX(-${index * 100}%)`;
        indicators.forEach((dot, i) => {
            dot.classList.toggle('bg-pink-500', i === index);
            dot.classList.toggle('bg-gray-300', i !== index);
        });
    }

    next.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        showSlide();
    });

    prev.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        showSlide();
    });

    // auto slide setiap 5 detik
    setInterval(() => {
        index = (index + 1) % slides.length;
        showSlide();
    }, 5000);
</script>
</body>
</html>
