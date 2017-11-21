<?php $this->load->view("Common/headerNav");?>
<!-- end navbar -->
<link rel="stylesheet" href="/static/css/compiled/tables.css" type="text/css" media="screen" />
<!-- sidebar -->
<?php $this->load->view("Common/sidebarNav");?>
<!-- end sidebar -->
<!-- main container -->
<div class="content">

    <!-- settings changer -->
    <div class="skins-nav">
        <a href="#" class="skin first_nav selected">
            <span class="icon"></span><span class="text">Default</span>
        </a>
        <a href="#" class="skin second_nav" data-file="css/skins/dark.css">
            <span class="icon"></span><span class="text">Dark skin</span>
        </a>
    </div>

    <div class="container-fluid">
        <div id="pad-wrapper">

            <!-- products table-->
            <!-- the script for the toggle all checkboxes from header is located in js/theme.js -->
            <div class="table-wrapper products-table section">
                <div class="row-fluid head">
                    <div class="span12">
                        <h4>日志管理</h4>
                    </div>
                </div>

                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <input type="text" class="search"  placeholder="订单编号/收货人姓名/收货人手机"/>

                    </div>
                </div>

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                编号
                            </th>

                            <th class="span3">
                                <span class="line"></span>操作内容
                            </th>
                            <th class="span3">
                                <span class="line"></span>操作接口
                            </th>

                            <th class="span3">
                                <span class="line"></span>操作人
                            </th>
                            <th class="span3">
                                <span class="line"></span>新增时间
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                              毛何远
                            </td>
                            <td class="description">
                               13554820565
                            </td>

                            <td class="description">
                               广西归纳村29号
                            </td>

                            <td class="description">
                               1000
                            </td>


                        </tr>

                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>

                                <a href="#" class="name">2014070811001 </a>
                            </td>
                            <td class="description">
                                毛何远
                            </td>
                            <td class="description">
                                13554820565
                            </td>

                            <td class="description">
                                广西归纳村29号
                            </td>

                            <td class="description">
                                1000
                            </td>


                        </tr>
                        <!-- row -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end products table -->

            <!-- start pagination -->
            <div class="pagination pull-right">
                <ul>
                    <li><a href="#">‹</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">›</a></li>
                </ul>
            </div>
            <!-- end pagination -->
        </div>
    </div>
</div>
<!-- end main container -->

<!-- scripts -->
<script src="/static/js/jquery-latest.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/theme.js"></script>
<script src="/static/js/base.js"></script>
</body>
</html>