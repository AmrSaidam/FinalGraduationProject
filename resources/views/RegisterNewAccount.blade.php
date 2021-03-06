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
        <link href="{{URL::to('bvalidator/themes/postit/postit.css')}}" rel="stylesheet" />

</head>
<body class="blank">

<link href="{{URL::to('bvalidator/themes/postit/postit.css')}}" rel="stylesheet" />

<!-- Simple splash screen-->
@include('TemplateMainComponent.SimpleSplash')
<!--[if lt IE 7]>
@include('TemplateMainComponent.InternetExplorerValidation')
<!--[endif]-->

<div class="color-line"></div>
<!--
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
-->
<div class="register-container" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h2><i class="pe-7s-users"></i> تسجيل عضوية </h2>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="{{ route('signup') }}" method="post" id="loginForm" data-bvalidator-validate>
                        <div class="row">
                            <div class="form-group col-lg-12 {{ $errors->has('name') ? 'has-error' : '' }} ">
                                <label> اسم المستخدم</label>
                                <input data-bvalidator="alphanum,required" type="text" id="name" class="form-control" name="name" value="{{ Request::old('name') }}">
                            </div>
                            <div class="form-group col-lg-6 col-lg-push-6 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label>كلمة المرور :</label>
                                <input data-bvalidator="passwordFormat,required" type="password" id="password" class="form-control" name="password">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6 {{ $errors->has('repassword') ? 'has-error' : '' }}">
                                <label> اعادة كلمة المرور :</label>
                                <input data-bvalidator="equal[password],required" type="password" id="repassword" class="form-control" name="repassword">
                            </div>

                            <div class="form-group col-lg-6 col-lg-push-6 {{ $errors->has('Email') ? 'has-error' : '' }}">
                                <label>الايميل : </label>
                                <input data-bvalidator="required,email" type="text" id="Email" class="form-control" name="Email" value="{{ Request::old('Email') }}">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6 {{ $errors->has('reemail') ? 'has-error' : '' }}">
                                <label> اعادة الايميل :</label>
                                <input data-bvalidator="equal[Email],required" type="text" id="reemail" class="form-control" name="reemail" value="{{ Request::old('reemail') }}">
                            </div>

                            <div class="form-group col-lg-6 col-lg-push-6 {{ $errors->has('Address') ? 'has-error' : '' }}">
                                <label> العنوان :</label>
                                <input data-bvalidator="alphanum,required" type="text" id="Address" class="form-control" name="Address" value="{{ Request::old('Address') }}">
                            </div>
                            <div class="form-group col-lg-6 col-lg-pull-6 {{ $errors->has('Mobile') ? 'has-error' : '' }}">
                                <label> رقم الجوال :</label>
                                <input data-bvalidator="number,required" type="text" id="Mobile" class="form-control" name="Mobile" value="{{ Request::old('Mobile') }}">
                            </div>
                            <!--<div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked>
                                Sigh up for our newsletter
                            </div>
                            -->
                        </div>
                        <div class="text-center">
                             <button type="submit" class="btn btn-success">تسجيل</button>
                             <input type="hidden" name="_token" value="{{ Session::token() }}">
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

<script src="{{ URL::to('bvalidator/dist/jquery.bvalidator.js') }}"></script>
<script src="{{URL::to('bvalidator/dist/jquery.bvalidator.min.js')}}"></script>

<script src="{{URL::to('bvalidator/dist/themes/postit/postit.js')}}"></script>
<script src="{{URL::to('bvalidator/dist/themes/presenters/default.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('form').bValidator();
    });
</script>
<script type="text/javascript">

    function passwordFormat(password){
        regex = new RegExp(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/); // number, a-z, A-Z, min 8 chars
        if(regex.test(password))
            return true;
        return false;
    }

</script>
</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:33 GMT -->
</html>