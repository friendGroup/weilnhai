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
                        Page 1 <a href="catalog_clo2.html">2</a> <a href="catalog_clo3.html">3</a> <a href="catalog_clo4.html">4</a>
                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.6pm.com"><img src="images/jinxuan_logo/6pm.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.6pm.com/">6pm.com</a></li>
                                <li class="b">6pm��Ҫ�ṩЬ����ְ���Ʒ���㼯��������������ʱ��Ʒ�ƣ�ţ�з�񣬲������Ƿ�񣬸��ַ��鶼�ڲ�Ʒ�е������֣��ṩ���ͻ������ľ�Ʒѡ����վ���Ƴ��Ĵ��ۿ�Ь���ܶ඼�ǰײ˼ۣ��Ե�������Ʒ�ı�ѡ��վ��</li>
                                <li class="c"><a href="http://www.6pm.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.7forallmankind.com/"><img src="images/yi_logo/7allmaid.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.7forallmankind.com/">for all 7 mankind</a></li>
                                <li class="b">for all 7 mankind�Ǳ��ܺ��������ǻ�ӭ��ţ�п�Ʒ�ƣ����Ͼ�����ϸ�ڽ�������֤��ˮ׼��������ϵ�ж�����׷������ʱװ�Եĳ���ָ�ꡣ</li>
                                <li class="c"><a href="http://www.7forallmankind.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.abercrombie.com"><img src="images/yi_logo/af.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.abercrombie.com">A&F </a></li>
                                <li class="b">A&F(abercrombie & fitch)�ǵ�����������������Ʒ�ƣ��Ը߸�����������������µķ�������Ӹ��أ��������ӿ��������ȫ����ʱ�е���ָ�ꡣ
</li>
                                <li class="c"><a href="http://www.abercrombie.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.adidas.com/us/"><img src="images/yi_logo/adidas.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.adidas.com/us/">Adidas </a></li>
                                <li class="b">���Ե¹����˶�����Ʒ�ư��ϴ�˹����Ҷ�ݣ����˶���Ʒ�г��������ء�����ʢ����</li>
                                <li class="c"><a href="http://www.adidas.com/us/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.aeropostale.com"><img src="images/yi_logo/Aeropostale.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.aeropostale.com">Aeropostale </a></li>
                                <li class="b">Aeropostale����������У԰Ʒ�ƣ�Ҳ�ǵ���ȫ����������������Ʒ�ơ��ص����ڼ�λ���ˣ�ͼ����ͨ��ĳЩ��ʽ����Ʒ��Ͽ������ķ��</li>
                                <li class="c"><a href="http://www.aeropostale.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.ae.com/web/index.jsp"><img src="images/yi_logo/american-eagle.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.ae.com/web/index.jsp">American Eagle</a></li>
                                <li class="b">AE����ӥ (American Eagle) ��ʽ���з���쵼Ʒ�ƣ�����ʽѧԺ��ͳ��������������ʱ�У��Ժ���ļ۸��ṩ�����߸��ʸ���Ʒ�������ܱ���������ϲ������Ʒ����ţ��ϵ�С��������з���T�������Ρ�Ьѥ��Ӿװϵ�еȡ�</li>
                                <li class="c"><a href="http://www.ae.com/web/index.jsp">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.anntaylor.com"><img src="images/yi_logo/anntaylor.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.anntaylor.com">Ann Taylor</a></li>
                                <li class="b">Ů���·��������Ь�Ӻ�װ��Ʒ���С�������һ����Ʒ�ơ�֮�ƣ�ר������ܹ����ý�����25-55���Ů�Թ˿͡�</li>
                                <li class="c"><a href="http://www.anntaylor.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.armaniexchange.com"><img src="images/yi_logo/ax.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.armaniexchange.com">Armani Exchange </a></li>
                                <li class="b">������-������ٵ���ʱ����Ů���b����������l�����R�������ˮ�����yƷ��
</li>
                                <li class="c"><a href="http://www.armaniexchange.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bananarepublic.com"><img src="images/yi_logo/bananarepublic.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bananarepublic.com">Banana Republic </a></li>
                                <li class="b">GAP�������¸���Ʒ�ƣ����ƫ������񣬿�ʽ��Ϊ������ӱ��Ϊ���������ձ������ϲ����Ʒ��֮һ��</li>
                                <li class="c"><a href="http://www.bananarepublic.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bcbg.com"><img src="images/yi_logo/BCBG.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bcbg.com">BCBG</a></li>
                                <li class="b">BCBG (BCBG Max Azria)����Ƽȳ����������ɷ���ִ���ŷ�޵�ϸ�壬�ó�Ů����װ����ĩ����װ��ְҵװ��</li>
                                <li class="c"><a href="http://www.bcbg.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.brooksbrothers.com"><img src="images/yi_logo/bb.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.brooksbrothers.com">Brooks Brothers</a></li>
                                <li class="b">�����ֵ�������������̖�ķ��bƷ��֮һ���Գ������ϰ��Ϊ�����������ʼ���,���ǲ�������������39λ������ͳ֮ѡ��</li>
                                <li class="c"><a href="http://www.brooksbrothers.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://us.burberry.com/store/?WT.srch=1"><img src="images/yi_logo/burberry-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://us.burberry.com/store/?WT.srch=1">Burberry</a></li>
                                <li class="b">Burberry�Ǽ���Ӣ����ͳ�����ݳ�Ʒ�ƣ�����εĲ�Ʒϵ�������˲�ͬ������Ա�����������</li>
                                <li class="c"><a href="http://us.burberry.com/store/?WT.srch=1">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.calvinklein.com"><img src="images/yi_logo/ck.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.calvinklein.com">Calvin Klein</a></li>
                                <li class="b">Calvin Klein��������һ�����ʦƷ�ƣ����������ĶȻ��֪���ķ�װ������µ���ز�Ʒ���ǲ��������Ƽ�Ϊ���ˡ���Ҫ��Ӫ����װ�����ӡ����¡�˯�¡�Ӿ�¡���ˮ���۾���������Ʒ�ȡ�</li>
                                <li class="c"><a href="http://www.calvinklein.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.columbia.com"><img src="images/yi_logo/columbia-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.columbia.com">Columbia</a></li>
                                <li class="b">���ױ����ǻ���пˡ��๦�ܿ㡢T���������������������˶�Ь��ȫ�������������̣���û���������ӵ����</li>
                                <li class="c"><a href="http://www.columbia.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.forever21.com"><img src="images/yi_logo/forever-21-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.forever21.com">Forever21 </a></li>
                                <li class="b">Forever21���������������껶ӭ�Ĵ���ʱ��Ʒ�ƣ�Ŀǰ����ȫ���Ե������ꡣ��ͬ��������������Ʒ�Ƶ���ʽ���з��Forever21��ƫ��������·�ߣ���Ʒ������ɣ���ɫ�������������˳�����</li>
                                <li class="c"><a href="http://www.forever21.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                  </div>
                    <div class="pagebar">
                        Page 1 <a href="catalog_clo2.html">2</a> <a href="catalog_clo3.html">3</a> <a href="catalog_clo4.html">4</a>                    </div>
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