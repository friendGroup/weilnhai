<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>����|ת��|ε��������</title>
    <meta name="keywords" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <meta name="description" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.2.1.pack.js" type="text/javascript"></script>
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
            <div id="logo"><a href="index.html"><img src="images/logo.jpg" alt="ε����ȫ��λ��������ƽ̨" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">�����ղ�</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.asp">��¼</a> | &nbsp;<a href="user_reg.asp">���ע��</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="index.html">��վ��ҳ</a></li>
                        <li><a href="#">����Ƶ��</a></li>
                        <li><a href="service.html">�����շ�</a></li>
                        <li><a href="index.asp">�ҵ��ʻ�</a></li>
                        <li><a href="faq.html">����֧��</a></li>
                        <li><a href="#">������Ѷ</a></li>
                        <li><a href="contact.html">��ϵ��ʽ</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="coupon.html">���ۺ��ۿ�</a></li>
                            <li><a href="catalog.html">������վĿ¼</a></li>
                            <li><a href="tip.html">������ʿ</a></li>
                            <li><a href="skill.html">���Ծ���</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="newsboard.html">���¹���</a></li>
                            <li><a href="promotion.html">�Żݻ</a></li>
                            <li><a href="custom.html">��������</a></li>
                            <li><a href="term1.html">Э������</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner" style="height:100px;">
            <img src="images/step44.jpg" alt="����һ��" width="980" height="100" />        </div>
        
        <div id="erjipnl">
            <div id="lftpnl">
                <div class="l_tle"><img src="images/gouwu.jpg" /></div>
                <div id="l_list">
                    <ul>
                        <li><a href="coupon.html">���ۺ��ۿ�</a></li>
                        <li class="sel"><a href="catalog.html">������վĿ¼</a></li>
                        <li><a href="tip.html">������ʿ</a></li>
                        <li><a href="skill.html">���Ծ���</a></li>
                    </ul> 
                </div>
                <div id="picpnl">
                    <a href="contact.html"><img src="images/a2.jpg" alt="�ͷ�����" border="0" /></a>
                    <a href="howto.html"><img src="images/a3.jpg" alt="��������" border="0" /></a>
                    <a href="coupon.html"><img src="images/a1.jpg" alt="����" border="0" /></a> </div>
            </div>
            <div id="rgtpnl">
                <div class="r_tle">
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ���� > ��վĿ¼</div>
                </div>
                <div id="shop_container">
                    <div id="cart">
                        <a href="catalog.html">��ѡ�̼�</a> |
                        <a href="catalog_mall.html">�ۺ����̼�</a> |
                        <a href="catalog_clo1.html">����Ьñ</a> |
                        <a href="catalog_hea.html">ĸӤ����</a> |
                        <a href="catalog_cos.html">���ݻ���</a>
                    </div>
                    <div class="pagebar">
                        Page <a href="catalog_clo1.html">1</a> <a href="catalog_clo2.html">2</a> <a href="catalog_clo3">3</a> 4
                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.zappos.com/"><img src="images/yi_logo/Zappos-Logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.zappos.com/">Zappos.com</a></li>
                                <li class="b">Zappos��һ��������Ь��B2C��վ����1999�꿪վ��������ѳɳ�Ϊ������Ь�������վ,������Amazon��ֵ��ע����ǣ�Zappos�Ĵ�ʼ��л�һ�����youtube�����ϴ�ʼ�˳�����һ����Ҳ�ǻ��ˡ�</li>
                                <li class="c"><a href="http://www.zappos.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.karmaloop.com"><img src="images/yi_logo/karmaloop.jpeg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.karmaloop.com">Karmaloop.com</a></li>
                                <li class="b">���Ű��۵����ˣ�������������ģ��С̫�ô���Ůģ����һ�ж��������������̳Ƿ�����룬����Karmaloop������ص�������ķ������� Karmaloop���۵ķ�װ�����еͶ�Ϊ�����۸񲻹��Ƕ����Ϻܶ�������Ů��ϲ�á�</li>
                                <li class="c"><a href="http://www.karmaloop.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://us.asos.com"><img src="images/yi_logo/asos.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://us.asos.com">ASOS </a></li>
                                <li class="b">Ӣ��������Ů���ʱװ���꣬���Ƴ�������ʱ�еĴ������š�</li>
                                <li class="c"><a href="http://us.asos.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bluefly.com/"><img src="images/yi_logo/bluefly.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bluefly.com/">Bluefly.com </a></li>
                                <li class="b">Blue fly��Ϊ���������ۿ�ʱ�й�����վ����1998�꿪ʼ��ȫ��FLY���������ʱ��Ůװ�Ȳ�Ʒ����ʹﵽ2��������û���ݻ���ȴ��ʱ�У�û�о��ޣ�ȴ�и߹�������Ϣ����͸���������׵���Ϣ��</li>
                                <li class="c"><a href="http://www.bluefly.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.ebags.com/"><img src="images/yi_logo/ebags.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.ebags.com/">eBags.com</a></li>
                                <li class="b">eBags.com���۳���350��Ʒ�ƣ����򲼴������������Ǯ�е����԰���eBags�ṩ������Ʒ�Ƶĸ߼������а�����</li>
                                <li class="c"><a href="http://www.ebags.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.net-a-porter.com"><img src="images/yi_logo/net_a_poter.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.net-a-porter.com">Net-A-Porter</a></li>
                                <li class="b">Net-A-Porter��ȫ������һָ�������ݳ�Ʒʱװ�����̡���2000��6�´���������Net- A - Porter�ѳɹ���ȷ�����ݳ�Ʒ�Ƶ�λ�����ṩ�޿����޵İ�װ�������ױȵĿͻ�����</li>
                                <li class="c"><a href="http://www.net-a-porter.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.shoebuy.com"><img src="images/yi_logo/shoebuy.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.shoebuy.com">Shoebuy.com </a></li>
                                <li class="b">Shoebuy����������������Ь�������̣��ṩ����Ь�ࡢ�����Լ����εȡ�Shoebuy���ܹ��г���1200��Ʒ�ƣ��Լ�����100�������Ʒ������BizRate��Ϊʮ�����߷�װЬñ������֮һ��</li>
                                <li class="c"><a href="http://www.shoebuy.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.shopbop.com"><img src="images/yi_logo/shopbop.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.shopbop.com">Shopbop.com</a></li>
                                <li class="b">ShopBop ��Ϊһ�������̵꣬�������ṩ��������ţ��Ʒ�Ƶ������еķ��εȣ���Ҫ����75�����ʦƷ�Ƶ�Ů�Գ��·��Ρ�Ь�ӡ�����Ȳ�Ʒ��</li>
                                <li class="c"><a href="http://www.shopbop.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                  </div>
                    <div class="pagebar">
                        Page <a href="catalog_clo1.html">1</a> <a href="catalog_clo2.html">2</a> <a href="catalog_clo3">3</a> 4                   </div>
                </div>
            </div>
        </div>
        
        <div id="btm">
            <p><a href="about.html">��������</a> |
            <a href="faq.html">�û�����</a> | <a href="term1.html">ʹ������</a> |
            <a href="term2.html">��������</a> | <a href="job.html">�˲���Ƹ</a> |
            <a href="partner.html">�������</a> |
            <a href="weibo.html" style="color:#c20f08;">�ٷ�΢��</a>
            <br/>
            ��Ȩ���� Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
    <!--<script src="js/brslid.js" type="text/javascript"></script>-->
</body>
</html>