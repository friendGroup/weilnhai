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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ���� > ��վĿ¼ > ��ѡ�̼�</div>
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
                        Page 1 
                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.amazon.com"><img src="images/baihuo_logo/logo_b1.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.amazon.com">Amazon.com</a></li>
                                <li class="b">����ѷ���������������������˾���ܲ�λ�ڻ�ʢ���ݵ�����ͼ��Ŀǰ������Ʒ��Χ�൱�㷺���������󣬰�����DVD�����ֹ�������ԡ������������Ϸ�����Ӳ�Ʒ���·����Ҿߵȵȡ�</li>
                                <li class="c"><a href="http://www.amazon.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.6pm.com/"><img src="images/jinxuan_logo/6pm.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.6pm.com/">6pm.com</a></li>
                                <li class="b">6pm��Ҫ�ṩЬ����ְ���Ʒ���㼯��������������ʱ��Ʒ�ƣ�ţ�з�񣬲������Ƿ�񣬸��ַ��鶼�ڲ�Ʒ�е������֣��ṩ���ͻ������ľ�Ʒѡ����վ���Ƴ��Ĵ��ۿ�Ь���ܶ඼�ǰײ˼ۣ��Ե�������Ʒ�ı�ѡ��վ��</li>
                                <li class="c"><a href="http://www.6pm.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.drugstore.com/"><img src="images/jinxuan_logo/drugstore.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.drugstore.com/">Drugstore.com </a></li>
                                <li class="b">��ȫ��1000��ҵ�����ҩ���У�Drugstore.com������ҽҩ���۵�Rite Aid (RAD)�������ǱȽϷ��Ϲ淶�Ĵ�������ҩ�ꡣͬʱҲ�Ǳ���Ʒ������Ʒ������Ʒ����������Ʒ�ۺ�����վ��</li>
                                <li class="c"><a href="http://www.drugstore.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.jcrew.com/index.jsp"><img src="images/jinxuan_logo/jcrew.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.jcrew.com/index.jsp">J.Crew </a></li>
                                <li class="b">J.Crew���������������з�װƷ�ƣ������������ǳ��ܻ�ӭ��J.Crew��ʽ�ϼ������ţ�������ʽ����+ְҵ��񣻸���Ҫ���ǣ�J.Crew�����Ϻͼ��ö���͵�����ϣ��������ޣ�Cashmere���ͳ�еȸߵ����ϣ���׺���ֹ����Σ�����ȴֻ�д��Ƶ�ʮ��֮һ��</li>
                                <li class="c"><a href="http://www.jcrew.com/index.jsp">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.godiva.com"><img src="images/jinxuan_logo/Godiva.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.godiva.com">Godiva </a></li>
                                <li class="b">�ߵ���Godiva�ɿ���,Դ�ڱ���ʱ��³������1926���ɱ���ʱ�ˣ��ɿ�����ʦJoseph Drapsһ�ִ��죬���Դ�˵������Godiva�����������������г���75����ʷ.����1968����Godiva����Ϊ����ʱ�������õ��ɿ���Ʒ�ƣ���������������ɿ�����</li>
                                <li class="c"><a href="http://www.godiva.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.gnc.com/home/index.jsp"><img src="images/jinxuan_logo/gnc.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.gnc.com/home/index.jsp">GNC</a></li>
                                <li class="b">������������ƷƷ��GNC(General Nutrition Centers),��ȫ������������Ӫ��ʳƷ��˾��רҵ��������ά���ء������ʡ�ֲ�ﾫ���Լ���������Ӫ��ʳƷ�����в�Ʒ��������������������׼����FDA������ʳƷ��ҩƷ����֣��䷢�����������׼��GMP��֤)��Ϊȫ�������ִ���ά���غͱ���ʳƷ���쳧֮һ��</li>
                                <li class="c"><a href="http://www.gnc.com/home/index.jsp">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.juicycouture.com/"><img src="images/jinxuan_logo/juicy.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.juicycouture.com/">Juicy Couture</a></li>
                                <li class="b">�����������ݵ�ʱ��Ʒ�� Juicy Couture (����)�����������Ů����·�ߡ�ɫ�ʷ��棬����ѡȡ�˼�Ϊ������ɫ�ʣ���Ƴ������������ֱ��Ů��ζ�ĸо��������ǹ��������ĵ���ɫ������ɫ������ɫ���ۺ�ɫ��Ҳ�е�����Ȼ����ɫ��ǳ��ɫ�ȣ���������ɫ�ʣ���Ҫ������ܵ��ഺ�Ļ�����</li>
                                <li class="c"><a href="http://www.juicycouture.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.kiehls.com"><img src="images/jinxuan_logo/kiehls.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.kiehls.com">Kiehl's </a></li>
                                <li class="b">Kiehl's��ֲ�����õĳɷ��������ʺ����������弡���Լ�ͷ���ı���Ʒ��������������˿Ͷ�Kiehl's��Ʒ���ڴ���ӵ�����ݣ�ҩѧ����ҩ��ҽѧ����ϵ�רҵ֪ʶ���������飬�����ഫ�з���Kiehl's���ص��䷽�����ں����µĿƼ�������������ر�ı�����Ʒ��</li>
                                <li class="c"><a href="http://www.kiehls.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.ralphlauren.com/home/index.jsp?ab=int_fd_background"><img src="images/jinxuan_logo/polo-ralph.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.ralphlauren.com/home/index.jsp?ab=int_fd_background">Palph Lauren </a></li>
                                <li class="b">����?���� (Ralph Lauren) ������ŨŨ������Ϣ�ĸ�ƷζʱװƷ�ƣ� POLO ��������ŷ���������ޣ������ѳ�Ϊ�����¹��бر������ſ�ʽ��</li>
                                <li class="c"><a href="http://www.ralphlauren.com/home/index.jsp?ab=int_fd_background">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="www.http://www.bergdorfgoodman.com"><img src="images/baihuo_logo/logo_b5.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.saksfifthavenue.com">Saksfifthavenue.com </a></li>
                                <li class="b">Saks��������Ʒ�ٻ��� (Saks Fifth Avenue) �������ϵĶ����ĸ߶˰ٻ���˾֮һ����1824��������һֱΪŦԼ�����ṩ��Ʒ�ʵķ��μ�������ȫ����50����ŵ꣬�콢��λ��ŦԼ��������</li>
                                <li class="c"><a href="http://www.saksfifthavenue.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                  </div>
                    <div class="pagebar">
                        Page 1
                    </div>
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
	<script type="text/javascript" charset="utf-8" src="http://gate.looyu.com/47016/98582.js"></script>
</body>
</html>