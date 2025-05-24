@extends('layouts.base')
<style>
    .move__inner {
        text-align: right;
        margin-top: -44px;
        margin-bottom: 25px;
    }
    .move__logo {
        background-color: #F6F6F6;
        border: solid 1px #ceb79c;
        color: #ceb79c;
        font-size: 12px;
        padding: 5px 15px;
    }
    .login__form {
        background-color: #F1ECE8;
        padding: 70px;
    }
    form {
        background-color: #fff;
        height: 400px;
        width: 700px;
        margin: 0px auto;
        border-radius: 3px;
        border: solid 1px #BCB2A9;
    }
    .login__form-content {
        margin: 0px auto;
        width: 300px;
        padding: 50;
    }
    p, input {
        display: block;
        margin: 0px auto;
    }
    p {
        text-align: left;
        color:#867E71;
        margin: 30px 30px 10px;
    }
    input {
        height: 40px;
        width: 250px;
        border: none;
        padding: 20px;
        background-color: #F5F5F5;
        color: #BCB2A9;
        border-radius: 3%;
    }
    .text_ps {
        padding: 3px;
        font-size: 12px;
        background-color:rgb(250, 250, 250);
        color:red;
        margin-left: 5px;
    }
    button {
        margin: 30px 0px 0px auto;
        padding: 3px 50px;
        background-color:#80766B;
        font-size:12px;
        color: #FFF;
    }
</style>
@section('move')
<div class="move__inner">
    <a class="move__logo" href="/register">register</a>
</div>
@endsection

@section('title', 'Login')

@section('content')
<div class="login__form">
    <form action="/admin" method="post">
        @csrf
        <div class="login__form-content">
            <p>メールアドレス</p>
            <input type="text" name="email"  placeholder="例: test@example.com">
            @if($errors->has('email'))
                <div class="error" style="color: red">{{$errors->first('email')}}</div>
            @endif
            <p>パスワード</p>
            <input type="text" name="password"  placeholder="例: coachtech1106">
            @if($errors->has('password'))
                <div class="error" style="color: red">{{$errors->first('password')}}</div>
            @endif
            <div class="button">
                <button>ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection