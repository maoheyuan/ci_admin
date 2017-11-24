<style>
    .errortip{ color: red;}
</style>
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
                    <h4>系统设置</h4>
                </div>
            </div>

            <div class="row-fluid form-wrapper">
                <!--  column -->
                <div class="span12 column" style="margin-left: 30px;margin-top: 20px;">

                    <?php echo form_open('/Config/index',array("class"=>"inline-input")) ?>
                    <div class="span12 field-box">
                        <label>域名:</label>
                        <input class="span10" type="text" name="username" value="<?php echo set_value('username'); ?>"/>
                        <div class="errortip"><?php echo form_error('username'); ?></div>
                    </div>

                    <div class="span12 field-box textarea">
                        <label>邮箱:</label>
                        <input class="span10" type="text" name="mobile" value="<?php echo set_value('mobile'); ?>"/>
                        <div class="errortip"><?php echo form_error('mobile'); ?></div>
                    </div>

                    <div class="span12 field-box">
                        <label>支付宝key:</label>
                        <input class="span10" type="password" name="password" value="<?php echo set_value('password'); ?>"/>
                        <div class="errortip"><?php echo form_error('password'); ?></div>
                    </div>
                    <div class="span12 field-box">
                        <label>支付宝srcent:</label>
                        <input class="span10" type="password" name="rpassword" value="<?php echo set_value('rpassword'); ?>"/>
                        <div class="errortip"><?php echo form_error('rpassword'); ?></div>
                    </div>
                    <div class="span12 field-box">
                        <label>支付宝证书:</label>
                        <input class="span10" type="text" name="account" value="<?php echo set_value('account'); ?>"/>
                        <div class="errortip"><?php echo form_error('account'); ?></div>
                    </div>

                    <div class="span12 field-box">
                        <label>微信key</label>
                        <input class="span10" type="text" name="address" value="<?php echo set_value('address'); ?>"/>
                        <div class="errortip"><?php echo form_error('address'); ?></div>
                    </div>

                    <div class="span12 field-box">
                        <label>微信srcent</label>
                        <input class="span10" type="text" name="address" value="<?php echo set_value('address'); ?>"/>
                        <div class="errortip"><?php echo form_error('address'); ?></div>
                    </div>
                    <div class="span12 field-box">
                        <label>微信证书</label>
                        <input class="span10" type="text" name="address" value="<?php echo set_value('address'); ?>"/>
                        <div class="errortip"><?php echo form_error('address'); ?></div>
                    </div>

                    <div class="span12 field-box">
                        <label>网站状态:</label>
                        <div class="span10">
                            <label class="radio">
                                <input type="radio" name="status" id="status1" value="1" <?php if(set_value('status')==1){ echo "checked"; }; ?> />
                                启用
                            </label>
                            <label class="radio">
                                <input type="radio" name="status" id="status2" value="2" <?php if(set_value('status')==2){ echo "checked"; }; ?>/>
                                禁用
                            </label>
                        </div>
                    </div>
                    <div class="errortip "><?php echo form_error('status'); ?></div>

                    <div class="span10 field-box actions" style="text-align: right;">
                        <input type="submit" class="btn-glow primary" value="修改" />
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