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
                            <a href="http://www.diapers.com"><img src="images/logo_vitamin/diaper.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.diapers.com">Diapers.com</a></li>
                                <li class="b">Diapers.com����������Ӥ�׶���Ʒ������,��վ��������Ӥ�׶���Ʒ������֪��Ʒ��,Ʒ����ȫ,����ȫ,��Ǯ��һ���̵껹Ҫ����,100%�Ŀͻ����������,��������æ����Ĺ�����ѡ��</li>
                                <li class="c"><a href="http://www.diapers.com">SHOP NOW</a></li>
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
                            <a href="http://www.puritan.com"><img src="images/logo_vitamin/puritan.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.puritan.com">Puritan's Pride </a></li>
                                <li class="b">Puritan's Pride����ʳƷ��˾��1960�������������������ѳ���40�������ʷ�������������ȫ�ı���Ʒ��˾֮һ�����в�Ʒ��ͨ��FDA(����ʳƷ��ҩ������)��GMP�������������ԣ��ļ������֤�� ��˾��Ʒ�����������Ǽ۸������ǹ��򱣽�Ʒʱ����ѡ��</li>
                                <li class="c"><a href="http://www.puritan.com">SHOP NOW</a></li>
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
                            <a href="http://www.vitacost.com"><img src="images/logo_vitamin/vitacost.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.vitacost.com">Vitacost.com </a></li>
                                <li class="b">Vitacost ��˿��ṩ30000�ཡ���뱣����Ʒѡ�񣬰���ά���أ������ʣ���ҩ��ֲ��ҩ�����˻����Ʒ���л�ʳƷ������Vitacost�Ĳ�Ʒ�ܶ����������۸����۵ģ��������ط�����ͬ����Ʒ�ļ۸�Ҫ��30%-70%��</li>
                                <li class="c"><a href="http://www.vitacost.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.luckyvitamin.com"><img src="images/logo_vitamin/luckvitamin.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.luckyvitamin.com">Luckyvitamin.com</a></li>
                                <li class="b">Lucky Vitamin���������˽����ͱ�����Ʒ���������̣���������ͨ����ݵ���������ʵ�ݵļ۸�Ϊ�������ṩ��õ����ı�����Ʒ��Ŀǰ��Lucky Vitamin�ṩ���1100���Ʒ�ƵĲ�Ʒ�����Ի�����վ��ƣ��������ܱ�ݵĹ������顣</li>
                                <li class="c"><a href="http://www.luckyvitamin.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.dillards.com/"><img src="images/logo_meirong/keihl.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.dillards.com/">Kiehl's</a></li>
                                <li class="b">Kiehl's��ֲ�����õĳɷ��������ʺ����������弡���Լ�ͷ���ı���Ʒ��������������˿Ͷ�Kiehl's��Ʒ���ڴ���ӵ�����ݣ�ҩѧ����ҩ��ҽѧ����ϵ�רҵ֪ʶ���������飬�����ഫ���з���Kiehl's���ص��䷽�����ں����µĿƼ�������������ر�ı�����Ʒ��</li>
                                <li class="c"><a href="http://www.dillards.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bloomingdales.com/"><img src="images/logo_meirong/l_occitane_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bloomingdales.com/">L'occitane </a></li>
                                <li class="b">ŷ�浤L'occitane���Է�����������˹�������Ǻܶ��������е�������Դ����������޹�²ݡ���魡����۶����������ʣ��������Ʒ�����е�ԭ�϶�����ֲ� L'occitane�������ǡ���ɫ������������в�Ʒ�Ӳ�ʹ�ö���ɷ֣�Ҳ�����������飬��װ����Ҳ���ǿ������ġ�</li>
                                <li class="c"><a href="http://www.bloomingdales.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.neimanmarcus.com"><img src="images/logo_meirong/lancome-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.neimanmarcus.com">Lancome </a></li>
                                <li class="b">��������������Ļ�ױƷƷ�ƴ�����1935�꣬��������70������ʷ���Դ�����ʼ������һ�京�����ŵ�õ����ΪƷ�Ʊ�ǡ��ڽ�70���ʱ�����ޢ������ص�Ʒ������ʵ���Ŷ�ȫ����Ů�����ĳ�ŵ������������Ů�Դ�ȥ�����������롣</li>
                                <li class="c"><a href="http://www.neimanmarcus.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="www.http://www.bergdorfgoodman.com"><img src="images/logo_meirong/Sephora.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bergdorfgoodman.com">Sephora</a></li>
                                <li class="b">˿ܽ��(Sephora)�������ڷ���·�����Ǽ���(LVMH)����ȫ�����ȵĻ�ױƷ�����̣�550��ҵ��̷ֲ���ȫ��14�����ң������й��Ƴ� Sephora�����̵ꡣ</li>
                                <li class="c"><a href="http://www.bergdorfgoodman.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <img src="images/logo_meirong/skinstore-logo.jpg" width="224" height="108" />
                            <ul>
                                <li class="a"><a href="/">Skinstore.com</a></li>
                                <li class="b">��������ȫ����֪���Ļ�ױƷ����������ƽ̨֮һ��������Salu Beauty���¶����ӹ�˾��1997�ɾ���ḻ��Ƥ������ר�������Ӫ������ʿ���������ݴ�����</li>
                                <li class="c"><a href="/">SHOP NOW</a></li>
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