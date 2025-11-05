<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<div class="container mx-auto px-6 py-10">
  <h2 class="text-3xl font-bold mb-6 text-pink-600">Keranjang Belanja</h2>

  @if(session('success'))
    <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
      {{ session('success') }}
    </div>
  @endif

  @if(!empty($cart))
    <table class="w-full text-left bg-white rounded-lg shadow-md">
      <thead>
        <tr class="bg-pink-100">
          <th class="py-3 px-4">Produk</th>
          <th class="py-3 px-4">Harga</th>
          <th class="py-3 px-4">Jumlah</th>
          <th class="py-3 px-4">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cart as $item)
        <tr class="border-t">
          <td class="py-3 px-4">{{ $item['name'] }}</td>
          <td class="py-3 px-4">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
          <td class="py-3 px-4">{{ $item['quantity'] }}</td>
          <td class="py-3 px-4 font-semibold text-gray-700">
            Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  @else
    <p class="text-gray-600 mt-6">Keranjang kamu masih kosong 😢</p>
  @endif
</div>

</body>
</html>
