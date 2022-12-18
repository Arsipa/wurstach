<!DOCTYPE html>
<html lang="en">

<head>
    <title>Авторизация</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8a553633d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link id="theme-style" rel="stylesheet" href="/css/admin.css">

</head>

<body class="app app-login p-0">
    <div class="d-flex flex-column align-content-end">
        <div class="app-auth-body mx-auto" style="position: absolute; top:40%; left:50%; transform: translate(-50%,-50%);">
            <h2 class="auth-heading text-center mb-2">Админ панель</h2>
            <div class="auth-form-container text-left">
                <form method="post" action="{{ route('admin.login') }}" class="auth-form login-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="email mb-3">
                        <label class="sr-only" for="signin-email">Login</label>
                        <input id="signin-email" name="login" type="text" class="form-control signin-email"
                            placeholder="Логин" required="required">
                    </div>
                    <!--//form-group-->
                    <div class="password mb-3">
                        <label class="sr-only" for="signin-password">Password</label>
                        <input id="signin-password" name="password" type="password" class="form-control signin-password"
                            placeholder="Пароль" required="required">
                    </div>
                    <!--//form-group-->
                    <div style="color: red;">
                        @error('login')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Авторизация
                        </button>
                    </div>
                </form>
            </div>
        </div>


</body>

</html>
