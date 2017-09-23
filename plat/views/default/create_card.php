   <link rel="stylesheet" href="assets/address-master/dist/amazeui.address.css">
    <link href="assets/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="assets/umeditor/lang/zh-cn/zh-cn.js"></script>
    <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                发卡
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">卡券列表</a></li>
                <li class="am-active">发卡</li>　　<span style="color:red">注：</span>票券只能使用一次，卡片可以重复多次使用。
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        发卡
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
                         <!--    <form class="am-form am-form-horizontal"> -->
                          <div class="am-form am-form-horizontal">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">卡片名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="card_name" placeholder="输入卡片名称">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">有效期限</label>
                                    <div class="am-u-sm-9">
                                      <div class="am-btn-group doc-js-btn-1" data-am-button>
                                        <label class="am-btn am-btn-primary" id="limit1">
                                          <input type="radio" name="valid_period_type" value="0" id="option1"   checked> 长期有效
                                        </label>
                                        <label class="am-btn am-btn-primary" id="limit">
                                          <input type="radio" name="valid_period_type" value="1" > 限定期限
                                        </label>
                                      </div>
                                       <div class="am-g"  id="a1">
                                      <div class="am-u-sm-6">
                                        设置开始日期<br/>
                                        <p><input type="text" class="am-form-field" data-am-datepicker placeholder="今天之前的日期被禁用" id="my-start-2" name="limit_time_start"/></p>
                                      </div>
                                      <div class="am-u-sm-6">
                                        结束日期<br/>
                                        <p><input type="text" class="am-form-field" data-am-datepicker id="my-end-2" name="limit_time_end"/></p>
                                      </div>
                                    </div>


                                    </div>


                                    </div>

                           <!--  <div class="am-form-group">
                             <label for="user-email" class="am-u-sm-3 am-form-label">有效期限</label>
                            <div class="am-u-sm-9">
                            <div data-am-widget="tabs" class="am-tabs am-tabs-default">
                                <ul class="am-tabs-nav am-cf">
                                  <li class="am-active"><a href="[data-tab-panel-0]">长期有效</a></li>
                                  <li class=""><a href="[data-tab-panel-1]">限定期限</a></li>
                              </ul>
                              <div class="am-tabs-bd">
                                  <div data-tab-panel-0 class="am-tab-panel am-active">
                                  <p><input type="hidden" name="valid_period_type" value="0"/></p>
                                  </div>
                                  <div data-tab-panel-1 class="am-tab-panel ">
                                    <div class="am-g">
                                      <div class="am-u-sm-6">
                                        设置开始日期<br/>
                                        <p><input type="text" class="am-form-field" data-am-datepicker placeholder="今天之前的日期被禁用" id="my-start-2" name="limit_time_start"/></p>
                                      </div>
                                      <div class="am-u-sm-6">
                                        结束日期<br/>
                                        <p><input type="text" class="am-form-field" data-am-datepicker id="my-end-2" name="limit_time_end"/></p>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                          </div>
                          </div>
                          </div> -->


                                <div class="am-form-group" id="address2">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">使用地区</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" placeholder="输入使用地区" value="北京北京市朝阳区">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-QQ" class="am-u-sm-3 am-form-label">发卡数量</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="card_num" placeholder="输入发卡数量">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">领卡方式</label>
                                    <div class="am-u-sm-9">
                                      <div class="am-btn-group doc-js-btn-1" data-am-button>
                                        <label class="am-btn am-btn-primary" id="limit3">
                                          <input type="radio" name="receive_way" value="0" id="option1"   checked> 免费领取
                                        </label>
                                        <label class="am-btn am-btn-primary" id="limit4">
                                          <input type="radio" name="receive_way" value="1" > 购买领取
                                        </label>
                                      </div>


                                    </div>


                                    </div>
                                     <div class="am-form-group" style="display:none" id="a2">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">购买金额</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="buycard_price" id="user-weibo" placeholder="输入购买金额">
                                    </div>
                                </div>

                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">领卡申请</label>
                                    <div class="am-u-sm-9">
                                      <div class="am-btn-group doc-js-btn-1" data-am-button>
                                        <label class="am-btn am-btn-primary">
                                          <input type="radio" name="card_apply" value="0" id="option1"  checked> 不需要
                                        </label>
                                        <label class="am-btn am-btn-primary">
                                          <input type="radio" name="card_apply" value="1" id="option2"> 需要
                                        </label>
                                      </div>


                                    </div>


                                    </div>

                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">领卡信息</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="apply_content" id="user-weibo" placeholder="输入领卡信息">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-weibo"  class="am-u-sm-3 am-form-label">领卡限制</label>
                                    <div class="am-u-sm-9">
                                     <select data-am-selected="{searchBox: 1}" name="receive_times">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="0">不限</option>
                                    </select>
                                       <!--  <input type="text" id="user-weibo" placeholder="输入领卡限制，默认0不限"> -->
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">使用次数</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="use_times" id="user-weibo" placeholder="输入用卡限制次数，默认为空表示不限制次数">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">图片</label>
                                    <div class="am-u-sm-9">
                                        <div class="am-form-group am-form-file">
                                            <div class="tpl-form-file-img">
                                                <img src="assets/img/a5.png" id="images" alt="" style="width:300px;height:175px;">
                                            </div>
                                          <a href="javascript:;" onclick="getElementById('inputfile').click()">
                                            <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                       <i class="am-icon-cloud-upload"></i> 添加封面图片</button></a>
                                            <input id="inputfile"  type="file" name="image" multiple >
                                        </div>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">详情</label>
                                    <div class="am-u-sm-9">
                                       <script type="text/plain" id="myEditor" style="width:800px;height:260px;">
                                        <p>请输入详情</p>
                                        </script>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-weibo" class="am-u-sm-3 am-form-label">平台推广</label>
                                    <div class="am-u-sm-9">
                                       <div class="am-btn-group doc-js-btn-1" data-am-button>
                                        <label class="am-btn am-btn-primary">
                                          <input type="radio" name="promotion" value="0" id="option1"  checked> 不允许
                                        </label>
                                        <label class="am-btn am-btn-primary">
                                          <input type="radio" name="promotion" value="1" id="option2"> 允许
                                        </label>
                                      </div>
                                      </div>
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" class="am-btn am-btn-primary" id="signin">保存草稿</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
      $(function(){
         $('#a1').css('display','none');
        $('#limit').click(function(){
          $("#a1").css('display','block');
        });
        $('#limit1').click(function(){
          $('#a1').css('display','none');
        });
        $('#limit4').click(function(){
          $("#a2").css('display','block');
        });
        $('#limit3').click(function(){
          $('#a2').css('display','none');
        });
         $("#inputfile").change(function(){
            //创建FormData对象
            var data = new FormData();
            //为FormData对象添加数据
            //
            $.each($('#inputfile')[0].files, function(i, file) {
                data.append('upload_file', file);
            });
            //console.log(data);
             $.ajax({
                url:'?r=plat/default/upload',
                type:'POST',
                data:data,
                cache: false,
                contentType: false,    //不可缺
                processData: false,    //不可缺
                success:function(re){
                    console.log(re);
                    //$("#imgId")[0].src;
                    $('#images').attr('src',re);
                    $('#inputfile').attr('value',re);
                }
            });
        });

        $('#signin').click(function(){
           console.log($('#myEditor').html());
        });
      });
    </script>
    <script>
        var um = UM.getEditor('myEditor');
    </script>
<script>
  $(function() {
    var nowTemp = new Date();
    var nowDay = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0).valueOf();
    var nowMoth = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), 1, 0, 0, 0, 0).valueOf();
    var nowYear = new Date(nowTemp.getFullYear(), 0, 1, 0, 0, 0, 0).valueOf();
    var $myStart2 = $('#my-start-2');

    var checkin = $myStart2.datepicker({
      onRender: function(date, viewMode) {
        // 默认 days 视图，与当前日期比较
        var viewDate = nowDay;

        switch (viewMode) {
          // moths 视图，与当前月份比较
          case 1:
            viewDate = nowMoth;
            break;
          // years 视图，与当前年份比较
          case 2:
            viewDate = nowYear;
            break;
        }

        return date.valueOf() < viewDate ? 'am-disabled' : '';
      }
    }).on('changeDate.datepicker.amui', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
          var newDate = new Date(ev.date)
          newDate.setDate(newDate.getDate() + 1);
          checkout.setValue(newDate);
        }
        checkin.close();
        $('#my-end-2')[0].focus();
    }).data('amui.datepicker');

    var checkout = $('#my-end-2').datepicker({
      onRender: function(date, viewMode) {
        var inTime = checkin.date;
        var inDay = inTime.valueOf();
        var inMoth = new Date(inTime.getFullYear(), inTime.getMonth(), 1, 0, 0, 0, 0).valueOf();
        var inYear = new Date(inTime.getFullYear(), 0, 1, 0, 0, 0, 0).valueOf();

        // 默认 days 视图，与当前日期比较
        var viewDate = inDay;

        switch (viewMode) {
          // moths 视图，与当前月份比较
          case 1:
            viewDate = inMoth;
            break;
          // years 视图，与当前年份比较
          case 2:
            viewDate = inYear;
            break;
        }

        return date.valueOf() <= viewDate ? 'am-disabled' : '';
      }
    }).on('changeDate.datepicker.amui', function(ev) {
      checkout.close();
    }).data('amui.datepicker');
  });
</script>
<script type="text/javascript">
            $(function() {
                document.addEventListener('touchmove', function (e) {
                    e.preventDefault();
                }, false);
                //  自定义输出
                $("#address1").address({
                    customOutput: true,
                    selectEnd: function(json,address) {
                        for(var key in json) {
                            $("#address1-form").find("input[name='" + key + "']").val(json[key]);
                        }
                    }
                }).on("provTap",function(event,activeli){
                    console.log(activeli.text());
                }).on("cityTap",function(event,activeli){
                    console.log(activeli.text());
                })

                //  带底部的
                $("#address2").address({
                    prov: "北京",
                    city: "北京市",
                    district: "其他区",
                    scrollToCenter: true,
                    footer: true,

                    selectEnd: function(json) {
                        console.log(JSON.stringify(json));
                    }
                });

            });
        </script>