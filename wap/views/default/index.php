<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>我的</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <!--标准mui.css-->
        <link rel="stylesheet" href="<?=MUI_PATH;?>css/mui.min.css">
        <!--App自定义的css-->
        <link rel="stylesheet" type="text/css" href="<?=MUI_PATH;?>css/app.css" />
        <link rel="stylesheet" type="text/css" href="<?=MUI_PATH;?>awesome/css/font-awesome.min.css" />
        <style type="text/css">
            .mui-table-view{
                margin-top: 12px;
            }
            #fa{
                padding-right:20px;
            }
            a{
              /* color: #000; */
            }
        </style>
    </head>

    <body>
        <header class="mui-bar mui-bar-nav">
            <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
            <h1 class="mui-title">我的</h1>
        </header>
        
        <div class="mui-content">
            <div style="background-color: #fff;padding-bottom: 15px;">
                <div class="mui-content-padded" >
                    <h4 style="text-align: center;margin-bottom: 15px;padding-top: 15px;">个人信息</h4>
                    <table id="list" border="1" width="100%" style="padding: 5px 10px;text-align: center;" >
                        
                    </table>
                </div>
            </div>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell" data-url="<?php echo \yii\helpers\Url::to(['default/add_card'])?>"><i class="fa fa-plus" id="fa"></i>发卡</li>
                <li class="mui-table-view-cell"><i class="fa fa-credit-card" id="fa"></i>发布的卡</li>
                <li class="mui-table-view-cell" data-url='<?php echo \yii\helpers\Url::to(['default/add_voucher'])?>'><i class="fa fa-plus" id="fa"></i>发券</li>
                <li class="mui-table-view-cell"><i class="fa fa-credit-card" id="fa"></i>发布的券</li>
                <li class="mui-table-view-cell"><i class="fa fa-money" id="fa"></i>核销</li>
                <li class="mui-table-view-cell"><i class="fa fa-plug" id="fa"></i>API</li>
            </ul>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell"><i class="fa fa-user" id="fa"></i>账户</li>
                <li class="mui-table-view-cell"><i class="fa fa-folder" id="fa"></i>资料</li>
                <li class="mui-table-view-cell"><i class="fa fa-reorder" id="fa"></i>账单</li>
                <li class="mui-table-view-cell"><i class="fa fa-lock" id="fa"></i>认证</li>
                <li class="mui-table-view-cell"><i class="fa fa-comment-o" id="fa"></i>消息</li>
            </ul>
            <ul class="mui-table-view">
                <li class="mui-table-view-cell"><i class="fa fa-cog" id="fa"></i>设置</li>
            </ul>
        </div>
    </body>
</html>
<script src="<?=MUI_PATH;?>js/mui.min.js"></script>
<script src="./adminStatic/js/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.mui-table-view-cell').click(function(){
            window.top.location = $(this).data('url');
        });
    });
    
</script>