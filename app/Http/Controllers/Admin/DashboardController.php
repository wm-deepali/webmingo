<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
       
        return view('admin.dashboard.index');
    }

    private function percentChange($old, $new): float
    {
        if ($old <= 0) {
            return $new > 0 ? 100.0 : 0.0;
        }

        return round((($new - $old) / $old) * 100, 1);
    }
}