# security-app-practice

## 概要

COACHTECH 教材 Tutorial 10-6「Webセキュリティ ハンズオン」で作成した成果物です。
セキュリティ保護された問い合わせフォーム

## 使用技術

- PHP 8.x
- Laravel 10.x
- CSRF 保護（`@csrf`）、XSS 対策（Blade の自動エスケープ）

## 学んだこと

- CSRF保護の方法とBladeファイルでの記述方法
- SQLインジェクションの仕組みと防御方法
- XSS仕組みと対策

## 動作確認

- 動作確認URL: http://localhost/contact
- お問い合わせフォームが表示される
- フォームに入力して送信できる
- 送信完了画面で入力内容が正しく表示される
- @csrfを削除して送信すると419 Page Expiredエラーになる（CSRF保護の確認）
- メッセージ欄に<script>alert('XSS')</script>を入力しても実行されない（XSS対策の確認）
