@extends('layouts.master')


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
                                <td>قابلگی</td>
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