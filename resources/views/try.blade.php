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

<!-- Simple splash screen-->
@include('TemplateMainComponent.SimpleSplash')
<!--[if lt IE 7]>
@include('TemplateMainComponent.InternetExplorerValidation')
        <!--[endif]-->

<div class="color-line"></div>
<!--
        -->
<div class="register-container" dir="rtl">
    <div class="row">
        <div class="col-md-12">
            <div class="hpanel">
                <div class="panel-body">
                    <form data-bvalidator-validate>

                        <label>Only digits:</label>
                        <input data-bvalidator="digit,required" type="text">

                        <label>Number:</label>
                        <input data-bvalidator="number,required" type="text">

                        <label>URL:</label>
                        <input data-bvalidator="url,required" type="text">

                        <label>Pv4 address:</label>
                        <input data-bvalidator="ip4,required" type="text">

                        <label>Choose one:</label>
                        <input name="e" value="1" type="radio">
                        <input name="e" value="1" type="radio">
                        <input name="e" value="1" data-bvalidator="required" data-bvalidator-msg="Select one radio button" type="radio">

                        <br />

                        <label>Alphabetic characters only:</label>
                        <input data-bvalidator="alpha,minlen[10],required" type="text">
                        <label>Alphanumeric characters only:</label>
                        <input data-bvalidator="alphanum,minlen[10],required" type="text">

                        <label>Date in format dd.mm.yyyy:</label>
                        <input data-bvalidator="date[dd.mm.yyyy],required" type="text">

                        <label>Value between 100 and 200:</label>
                        <input data-bvalidator="between[100:200],required" type="text">

                        <label>Minimum length is 10 characters:</label>
                        <input data-bvalidator="minlen[10],required" type="text">

                        <label>Maximum length is 10 characters:</label>
                        <input data-bvalidator="maxlen[10],required" type="text">

                        <label>Enter between 10 and 20 characters:</label>
                        <input data-bvalidator="rangelen[10:20],required" type="text">

                        <br />

                        <label>Select at least two checkboxes:</label>
                        <input name="b[]" value="1" type="checkbox">
                        <input name="b[]" value="1" type="checkbox">
                        <input name="b[]" value="1" data-bvalidator="min[2],required" data-bvalidator-msg="Select at least two checkboxes" type="checkbox">

                        <br />

                        <label>Select .jpg, .png or .txt file:</label>
                        <input data-bvalidator="extension[jpg:png:txt],required" data-bvalidator-msg="Please select file of type .jpg, .png or .txt" type="file">

                        <label>This checkbox is required:</label>
                        <input data-bvalidator="required" type="checkbox">

                        <br />

                        <label>Minimum value is 10:</label>
                        <input data-bvalidator="min[10],required" type="text">

                        <label>Select no more than 2 options:</label>
                        <select size="5" multiple="multiple" class="form-control" data-bvalidator="max[2],required" data-bvalidator-msg="Select no more than 2 options">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                        </select>

                        <br />

                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 20px">
            تسجيل عضوية لدى شركة <strong> تجارتي</strong>
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
</body>

</html>