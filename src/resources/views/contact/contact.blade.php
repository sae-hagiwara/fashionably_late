@extends('layouts.base')
<style>
    table {
        margin: 0px auto;
        font-size: 13px;
    }
    th {
        width: 30%;
        font-weight: 100;
        text-decoration: none;
        text-align: left;
        margin: 0px 0px auto auto;
    }
    label {
        display: block;
        color:#867E71;
        margin: 20px 10px 0px;
    }
    .name__label {
        margin: 0px 10px;
    }
    .text_ps {
        padding: 3px;
        font-size: 10px;
        background-color:rgb(250, 250, 250);
        color:red;
        margin-left: 5px;
    }
    td {
        color:#867E71;
    }
    input, .input_category {
        background-color: #F5F5F5;
        color: #c3aa8e;
        border: none;
        border-radius: 3%;
        padding: 11px 20px;
        font-size: 10px;
    }
    input::placeholder, textarea::placeholder {
        font-size:10px;
        color: #c3aa8e;
    }
    .input_first_name {
        width: 47%;
        margin-right:4%;
    }
    .input_last_name {
        width: 47%;
    }
    .gender__td {
        display: flex;
        color:#867E71;
        margin-top: 20px;
    }
    .gender__div {
        display: inline;
        margin-right: 5%;
    }
    .input_email {
        width: 100%;
        margin-top: 20px;
    }
    .input_tel {
        width: 31.1%;
        margin-top: 20px;
    }
    .input_address {
        width: 100%;
        margin-top: 20px;
    }
    .input_building {
        width: 100%;
        margin-top: 20px;
    }
    .input_category {
        width: 50%;
        margin-top: 20px;
    }
    textarea {
        width:100%;
        background-color: #F5F5F5;
        color: #80766B;
        border: none;
        border-radius: 3%;
        margin-top: 20px;
        padding: 15px 20px;
    }
    .button {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    button {
        padding: 7px 25px;
        border: none;
        background-color:#80766B;
        font-size:10px;
        color: #FFF;
    }
</style>
@section('title', 'Contact')

@section('content')
<form action="/confirm" method="post">
    <table>
    @csrf
        <tr>
            <th>
                <label class="name__label" for="name">お名前<span class="text_ps">※</span></label>
            </th>
            <td>
                <input class="input_first_name" type="text" name="first_name"  placeholder="例: 山田">
                <input class="input_last_name" type="text" name="last_name"  placeholder="例: 太郎">
            </td>
        </tr>
        </tr>
        <tr>
            <th></th>
            <td class="error" style="color: red">
                @if($errors->has('first_name'))
                {{$errors->first('first_name')}}
                @endif
                @if($errors->has('last_name'))
                {{$errors->first('last_name')}}
                @endif
            </td>
        </tr>
        <tr>
            <th>
                <label for="gender">性別<span class="text_ps">※</span></label>
            </th>
            <td class="gender__td">
                <div class="gender__div">
                    <input class="input_gender" type="radio" name="gender" value="1"><span>男性</span>
                </div>
                <div class="gender__div">
                    <input class="input_gender" type="radio" name="gender" value="2"><span>女性</span>
                </div>
                <div class="gender__div">
                    <input class="input_gender" type="radio" name="gender" value="3"><span>その他</span>
                </div>
            </td>
        </tr>
        @if($errors->has('gender'))
        <tr>
            <th></th>
            <td class="error" style="color: red">{{$errors->first('gender')}}</td>
        </tr>
        @endif
        <tr>
            <th>
                <label for="email">メールアドレス<span class="text_ps">※</span></label>
            </th>
            <td><input class="input_email" type="email" name="email" placeholder="例: test@example.com"></td>
        </tr>
        @if($errors->has('email'))
        <tr>
            <th></th>
            <td class="error" style="color: red">{{$errors->first('email')}}</td>
        </tr>
        @endif
        <tr>
            <th>
                <label for="tel">電話番号<span class="text_ps">※</span></label>
            </th>
            <td>
                <input class="input_tel" type="tel_1" name="tel_1"  placeholder=""> - <input class="input_tel" type="tel_2" name="tel_2"  placeholder=""> - <input class="input_tel" type="tel_3" name="tel_3"  placeholder="">
            </td>
        </tr>
        <tr>
            <th></th>
            <td class="error" style="color: red">
                @if($errors->has('tel_1'))
                {{$errors->first('tel_1')}}
                @endif
                @if($errors->has('tel_2'))
                {{$errors->first('tel_2')}}
                @endif
                @if($errors->has('tel_3'))
                {{$errors->first('tel_3')}}
                @endif
            </td>
        </tr>
        <tr>
            <th>
                <label for="address">住所<span class="text_ps">※</span></label>
            </th>
            <td>
                <input class="input_address" type="text" name="address"  placeholder="例: 東京都渋谷区千駄々谷1-2-3">
            </td>
        </tr>
        @if($errors->has('address'))
        <tr>
            <th></th>
            <td class="error" style="color: red">{{$errors->first('address')}}</td>
        </tr>
        @endif
        <tr>
            <th>
                <label for="building">建物名</label>
            </th>
            <td>
                <input class="input_building" type="text" name="building"  placeholder="例: 千駄々谷マンション101">
            </td>
        </tr>
        <tr>
            <th>
                <label>お問い合わせの種類<span class="text_ps">※</span></label>
            </th>
            <td>
                <select class="input_category" name="category" id="">
                    <option class="category_text" value="">選択してください</option>
                    @foreach($categories as $category)
                    <option value={{$category->id}}>
                        {{$category->content}}
                    </option>
                    @endforeach
                </select>
            </td>
        </tr>
        @if($errors->has('category'))
        <tr>
            <th></th>
            <td class="error" style="color: red">{{$errors->first('category')}}</td>
        </tr>
        @endif
        <tr>
            <th>
                <label for=detail>お問い合わせ内容<span class="text_ps">※</span></label>
            </th>
            <td><textarea name="detail" cols="" rows="6" placeholder="お問い合わせ内容をご記載ください"></textarea></td>
        </tr>
        @if($errors->has('detail'))
        <tr>
            <th></th>
            <td class="error" style="color: red">{{$errors->first('detail')}}</td>
        </tr>
        @endif
    </table>
    <div class="button">
        <button>確認画面</button>
    </div>
</form>
@endsection