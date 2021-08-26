@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('商品登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="/store">
                        <!-- セキュリティで必ず入れる@csrf -->
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('商品名') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="product_name" value="" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- ひとまずメーカー名をIDにしてデータ反映できるかチェック -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('メーカー名') }}</label>

                            <div class="col-md-6">
                                <!-- セレクトボックスはエラーが発生・・・ -->
                            <select name="company_id" id="name" class="form-control @error('name') is-invalid @enderror">
                                <option value="" >検索</option>
                                @foreach($companies AS $company)
                                <option value="">{{ $company['company_name']}}</option>
                                  @endforeach
                             </select>

                                <!-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="company_id" value="" required autocomplete="name" autofocus> -->

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('メーカー住所') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="street_address" value="" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('価格') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="price" value="" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('在庫数') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="stock" value="" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('コメント') }}</label>

                           <div class="col-md-6">
                              <textarea name="comment" id="" cols="30" rows="10" class="form-control @error('name') is-invalid @enderror"></textarea>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('画像') }}</label>
                            <div class="col-md-6">
                                <img src="/img/pote.jpg" class="create-img" alt="">
                            </div>
                        </div> -->
                                               
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録') }}
                                </button>
                                <a class="btn btn-link" href="/home">
                                        {{ __('戻る') }}
                                    </a>
                            </div>
                        </div>
                    </form>
                </div>


                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
