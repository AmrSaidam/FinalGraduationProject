<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:33 GMT -->
<head>
    @include('TemplateMainComponent.IncodingHeader')
            <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    @include('TemplateMainComponent.CSSHeader')

</head>
<body class="blank">

<!-- Simple splash screen-->
@include('TemplateMainComponent.SimpleSplash')
<!--[if lt IE 7]>
@include('TemplateMainComponent.InternetExplorerValidation')
<!--[endif]-->

<div class="color-line"></div>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="register-container" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h2><i class="pe-7s-users"></i> تسجيل عضوية </h2>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="{{ route('signup') }}" method="post" id="loginForm">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label> اسم المستخدم</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ Request::old('name') }}">
                            </div>
                            <div class="form-group col-lg-6 col-lg-push-6">
                                <label>كلمة المرور :</label>
                                <input type="password" id="password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6">
                                <label> اعادة كلمة المرور :</label>
                                <input type="password" id="repassword" class="form-control" name="repassword">
                            </div>

                            <div class="form-group col-lg-6 col-lg-push-6">
                                <label>الايميل : </label>
                                <input type="text" id="Email" class="form-control" name="Email" value="">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6">
                                <label> اعادة الايميل :</label>
                                <input type="text" id="reemail" class="form-control" name="reemail">
                            </div>

                            <div class="form-group col-lg-6 col-lg-push-6">
                                <label> العنوان :</label>
                                <input type="text" id="Address" class="form-control" name="Address">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6">
                                <label> رقم الجوال :</label>
                                <input type="text" id="Mobile" class="form-control" name="Mobile">
                            </div>
                            <!--<div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked>
                                Sigh up for our newsletter
                            </div>
                            -->
                        </div>
                            <button type="submit" class="btn btn-success">تسجيل</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 20px">
            تسجيل عضوية لدى شركة <strong> تجارتي</strong>
        </div>
    </div>
</div>

<!-- Vendor scripts -->
@include('TemplateMainComponent.ScriptFooter')
</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:33 GMT -->
</html>