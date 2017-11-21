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
                        <h4>订单管理</h4>
                    </div>
                </div>

                <div class="row-fluid filter-block">
                    <div class="pull-right">
                        <input type="text" class="search"  placeholder="订单编号/收货人姓名/收货人手机"/>
                        <a class="btn-flat success new-product" href="/Goods/add">+新增</a>
                    </div>
                </div>

                <div class="row-fluid">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="span3">
                                <input type="checkbox" />
                                订单编号
                            </th>

                            <th class="span3">
                                <span class="line"></span>收货人姓名
                            </th>
                            <th class="span3">
                                <span class="line"></span>收货人手机
                            </th>

                            <th class="span3">
                                <span class="line"></span>收货地址
                            </th>



                            <th class="span3">
                                <span class="line"></span>销售价格
                            </th>
                            <th class="span3">
                                <span class="line"></span>支付类型
                            </th>

                            <th class="span3">
                                <span class="line"></span>支付金额
                            </th>
                            <th class="span3">
                                <span class="line"></span>支付时间
                            </th>
                            <th class="span3">
                                <span class="line"></span>新增时间
                            </th>

                            <th class="span3">
                                <span class="line"></span>状态
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                               201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">支付完成</span>
                                <ul class="actions">
                                    <li><a href="/Order/info/id/111">详细</a></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                                201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">支付完成</span>
                                <ul class="actions">
                                    <li><a href="/Goods/edit/id/111">修改</a></li>
                                    <li class="last"><a href="/Goods/delete/id/111">删除</a></li>
                                </ul>
                            </td>
                        </tr>

                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                                201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">支付完成</span>
                                <ul class="actions">
                                    <li><a href="/Goods/edit/id/111">修改</a></li>
                                    <li class="last"><a href="/Goods/delete/id/111">删除</a></li>
                                </ul>
                            </td>
                        </tr>


                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                                201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">支付完成</span>
                                <ul class="actions">
                                    <li><a href="/Goods/edit/id/111">修改</a></li>
                                    <li class="last"><a href="/Goods/delete/id/111">删除</a></li>
                                </ul>
                            </td>
                        </tr>


                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                                201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">支付完成</span>
                                <ul class="actions">
                                    <li><a href="/Goods/edit/id/111">修改</a></li>
                                    <li class="last"><a href="/Goods/delete/id/111">删除</a></li>
                                </ul>
                            </td>
                        </tr>


                        <!-- row -->
                        <tr class="first">
                            <td>
                                <input type="checkbox" />
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


                            <td class="description">
                                微信支付
                            </td>

                            <td class="description">
                                1000
                            </td>

                            <td class="description">
                                201407081001
                            </td>
                            <td class="description">
                                201407081001
                            </td>
                            <td>
                                <span class="label label-success">启用</span>
                                <ul class="actions">
                                    <li><a href="/Goods/edit/id/111">修改</a></li>
                                    <li class="last"><a href="/Goods/delete/id/111">删除</a></li>
                                </ul>
                            </td>
                        </tr>
                        <!-- row -->

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