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
    .find__form {
        width: 800px;
        margin: 0px auto 20px;
    }
    .find__input, .find__gender, .find__category, .find__date {
        background-color: #F6F6F6;
        border: solid 1px #e0dddd;
        color: #887A6A;
    }
    .find__input {
        margin-right: 13px;
        padding: 7px 10px;
        width: 230px;
    }
    .find__input::placeholder {
        font-size: 11px;
        color: #ceb79c;
    }
    .find__gender {
        margin-right: 10px;
        padding: 7px 5px;
    }
    .find__category {
        margin-right: 10px;
        padding: 7px 10px;
    }
    .find__date {
        margin-right: 10px;
        padding: 5px;
    }
    .find__button {
        margin-right: 10px;
        padding: 6px 19px;
        background-color: #887A6A;
        color: #fff;
        border: none;
        font-size: 12px;
    }
    .reset__button {
        padding: 6px 9px;
        background-color: #deceba;
        color: #fff;
        border: none;
        font-size: 12px;
    }
    .process {
        width: 800px;
        margin: 0px auto 15px;
    }
    .process__export {
        text-align: left;
    }
    .process__export-button {
        background-color: #eae5dc;
        color: #887A6A;
        border: none;
        font-size: 12px;
        padding: 3pz 12px;
    }
    .process__paginate {
        margin: -25px auto 0px 0px;
        text-align: right;
    }
    table {
        width: 800px;
        margin: 0px auto 50px;
        font-size: 12px;
        border-collapse: collapse;
    }
    tr {
        border: solid 1px #DCD3C8;
        height: 35px;
    }
    .table_label {
    }
    .label {
        border: solid 1px #887A6A;
        padding-left: 20px;
        background-color: #887A6A;
        color: #F6F6F6;
        text-align: left;
    }
    .list {
        height: 45px;
    }
    td {
        color:#887A6A;
        padding-left: 20px;
    }
    .list__button {
        padding-right: 5px;
    }
    .list__button-text {
        border: solid 1px #DCD3C8;
        color: #DCD3C8;
        font-size: 12px;
        padding: 5px 10px;
    }
</style>
@section('move')
<div class="move__inner">
    <a class="move__logo" href="/login">logout</a>
</div>
@endsection

@section('title', 'Admin')

@section('content')
<form class="find__form" action="find" method="POST">
@csrf
    <input class="find__input" type="text" name="input" value="" placeholder="名前やメールアドレスを入力してください">
    <select class="find__gender" name="gender" id="">
        <option value="">性別</option>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
    </select>
    <select class="find__category" name="category" id="">
        <option value="">お問い合わせの種類</option>
        @foreach($categories as $category)
        <option value={{$category->id}}>{{$category->content}}</option>
        @endforeach
    </select>
    <input class="find__date" type="date" name="created">
    <input class="find__button" type="submit" value="検索">
    <input class="reset__button" type="reset" value="リセット">
</form>

<div class="process">
    <div class="process__export">
        <button class="process__export-button">エクスポート</button>
    </div>
    <div class="process__paginate">
        {{$contacts->links()}}
    </div>
</div>

<table>
    <tr class="table_label">
        <th class="label">お名前</th>
        <th class="label">性別</th>
        <th class="label">メールアドレス</th>
        <th class="label">お問合せの種類</th>
        <th class="label"></th>
    </tr>
@if(@isset($item))
@else
    @foreach($contacts as $contact)
    <tr class="list">
        <td>{{$contact->first_name}} {{$contact->last_name}}</td>
        <td>
            @switch($contact->gender)
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
        <td>{{$contact->email}}</td>
        <td>{{$contact->category->content}}</td>
        <td class="list__button">
            <a class="list__button-text" href="">詳細</a>
        </td>
    </tr>
    @endforeach
@endif
</table>
@endsection