@extends('layouts.master')



@section('title')
	Home page
@endsection


@section('page-css')
    

        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->

@endsection

        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css">
        <link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css">


@section('content')
	  

                <div class="page page-forms-wizard">

                    <div class="pageheader">

                        <h2>ثبت نام دواطلبان کانکور<span></span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> خانه</a>
                                </li>
                                <li>
                                    <a href="#">کانکور</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">ثبت نام شاگردان</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        <div id="rootwizard" class="tab-container tab-wizard">
                            <ul class="nav nav-tabs nav-justified">
                                <li id="first"><a href="#tab1" data-toggle="tab"><b>معلومات شخصی</b><span class="badge badge-default pull-right wizard-step">1</span></a>
                                </li>
                                <li><a href="#tab2" data-toggle="tab"><b>آدرس</b><span class="badge badge-default pull-right wizard-step">2</span></a></li>
                                <li><a href="#tab3" data-toggle="tab"><b>اقاریب</b><span class="badge badge-default pull-right wizard-step">3</span></a></li>
                                <li><a href="#tab4" data-toggle="tab"><b>سوابیق تحصیلی</b><span class="badge badge-default pull-right wizard-step">4</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">

                                    <form name="step1" role="form">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="username">نام :</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="username">تخلص</label>
                                                <input type="text" name="username" id="username" class="form-control"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="row">

                                        <div class="form-group col-md-6">
                                                <label for="password">ولد :</label>
                                                <input type="text" name="password" id="password" class="form-control"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">ولیدیت : </label>
                                                <input type="text" name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       required>
                                            </div>

                                        </div>


                                        <div class="row">

                                        <div class="form-group col-md-6">
                                                <label for="passwordConfirm">سال تولد : </label>
                                                <input type="date" name="passwordConfirm" id="" class="form-control"
                                                       required>
                                            </div>
                                           
                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">محل تولد : </label>
                                                <input type="text" name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       required>
                                            </div>
                            
                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">شماره تماس : </label>
                                                <input type="text" name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">شماره تماس اضطراری : </label>
                                                <input name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       required>
                                            </div>
                            
                                            <div class="form-group col-md-6">
                                                <label for="passwordConfirm">ایمل : </label>
                                                <input type="email" name="passwordConfirm" id="passwordConfirm" class="form-control"
                                                       required>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <div class="tab-pane" id="tab2">

                                    <form name="step2" role="form">

                                        <div class="row">
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="street">آدرس: </label>
                                                <input type="text" name="street" id="street" class="form-control" placeholder="آدرس اصلی را وارید کنید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6 mb-0">
                                                <label for="dnumber">ولایت : </label>
                                                <input type="text" name="dnumber" id="dnumber" class="form-control" placeholder="ولایت اصلی را وارید کنید"
                                                       required>
                                            </div>
                                        

                                        <div class="form-group col-md-6">
                                            <label for="address2">ولسوالی / قریه : </label>
                                            <input type="text" name="address2" id="address2" class="form-control" placeholder="ولسوالی اصلی را وارید کنید" required>
                                        </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="city">آدرس : </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="آدرس فعلی را وارید نماید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="state">ولایت : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="ولایت فعلی را وارید نماید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="zip">ولسوالی : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="ولسوالی فعلی را وارید نماید"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="city">نمبر تذکره : </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="نمبر تذکره"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="state">صفحه : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="صفحه تذکره"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="zip">جلد : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="جلد تذکره"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="zip">نمبر ثبت : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="نمبر ثبت تذکره"
                                                       required>
                                            </div>
                                            
                                        </div>

                                    </form>

                                </div>
                                <div class="tab-pane" id="tab3">

                                    <form name="step3" role="form" novalidate>

                                        <h4 class="custom-font"><strong>معلوما</strong>آقاریب</h4>

                                         <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="city">اسم پدر : </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder=""
                                                       required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">نمبر تیلفون : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="نمبر تلیفون پدر تان وارید نماید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="zip">ایمیل : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="ایمل پدر تان وارید نماید"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="zip">اسم برادر : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="اسم برادر تان وارید نماید"
                                                       required>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="city">نمبر تیلفون: </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="نمبر تلیفون بردارد تان وارید کنید"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="state">ایمیل : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="ایمیل آدرس برادر تان وارید کنید"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="form">
                                            <div class="form-group col-md-4">
                                                <label for="zip">اسم کاکا : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="اسم کاکای تان را وارید کنید"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="zip">نمبر تلیفون : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="نمبر تلیفون کاکای تان وارید کنید"
                                                       required>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="city">ایمل : </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="ایمیل کاکای تان وارید کنید"
                                                       required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="state">ما ما : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="اسم مامای تان را وارید کنید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="zip">نمبر تلیفون : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="نمبر تلیفون مامای تان را وارید کنید"
                                                       required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="zip">ایمیل : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="ایمیل مامای تان را وارید کنید"
                                                       required>
                                            </div>
                                            
                                        </div>


                                    </form>

                                </div>
                                <div class="tab-pane" id="tab4">

                                    <form name="step4" role="form" novalidate>

                                         <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="city">نام مکتب : </label>
                                                <input type="text" name="city" id="city" class="form-control" placeholder="نام کتب تان را وارید کنید"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="state">سال فراغت : </label>
                                                <input type="text" name="state" id="state" class="form-control" placeholder="سال فراغت از مکتب"
                                                       required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="zip">ولایت : </label>
                                                <input type="text" name="zip" id="zip" class="form-control" placeholder="ولایت که از ان فارغ "
                                                       required>
                                            </div>
                                        </div>

                                    <div class="row">
                                        
            <div class="form-group col-xs-12 col-md-6 ">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview1">
                <label for="3year-number">نمرات سه ساله :</label>
                <input type="text" id="3year-number" class="form-control image-preview-filename1" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear1" style="display:none;">
                        <span class="glyphicon glyphicon-remove1"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input1">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title1">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="3year-number"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>


        <div class="form-group col-xs-12 col-md-6 ">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
                <label for="3year-number">شهادت نامه :</label>
                <input type="text" id="3year-number" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
                                    </div>
             
                                         

                                    </form>

                                </div>
                               
                                <ul class="pager wizard">
                                    <li class="previous pull-right"><button class="btn btn-default">بارگشت</button></li>
                                    <li class="next pull-left"><button class="btn btn-default">بعدی</button></li>
                                    <li class="next finish" style="display:none;"><button class="btn btn-success">Finish</button></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- /page content -->

                </div>
                
@endsection



@section('page-script')

        
        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/parsley/parsley.min.js"></script>

        <script src="assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                $('#rootwizard').bootstrapWizard({
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index+1;

                        // If it's the last tab then hide the last button and show the finish instead
                        if($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }

                    },

                    onNext: function(tab, navigation, index) {

                        var form = $('form[name="step'+ index +'"]');

                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    },

                    onTabClick: function(tab, navigation, index) {

                        var form = $('form[name="step'+ (index+1) +'"]');
                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    }

                });

            });
        </script>
        <!--/ Page Specific Scripts -->

@endsection