
<!DOCTYPE html>
<html lang="zh-CN">
            <head>
                    <meta charset="utf-8">
                    <title>收留吧API文档</title>
                    <script src="http://apps.bdimg.com/libs/jquery/1.8.3/jquery.min.js"></script>
                     <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    .leftnav{position: fixed;overflow: auto;border: 1px solid #ccc;padding-right: 10px;width: 380px;height: 100%;left: 0;top: 0;}
    .contentbody{margin-left: 400px;}
    .leftnav h3,.leftnav h4{text-align: center;}
    .leftnav p{text-align: left;padding-left: 10px;line-height: 32px;}
    .leftnav p:hover{background-color: #DBF7E0;}
    .leftnav p a{font-size: 20px;}
    .body-param{border-left: solid 5px #f2f2ea;margin-left: 20px;}
    .body-url-a{font-size: 14px;}
    .body-li{border-left: solid 5px #aa6708;padding-left: 10px;}
</style>
            </head>
            <body>
                <div class="leftnav">
                    <h3>收留吧API文档</h3>
                    <h4>注:返回状态码和信息</h4>
                    <p><a href="#status_code">状态码列表</a></p>
                    <h4>一.首页</h4>
                    <p><a href="#business_category">1.1 搜索</a></p>
                    <p><a href="#business_category_one">1.2 轮播广告</a></p>
                    <p><a href="#info_show">1.3 租房信息展示</a></p>
                    <p><a href="#slinfo_show">1.4收留信息展示</a></p>
                    <p><a href="#zxinfo_show">1.5 资讯信息展示</a></p>
                    <h4>二.呜呼部落</h4>
                    <p><a href="#wh_list">2.1 列表页</a></p>
                    <p><a href="#sl_collect">2.2 收藏</a></p>
                    <p><a href="#sl_detail">2.3 收留详情页</a></p>
                    <p><a href="#sl_comment">2.4 收留评论</a></p>
                    <p><a href="#sl_publish">2.5发布收留信息</a></p>
                    <h4>三.租房信息</h4>
                    <p><a href="#zf_list">3.1 最新租房信息</a></p>
                    <p><a href="#zf_detail">3.2 租房详情</a></p>
                    <p><a href="#zf_collect">3.3 租房收藏</a></p>
                    <p><a href="#zf_comment">3.4 租房评论</a></p>
                    <h4>四.热门资讯</h4>
                    <p><a href="#zx_list">4.1 资讯列表</a></p>
                    <p><a href="#zx_detail">4.2 资讯详情</a></p>
                    <p><a href="#zx_collect">4.3 添加收藏</a></p>
                    <p><a href="#zx_category">4.4 类别切换</a></p>
                    <p><a href="#zx_comment">4.5 资讯评论</a></p>
                    
                    <h4>后台</h4>
                    <h4>一.资讯管理</h4>
                    <p><a href="#hzx_list">1.1 资讯列表</a></p>
                    <p><a href="#hzx_add">1.2 添加资讯</a></p>
                    <p><a href="#hzx_modify">1.3 修改资讯</a></p>
                    <p><a href="#hzx_delete">1.4 删除资讯</a></p>
                    <p><a href="#hzx_search">1.5 搜索资讯</a></p>
                    <p><a href="#hzx_comment">1.6 资讯留言管理</a></p>
                    <h4>二.租房信息管理</h4>
                    <p><a href="#hzf_list">2.1 租房信息列表</a></p>
                    <p><a href="#hzf_add">2.2 发布租房信息</a></p>
                    <p><a href="#hzf_modify">2.3 修改租房</a></p>
                    <p><a href="#hzf_delete">2.4 删除租房信息</a></p>
                    <p><a href="#hzf_search">2.5 搜索租房信息</a></p>
                    <p><a href="#hzf_comment">2.6 租房留言管理</a></p>
                    <h4>三.收留信息管理</h4>
                    <p><a href="#hsl_list">3.1 收留信息列表</a></p>
                    <p><a href="#hsl_modify">3.2 修改收留信息</a></p>
                    <p><a href="#hsl_delete">3.3 删除收留信息</a></p>
                    <p><a href="#hsl_search">3.4 搜索收留信息</a></p>
                    <p><a href="#hsl_comment">3.5 收留评论管理</a></p>
                    <h4>四.广告管理</h4>
                    <p><a href="#hsg_list">4.1 广告列表</a></p>
                    <p><a href="#hsg_add">4.2 添加</a></p>
                    <p><a href="#hsg_modify">4.3 修改</a></p>
                    <p><a href="#hsg_delete">4.4 删除</a></p>
                </div>
                <div class="contentbody">
                    <div class="body-li">
                        <h4 id="business_category">1.1 搜索</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/site/search');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>cate</td><td>true</td><td>int</td><td>搜索类型(1表示租房搜索,2表示收留信息搜索)</td><td></td></tr>
                                    <tr><td>title</td><td>true</td><td>string</td><td>搜索内容</td><td></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/site/search');?>",
     method:"POST",
     params:{ cate:1,title:’搜索的信息’}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
             {	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}

                                    </code>

或
                                    <code>
       {
		“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
}],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,

}

                                    </code>


                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                        <p>租房信息</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        <p>收留信息</p>
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="business_category_one">1.2 轮播广告</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/site/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/site/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                            
{
    “id”:”1”,
    “name”:”广告1”,
    “url”:”http://xmwula.com”,
    “img”:”/upload/link/201610409/fdfds.jpg”,
    “sort”:”1”,
}
{
    “id”:”2”,
    “name”:”广告2”,
    “url”:”http://xmwula.com”,
    “img”:”/upload/link/201610409/fdfds.jpg”,
    “sort”:”2”,
}
                                    </code>

                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="info_show">1.3 租房信息展示</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/site/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/site/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
{
             	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}

                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody id="page_list_sproduct">
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="slinfo_show">1.4收留信息展示</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/site/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/site/index');?>",
     method:"GET",
    
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
{
            
		“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
                      }],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,



}
                                </code>
                            </pre>
                             <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    
                    <div class="body-li">
                        <h4 id="zxinfo_show">1.5 资讯信息展示</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/site/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/site/index');?>",
     method:"GET"
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
[
    {
                “id”:”1”,
		“cate_id”:”{id:”1”,title:”分类1”}”,
		“title”:”test”,
		“content”:”this is a test!”,
		“createtime”:”2016-04-09 14:05”,

    },
    {
                “id”:”2”,
		“cate_id”:”{id:”1”,title:”分类1”}”,
		“title”:”test”,
		“content”:”this is a test!”,
		“createtime”:”2016-04-09 14:05”,

    }
]
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>资讯ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>cate_id</td><td>string</td><td>分类名字</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>string</td><td>内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="wh_list">2.1 列表页</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/shelter/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/shelter/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
{
            	{“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
                    }],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,}
                

}
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                      </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="sl_collect">2.2收藏</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/shelter/collect');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">AjAX/POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>身份验证唯一码（<b>在HTTP头部使用</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>id</td><td>true</td><td>id</td><td>收留信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"http://api.xmwula.com<?php echo $this->createUrl('/shelter/collect');?>",
     headers:{onlykey:'wula114s5c54sd5s45s'},
     method:"ajax/post",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
{
		“status”:”1”,
		“statusCode”:”200”,
                'data':5, //返回该收留信息被收藏的总数
		“statusMsg”:”收藏成功”,

}
或
{
		“status”:”1”,
		“statusCode”:”403”,
		“statusMsg”:”已收藏过,
}
或
{	
		“status”:”0”,
		“statusCode”:”405”,
		“statusMsg”:”错误！”
	
}

                                    </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>data</td><td>Int</td><td>收藏个数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="sl_detail">2.3 收留详情页</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/shelter/detail');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>id</td><td>true</td><td>Int</td><td>收留信息id（<b></b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/shelter/detail');?>",
     method:"GET",
     params:{id:1},
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
[
    {
		[{“shelter”	{
		“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
}],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,
}
]
		[
		{“comment”{
			“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
}],
			“sid”:[{
				“nickname”:”wula”,
				“head”:”/upload/head/20160409/fdlkfns.jpg”,		
}],
			“content”:”评论内容”,
			“createtime”:”2016-04-11 14:40”,
}
]
		[{“collectnum”：5}] //该收留信息被收藏的次数

}

    
]
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <p>收留信息</p>
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                       <p>收留评论</p>
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>sid</td><td>Int</td><td>被评论人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>评论人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                  <tr><td>createtime</td><td>int</td><td>评论时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="sl_comment">2.4 收留评论</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/shelter/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">Ajax/POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>身份验证唯一码（<b>在HTTP头部使用</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>sid</td><td>True</td><td>Int</td><td>被评论人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>shelterid</td><td>True</td><td>Int</td><td>收留信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>True</td><td>String</td><td>评论内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"http://api.xmwula.com<?php echo $this->createUrl('/scollection/index');?>",
     headers:{onlykey:'wula114s5c54sd5s45s'},
     method:"POST",
     params:{sid:1,content:"评论的内容",shelterid:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                        {
                                            "status":"1",
                                            "statusCode": "200",
                                            "statusMsg":"评论成功"
                                            "data":{[{"comment"{"content":"评论内容","createtime":"2016-04-10 11:20",
                                            "uid":{"nick":"wula","head":"/upload/head/20160412/566516.jpg"},
                                            "sid":{{"nick":"wula","head":"/upload/head/20160412/566516.jpg"}}}
                                            }]
                                                    
                                            }
                                        }
                                    </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="sl_publish">2.5发布收留信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/shelter/add');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">post</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>身份验证唯一码（<b>在HTTP头部使用</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>cityid</td><td>false</td><td>int</td><td>城市id(没有则没有城市)</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>false</td><td>int</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>false</td><td>int</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/shelter/add');?>",
     headers:{onlykey:'wula114s5c54sd5s45s'},
     method:"post",
     data:{cityid:1,content:"求收留",img:"/upload/shelter/20160412/gfgfkl.jpg"}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                        {
                                            "status":"1",
                                            "statusCode": "200",
                                            "statusMsg":"发布成功"
                                        }
                                    </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zf_list">3.1 最新租房信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/rentalsinfo');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/rentalsinfo');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
{
             	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}
                                    </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody id="page_list_sproduct">
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zf_detail">3.2租房详情</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/rentalsinfo/detail');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>租房信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/rentalsinfo/detail');?>",
     method:"GET",
     params:{"id":"1"},
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
{
             	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                   <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody id="page_list_sproduct">
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    
                    <div class="body-li">
                        <h4 id="zf_collect">3.3 租房收藏</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/rentalsinfo/collect');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">Ajax/POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>身份验证唯一码（<b>在HTTP头部使用</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>租房信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/rentalsinfo/collcet');?>",
     headers:{onlykey:'wula114s5c54sd5s45s'},
     method:"Ajax/POST",
     data:{id:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
 {
		“status”:”1”,
		“statusCode”:”200”,
                'data':5, //返回该收留信息被收藏的总数
		“statusMsg”:”收藏成功”,

}
或
{
		“status”:”1”,
		“statusCode”:”403”,
		“statusMsg”:”已收藏过,
}
或
{	
		“status”:”0”,
		“statusCode”:”405”,
		“statusMsg”:”错误！”
	
}
                                    </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zf_comment">3.4 租房评论</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/rentalsinfo/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">ajax/post</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>身份验证唯一码（<b>在HTTP头部使用</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>id</td><td>true</td><td>Int</td><td>租房信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/rentalsinfo/comment');?>",
     headers:{onlykey:'wula114s5c54sd5s45s'},
     method:"ajax/post",
     data:{id:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                        {
                                            "status":"1",
                                            "statusCode": "200",
                                            "statusMsg":"评论成功",
                                            "data":{"uid":{"nickname":"wula","head":"/upload/head/20160412/1651.jpg"}
                                                    "content":"评论内容",
                                                    "createtime":"2016-04-12"
                                            }
                                            
                                        }
                                        或
                                        {
                                            "status":"0",
                                            "statusCode":"405",
                                            "statusMsg":"评论失败"
                                        
                                        }
                                    </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zx_list">4.1 资讯列表</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/article/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/article/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
[
    {
            "id":"1",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>资讯ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>资讯标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>资讯内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>String</td><td>2016-04-12</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zx_detail">4.2 资讯详情 </h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/article/detail');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>id</td><td>true</td><td>Int</td><td>资讯ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/article/detail');?>",
     method:"GET",
     params:{id:"1"}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
    {
            ["info":{
            "id":"1",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
            }]
            ["comment":{
             "uid"{"nickname":"wula","head":"/upload/head/20160412/651651.jpg"},   
             "content":"评论内容",
             "createtime":"2016-04-12",
            }]
            ["collectnum":{"5"}] //资讯收藏数
    }
                                </code>
                            </pre>
                        </div>
                       
                   <div class="body-param">
                       
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zx_collect">4.3 添加收藏</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/article/collect');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">ajax/POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>用户登录onlykey，在header中传递</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>id</td><td>true</td><td>Id</td><td>资讯id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/article/collect');?>",
     method:"ajax/POST",
     headers:{"onlykey":"afd15456fdsafd"}
     data:{id:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
    {
		“status”:”1”,
		“statusCode”:”200”,
		“statusMsg”:”收藏成功”,
                "data":"5" //收藏数目

}
或
{
		“status”:”1”,
		“statusCode”:”403”,
		“statusMsg”:”已收藏过,
}
或
{	
		“status”:”0”,
		“statusCode”:”405”,
		“statusMsg”:”错误！”
	
}

                                </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zx_category">6.4 类别切换</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/article/catearticle');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">ajax/post</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>cate_id</td><td>true</td><td>Int</td><td>分类id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/article/catearticle');?>",
     method:"ajax/post",
     data:{cate_id:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
    [
    {
        "id":"1",
        "title":"资讯标题"
        "content":"资讯内容",
        "createtime":"2016-04-12"

    }
    {
        "id":"1",
        "title":"资讯标题"
        "content":"资讯内容",
        "createtime":"2016-04-12"

    }
    ]
                                </code>
                            </pre>
                        </div>
                    </div>
                    
                    <div class="body-li">
                        <h4 id="zx_comment">4.5 资讯评论</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/article/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">ajax/post</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>onlykey</td><td>true</td><td>String</td><td>用户登录onlykey，在header中传递</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>资讯Id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/article/comment');?>",
     method:"ajax/post",
     headers:{"onlykey":"afd15456fdsafd"}
     data:{id:1}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
    
                                </code>
                            </pre>
                        </div>
                    </div>
                    
                   <div class="body-li">
                        <h4 id="hzx_list">1.1 资讯列表</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
[
    {
            "id":"1",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>资讯ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>资讯标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>资讯内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>String</td><td>2016-04-12</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hzx_add">1.2 添加资讯</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/add');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>cate_id</td><td>true</td><td>Int</td><td>分类id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>true</td><td>String</td><td>资讯标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                   <tr><td>content</td><td>true</td><td>String</td><td>资讯内容</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/add');?>",
     method:"POST",
     params:{"cate_id":1,"title":"资讯标题","content":"资讯内容"}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               {
                                "status":"1",
                                "msg":"add success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"add failed",
                                   "statusCode":403,

                                }
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hzx_modify">1.3 修改资讯</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/modify');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>true</td><td>Int</td><td>资讯id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                   <tr><td>cate_id</td><td>true</td><td>Int</td><td>分类id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>true</td><td>String</td><td>资讯标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                   <tr><td>content</td><td>true</td><td>String</td><td>资讯内容</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/add');?>",
     method:"POST",
     params:{"id":1,"cate_id":1,"title":"资讯标题","content":"资讯内容"}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               {
                                "status":"1",
                                "msg":"modify success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"modify failed",
                                   "statusCode":403,

                                }
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hzx_delete">1.4 删除资讯</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/delete');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>true</td><td>Int</td><td>资讯id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                   
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/delete');?>",
     method:"get",
     params:{"id":1}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               {
                                "status":"1",
                                "msg":"delete success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"delete failed",
                                   "statusCode":403,

                                }
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hzx_search">1.5 搜索资讯</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/search');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>title</td><td>true</td><td>String</td><td>资讯标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                  
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/search');?>",
     method:"POST",
     params:{"title":"资讯标题"}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               [
    {
            "id":"1",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "title":"最新资讯",
            "content":"资讯内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hzx_comment">1.6 资讯留言管理</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/article/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>id</td><td>true</td><td>Int</td><td>资讯id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                  
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/article/comment');?>",
     method:"get",
     params:{"id":2}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               [
    {
            "id":"1",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    
                    <div class="body-li">
                        <h4 id="hzf_list">2.1 租房信息列表</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
{
             	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}
                                    </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody id="page_list_sproduct">
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hzf_add">2.2 发布租房信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo/add');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>title</td><td>True</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>true</td><td>int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>true</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>address</td><td>true</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>zip_code</td><td>true</td><td>string</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>min_lease</td><td>true</td><td>sting</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>house_type</td><td>true</td><td>int</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>room_num</td><td>true</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>area</td><td>true</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>rent</td><td>true</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>deposit</td><td>true</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>room_facilities</td><td>true</td><td>Array</td><td>房间设备</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>community_facilities</td><td>true</td><td>string</td><td>小区设备</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>true</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>true</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>true</td><td>string</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo/add');?>",
     method:"post",
     params:{room_facilities:{"0"=>"1","1"=>"2",}}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                {
                                "status":"1",
                                "msg":"add success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"add failed",
                                   "statusCode":403,

                                }
                                    </code>
                            </pre>
                        </div>
                     
                    </div>
                    <div class="body-li">
                        <h4 id="hzf_modify">2.3 修改租房信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo/modify');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>租房信息id</td><td></td></tr>
                                   <tr><td>title</td><td>True</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>true</td><td>int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>true</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>address</td><td>true</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>zip_code</td><td>true</td><td>string</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>min_lease</td><td>true</td><td>sting</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>house_type</td><td>true</td><td>int</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>room_num</td><td>true</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>area</td><td>true</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>rent</td><td>true</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>deposit</td><td>true</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>room_facilities</td><td>true</td><td>string</td><td>房间设备</td><td><span class="label label-danger">V1.0</span></td></tr> 
                                    <tr><td>community_facilities</td><td>true</td><td>string</td><td>小区设备</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>true</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>true</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>true</td><td>string</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo/modify');?>",
     method:"post",
     
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                {
                                "status":"1",
                                "msg":"modify success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"modify failed",
                                   "statusCode":403,

                                }
                                    </code>
                            </pre>
                        </div>
                     
                    </div>
                    <div class="body-li">
                        <h4 id="hzf_delete">2.4 删除租房信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo/delete');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>租房信息id</td><td></td></tr>
                                   
                                    
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo/delete');?>",
     method:"get",
     
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                {
                                "status":"1",
                                "msg":"delete success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"delete failed",
                                   "statusCode":403,

                                }
                                    </code>
                            </pre>
                        </div>
                     
                    </div>
                    <div class="body-li">
                        <h4 id="hzf_search">2.5 租房信息搜索</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo/search');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>title</td><td>true</td><td>string</td><td>搜索内容</td><td></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo/search');?>",
     method:"POST",
     params:{ title:’搜索的信息’}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
             {	“id”:”1”,
		“title”:”最新租房信息”,
		“country_id”:”2”,
		“city_id”:”1”,
		“address”:”明发园”,
		“zip_code”:”363100”,
		“min_lease”:”3个月”,
		“house_type”:”[{
			“id”:”1”,	
			“type”:”学生公寓”,
}]”,
		“room_num”:”2”,
		“area”:”20”,
		“rent”:”1000”,
		“deposit”:”1000”,
		“room_facilities”:”[{
			{“id”:”1”,”name”:”热水器”},
			{“id”:”2”,”name”:”空调”},
			{“id”:”5”,”name”:”冰箱”},
}]”,
		“community_facilities”:”[{
			{“id”:”1”,”name”:”停车位”},
			{“id”:”2”,”name”:”24小时监控”},

}]”,
		“periphery”:”蔡塘广场，万达广场”,
		“description”:”交通方便，可步行到达软件园”,
		“begin_time”:”2016-04-11”,
		“createtime”:”2014-04-10”,
		“updatetime”:”1天前”,
		“status”:”1”,	
}

                                    </code>



                                    </code


                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                        <p>租房信息</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>租房信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>title</td><td>String</td><td>租房信息标题</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>country_id</td><td>Int</td><td>国家id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>city_id</td><td>int</td><td>城市id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>address</td><td>string</td><td>地址</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>zip_code</td><td>srting</td><td>邮编</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>min_lease</td><td>string</td><td>最短租期</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>house_type</td><td>string</td><td>房产类型</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_num</td><td>int</td><td>房室数</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>area</td><td>string</td><td>面积</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>rent</td><td>string</td><td>租金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>deposit</td><td>string</td><td>押金</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>room_facilities</td><td>string</td><td>房间设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>community_facilities</td><td>string</td><td>小区设施</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>periphery</td><td>string</td><td>周边</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>description</td><td>string</td><td>描述</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>begin_time</td><td>int</td><td>开租时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>updatetime</td><td>int</td><td>更新时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hzf_comment">2.6 租房留言管理</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/rentalsinfo/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>id</td><td>true</td><td>Int</td><td>租房id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                  
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/rentalsinfo/comment');?>",
     method:"get",
     params:{"id":2}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               [
    {
            "id":"1",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hsl_list">3.1 收留信息列表</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/shelter/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr><td>page</td><td>False</td><td>Int</td><td>第几页（<b>默认：0，即默认不分页</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>row</td><td>False</td><td>Int</td><td>每页几条数据（<b>默认：10，若page不传或者为0,该值无效</b>）</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/shelter/index');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
{
            	{“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
                    }],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,}
                

}
                                </code>
                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                   <div class="body-param">
                       <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                      </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hsl_modify">3.2修改收留信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/shelter/modify');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">post</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>true</td><td>String</td><td>收留信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>cityid</td><td>false</td><td>int</td><td>城市id(没有则没有城市)</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>false</td><td>int</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>false</td><td>int</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/shelter/modify');?>",
    
     method:"post",
     data:{id:"1",cityid:1,content:"求收留",img:"/upload/shelter/20160412/gfgfkl.jpg"}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                        {
                                            "status":"1",
                                            "statusCode": "200",
                                            "statusMsg":"modify success"
                                        }
                                        或
                                        {
                                            "status":0,
                                            "statusMsg":"modify failed",
                                            "statusCode":403,
                                        
                                        }
                                    </code>
                            </pre>
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hsl_delete">3.3 删除收留信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/shelter/delete');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>True</td><td>Int</td><td>收留信息id</td><td></td></tr>
                                   
                                    
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/shelter/delete');?>",
     method:"get",
     
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                {
                                "status":"1",
                                "msg":"delete success",
                                "statusCode":200,
                                }
                                或
                                {
                                   "status":"0",
                                   "msg":"delete failed",
                                   "statusCode":403,

                                }
                                    </code>
                            </pre>
                        </div>
                     
                    </div>
                    <div class="body-li">
                        <h4 id="hsl_search">3.4 搜索收留信息</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/shelter/search');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">POST</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>title</td><td>true</td><td>string</td><td>搜索内容</td><td></td></tr>
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/shelter/search');?>",
     method:"POST",
     params:{ cate:1,title:’搜索的信息’}
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                   

                                    <code>
       {
		“id”:”1”,
		“uid”:[{
			“id”:”2”,
			“nickname”:”唔呼”,
			“head”:”/upload/head/20160410/dfdkll.jpg”,
}],
		“cityid”:”5”,
		“content”:”求收留”,
		“img”:”/upload/20160410/86514651.jpg, /upload/20160410/86514651.jpg”,
		“createtime”:”2016-04-10”,
		“status”:”1”,

}

                                    </code>


                            </pre>
                        </div>
                        <p class="body-url">返回字段说明:</p>
                    <div class="body-param">
                       
                        <p>收留信息</p>
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>字段</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>id</td><td>Int</td><td>收留信息ID</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>uid</td><td>Int</td><td>发布人id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>content</td><td>String</td><td>发布内容</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>img</td><td>string</td><td>内容图片</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    <tr><td>createtime</td><td>int</td><td>发布时间</td><td><span class="label label-danger">V1.0</span></td></tr>
                                    
                                </tbody>
                           </table>
                        </div>
                    </div>
                    <div class="body-li">
                        <h4 id="hsl_comment">3.5 收留留言管理</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/shelter/comment');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">get</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr><td>id</td><td>true</td><td>Int</td><td>收留信息id</td><td><span class="label label-danger">V1.0</span></td></tr>
                                  
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/shelter/comment');?>",
     method:"get",
     params:{"id":2}
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>                                <code>
                               [
    {
            "id":"1",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "sid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
    },
    {   
            "id":"2",
            "uid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "sid":{"nickname":"wula","head":"/dlfdl.jpg"},
            "content":"评论内容",
            "createtime":"2016-04-12",
            
    }
]
                                </code>
                            </pre>
                        </div>                   
                    </div>
                    <div class="body-li">
                        <h4 id="hsg_list">4.1 广告列表</h4>
                        <p class="body-url">URL:</p>
                        <p class="body-param"><span class="body-url-a label label-success"><?php echo $this->createUrl('/wula/links/index');?></span></p>
                        <p class="body-param"></p>
                        <p class="body-url">HTTP请求方式:</p>
                        <p class="body-param"><b class="label label-danger">GET</b></p>
                        <p class="body-url">请求参数</p>
                        <div class="body-param">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>参数</th>
                                        <th>必须</th>
                                        <th>类型</th>
                                        <th>说明</th>
                                        <th>最低版本</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                           </table>
                        </div>
                        <p class="body-url">接口示例:</p>
                        <div class="body-param">
                            <p>请求：</p>
                            <pre>
<code>
$http({
     url:"<?php echo $this->createUrl('/wula/links/');?>",
     method:"GET",
     
 });
                </code>
                            </pre>
                            <p>返回：</p>
                            <pre>
                                    <code>
                                            
{
    “id”:”1”,
    “name”:”广告1”,
    “url”:”http://xmwula.com”,
    “img”:”/upload/link/201610409/fdfds.jpg”,
    “sort”:”1”,
}
{
    “id”:”2”,
    “name”:”广告2”,
    “url”:”http://xmwula.com”,
    “img”:”/upload/link/201610409/fdfds.jpg”,
    “sort”:”2”,
}
                                    </code>

                            </pre>
                        </div>
                    </div>
     <!-- -------===========---==============-----===============--------=======----   =========================---=========- !-->     
                    <div class="body-li">
                        <h3 id="status_code">注：全站状态码列表</h3>
                        <div class="body-param">
                            <p>当请求出错时会返回如下代码格式
                            <pre>
 {
    "status":0,
    "statusCode":404,
    "statusMsg":"请求不存在"
}
                            </pre>
                            </p>
                            <p>status说明：</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>status</th>
                                        <th>说明</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>0</td><td>失败</td></tr>
                                    <tr><td>1</td><td>成功</td></tr>
                                    <tr><td>10</td><td>onlykey错误，即在其它设备登录</td></tr>
                                </tbody>
                           </table>
                            <p>statusCode 和 statusMsg说明：</p>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>statusCode</th>
                                        <th>statusMsg</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>200</td><td>请求成功</td></tr>
                                    <tr><td>401</td><td>请求需要用户验证(一般为用户未登录)</td></tr>
                                    <tr><td>403</td><td>请求成功，但执行操作失败</td></tr>
                                    <tr><td>404</td><td>请求失败</td></tr>
                                    <tr><td>405</td><td>请求方式出错（本站只有 GET,POST,PUT,DELETE这四种请求方式）</td></tr>
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
                
                
            </body>
</html>