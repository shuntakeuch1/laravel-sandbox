<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>ログインフォーム</h1>
        @isset($message)
        <p style="color:red"{{$message}}></p>
        @endisset
        <form name="loginform" action="/auth/login" method="post">
            {{ csrf_field() }}
            メールアドレス: <input name="email" type="text" value="{{old('email') }}" size="30" /><br />
            パスワード: <input name="password" type="password" value="" size="30" />
            <br />
            <button type="submit" name="action" value="send">ログイン</button>
        </form>
    </body>
</html>
