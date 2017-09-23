
        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                店员管理
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">账户中心</a></li>
                <li><a href="#">店员管理</a></li>
                <li class="am-active">店员管理列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                       店员管理 <a href="<?php echo yii\helpers\Url::to(['myself/addemployee'])?>" class="am-icon-plus-square" style="margin-left:600px;">添加店员</a>
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12">


                          <div data-am-widget="tabs"
                           class="am-tabs am-tabs-d2"
                            >
                             <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">店员身份ID</th>
                                            <th class="table-type">店员姓名</th>
                                            <th class="table-type">店员备注</th>
                                            <th class="table-author am-hide-sm-only">添加时间</th>
                                            <th class="table-date am-hide-sm-only">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                            <td>1</td>
                                            <td>59b5ec5de00ee379597522d3</td>
                                            <td class="am-hide-sm-only">陈晓</td>
                                            <td class="am-hide-sm-only">收银员</td>
                                            <td class="am-hide-sm-only">2017-09-19 13:26:49</td>
                                            <td class="am-hide-sm-only"><a href="#" style="color:red;">删除</a></td>
                                        </tr>
                                       <tr>
                                            <td>2</td>
                                            <td>59b5ec5de00ee379597522d3</td>
                                            <td class="am-hide-sm-only">陈妍希</td>
                                            <td class="am-hide-sm-only">营业员</td>
                                            <td class="am-hide-sm-only">2017-09-19 13:26:49</td>
                                            <td class="am-hide-sm-only"><a href="#" style="color:red;">删除</a></td>
                                        </tr>
                                        </tbody>
                                </table>

                              </div>
                          </div>
                      </div>


                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>

        </div>

    </div>