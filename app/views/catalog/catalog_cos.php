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
                        Page 1
                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.beauty.com/"><img src="images/logo_meirong/beautycom.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.beauty.com/">Beauty.com</a></li>
                                <li class="b">Drugstore.com������վ�����Ǹ�������Ʒ�Ĵ��̳���ר���ͽ����йصĸ��ֲ�Ʒ��������⡢������������ϴԡ�ȵȣ�Ӧ�о��У����ö�����������ˡ���Ů��С�������������˳��</li>
                                <li class="c"><a href="http://www.beauty.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.benefitcosmetics.com"><img src="images/logo_meirong/benefit.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.benefitcosmetics.com">Benefit</a></li>
                                <li class="b">Benefit����һ���ɳ���������������������Ʒ�ƣ������Ѿ��ǹ��ʴ�Ʒ�Ƶ�Benefit����һ��˫��̥������ִ������������������������Benefit�ṩ����Ʒ�ʸߡ����������Ĳ�Ʒ����Ů��ENJOY���ֻ�ױ����Ȥ�������15��55���Ů�Եĸ����������⡣</li>
                                <li class="c"><a href="http://www.benefitcosmetics.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bobbibrowncosmetics.com"><img src="images/logo_meirong/Bobbi-Brown-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bobbibrowncosmetics.com">Bobbi Brown </a></li>
                                <li class="b">Bobbie Brown �űȲ��ʣ����綥��רҵ��ױƷ�ƣ��ɹ���������ױ��ʦ Bobbi BrownŮʿ��1991��������ŦԼ���������к�������ױ�ʺ�֮�Ƶ�Bobbi Brown�Ըɾ������¡�ʱ�е����������������������״�����Ȼױ��������ں����롢ʱ�н�����������ʱ���㳡�н�����ʢ����</li>
                                <li class="c"><a href="http://www.bobbibrowncosmetics.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.clinique.com"><img src="images/logo_meirong/clinique.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.clinique.com">Clinique </a></li>
                                <li class="b">ٻ�̣���1968�괴��������ŦԼ����������������ʫ���켯�ţ����ƹ�Ļ�����������������������ٻ����ȫ�򶥼���ױƷ�ƣ� ��ƷЭͬȫ��֪��Ƥ��ѧר�ҹ�ͬ�з������м򵥡�רҵ����ȫ��Ч��ͨ�������Բ��ԣ��ٷ�֮�ٲ������ϣ���ÿ������Ů�Բ��ɻ�ȱ�Ļ�����Ʒ��</li>
                                <li class="c"><a href="http://www.clinique.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.esteelauder.com"><img src="images/logo_meirong/Estee_Lauder_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.esteelauder.com">Estee Lauder </a></li>
                                <li class="b">Est��e Lauder��ʫ���촴����1946�ꡣ��Ʒ���ǹ㷺��Ůʿ��ױ����ˮ�ͻ���Ʒ�Լ���ʿ��ˮ�ͻ���Ʒ�������ʫ�������µĻ�������ױ�Լ���ղ�Ʒ����Ϊ�˿�ѧ������������ϵ���ѷ��������ڹ�˾�Բ�Ʒ�������ϸ���ƺ͹˿ͳ�ŵ����ʵ���У�������ʫ����(Est��e Lauder)�����Ĳ�Ʒ�ܵ�ȫ��100��������û��İ�����</li>
                                <li class="c"><a href="http://www.esteelauder.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.h2oplus.com/"><img src="images/logo_meirong/h2o.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.h2oplus.com/">~H2O+</a></li>
                                <li class="b">~H2O +ˮ֥����һ�Ű˾���������֥�Ӹ紴����������ˮ��Ϊ������������������ʼ���ɵ�����Ϊ�˿;��Ĵ�����~H2O+ˮ֥��ˮ�ݻ���ϵ�в�Ʒ��~H2O+ˮ֥��Ϊȫ���׼Ҽ����д�������֬����ˮ�ݻ����䷽�Ĺ�˾��ƾ�����ٶ�����е���Ĳ�Ʒ�����ص�Ʒ������~H2O+ˮ֥��������ҵ����ռ��Ҫ��ϯλ��</li>
                                <li class="c"><a href="http://www.h2oplus.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.kiehls.com"><img src="images/logo_meirong/keihl.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.kiehls.com">Kiehl's</a></li>
                                <li class="b">Kiehl's��ֲ�����õĳɷ��������ʺ����������弡���Լ�ͷ���ı���Ʒ��������������˿Ͷ�Kiehl's��Ʒ���ڴ���ӵ�����ݣ�ҩѧ����ҩ��ҽѧ����ϵ�רҵ֪ʶ���������飬�����ഫ���з���Kiehl's���ص��䷽�����ں����µĿƼ�������������ر�ı�����Ʒ��</li>
                                <li class="c"><a href="http://www.kiehls.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://usa.loccitane.com"><img src="images/logo_meirong/l_occitane_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://usa.loccitane.com">L'occitane </a></li>
                                <li class="b">ŷ�浤L'occitane���Է�����������˹�������Ǻܶ��������е�������Դ����������޹�²ݡ���魡����۶����������ʣ��������Ʒ�����е�ԭ�϶�����ֲ� L'occitane�������ǡ���ɫ������������в�Ʒ�Ӳ�ʹ�ö���ɷ֣�Ҳ�����������飬��װ����Ҳ���ǿ������ġ�</li>
                                <li class="c"><a href="http://usa.loccitane.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.lancome-usa.com"><img src="images/logo_meirong/lancome-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.lancome-usa.com">Lancome </a></li>
                                <li class="b">��������������Ļ�ױƷƷ�ƴ�����1935�꣬��������70������ʷ���Դ�����ʼ������һ�京�����ŵ�õ����ΪƷ�Ʊ�ǡ��ڽ�70���ʱ�����ޢ������ص�Ʒ������ʵ���Ŷ�ȫ����Ů�����ĳ�ŵ������������Ů�Դ�ȥ�����������롣</li>
                                <li class="c"><a href="http://www.lancome-usa.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.sephora.com/"><img src="images/logo_meirong/Sephora.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.sephora.com/">Sephora</a></li>
                                <li class="b">˿ܽ��(Sephora)�������ڷ���·�����Ǽ���(LVMH)����ȫ�����ȵĻ�ױƷ�����̣�550��ҵ��̷ֲ���ȫ��14�����ң������й��Ƴ� Sephora�����̵ꡣ</li>
                                <li class="c"><a href="http://www.sephora.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                       <div class="item">
                            <a href="http://www.skinstore.com/"><img src="images/logo_meirong/skinstore-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.skinstore.com/">Skinstore.com</a></li>
                                <li class="b">��������ȫ����֪���Ļ�ױƷ����������ƽ̨֮һ��������Salu Beauty���¶����ӹ�˾��1997�ɾ���ḻ��Ƥ������ר�������Ӫ������ʿ���������ݴ�����</li>
                                <li class="c"><a href="http://www.skinstore.com/">SHOP NOW</a></li>
                            </ul>
					  </div>
                       <div class="item">
                            <a href="http://www.jurlique.com/"><img src="images/logo_meirong/jurlique.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.jurlique.com/">Jurlique</a></li>
                                <li class="b">���԰��޵�Jurlique������1983�괴����һֱ�����ʹ���������Ȼ���ϣ�Ϊ�����ṩ����Ч����Ȼ������������������������ʡ�</li>
                                <li class="c"><a href="http://www.jurlique.com/">SHOP NOW</a></li>
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
</body>
</html>