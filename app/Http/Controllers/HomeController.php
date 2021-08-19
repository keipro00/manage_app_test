<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::get();
        return view('home' ,compact('products'));
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        // 商品登録データを取得
        $data = $request->all();
        // dd($data);
        // POSTされたデータをDB（memosテーブル）に挿入
        // MEMOモデルにDBへ保存する命令を出す
        // $company_id = Company::insertGetId([
        //     'company_name' =>  $data['company_name'], 'street_address' => $data['street_address']
        // ]);

        // ひとまずcompany_idを入れてデータベースへの反映まで実施
        $product_id = Product::insertGetId([
          'product_name' => $data['product_name'],'company_id' => $data['company_id'], 'price' => $data['price'], 'stock' => $data['stock'], 'comment' => $data['comment']
        ]);
       
        return redirect()->route('home');
    }

}