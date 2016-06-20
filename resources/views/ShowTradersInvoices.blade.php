<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:25 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    @include('TemplateMainComponent.ShowInvoicesCSS')


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

    <div class="normalheader transition animated fadeIn">
        <div class="hpanel">
            <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>

                <h4 class="font-light m-b-xs" dir="rtl">
                    عرض فاتوره المشتريات
                </h4>
            </div>
        </div>
    </div>

    <div class="content animate-panel">

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hpanel">
                            <div class="panel-body">
                                <div class="table-responsive" dir="rtl">
                                    <table class="table table-striped table-bordered table-hover">
                                        <col width="7%"/>
                                        <col width="25%"/>
                                        <col width="20%"/>
                                        <col width="20%"/>
                                        <col width="11.4%"/>
                                        <thead>
                                        <tr>
                                            <th style="text-align: center">#</th>
                                            <th style="text-align: center">اسم التاجر</th>
                                            <th style="text-align: center">رقم الفاتوره</th>
                                            <th style="text-align: center">التاريخ</th>
                                            <th style="text-align: center">التحكم</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button class="btn btn-xs btn-success"><i class="fa fa-check"></i>
                                                </button>
                                                <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i>
                                                </button>
                                                <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i>
                                                </button>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="widget-foot">


                                    <ul class="pagination pagination-sm pull-right">
                                        <li><a href="#">التالي</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">السابق</a></li>
                                    </ul>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3" dir="rtl">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="m-b-md">
                            <h4>
                                تحديد اسم التاجر او تاريخ الفاتورة

                            </h4>

                        </div>

                        <div class="form-group">
                            <label class="control-label">تاريخ الفاتورة</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" value="10/06/2016">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">اسم التاجر</label>
                            <div class="input-group">
                                <select class="form-control m-b" name="account">
                                    <option value="" disabled selected>حدد اسم التاجر</option>

                                </select>
                            </div>
                        </div>


                        <button class="btn btn-success btn-block">بحث</button>

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
                                    There are many variations of passages of Lorem Ipsum available, but the majority
                                    have
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
    </div>
</div>
    <!-- Vendor scripts -->
   @include('TemplateMainComponent.ShowSellingInvoicesScripts')

    <script>

        $(function () {

            $('.input-group.date').datepicker();

            $("#demo1").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10
            });

            $("#demo2").TouchSpin({
                verticalbuttons: true
            });

            $(".select2").select2();

        });

    </script>


</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/search.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:32 GMT -->
</html>