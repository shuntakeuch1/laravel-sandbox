<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>ユーザー登録フォーム</h1>
        <form name="registform" action="/auth/register" method="post">
            {{ csrf_field() }}
            名前: <input name="name" type="text" value="" size="30" /><span>
            {{ $errors->first('name') }}</span><br />
            メールアドレス: <input name="email" type="text" value="" size="30" /><span>
            {{ $errors->first('email') }}</span><br />
            パスワード: <input name="password" type="password" value="" size="30" /><span>
            {{ $errors->first('password') }}</span><br />
            パスワード(確認): <input name="password_confirmation" type="password" value="" size="30" /><span><br />
            {{ $errors->first('password_confirmation') }}</span>
            <button type="submit" name="action" value="send">送信</button>
        </form>
    </body>
</html>
