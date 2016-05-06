@extends('layouts.master')

@section('page-css')

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

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->


@endsection
@section('content')
<div class="page page-dashboard" style="overflow:hidden">

                    <div class="pageheader">

                        <h2>مدیریت محصلان</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> مدیریت محصلان</a>
                                </li>
                                <li>
                                    <a href="index.html">لیست محصلان</a>
                                </li>
                            </ul>

                            <div class="page-toolbar">
                                <a role="button" tabindex="0" class="btn btn-lightred no-border pickDate">
                                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span>April 6, 2016 - May 5, 2016</span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                        </div>

                    </div>
					                           <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>لیست محصلان</strong></h1>
                                    <ul class="controls">
									
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th>
                                     آدی محصل
                                </th>
                                <th>
                                     نام
                                </th>
                                <th>
                                     نام پدر
                                </th>
                                <th>
                                    نام پدر کلان
                                </th>
                                <th>
                                    دیپارتمنت
                                </th>
                                <th>
                                    کلاس
                                </th>
                                <th>
                                    سال شمول
                                </th>
                                <th>
                                    سمستر
                                </th>
                                <th>
                                     تایم
                                </th>
                                <th>
                                   اعمال
                                </th>
                                
                            </tr>
                            </thead>
                            <tbody>
								<tr>
                                <td>S91002</td>
                                <td>علی</td>
                                <td>محمدرضا</td>
                                <td>احمدعلی</td>
                                <td>ستومالوژی</td>
                                <td>2</td>
                                <td>1391</td>
                                <td>1</td>
                                <td>روزانه</td>
                                <td>
                                <a href="" title="دیدن جزییات">
                                         <i class="fa fa-eye"></i>
                                     </a>
                                 <a href="" style="padding-right: 10px;" title="ویرایش کردن"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
							<tr>
                                <td>S91002</td>
                                <td>احمد</td>
                                <td>محمدرضا</td>
                                <td>احمدعلی</td>
                                <td>ستومالوژی</td>
                                <td>2</td>
                                <td>1391</td>
                                <td>1</td>
                                <td>روزانه</td>
                                <td>
                                <a href="" title="دیدن جزییات">
                                         <i class="fa fa-eye"></i>
                                     </a>
                                 <a href="" style="padding-right: 10px;" title="ویرایش کردن"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
                           
                            </tbody>
                          </table>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
</div>

@endsection


@section('page-script')

 <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/d3/d3.min.js"></script>
        <script src="assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="assets/js/vendor/morris/morris.min.js"></script>

        <script src="assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="assets/js/vendor/coolclock/excanvas.js"></script>
        <!--/ vendor javascripts -->
        


        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->








        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
     
        <!--/ Page Specific Scripts -->

<script>
jQuery(document).ready(function(){
  
    var table = $('#sample_1').DataTable({ 
        
     
       dom: '<"row"<"col-md-4"T><"col-md-4"f><"col-md-4"l>>rt<"row"<"col-md-6"i><"col-md-6"p>>',
      tableTools :{
      "sSwfPath": "copy_csv_xls_pdf.swf",
      "sRowSelect": "os",
      "aButtons": [ {
                    "sExtends": "select_all",
                    "sButtonText": '<i class="fa fa-check-square-o"></i>'
                }, {
                    "sExtends": "select_none",
                    "sButtonText": '<i class="fa fa-square-o"></i>'
                }] ,
                "fnRowSelected": function ( nodes ) {
                $(".edit,.del").removeAttr('disabled');
                
            } ,
      "fnRowDeselected": function ( nodes ) {
                $(".edit,.del").attr('disabled',true);
            }            
      },
      
     stateSave: true,
     
     order: [ 0, 'asc' ],
   
    language: {
            "lengthMenu": "نمایش _MENU_ سطر",
            "zeroRecords": "هیچ نتیجه ای یافت نشد.",
            "info": "صفحه _PAGE_ از _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(فیلتر شده از بین _MAX_ ریکارد)",
            "search": "جستجو: ",
            
        }
    });
    var tt = new $.fn.dataTable.TableTools( table ,{ "aButtons": [ {
                    "sExtends": "print",
                    "sButtonText": '<i class="fa fa-print"></i>'
                }
               /* ,       {
                        "sExtends":    "collection",
                        "sButtonText": "ذخیره",
                        "aButtons":    [ "pdf","xls", "csv" ]
                    } */
                    ]} );
            //Warning PDF libarary doesnt support UTF-8 character set. wait for any updates
    $( tt.fnContainer() ).appendTo('div.actions ');
})
</script>
@endsection