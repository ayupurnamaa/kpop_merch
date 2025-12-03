public function dashboard()
{
    $totalorder = Order::count(); // kalau tabelnya orders

    return view('admin.dashboard', compact('totalorder'));
}
