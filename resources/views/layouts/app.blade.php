<!DOCTYPE html>
<html>

<head>
    <title>Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

    body {
        height: 100%;
        margin: 0;
        background: url(https://escapehunt.com/wp-content/uploads/sites/30/2018/08/Corporate-Work-Package-2530-x-1240.jpg);
        font-size: .9rem;
        font-weight: 400;
        line-height: 1.6;
        color: #212529;
        text-align: left;
        background-color: #f5f8fa;

    }

    .right_side {
        width: 50%;
        float: right;
        height: 100vh;

    }

    .left_side {
        width: 50%;
        float: left;
        height: 100vh;
        padding: 40px 0;
    }

    .navbar-laravel {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
    }

    .navbar-brand,
    .nav-link,
    .my-form,
    .login-form {
        font-family: Raleway, sans-serif;
    }

    .my-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .my-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    .login-form {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .login-form .row {
        margin-left: 0;
        margin-right: 0;
    }

    < !--new form -->.my-login-page .card {
        border-color: transparent;
        box-shadow: 0 4px 8px rgba(0, 0, 0, .05);
    }

    .my-login-page .card.fat {
        padding: 10px;
    }

    .my-login-page .card .card-title {
        margin-bottom: 30px;
    }

    .my-login-page .form-control {
        border-width: 2.3px;
    }

    .my-login-page .form-group label {
        width: 100%;
    }

    .my-login-page .btn.btn-block {
        padding: 12px 10px;
    }

    .my-login-page .footer {
        margin: 40px 0;
        color: #888;
        text-align: center;
    }

    @media screen and (max-width: 425px) {
        .my-login-page .card-wrapper {
            width: 90%;
            margin: 0 auto;
        }
    }

    @media screen and (max-width: 320px) {
        .my-login-page .card.fat {
            padding: 0;
        }

        .my-login-page .card.fat .card-body {
            padding: 15px;
        }
    }

    .card {
        width: 530px;
    }

    .form-group>label {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class='left_side'>
        @yield('content')
    </div>
    <div class='right_side'>

    </div>


</body>
<script>
function submitFORM() {
    alert('ddd');
    //document.getElementById('logout').submit();
}
</script>

</html>