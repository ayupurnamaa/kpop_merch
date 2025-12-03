@if(session('success'))
  <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
    {{ session('success') }}
  </div>
@endif

@if($errors->any())
  <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
    <ul class="list-disc pl-5">
      @foreach($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif
