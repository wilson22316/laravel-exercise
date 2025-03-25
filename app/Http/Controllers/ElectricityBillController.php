<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentReceipt;

class ElectricityBillController extends Controller
{
    // 撈取所有電費資料
    public function index(Request $request)
    {
        // 取得前端傳來的 startTime 和 endTime
        $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');

        if (!$startTime || !$endTime) {
            return response()->json(['error' => '缺少 startTime 或 endTime'], 400);
        }

        $bills = PaymentReceipt::getAllBills($startTime, $endTime);  // 使用 Model 中的方法

        // return response()->json($bills);  // 回傳 JSON 資料

        return response()->json([
            'message' => $startTime . '～' . $endTime . '的電費單在此',
            'data' => $bills
        ]);
    }
}
