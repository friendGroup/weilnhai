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
                        Page <a href="catalog_clo1.html">1</a> <a href="catalog_clo2.html">2</a> 3 <a href="catalog_clo4.html">4</a>
                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.nautica.com"><img src="images/yi_logo/nautica.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.nautica.com">Nautica</a></li>
                                <li class="b">NauticaƷ��һֱ��ˮ���˶���ð�յĴ����ʡ�Nautica���������ͻ���˹��ܺ�ϸ���ϵľ��ƾ�������һϵ�и����ִ���Ϣ�ľ�����ƹ��ճ� �����䡢ƽ�⡢������ ���ִ����ʽ��</li>
                                <li class="c"><a href="http://www.nautica.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://store.nike.com/us/en_us/?cp=USNS_KW_0611081618&amp;l=shop,home"><img src="images/yi_logo/Nike-Logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://store.nike.com/us/en_us/?cp=USNS_KW_0611081618&amp;l=shop,home">Nike</a></li>
                                <li class="b">Nike��ȫ��������������ƷƷ�ƣ�������Ϊ�Ϳˡ��ù�˾�ܲ�λ���������ո���Beaverton���ù�˾������������Ʒ�������󣺷�װ��Ь�࣬�˶����ĵȵȡ�</li>
                                <li class="c"><a href="http://store.nike.com/us/en_us/?cp=USNS_KW_0611081618&amp;l=shop,home">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.ninewest.com"><img src="images/yi_logo/NINE WEST logo-lg.jpg" width="245" height="140" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.ninewest.com">Nine West </a></li>
                                <li class="b">Nine West(����)����������Ҳ���������ŮװƤЬ��ơ����졢������֮һ����������Ʒ��14������Ʒ��Ь�ࡢ�ִ���СƤ���⣬���漰�۾�������������֯Ʒ�ȶ������ҵ��鲼ȫ��42�����ҡ�
</li>
                                <li class="c"><a href="http://www.ninewest.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.oldnavy.com"><img src="images/yi_logo/oldnavy.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.oldnavy.com">Old Navy</a></li>
                                <li class="b">��������Ʒ�� Old Navy���Ϻ�������Ϊ�������δ�GAP���µ�Ʒ��֮һ��</li>
                                <li class="c"><a href="http://www.oldnavy.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://shop.paulfrank.com"><img src="images/yi_logo/paul-frank-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://shop.paulfrank.com">Paul Frank </a></li>
                                <li class="b">Paul Frank (�����) ������Ⱥ��ԭ����ơ�������õ�ɫ�ʡ�����ϩ��֬���ϣ����˴������ص�����ʱ�ио��� </li>
                                <li class="c"><a href="http://shop.paulfrank.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.ralphlauren.com"><img src="images/jinxuan_logo/polo-ralph.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.ralphlauren.com/home/index.jsp?ab=int_fd_background">Palph Lauren </a></li>
                                <li class="b">����?���� (Ralph Lauren) ������ŨŨ������Ϣ�ĸ�ƷζʱװƷ�ƣ� POLO ��������ŷ���������ޣ������ѳ�Ϊ�����¹��бر������ſ�ʽ��</li>
                                <li class="c"><a href="http://www.ralphlauren.com/home/index.jsp?ab=int_fd_background">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.shop.puma.com"><img src="images/yi_logo/puma.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.shop.puma.com">Puma</a></li>
                                <li class="b">Puma ��1948������ڵ¹����������գ�Herzogenaurach����Puma������������Ϊ����ʨ���ǵ¹�һ��������Ь���˶���Ϊ���Ĵ��Ϳ����˾��</li>
                                <li class="c"><a href="http://www.shop.puma.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.timberland.com"><img src="images/yi_logo/timberland_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.timberland.com">Timberland </a></li>
                                <li class="b">Timberland ������ȫ�����ȵĻ���Ʒ�ƣ� ������Timberland��Timberland PRO��SmartWool��Timberland Boot Company?��Howies&reg;��Ʒ�ƣ�ͨ���ṩ������������ϸ�ڵĹ�����Ʒ�������㲻ͬ���⻷���µ�����</li>
                                <li class="c"><a href="http://www.timberland.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.toryburch.com"><img src="images/yi_logo/tory_burch_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.toryburch.com">Tory Burch </a></li>
                                <li class="b">Tory Burch������������?���棡���Ʒ�ƵĴ�ʼ����Tory BurchŮʿ��Tory Burch�Ĳ�Ʒ��Ҫ��Ůװ�����������μ�Ьѥ���������������ľ�������˫T LOGO��ƽ�װ�����Ь��</li>
                                <li class="c"><a href="http://www.toryburch.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.thenorthface.com"><img src="images/yi_logo/the-north-face-logo-sq.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.thenorthface.com">The North Face</a></li>
                                <li class="b">The North Face ��˹��˹���౻����Ϊ���棬�������Ϊɽ����ɽ�� (USA����Ʒ��), The North Face��ʼ��ƣ������������Լ�Ʒ�ƵĻ���װ������չ��80���ĩ��TNF��Ϊȫ����Ψһһ��������Χ�������ף���ѩ���������������һϵ�л�����Ʒ�������̡�</li>
                                <li class="c"><a href="http://www.thenorthface.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://usa.tommy.com"><img src="images/yi_logo/Tommy_Hilfiger_Logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://usa.tommy.com">Tommy Hilfiger</a></li>
                                <li class="b">���������쵼Ʒ��֮һ��Tommy Hilfiger�������о�Ʒ�������صĿ�ʽ���������Ʒλʹ�ø�Ʒ�����Ӵ��������г��У������ڶ���֮λ����������Ʒ�Ʊ�־��ǿ�����������ɵ�ʱ�о��񣬸���Ϊ������Ƶ���Ҫɫ���������������е���ʽ���</li>
                                <li class="c"><a href="http://usa.tommy.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.uggaustralia.com/on/demandware.store/Sites-UGG-US-Site/default/Default-Start?source=ggl_ppc&amp;s_kwcid=TC|6895|ugg||S|e|9379197420&amp;gclid=COqWg8uri68CFeMbQgod41Oi8w"><img src="images/yi_logo/Ugg-australia-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.uggaustralia.com/on/demandware.store/Sites-UGG-US-Site/default/Default-Start?source=ggl_ppc&amp;s_kwcid=TC|6895|ugg||S|e|9379197420&amp;gclid=COqWg8uri68CFeMbQgod41Oi8w">UGG</a></li>
                                <li class="b">�Ĵ�����֪��Ʒ�ƣ�ѩ��ѥ��һƷ�ơ�</li>
                                <li class="c"><a href="http://www.uggaustralia.com/on/demandware.store/Sites-UGG-US-Site/default/Default-Start?source=ggl_ppc&amp;s_kwcid=TC|6895|ugg||S|e|9379197420&amp;gclid=COqWg8uri68CFeMbQgod41Oi8w">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.urbanoutfitters.com"><img src="images/yi_logo/urban-outfitters.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.urbanoutfitters.com">Urban Outfitters</a></li>
                                <li class="b">Urban Outfitters ������ʮ���ܻ�ӭ��ԭ������Ϊ��Ǯ������ʱ�У�����Ҫ�ģ������Ǿò��þͻ��������ʦ������������˵ļ񵽸ߵ�����</li>
                                <li class="c"><a href="http://www.urbanoutfitters.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.victoriassecret.com"><img src="images/yi_logo/Victorias-Secret-Logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.victoriassecret.com">Victoria's Secret</a></li>
                                <li class="b">�Ը���ά�����ǵ�����Victoria's Secret�Ĵ����ʣ���������ȫ��������ȫ�������½����ͷ�������ţ����飬����������չ̨��Ӱ����ȫ����ʮ��Ů���˿ڵġ�������ѧ����ͬʱҲ����ˮ�����Ρ���ױƷ������ɢ���������޷����ܵ�������</li>
                                <li class="c"><a href="http://www.victoriassecret.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.yoox.com"><img src="images/yi_logo/yoox_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.yoox.com">Yoox.com </a></li>
                                <li class="b">Yoox.com����2000���ʱ���������϶�Ʒ��������������Yoox Group���ŵ��µ�һ���ṩ��Ʒ�ƺ����ʦ�����߹�����վ������ͨ��ֱ�Ӻ����ʦ�������̺�֪������Ȩ�����̺���������վ�����˺ܶ��������ط������ҵ���������ص�Ʒ�ƺ����ʦ��ϵ����Ʒ��</li>
                                <li class="c"><a href="http://www.yoox.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                  </div>
                    <div class="pagebar">
                        Page <a href="catalog_clo1.html">1</a> <a href="catalog_clo2.html">2</a> 3 <a href="catalog_clo4.html">4</a>                   </div>
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