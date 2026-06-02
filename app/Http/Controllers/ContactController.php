<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * お問い合わせフォームの表示
     */
    public function showForm()
    {
        return view('contact.form');
    }

    /**
     * お問い合わせ送信処理
     */
    public function submitForm(Request $request)
    {
        // 1. ブレードが求めている変数名に合わせて、1つずつデータを抽出する
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // 2. compact() にそれぞれの変数名を引き渡す（これで $name, $email, $message が個別に画面へ届きます）
        return view('contact.thanks', compact('name', 'email', 'message'));
    }
}