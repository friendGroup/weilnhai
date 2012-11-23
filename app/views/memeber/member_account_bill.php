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
                    <div class="posi">您现在位置：<a href="../index.php">蔚蓝海</a> > 账户管理 > 对账单</div>
                </div>
                <div id="formzoom">
                    <h1>对账单</h1>
						<form id="Form1" name="Form1" method="post" action="member_edit_pw.php" onsubmit="return chk_form();">
						  <table width="960" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
                            <tr>
                              <td valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" class="user_right_box">
                                  <tbody>                                    
                                    <tr>
                                      <td  height="30" align="left" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed" ><!--对账单 -->
                                           <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                                                <tbody>                                                
                                                    <tr>
                                                        <td width="120" height="26"><strong>运单编号</strong></td>
                                                        <td width="135"><strong> 涉及单号 </strong></td>
                                                        <td width="97" align="center"><strong>重量</strong></td>
                                                        <td width="131" align="center"><strong>支付金额</strong></td>
                                                        <td width="190" align="center"><strong>日期</strong></td>
                                                    </tr>                                                
                                                    <tr >
                                                        <td width="120" height="26" style="border-top:1px solid #333333;"><strong></strong></td>
                                                        <td width="135" style="border-top:1px solid #333333;"></td>
                                                        <td width="97" align="center" style="border-top:1px solid #333333;"></td>
                                                        <td width="131" align="center" style="border-top:1px solid #333333;"></td>
                                                        <td width="190" align="center" style="border-top:1px solid #333333; border-right:1px #CCCCCC dashed;"  ></td>
                                                    </tr>
                                            </tbody>
                                          </table>
                                        <!--分页 -->
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td></td>
                                            </tr>
                                          </table>
                                        </td>
                                    </tr>
                                  </tbody>
                              </table></td>
                            </tr>
                          </table>
						</form>
	
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