<!-- 配置文件 -->
<script type="text/javascript" src="/static/ueditor1_4_3_3/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/static/ueditor1_4_3_3/ueditor.all.js"></script>


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
        <div id="pad-wrapper" class="form-page">

            <div class="row-fluid head">
                <div class="span12">
                    <h4>商品新增</h4>
                </div>
            </div>

            <div class="row-fluid form-wrapper">
                <!--  column -->
                <div class="span12 column" style="margin-left: 30px;margin-top: 20px;">

                    <form class="inline-input" />
                    <div class="span12 field-box">
                        <label>商品名称:</label>
                        <input class="span10" type="text" />
                    </div>

                    <div class="span12 field-box textarea">
                        <label>介简:</label>
                        <input class="span10" type="text" />
                    </div>

                    <div class="span12 field-box">
                        <label>市场价:</label>
                        <input class="span10" type="text" />
                    </div>
                    <div class="span12 field-box">
                        <label>销售价:</label>
                        <input class="span10" type="text" />
                    </div>

                    <div class="span12 field-box">
                        <label>	库存:</label>
                        <input class="span10" type="text" />
                    </div>

                    <div class="span12 field-box textarea">
                        <label>内容:</label>
                        <textarea class="span10" style="margin-left: 0 !important;" id="container"></textarea>

                        <!-- 实例化编辑器 -->
                        <script type="text/javascript">
                            var ue = UE.getEditor('container',{
                            });
                        </script>
                    </div>

                    <div class="span12 field-box">
                        <label>状态:</label>
                        <div class="span10">
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
                                上架
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                下架
                            </label>
                        </div>
                    </div>



                    <div class="span10 field-box actions" style="text-align: right;">
                        <input type="button" class="btn-glow primary" value="新增" />
                        <span>OR</span>
                        <input type="reset" value="重置" class="reset" />
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end main container -->

<!-- scripts -->
<script src="/static/js/jquery-latest.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/theme.js"></script>
</body>
</html>