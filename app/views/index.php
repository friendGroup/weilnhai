<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK" />
    <title>海淘|转运|蔚蓝海物流</title>
    <meta name="keywords" content="海淘,美国转运,转运,代购,转运公司,蔚蓝海物流,蔚蓝海转运平台,美国到中国快递" />
    <meta name="description" content="海淘,美国转运,转运,代购,转运公司,蔚蓝海物流,蔚蓝海转运平台,美国到中国快递" />
    <link href="<?php echo base_url()?>app/views/css/style.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url()?>app/views/js/jquery.js" type="text/javascript"></script>
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
            <div id="logo"><a href="index.php"><img src="<?php echo base_url()?>app/views/images/logo.jpg" alt="蔚蓝海全方位物流整合平台" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">加入收藏</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= site_url("account/index")?>">登录</a> | &nbsp;<a href="user_reg.php">免费注册</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="index.php">网站首页</a></li>
                        <li><a href="#">购物频道</a></li>
                        <li><a href="<?php echo base_url()?>app/views/service/service.php">服务收费</a></li>
                        <li><a href="<?php echo base_url()?>app/views/memeber/index.php">我的帐户</a></li>
                        <li><a href="<?php echo base_url()?>app/views/help/faq.php">帮助支持</a></li>
                        <li><a href="#">新闻资讯</a></li>
                        <li><a href="<?php echo base_url()?>app/views/contact.php">联系方式</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="<?php echo base_url()?>app/views/catalog/coupon.php">销售和折扣</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/catalog.php">美国网站目录</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/tip.php">购物贴士</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/skill.php">海淘经验</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="<?php echo base_url()?>app/views/news/newsboard.php">最新公告</a></li>
                            <li><a href='<?php echo base_url()?>app/views/news/promotion.php">优惠活动</a></li>
                            <li><a href="<?php echo base_url()?>app/views/news/custom.php">海关政策</a></li>
                            <li><a href="<?php echo base_url()?>app/views/news/term1.php">协议条款</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner">
            <div id="scolpic">
                <ul>
                    <li><img src="<?php echo base_url()?>app/views/images/banner.jpg" /></li>
                    <li><img src="<?php echo base_url()?>app/views/images/banner2.jpg" /></li>
                    <li><img src="<?php echo base_url()?>app/views/images/banner3.jpg" /></li>
                </ul>
                <div id="numbar">
                </div>
            </div>
            <div id="fbrpic"><img src="<?php echo base_url()?>app/views/images/buyforme.jpg" /></div>
        </div>
        <div id="idxfir">
          <div id="itmpnl">
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/join.jpg" /></div>
                <div class="imr"><a href="<?php echo base_url()?>app/views/register.asp"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="pho"><img src="<?php echo base_url()?>app/views/images/p1.jpg" /></div>
                <div class="info">注册即可获得2个免费美国地址。一个在美国免税的俄勒冈州，另一个在加里福利亚州。针对购物网站税收要求不同，您可以选择使用其中之一。<br/>
                  <a href="user_reg.asp" class="more">现在加入 <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
              </div>
            </div>
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/shopping.jpg" /></div>
                <div class="imr"><a href="<?php echo base_url()?>app/views/catalog.html"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="pho"><img src="<?php echo base_url()?>app/views/images/p2.jpg" /></div>
                <div class="info">美国购物网站物美价廉，折扣繁多且引领时尚。您可以足不出户，就和全球市场同步，获得大量国际商品信息，购买到最给力的潮流精品。<br/>
                  <a href="catalog.html" class="more">购物 <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
              </div>
            </div>
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/shipping.jpg" /></div>
                <div class="imr"><a href="<?php echo base_url()?>app/views/service.html"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="pho"><img src="<?php echo base_url()?>app/views/images/p3.jpg" /></div>
                <div class="info">我们提供多种最方便最节省运费的方式，可以为您节省80%的运费。更增加多项增值服务，让您从下单到最终收到货品，全程无忧。<br/>
                  <a href="service.html" class="more">运费 <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
              </div>
            </div>
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/service.jpg" /></div>
                <div class="imr"><a href="#"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="ser">
                  <ul>
                    <li><a href="<?php echo base_url()?>app/views/service/service_diy.php">自助购物转运服务</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_bfm.php">BuyForMe服务</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_storage.html">仓储服务</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_extra.html">各项包装增值服务</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/index.asp">全程透明跟踪系统</a></li>
                    <li><a href="<?php echo base_url()?>app/views/contact.html">高效率客服中心</a></li>
                  </ul>
                </div>
                <div class="serpho"><img src="<?php echo base_url()?>app/views/images/serimg.jpg" /></div>
				</div>
            </div>
          </div>
        </div>
        <div id="idxsec">
            <div id="gouwu">
                <div id="gwpnl">
                    <div class="item">
                        <ul>
                            <li class="a">销售与折扣</li>
                            <li class="b">各大网站最新促销和折扣，每日更新</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g1.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">购物网站</li>
                            <li class="b">精挑细选的美国官网总汇，一步到位</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g2.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">Amazon Gold Box</li>
                            <li class="b">亚马逊超低折扣商品，不容错过</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g3.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">eBay Daily Deals</li>
                            <li class="b">每天不同的优惠活动，高达90%的折扣</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g4.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="rgad"><img src="<?php echo base_url()?>app/views/images/ad.jpg" border="0" /></a></div>
        </div>
        <div id="btm">
            <p><a href="<?php echo base_url()?>app/views/about.html">关于我们</a> |
            <a href="<?php echo base_url()?>app/views/help/faq.php">用户帮助</a> | 
            <a href="<?php echo base_url()?>app/views/news/term1.php">使用条款</a> |
            <a href="<?php echo base_url()?>app/views/news/term2.html">免责声明</a> | 
            <a href="<?php echo base_url()?>app/views/job.php">人才招聘</a> |
            <a href="<?php echo base_url()?>app/views/partner.php">商务合作</a> |
            <a href="w<?php echo base_url()?>app/views/eibo.php" style="color:#c20f08;">官方微博</a>
            <br/>
            版权所有 Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
    <script src="<?php echo base_url()?>app/views/js/brslid.js" type="text/javascript"></script>
	</body>
</html>