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

<div class="register-container" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h2><i class="pe-7s-users"></i> تسجيل عضوية </h2>

            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="#" id="loginForm">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label> اسم المستخدم</label>
                                <input type="text" value="" id="UserName" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label> اعادة كلمة المرور :</label>
                                <input type="password" value="" id="Pass" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>كلمة المرور :</label>
                                <input type="password" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label> اعادة الايميل :</label>
                                <input type="" value="" id="" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>الايميل : </label>
                                <input type="" value="" id="Email" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label> العنوان :</label>
                                <input type="" value="" id="Address" class="form-control" name="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label> رقم الجوال :</label>
                                <input type="" value="" id="Phone" class="form-control" name="">
                            </div>
                            <!--<div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked>
                                Sigh up for our newsletter
                            </div>
                            -->
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success">تسجيل</button>
                            <button class="btn btn-default">الغاء</button>
                        </div>
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