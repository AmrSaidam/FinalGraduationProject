<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/nestable_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:41:55 GMT -->
<head>

    @include('TemplateMainComponent.IncodingHeader')
            <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    @include('TemplateMainComponent.CSSHeader')

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
                    عرض السلع
                </h4>
            </div>
        </div>
    </div>
    <div class="content animate-panel">

        <div class="row">
            <div class="col-lg-12">
                <div class="hpanel">
                    <div class="panel-body">
                        <div class="col-md-8"></div>

                        <div class="input-group m-b"><span class="input-group-btn">
                                            <button type="button" class="btn btn-primary">Go!</button> </span> <input
                                    type="text" class="form-control" placeholder=" اسم المنتج ....." dir="rtl">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover " dir="rtl">
                                <col width="5%"/>
                                <col width="25%"/>
                                <col width="20%"/>
                                <col width="20%"/>
                                <col width="11.4%"/>
                                <thead>
                                <tr>
                                    <th style="text-align: center">#</th>
                                    <th style="text-align: center">اسم الصنف</th>
                                    <th style="text-align: center">الكمية</th>
                                    <th style="text-align: center">سعر الصنف</th>
                                    <th style="text-align: center">السعر الكلي</th>
                                    <th style="text-align: center">التحكم</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-xs btn-success"><i class="fa fa-check"></i></button>
                                        <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></button>
                                        <button class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-foot">


                            <ul class="pagination pagination-sm pull-right" dir="rtl">
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


</div>

<!-- Vendor scripts -->
@include('TemplateMainComponent.DashboardScript')


<script>

    $(function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                    output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };
        // activate Nestable for list 1
        $('#nestable').nestable({
            group: 1
        }).on('change', updateOutput);

        // activate Nestable for list 2
        $('#nestable2').nestable({
            group: 1
        }).on('change', updateOutput);

        // output initial serialised data
        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));

        $('#nestable-menu').on('click', function (e) {
            var target = $(e.target),
                    action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

    });

</script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/nestable_list.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:41:56 GMT -->
</html>