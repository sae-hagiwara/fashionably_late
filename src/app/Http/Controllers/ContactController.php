<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Models\Category;

class ContactController extends Controller
{
    //
    public function register(){
        return view('admin.register');
    }
    public function login(){
        return view('admin.login');
    }

    //
    public function admin(){
        $categories = Category::all();
        $contacts = Contact::with('category')->simplePaginate(7);
        return view('admin.admin', ['categories'=>$categories,'contacts'=>$contacts]);
    }
    /*public function find(){
        return view('admin', ['input' => '']);
    }
    //検索
    public function search(){
        $item = Contact::where('first_name' , 'last_name', 'email', "%{$input}%")->get();
        //$item = Contact::where('first_name', 'last_name', 'email', $input)->get();
        $param = [
            'input' => $input,
            'item' => $item
        ];
        return view('find', $param);
    }
*/


    //お問合せフォーム入力ページの表示
    public function add(){
        $categories = Category::all();
        return view('contact.contact', ['categories'=>$categories]);
    }
    //お問合せフォーム確認ページの表示
    public function show(ContactRequest $request){
        $form = $request->all();
        //dd($form);
        return view('contact.confirm', ['item'=>$form]);
    }
    //内容確認画面で送信すると保存される機能
    public function create(ContactRequest $request){
        $form = $request->all();
        //dd($form);
        Contact::create($form);
        return redirect('/thanks');
    }
    //サンクスページの表示
    public function index(){
        return view('contact.thanks');
    }
}
