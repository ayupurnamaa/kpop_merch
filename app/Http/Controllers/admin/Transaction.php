public function dashboard()
{
    $totalorder = Transaction::count(); // kalau tabelnya orders

    return view('admin.dashboard', compact('totalorder'));
}
