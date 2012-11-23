<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>海淘|转运|蔚蓝海物流</title>
    <meta name="keywords" content="海淘,美国转运,转运,代购,转运公司,蔚蓝海物流,蔚蓝海转运平台,美国到中国快递" />
    <meta name="description" content="海淘,美国转运,转运,代购,转运公司,蔚蓝海物流,蔚蓝海转运平台,美国到中国快递" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
   <script src="../js/jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function(){
            $("#nav ul:eq(0) li").each(function(index){
                $(this).mouseover(function(){LoadNav(index);});
            });
            $("#banner").mouseover(function(){LoadNav(-1);});
        });
        function LoadNav(idx)
        {
            $("#nav ul:eq(0) li").attr("class","");
            $("#nav div").hide();
            
            $("#nav ul:eq(0) li:eq("+idx+")").attr("class","sel");
            
            if(document.getElementById("tag"+idx)!=undefined)
            {
                $("#tag"+idx).css("left",(330+93*idx)+"px");
                $("#tag"+idx).show();
            }            
        }
        function addBookmark(title) 
        {
             var url=parent.location.href;
             if (window.sidebar)              
                window.sidebar.addPanel(title, url,"");               
             else if( document.all ) 
                window.external.AddFavorite( url, title);
             else if( window.opera && window.print) 
                return true;
       }
    </script>
    <script type="text/javascript">
var i = 1;
function addRow(id){
    var tbody = document.getElementById(id).getElementsByTagName("TBODY")[0];
    var nid = i;     //定义行编号   用于删除
    var id = 'tr'+nid;  //定义行名称  用于删除
    var row = document.createElement("TR")  //定义行
    var row2 = document.createElement("TR")  //定义行
    row.setAttribute("id",id);       //给行 id属性赋值
    var td1 = document.createElement("TD")  //定义列
    td1.setAttribute("className","zit");  //给列增加 样式
    td1.align="center";                  //居中
    td1.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";  //添加 右 和下边框
    td1.innerHTML+=nid;
    var td2 = document.createElement("TD")
    td2.setAttribute("className","zit");
    td2.align="center";
    td2.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td2.innerHTML+=" <select name='quality"+nid+"'><option>UPS</option><option>FEDEX</option><option>USPS</option><option>ONTRAC</option><option>其他</option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</select>";
    var td3 = document.createElement("TD")
    td3.setAttribute("className","zit");
    td3.align="center";
    td3.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td3.innerHTML+="美国国内跟踪号：<input   type='text'   name='website"+nid+"'  size='40'> <select name='quality"+nid+"'><option>UPS</option><option>FEDEX</option><option>USPS</option><option>ONTRAC</option><option>其他</option></select> 仓库： <select name='ku"+nid+"'><option>CA</option><option>OA</option></select>";
    var td5 = document.createElement("TD")
    td5.setAttribute("className","zit");
    td5.align="center";
    td5.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td5.innerHTML+="";
    var td7 = document.createElement("TD")
    td7.setAttribute("className","zit");
    td7.align="center";
    td7.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td7.innerHTML+="<a href='javascript:deleRow("+nid+");'  size='30'>[删除] </a>"  //传行编号进入删除js
    row.appendChild(td7);
    row.appendChild(td3); 
    tbody.appendChild(row);
    i++;
}
function deleRow(index){
    var mytable = document.getElementById("mytbody");
    var myrow = document.getElementById("tr"+index);
    mytable.deleteRow(myrow.rowIndex);
}
</script>
<link href="../css/common.css" rel="stylesheet" type="text/css" />
<link href="../css/user.css" rel="stylesheet" type="text/css" />
<link href="../css/index.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="../js/openlayer.js"></script>

<script language="javascript" type="text/javascript" src="../js/Expand_Directory.js"></script>
</head>
<body>
    <div id="main">
        <div id="top">
            <div id="logo"><a href="../index.php"><img src="../images/logo.jpg" alt="蔚蓝海全方位物流整合平台" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">加入收藏</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../login.php">登录</a> | &nbsp;<a href="../register.php">免费注册</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="../index.php">网站首页</a></li>
                        <li><a href="#">购物频道</a></li>
                        <li><a href="../service/service.php">服务收费</a></li>
                        <li><a href="../memeber/index.php">我的帐户</a></li>
                        <li><a href="../help/faq.php">帮助支持</a></li>
                        <li><a href="#">新闻资讯</a></li>
                        <li><a href="../contact.php">联系方式</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="../catalog/coupon.php">销售和折扣</a></li>
                            <li><a href="../catalog/catalog.php">美国网站目录</a></li>
                            <li><a href="../catalog/tip.php">购物贴士</a></li>
                            <li><a href="../catalog/skill.php">海淘经验</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="../news/newsboard.php">最新公告</a></li>
                            <li><a href="../news/promotion.php">优惠活动</a></li>
                            <li><a href="../news/custom.php">海关政策</a></li>
                            <li><a href="../news/term1.php">协议条款</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner" style="height:100px;">
            <img src="../images/step4.jpg" />
        </div>
        
        <div id="erjipnl">
            <div id="lftpnl">
                <div id="menu">
                    <div class="item">
                        <div class="cagname"><img src="../images/gouwudingdan.jpg" /></div>
                        <ul>
                            <li><a href="addbuy.php">购物单面板</a></li>
                            <li><a href="ordercurrenview.php">当前订单</a></li>
                            <li><a href="orderhistory.php">历史订单</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="cagname"><img src="../images/yundanguanli.jpg" /></div>
                        <ul>
                            <li><a href="addshipinfo.php">提交预报</a></li>
                            <li><a href="view.php">预报查询</a></li>
                            <li><a href="member_storge_list.php">库存包裹</a></li>
                            <li><a href="member_waybillAdd.php">提交运单</a></li>
                            <li><a href="member_waybillindex.php">当前运单</a></li>
                            <li><a href="member_waybill_list.php">历史运单</a></li>
                            <li><a href="member_receiver.php">地址薄</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="cagname"><img src="../images/zhanghuguanli.jpg" /></div>
                        <ul>
                            <li><a href="index.php">个人资料</a></li>
                            <li><a href="member_edit_pw.php">修改密码</a></li>
                            <li><a href="#">在线充值</a></li>
                            <li><a href="member_account.php">财务明细</a></li>
                            <li><a href="member_account_bill.php">电子账单</a></li>
                            <li><a href="member_logout.php">安全退出</a></li>
                        </ul>
                    </div>
                </div>
                <div id="picpnl">
                   <a href="../contact.php"><img src="../images/a2.jpg" alt="客服中心" border="0" /></a>
                    <a href="../howto.html"><img src="../images/a3.jpg" alt="操作流程" border="0" /></a>
                    <a href="../catalog/coupon.php"><img src="../images/a1.jpg" alt="促销" border="0" /></a>
                </div>
            </div>
            <div id="rgtpnl">
                <div class="r_tle">
                    <div class="posi">您现在位置：<a href="../index.php">蔚蓝海</a> > 运单管理 > 提交预报</div>
                </div>
                <div id="formzoom">
                    <h1>提交预报<br />
                    </h1>
                    <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                        <tbody>
                            <tr>
                                <td colspan="2" style="text-align:left;text-indent:10px;"><b>预报信息</b></td>
                            </tr>
                            <tr>
                              	<td>
                                	<form id="myForm" method="get" action="savepre.asp">
                                    <table width="100%" border="0" cellspacing="0" id="mytable">
                                    	<tbody id="mytbody">
                                            <tr>
                                              <td height="20" colspan="7" class="zit" style='border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;'>&nbsp;</td>
                                            </tr>
                                            <tr>
										         <td width="10%" class="cuti" style='border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;'><div align="center"></div></td>
                                                 <td width="80%" class="cuti" style='border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;'>
                                                 	<div align="center">
                                                    	美国国内跟踪号：<input   type='text'   name='website100'  size='40'>
                                                    </div>
                                                    <select name='quality100'>
                                                        <option>UPS</option>
                                                        <option>FEDEX</option>
                                                        <option>USPS</option>
                                                        <option>ONTRAC</option>
                                                        <option>其他</option>
                                                   </select>
                                                   仓库： <select name='ku100'><option>CA</option><option>OR</option></select>
                                                 </td>
                                             </tr>                                                 
                                             <tr>
                                             	<td>
                                                	<input type="button" name="button" value="预报下一包裹" onclick="addRow('mytable');"/>
								                    <input name="Submit" type="Submit" value="完成提交" />
                                                </td>
                                             </tr>
                                        </tbody>
                                    </table>                       
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
       <div id="btm">
            <p><a href="../about.html">关于我们</a> |
            <a href="../help/faq.php">用户帮助</a> | 
            <a href="../news/term1.php">使用条款</a> |
            <a href="../news/term2.html">免责声明</a> | 
            <a href="../job.php">人才招聘</a> |
            <a href="../partner.php">商务合作</a> |
            <a href="../weibo.php" style="color:#c20f08;">官方微博</a>
            <br/>
            版权所有 Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
</body>
</html>