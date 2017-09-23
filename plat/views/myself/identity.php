       <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
               身份认证
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">个人中心</a></li>
                <li><a href="#">我的账户</a></li>
                <li class="am-active">身份认证　　<span style="color:red">注：</span>普通用户完全没必要认证，发卡发券的商户可以选择认证，暂无强制要求认证。。</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-universal-access"></span> 身份认证
                    </div>

                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">认证状态</label>
                                    <div class="am-u-sm-9">
                                       <!--  <input type="text" id="user-name" placeholder="你的身份ID"> -->
                                       <button type="button" class="am-btn am-btn-warning">待认证</button>
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">认证类型</label>
                                    <div class="am-u-sm-9">
                                      <div class="am-btn-group doc-js-btn-1" data-am-button>
                                        <label class="am-btn am-btn-primary" id="self">
                                          <input type="radio" name="valid_period_type" value="0" id="option1"   checked> 个人
                                        </label>
                                        <label class="am-btn am-btn-primary" id="company">
                                          <input type="radio" name="valid_period_type" value="1" > 企业
                                        </label>
                                      </div>

                                </div>
                        </div>


                               <!--  <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">认证类型</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" id="user-email" placeholder="输入你的头像">
                                    </div>
                                </div> -->
                            <div id="a2">
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">真实姓名</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" placeholder="我的头像">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">身份证号码</label>
                                    <div class="am-u-sm-9">
                                        <input type="number" pattern="[0-9]*" id="user-QQ" placeholder="输入你的昵称">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">身份证正面</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" id="images" alt="" style="width:300px;height:175px;">
                                            </div>
                                          <a href="javascript:;" onclick="getElementById('inputfile').click()">
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                       <i class="am-icon-cloud-upload"></i> 身份证正面</button></a>
                                            <input id="inputfile"  type="file" name="image" multiple >
                                        </div>
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">身份证背面</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" id="images" alt="" style="width:300px;height:175px;">
                                            </div>
                                          <a href="javascript:;" onclick="getElementById('inputfile').click()">
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                       <i class="am-icon-cloud-upload"></i> 身份证背面</button></a>
                                            <input id="inputfile"  type="file" name="image" multiple >
                                        </div>
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">手持身份证</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" id="images" alt="" style="width:300px;height:175px;">
                                            </div>
                                          <a href="javascript:;" onclick="getElementById('inputfile').click()">
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                       <i class="am-icon-cloud-upload"></i> 手持身份证</button></a>
                                            <input id="inputfile"  type="file" name="image" multiple >
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div id="a1" style="display:none;">
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">企业名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="输入你的企业名称">
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">企业名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="输入你的企业名称">
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">营业执照号</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="输入你的营业执照号">
                                        </div>
                                    </div>
                                     <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">法定代表人</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" id="user-weibo" placeholder="输入你的法定代表人">
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">营业执照</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" id="images" alt="" style="width:300px;height:175px;">
                                            </div>
                                          <a href="javascript:;" onclick="getElementById('inputfile').click()">
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                       <i class="am-icon-cloud-upload"></i> 营业执照</button></a>
                                            <input id="inputfile"  type="file" name="image" multiple >
                                        </div>
                                    </div>
                                </div>
                                </div>

                               <!--  <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">简介</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="5" id="user-intro" placeholder="输入个人简介"></textarea>
                                        <small>250字以内写出你的一生...</small>
                                    </div>
                                </div> -->

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary">提交</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<script>
    $(function(){
        $('#company').click(function(){
            $('#a1').css('display','block');
            $('#a2').css('display','none');
        });
        $('#self').click(function(){
            $('#a1').css('display','none');
            $('#a2').css('display','block');
        });
    });
</script>