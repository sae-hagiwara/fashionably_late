@extends('layouts.base')
<style>
    table {
        margin: 0px auto;
        border-collapse: collapse;
        font-size: 12px;
    }
    th {
        text-align: left;
        font-weight: 100;
        padding: 20px 30px;
        background-color: #B8AA9C;
        border: solid 1px #f1e3d5;
        color: #fff;
    }
    td {
        width: 300px;
        padding: 10px 10px 10px 20px;
        text-align: left;
        border: solid 1px #f1e3d5;
        color: #B8AA9C;
    }
    .button {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
    button {
        padding: 7px 25px;
        border: none;
        background-color:#80766B;
        font-size:12px;
        color: #FFF;
    }
    a {
        padding: 7px 25px;
        font-size: 12px;
        color: #B8AA9C;
        text-decoration: underline solid 1px #B8AA9C;
        margin-left: 5px;
    }
</style>
@section('header__title', 'FashionablyLate')

@section('title', 'Confirm')

@section('content')
@if(@isset($item))
<table>
    <tr>
        <th>お名前</th>
        <td>{{$item['first_name']}} {{$item['last_name']}}</td>
    </tr>
    <tr>
        <th>性別</th>
        <td>
            @switch($item['gender'])
                @case(1)
                    男性
                    @break
                @case(2)
                    女性
                    @break
                @case(3)
                    その他
                    @break
            @endswitch
        </td>
    </tr>
    <tr>
        <th>メールアドレス</th>
        <td>{{$item['email']}}</td>
    </tr>
    <tr>
        <th>電話番号</th>
        <td>{{$item['tel_1']}}{{$item['tel_2']}}{{$item['tel_3']}}</td>
    </tr>
    <tr>
        <th>住所</th>
        <td>{{$item['address']}}</td>
    </tr>
    <tr>
        <th>建物名</th>
        <td>{{$item['building']}}</td>
    </tr>
    <tr>
        <th>お問い合わせの種類</th>
        <td>{{$item['category']}}</td>
    </tr>
    <tr>
        <th>お問い合わせ内容</th>
        <td>{{$item['detail']}}</td>
    </tr>
</table>
@endif
<form action="/create" method="post">
    @csrf
    <input type="hidden" name="first_name" value={{$item['first_name']}}>
    <input type="hidden" name="last_name" value={{$item['last_name']}}>
    <input type="hidden" name="gender" value={{$item['gender']}}>
    <input type="hidden" name="email" value={{$item['email']}}>
    <input type="hidden" name="tel" value={{$item['tel_1']}}{{$item['tel_2']}}{{$item['tel_3']}}>
    <input type="hidden" name="address" value={{$item['address']}}>
    <input type="hidden" name="building" value={{$item['building']}}>
    <input type="hidden" name="category" value={{$item['category']}}>
    <input type="hidden" name="detail" value={{$item['detail']}}>
    <div class="button">
        <button>送信</button>
        <a href="/contact">修正</a>
    </div>
</form>
@endsection