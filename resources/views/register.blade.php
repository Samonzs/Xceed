<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!--Themify Icon -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css" />

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/pink.css" id="color-opt">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>

<section class="bg-login d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-4">
                <div class="bg-white p-4 mt-5 rounded">
                    <div class="text-center">
                        <h4 class="fw-bold mb-3">注册</h4>
                    </div>
                    <form class="login-form">
                        <div class="row">
                            <div class="col-lg-12 mt-2">
                                <input type="text" class="form-control" placeholder="名称" name="user" required="">
                            </div>
                            <div class="col-lg-12 mt-2">
                                <input type="password" class="form-control" placeholder="密码" name="pwd" required="">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <select name="role" class="form-control">
                                    <option value="Staff">Staff</option>
                                    
                                </select>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button class="btn btn-primary w-100 login">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center mt-3">
                    <p><small class="text-white mr-2">Already have an account?</small> <a href="/admin/login" class="text-white fw-bold">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- javascript -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/smooth-scroll.polyfills.min.js"></script>
<script src="js/gumshoe.polyfills.min.js"></script>
<!-- Main Js -->
<script src="js/app.js"></script>
<script>

    $('.login').click(function () {
        //阻止表单默认提交
        event.preventDefault();
        var d = {};
        var t = $('form').serializeArray();
        $.each(t, function () {
            d[this.name] = this.value;
            if(this.value == ''){
                //增加红框
                $('input[name='+this.name+']').addClass('is-invalid');
                //增加提示
                var msg = $('input[name='+this.name+']').prev().text();
                toastr.warning('请填写'+msg);
                return false;
            }
        });
        $.post('/admin/registerPost', d, function (data) {
            if (data.code == 1) {
                toastr.success('Register Successfully!');
                setTimeout(function () {
                    window.location.href = '/admin/login';
                }, 3000);
            }else{
                toastr.error(data.msg);
            }
        });
    });
</script>
</body>

</html>
