<!DOCTYPE html>
<html>
    <head>
        <meta charset="uft-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>profile</title>
    </head>
    <body>
        <h1>プロフィール</h1>
    </body>
</html>


{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'Myプロフィール'を埋め込む --}}
@section('title', 'Myプロフィール')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>Myプロフィール</h1>
            </div>
        </div>
    </div>
@endsection
