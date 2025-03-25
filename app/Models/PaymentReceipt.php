<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PaymentReceipt extends Model
{
    use HasFactory;

    protected $table = 'payment_receipt'; // 指定完整表名
    protected $primaryKey = 'customer_id'; // 設定主鍵名稱（如果有）
    public $timestamps = false; // 關閉自動時間戳記

    // 取得時間區間內電費單資料
    public static function getAllBills($startDate, $endDate)
    {

        try {
            // 1.使用原生SQL語法
            // $results = DB::select(
            //     'SELECT * 
            //     FROM payment_receipt
            //     WHERE billing_month BETWEEN ? AND ?',
            //     [$startDate, $endDate]
            // );

            // 2.使用Query Builder語法
            // $results = DB::table('payment_receipt')
            //     ->whereBetween('billing_month', [$startDate, $endDate])
            //     ->get();

            // 3.使用Eloquent ORM語法
            $results = PaymentReceipt::whereBetween('billing_month', [$startDate, $endDate])->get();
        } catch (\Exception $e) {
            // 處理錯誤
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $results;
    }
}
