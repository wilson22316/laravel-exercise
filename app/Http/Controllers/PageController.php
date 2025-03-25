<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class PageController extends Controller
// {
//     public function home()
//     {
//         $data = [
//             'title' => '首頁',
//             'content' => '這是控制器傳遞的內容。',
//             'test1' => '測試',
//         ];

//         return view('home', $data);
//     }
// }

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function home()
    {
        // 使用查詢構建器從 MSSQL 資料表撈取資料
        // $bills = DB::connection('sqlsrv')
        //     ->table('dbo.electricity_bill')
        //     ->select('customer_id')
        //     ->get();
        $bills = DB::select(
            'SELECT * 
            FROM EMS_OFFICE.dbo.electricity_bill
            WHERE total_amount > 7000
            '
        );

        // dd($bills); // Dump and die 用於檢查數據結構


        // 傳遞資料給視圖
        return view('home', ['bills' => $bills]);
    }
}
