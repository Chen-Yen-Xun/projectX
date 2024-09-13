<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>長平塗裝 - 控制台 - 登入</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <form method="post" action="/admin/doLogin">
                {{ csrf_field() }}
                <div class="row mt-4">
                    <div class="col-2 text-center">帳號</div>
                    <div class="col-4">
                        <input type="text" name="Username" class="form-control" required value="{{ old('Username') }}">
                    </div>
                </div>
                @if ($errors->has("msg"))
                <div class="row">
                    <div class="col-8 text-danger text-center">{{ $errors->first("msg") }}</div>
                </div>
                @endif
                <div class="row mt-3">
                    <div class="col-2 text-center">密碼</div>
                    <div class="col-4">
                        <input type="password" name="Password" class="form-control" required value="{{ old('Password') }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 text-center">認證碼</div>
                    <div class="col-2">
                        <input type="text" name="code" class="form-control" required>
                    </div>
                    <div class="col-4">
                        <!-- <img src="/captcha/math?"> -->
                        <img src="/captcha/flat?" onclick="this.src='/captcha/flat?' + Math.random()" style="cursor:pointer">
                    </div>
                </div>
                @if ($errors->has("code"))
                <div class="row">
                    <div class="col-8 text-danger text-center">{{ $errors->first("code") }}</div>
                </div>
                @endif
                <div class="row mt-3 text-end mb-3">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-lg"> 登 入 </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>