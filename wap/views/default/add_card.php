<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>发卡</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!--标准mui.css-->
        <link rel="stylesheet" href="<?=MUI_PATH;?>css/mui.min.css">
        <link rel="stylesheet" href="<?=MUI_PATH;?>css/feedback.css">
        <link rel="stylesheet" href="<?=MUI_PATH;?>city/city-picker.css">
        <!--App自定义的css-->
        <link rel="stylesheet" type="text/css" href="<?=MUI_PATH;?>css/app.css" />
        <link rel="stylesheet" type="text/css" href="<?=MUI_PATH;?>css/mui.picker.min.css" />
        <link rel="stylesheet" type="text/css" href="<?=MUI_PATH;?>awesome/css/font-awesome.min.css" />
        <link href="<?=MUI_PATH;?>UEditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
        <script src="./adminStatic/js/jquery.min.js"></script>
         <script type="text/javascript" src="<?=MUI_PATH;?>UEditor/third-party/template.min.js"></script>
        <script src="<?=MUI_PATH;?>UEditor/umeditor.config.js"></script>
        <script src="<?=MUI_PATH;?>UEditor/umeditor.min.js"></script>
        <script src="<?=MUI_PATH;?>UEditor/lang/zh-cn/zh-cn.js"></script>
       <script type="text/javascript">
           var window_width = document.body.clientWidth - 10;
           console.log(window_width);
       </script>
        <style type="text/css">
            .mui-table-view{
                margin-top: 12px;
            }
            #fa{
                padding-right:20px;
            }
        </style>
    </head>

    <body>
        <header class="mui-bar mui-bar-nav">
            <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
            <h1 class="mui-title">发卡</h1>
        </header>
        
        <div class="mui-content" style="background-color: #fff">
            <div class="mui-content-padded" style="margin: 5px;">
                <h5>卡片名称<span style="color:red">*</span></h5>
                <div class="mui-input-row mui-password">
                    <input type="text" class="mui-input-text">
                </div>
                <h5>有效期限<span style="color:red">*</span></h5>
                <div class="mui-input-row">
                    <a href="javascript:;" class="mui-btn" style="float:left;width: 80px;">长期有效</a>
                    <a href="javascript:;" class="mui-btn mui-btn-outlined mui-btn-primary" style="float:left;margin-left: 40px;width: 80px;">限定期限</a>
                </div>

                <h5 class="mui-content-padded">有效开始时间</h5>
               
                    <input id="begin_time" type="text" name="" data-options='{"value":"2015-10-10 10:10","beginYear":2010,"endYear":2020}' class="btn mui-btn mui-btn-block" value="选择日期时间 ..." />

                    <h5 class="mui-content-padded">有效结束时间</h5>
                    <input id="end_time" type="text" name="" data-options='{"value":"2015-10-10 10:10","beginYear":2010,"endYear":2020}' class="btn mui-btn mui-btn-block" value="选择日期时间 ..." />
                    <h5 class="mui-content-padded">使用地区</h5>
                    <div style="position: relative;float:left;width:310px;border-color: #e2e2e2;">
                        <input id="area" readonly="" type="text" data-toggle="city-picker" value="全国" maxlength="100" class="city-picker-input">
                    </div>
                    <div class="mui-content-padded" style="height:60px"></div>
                    <h5>发卡数量<span style="color:red">*</span></h5>
                    <div class="mui-input-row mui-password">
                        <input type="text" class="mui-input-text">
                    </div>
                    <h5>领卡方式<span style="color:red">*</span></h5>
                    <div class="mui-input-row">
                        <a href="javascript:;" class="mui-btn" style="float:left;width: 80px;">免费领取</a>
                        <a href="javascript:;" class="mui-btn mui-btn-outlined mui-btn-primary" style="float:left;margin-left: 40px;width: 80px;">购买领取</a>
                    </div>
                    <h5 style="margin-top:15px">购卡金额<span style="color:red">*</span></h5>
                    <div class="mui-input-row mui-password">
                        <input type="text" class="mui-input-text">
                    </div>

                    <h5>领卡申请<span style="color:red">*</span></h5>
                    <div class="mui-input-row">
                        <a href="javascript:;" class="mui-btn" style="float:left;width: 80px;">不需要</a>
                        <a href="javascript:;" class="mui-btn mui-btn-outlined mui-btn-primary" style="float:left;margin-left: 40px;width: 80px;">需要</a>
                    </div>
                    <h5>领卡限制<span style="color:red">*</span></h5>
                    <div class="mui-input-row">
                        <select name=""> 
                        <option value="0">不限制</option> 
                        <option value="0">1</option> 
                        <option value="1">2</option> 
                        </select> 
                    </div>

                    <h5 style="margin-top:15px">使用次数<span style="color:red">*</span></h5>
                    <div class="mui-input-row mui-password">
                        <input type="text" class="mui-input-text">
                    </div>
                     <h5 style="margin-top:15px">图片<span style="color:red">*</span></h5>
                    <div class="mui-input-row mui-password">
                        <div id="feedback" style="width:80%;height: 200px;margin: 10px auto;"></div> 
                        <a href="javascript:;" onclick="getElementById('inputfile').click()" class="mui-btn" style="float:left;width: 87%;margin-left: 5%;">上传图片</a>
                        <input type="file" name="image" style="opacity:0;filter:alpha(opacity=0);" id="inputfile"/>
                    </div>
                     <h5 style="margin-top:15px">详情<span style="color:red">*</span></h5>
                    <div class="mui-input-row mui-password">
                 
                      <script type="text/plain" id="myEditor" style="width:100%;height:240px;">
                            <p>这里我可以写一些输入提示</p>
                        </script>
                        
                    </div>

                    <h5 style="margin-top:18px ">平台推广<span style="color:red">*</span></h5>
                    <div class="mui-input-row">
                        <a href="javascript:;" class="mui-btn" style="float:left;width: 80px;">推广</a>
                        <a href="javascript:;" class="mui-btn mui-btn-outlined mui-btn-primary" style="float:left;margin-left: 40px;width: 80px;">不推广</a>
                    </div>

                    <div class="mui-input-row mui-password" style="height: 100px;margin-top: 36px;">
                        <a href="javascript:;" class="mui-btn mui-btn-primary" style="float:left;width: 87%;margin-left: 5%;">保存</a>
                    </div>

                    
                
            </div>

        </div>
           
    </body>
</html>

<script src="<?=MUI_PATH;?>js/mui.min.js"></script>
<!-- <script src="<?=MUI_PATH;?>js/feedback.js"></script> -->
<script src="<?=MUI_PATH;?>js/mui.picker.min.js"></script>
<script src="<?=MUI_PATH;?>city/city-picker.data.min.js"></script>
<script src="<?=MUI_PATH;?>city/city-picker.min.js"></script>
<script type="text/javascript">
    (function($) {
                $.init();
                var btns = $('.btn');
                btns.each(function(i, btn) {
                    btn.addEventListener('tap', function() {
                        var optionsJson = this.getAttribute('data-options') || '{}';
                        var options = JSON.parse(optionsJson);
                        var id = this.getAttribute('id');
                        var result = $('#'+id)[0];
                        var picker = new $.DtPicker(options);
                        picker.show(function(rs) {
                            result.value = rs.text;
                            picker.dispose();
                        });
                    }, false);
                });
            })(mui);
    
</script>

<script type="text/javascript">
//实例化编辑器
var um = UM.getEditor('myEditor');

$(function(){
           $("#inputfile").change(function(){
        //创建FormData对象
        var data = new FormData();
        //为FormData对象添加数据
        //
        $.each($('#inputfile')[0].files, function(i, file) {
            data.append('upload_file', file);
        });
        console.log(data);

         $.ajax({
            url:'?r=wap/default/upload',
            //url:'submit_form_process.php',
            type:'POST',
            data:data,
            cache: false,
            contentType: false,    //不可缺
            processData: false,    //不可缺
            success:function(data){
                data = $(data).html();
                if($("#feedback").children('img').length == 0) $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
            }
        });
     });
    });
</script>