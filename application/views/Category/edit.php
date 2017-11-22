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
                    <h4>分类新增</h4>
                </div>
            </div>

            <div class="row-fluid form-wrapper">
                <!--  column -->
                <div class="span12 column" style="margin-left: 30px;margin-top: 20px;">
                    <form class="inline-input"  action="/Category/edit"/>
                    <div class="span12 field-box">
                        <label>分类名称:</label>
                        <input class="span10" type="text" />
                    </div>
                    <div class="span12 field-box">
                        <label>状态:</label>
                        <div class="span10">
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" />
                                启用
                            </label>
                            <label class="radio">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                禁用
                            </label>
                        </div>
                    </div>

                    <div class="span11 field-box actions" style="text-align: right;">
                        <input type="submit" class="btn-glow primary" value="新增" />
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
<script src="/static/js/base.js"></script>
</body>
</html>