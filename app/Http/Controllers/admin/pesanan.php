public function dashboard()
{
    $totalorder = Pesanan::count(); // kalau tabelnya orders

    return view('admin.dashboard', compact('totalorder'));
}
