<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:25 GMT -->
<head>

    @include('TemplateMainComponent.IncodingHeader')

            <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory  -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    @include('TemplateMainComponent.CSSHeader')
    <script>
        function Send_Requet_For_PHP_File(ProductName) {


            alert("ِAmr saidam " + document.getElementById("ProductName").value);

            window.location.href = 'login.html';
            var xhtmlreq = new XMLHttpRequest();
            var url = "FetchForSalesPoint.php";

            var vars = "ProductName=" + ProductName;//+ "&Pass=" + Pass + "&Email=" + Email + "&Address=" + Address + "&Phone=" + Phone;
            xhtmlreq.open("POST", url, true);
            xhtmlreq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhtmlreq.onreadystatechange = function () {
                if (xhtmlreq.readyState == 4 && xhtmlreq.status == 200) {

                }

            }


            xhtmlreq.send(vars);


        }
    </script>

</head>
<body>

<!-- Simple splash screen-->
@include('TemplateMainComponent.SimpleSplash')
        <!--[if lt IE 7]>
@include('TemplateMainComponent.InternetExplorerValidation')
        <!--[endif]-->

<!-- Header -->
@include('TemplateMainComponent.PageHeader')

        <!-- Navigation -->
@include('TemplateMainComponent.NavigationBar')

        <!-- Main Wrapper -->
<div id="wrapper">

    <div class="normalheader transition animated fadeIn" dir="rtl">
        <div class="hpanel" dir="rtl">
            <div class="panel-body" dir="rtl">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <h4 class="font-light m-b-xs" dir="rtl">
                    فاتورة بيع
                </h4>

            </div>
        </div>
    </div>

    <div class="content animate-panel">

        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">

                    <div class="panel-body p-xl">


                        <div class="row" style="padding-right:130px;padding-left:130px">

                            <div class="row" dir="rtl" style="font-size:16px;">
                                <div class="col-md-4">
                                    <div> رقم الفاتورة :</div>
                                    <div> نوع الفاتور: فاتورة بيع</div>
                                    <div> تاريخ اصدار الفاتورة :</div>

                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div> عدد السلع :</div>
                                    <div> المبلغ الاجمالي :</div>
                                    <div>وقت اصدار الفاتورة :</div>
                                </div>

                            </div>
                            <form method="post" action="{{route('makeSale')}}" name="SaleForm" id="SaleForm">
                           <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="row">
                                    <hr/>
                                </div>
                                <div class="row" style=" ">

                                    <div dir="rtl">
                                        <table class="table table-bordered table-striped" name="SaleTable" dir="rtl">
                                            <thead style="text-align: center">
                                            <tr style="font-size:18px;">
                                                <th style="text-align: center; width: 50px">الرقم</th>
                                                <th style="text-align: center; width: 300px">اسم المنتج</th>
                                                <th style="text-align: center; width: 100px">الكمية</th>
                                                <th style="text-align: center">السعر</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><input id="ProductName" name="productName[]" type="text"
                                                           placeholder="  اسم المنتج "
                                                           style="width:100%; height: auto;"></td>
                                                <td><input name="productAmount[]" type="text" placeholder=" الكمية  "
                                                           style="width:100%; height: auto;"></td>
                                                <td name="productSum[]"></td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><input name="productName[]" type="text" placeholder="اسم المنتج "
                                                           style="width:100%; height: auto;"></td>
                                                <td><input name="productAmount[]" type="text" placeholder=" الكمية  "
                                                           style="width:100%; height: auto;"></td>
                                                <td  name="productSum[]"></td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><input name="productName[]" type="text" placeholder="اسم المنتج "
                                                           style="width:100%; height: auto;"></td>
                                                <td><input name="productAmount[]" type="text" placeholder=" الكمية  "
                                                           style="width:100%; height: auto;"></td>
                                                <td name="productSum[]"></td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><input name="productName[]" type="text" placeholder="اسم المنتج "
                                                           style="width:100%; height: auto;"></td>
                                                <td><input name="productAmount[]" type="text" placeholder=" الكمية   "
                                                           style="width:100%; height: auto;"></td>
                                                <td name="productSum[]"></td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><input name="productName[]" type="text" placeholder="اسم المنتج "
                                                           style="width:100%; height: auto;"></td>
                                                <td><input name="productAmount[]" type="text" placeholder=" الكمية  "
                                                           style="width:100%; height: auto;"></td>
                                                <td name="productSum[]"></td>

                                            </tr>

                                            </tbody>
                                            <tfoot>
                                            <tr style="font-size:18px;">
                                                <td colspan="3" style="text-align: center" > السعر الاجمالي</td>
                                                <td style="text-align: center" name="invoiceSum">500</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                                <div class="row" style="float: right;width: 104%; font-size:16px;">
                                    <p style="float: right"> : ملاحظات </p>
                                    <div class="row" style="width: 100%; margin-left:1px; ">
                                        <textarea style="height: 100px;width:100%;  "></textarea>
                                    </div>
                                </div>
                                <div class="row" style="">
                                    <div class="col-lg-4"></div>
                                    <div class="col-md-1"></div>
                                    <div class="col-lg-4" style="padding-top: 2%;">
                                        <input name="Cancel" type="button" value="الغاء" class="btn btn-danger btn-sm">
                                        <input name="Save" type="submit" value="اعتماد" class="btn btn-info btn-sm"
                                               width="30px">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i
                        class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
        Company 2015-2020
    </footer>

</div>

<!-- Vendor scripts -->
@include('TemplateMainComponent.ScriptFooter')
<script src="{{URL::asset('bootstraps/scripts/SalePointScript.js')}}"></script>
</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:25 GMT -->
</html>