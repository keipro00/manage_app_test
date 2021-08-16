@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('商品一覧') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                    <tr>
                        <th>商品番号</th>
                        <th>商品画像</th>
                        <th>商品名<br><input type="text" placeholder="検索"  class="name-search"></th>
                        <th>価格</th>
                        <th>在庫数</th>
                        <th>メーカー名<br>
                        <select name="" id="" class="maker-search">
                            <option value="" >検索</option>
                            <option value="">maker</option>
                        </select>
                        </th>
                        <th>
                            <a href=""><button type="button" class="btn btn-secondary search-btn">検<span class="btn-inner"></span>索</button></a>
                        </th>
                        <th>
                            <a href="/create"><button type="button" class="btn btn-secondary search-btn">新規作成</button></a>
                        </th>
                    </tr>
                    <th>1</th>
                        <th>画像</th>
                        <th>アイス</th>
                        <th>198円</th>
                        <th>10</th>
                        <th>新扉</th>
                        <th>  <a href=""><button type="button" class="btn btn-secondary search-btn">詳細表示</button></a></th>
                        <th>  <a href=""><button type="button" class="btn btn-secondary search-btn">削<span class="btn-inner">除</button></a></th>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
