<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=GBK" />
    <title>����|ת��|ε��������</title>
    <meta name="keywords" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <meta name="description" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
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
            <div id="logo"><a href="index.php"><img src="<?php echo base_url()?>app/views/images/logo.jpg" alt="ε����ȫ��λ��������ƽ̨" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">�����ղ�</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?= site_url("account/index")?>">��¼</a> | &nbsp;<a href="user_reg.php">���ע��</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="index.php">��վ��ҳ</a></li>
                        <li><a href="#">����Ƶ��</a></li>
                        <li><a href="<?php echo base_url()?>app/views/service/service.php">�����շ�</a></li>
                        <li><a href="<?php echo base_url()?>app/views/memeber/index.php">�ҵ��ʻ�</a></li>
                        <li><a href="<?php echo base_url()?>app/views/help/faq.php">����֧��</a></li>
                        <li><a href="#">������Ѷ</a></li>
                        <li><a href="<?php echo base_url()?>app/views/contact.php">��ϵ��ʽ</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="<?php echo base_url()?>app/views/catalog/coupon.php">���ۺ��ۿ�</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/catalog.php">������վĿ¼</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/tip.php">������ʿ</a></li>
                            <li><a href="<?php echo base_url()?>app/views/catalog/skill.php">���Ծ���</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="<?php echo base_url()?>app/views/news/newsboard.php">���¹���</a></li>
                            <li><a href='<?php echo base_url()?>app/views/news/promotion.php">�Żݻ</a></li>
                            <li><a href="<?php echo base_url()?>app/views/news/custom.php">��������</a></li>
                            <li><a href="<?php echo base_url()?>app/views/news/term1.php">Э������</a></li>
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
                <div class="info">ע�ἴ�ɻ��2�����������ַ��һ����������˰�Ķ��ո��ݣ���һ���ڼ��︣�����ݡ���Թ�����վ˰��Ҫ��ͬ��������ѡ��ʹ������֮һ��<br/>
                  <a href="user_reg.asp" class="more">���ڼ��� <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
              </div>
            </div>
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/shopping.jpg" /></div>
                <div class="imr"><a href="<?php echo base_url()?>app/views/catalog.html"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="pho"><img src="<?php echo base_url()?>app/views/images/p2.jpg" /></div>
                <div class="info">����������վ�����������ۿ۷���������ʱ�С��������㲻�������ͺ�ȫ���г�ͬ������ô���������Ʒ��Ϣ������������ĳ�����Ʒ��<br/>
                  <a href="catalog.html" class="more">���� <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
              </div>
            </div>
            <div class="item">
              <div class="itle">
                <div class="inm"><img src="<?php echo base_url()?>app/views/images/shipping.jpg" /></div>
                <div class="imr"><a href="<?php echo base_url()?>app/views/service.html"><img src="<?php echo base_url()?>app/views/images/more.jpg" /></a></div>
              </div>
              <div class="icnt">
                <div class="pho"><img src="<?php echo base_url()?>app/views/images/p3.jpg" /></div>
                <div class="info">�����ṩ����������ʡ�˷ѵķ�ʽ������Ϊ����ʡ80%���˷ѡ������Ӷ�����ֵ�����������µ��������յ���Ʒ��ȫ�����ǡ�<br/>
                  <a href="service.html" class="more">�˷� <img src="<?php echo base_url()?>app/views/images/sj.jpg" /></a></div>
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
                    <li><a href="<?php echo base_url()?>app/views/service/service_diy.php">��������ת�˷���</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_bfm.php">BuyForMe����</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_storage.html">�ִ�����</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/service_extra.html">�����װ��ֵ����</a></li>
                    <li><a href="<?php echo base_url()?>app/views/service/index.asp">ȫ��͸������ϵͳ</a></li>
                    <li><a href="<?php echo base_url()?>app/views/contact.html">��Ч�ʿͷ�����</a></li>
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
                            <li class="a">�������ۿ�</li>
                            <li class="b">������վ���´������ۿۣ�ÿ�ո���</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g1.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">������վ</li>
                            <li class="b">����ϸѡ�����������ܻ㣬һ����λ</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g2.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">Amazon Gold Box</li>
                            <li class="b">����ѷ�����ۿ���Ʒ�����ݴ��</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g3.jpg" /></li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li class="a">eBay Daily Deals</li>
                            <li class="b">ÿ�첻ͬ���Żݻ���ߴ�90%���ۿ�</li>
                            <li class="c"><img src="<?php echo base_url()?>app/views/images/g4.jpg" /></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="rgad"><img src="<?php echo base_url()?>app/views/images/ad.jpg" border="0" /></a></div>
        </div>
        <div id="btm">
            <p><a href="<?php echo base_url()?>app/views/about.html">��������</a> |
            <a href="<?php echo base_url()?>app/views/help/faq.php">�û�����</a> | 
            <a href="<?php echo base_url()?>app/views/news/term1.php">ʹ������</a> |
            <a href="<?php echo base_url()?>app/views/news/term2.html">��������</a> | 
            <a href="<?php echo base_url()?>app/views/job.php">�˲���Ƹ</a> |
            <a href="<?php echo base_url()?>app/views/partner.php">�������</a> |
            <a href="w<?php echo base_url()?>app/views/eibo.php" style="color:#c20f08;">�ٷ�΢��</a>
            <br/>
            ��Ȩ���� Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
    <script src="<?php echo base_url()?>app/views/js/brslid.js" type="text/javascript"></script>
	</body>
</html>