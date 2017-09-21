   <link rel="stylesheet" href="assets/address-master/dist/amazeui.address.css">
    <link href="assets/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="assets/umeditor/lang/zh-cn/zh-cn.js"></script>
        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                发布的券
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">发布的券</a></li>
                <li class="am-active">发布的券列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                       发布的券
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
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">所有类别</option>
              <option value="option2">IT业界</option>
              <option value="option3">数码产品</option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option>
            </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">


                          <div data-am-widget="tabs"
                           class="am-tabs am-tabs-d2"
                            >
                          <ul class="am-tabs-nav am-cf">
                              <li class="am-active"><a href="[data-tab-panel-0]">全部</a></li>
                              <li class=""><a href="[data-tab-panel-1]">待发布</a></li>
                              <li class=""><a href="[data-tab-panel-2]">待审核</a></li>
                              <li class=""><a href="[data-tab-panel-3]">发布中</a></li>
                              <li class=""><a href="[data-tab-panel-4]">审核未通过</a></li>
                              <li class=""><a href="[data-tab-panel-5]">已过期</a></li>
                          </ul>
                          <div class="am-tabs-bd">
                              <div data-tab-panel-0 class="am-tab-panel am-active">
                                 <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                </table>
                              </div>
                              <div data-tab-panel-1 class="am-tab-panel ">
                                  <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">待发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">待发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                </table>
                              </div>
                              <div data-tab-panel-2 class="am-tab-panel ">
                                   <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 待审核</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 待审核</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                </table>
                              </div>
                               <div data-tab-panel-3 class="am-tab-panel ">
                                   <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已发布</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 已发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">发布中</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                </table>
                              </div>
                               <div data-tab-panel-4 class="am-tab-panel ">
                                   <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">未通过</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">未通过</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                </table>
                              </div>

                               <div data-tab-panel-5 class="am-tab-panel ">
                                    <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-id">编号</th>
                                            <th class="table-title">图片</th>
                                            <th class="table-type">卡名</th>
                                            <th class="table-author am-hide-sm-only">状态</th>
                                            <th class="table-date am-hide-sm-only">数量</th>
                                            <th class="table-date am-hide-sm-only">创建时间</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已过期</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="assets/img/a5.png" style="width:50px;height:50px;"></td>
                                            <td>default</td>
                                            <td class="am-hide-sm-only">已过期</td>
                                            <td class="am-hide-sm-only">100</td>
                                            <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-location-arrow"></span> 发布</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                                    </div>
                                                </div>
                                            </td>
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