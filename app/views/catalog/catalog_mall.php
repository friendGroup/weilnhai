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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ���� > ��վĿ¼ > �ٻ���˾</div>
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
                            <a href="http://www.macys.com/"><img src="images/baihuo_logo/logo_b2.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.macys.com/">Macys.com</a></li>
                                <li class="b">÷���ٻ���˾(Macy's)���������ϰٻ���˾���µ����������ٻ���˾����Ҫ��Ӫ��װ��Ьñ�ͼ�ͥװ��Ʒ�������ʵķ���Ӯ���������乫˾��ģ��Ȼ���Ǻܴ󣬵��������������м��ߵ�֪���ȡ�</li>
                                <li class="c"><a href="http://www.macys.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.kohls.com"><img src="images/baihuo_logo/logo_b3.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.kohls.com">Kohls.com </a></li>
                                <li class="b">�ƶ�ʿ�ٻ���˾ (Kohl's) �����������������ͥ��רҵ�ٻ���˾�����۶����Լ����׶�������ĸ��Ϊ�������̶������ڼ�ͥ�۾ӵ�������ǿ�����������������ֵ���ƶ�ʿ�ٻ���˾���ж�ͯ�������ꡢŮʿ����ʿ��Ʒ������Ʒ�Է�װΪ�����۸����ˣ����ز��ף����ϸ��ִ����Żݣ�������ܻ�ӭ��
</li>
                                <li class="c"><a href="http://www.kohls.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://shop.nordstrom.com/"><img src="images/baihuo_logo/logo_b4.jpg" width="240" height="116" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://shop.nordstrom.com/">Nordstrom.com </a></li>
                                <li class="b">�а�����ʷ��NORDSTROMҲ���������϶����ĸ߶˰ٻ���˾֮һ������䣬�������յ�����ͼС��Ь������ȫ��������ȫ�Ҳɹ���ʱ�����ģ�ʼ�������ڷ�չ��ӭ�Ͽͻ��������������</li>
                                <li class="c"><a href="http://shop.nordstrom.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.saksfifthavenue.com"><img src="images/baihuo_logo/logo_b5.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.saksfifthavenue.com">Saksfifthavenue.com </a></li>
                                <li class="b">Saks��������Ʒ�ٻ��� (Saks Fifth Avenue) �������ϵĶ����ĸ߶˰ٻ���˾֮һ����1824��������һֱΪŦԼ�����ṩ��Ʒ�ʵķ��μ�������ȫ����50����ŵ꣬�콢��λ��ŦԼ��������</li>
                                <li class="c"><a href="http://www.saksfifthavenue.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.target.com"><img src="images/baihuo_logo/logo_b6.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.target.com">Target.com</a></li>
                                <li class="b">Target��˾λ�������մ������ᰢ����˹���У�������47������1��330���̵꣬Ϊ�ͻ��ṩ����ʱ��ǰ�ص����۷��������������������� Target�̵껹������Target.com���ͻ����ܴ���ǧ�������ص���Ʒ������ѡ�����ܵ���Ȥ�������򵥷���Ĺ������顣</li>
                                <li class="c"><a href="http://www.target.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.dillards.com/"><img src="images/baihuo_logo/logo_b7.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.dillards.com/">Dillards.com</a></li>
                                <li class="b">������Ϊֹ����˾������29�ݾ�Ӫ��330���̵꣬ȫ���̵������ͳһ��Dillard��������˾���۾���һϵ�е���Ʒ�o������ʿ�pŮʿ�Ͷ�ͯ���μ�����p��ױƷ�p��ͥ��Ʒ����������Ʒ������ӵ��Antonio Melani, Gianni Bini, J. Vincent��Daniel CremieuxƷ�ƵĶ��Ҿ�ӪȨ��������Ҳ����ͨ����˾��վ�������������</li>
                                <li class="c"><a href="http://www.dillards.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.bloomingdales.com/"><img src="images/baihuo_logo/Logo_b8.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bloomingdales.com/">Bloomingdales.com </a></li>
                                <li class="b">��³�������ٻ��� (Bloomingdale's) ���������İٻ���˾÷�� (Macy's) ����õ꣬������19����ĩ�Ĳ�³�������ٻ��곤�������ڳ����͵�����������ƽ���š���³�������ٻ��� ���������еļ۸�ȴ���ű�Macy's����˵ĳ���������ǰ�ص�Ʒζ��</li>
                                <li class="c"><a href="http://www.bloomingdales.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.neimanmarcus.com"><img src="images/baihuo_logo/logo_b9.jpg" width="245" height="118" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.neimanmarcus.com">Neimanmarcus.com </a></li>
                                <li class="b">Neiman Marcus����NORSTROM�ٻ���Saks��������Ʒ�ٻ��������������߼��ٻ��̵������ʱװ�꣬�㼯��Burberry, Celine, Jean Paul Gaultier, Juicy Couture, YSL, Vera Wang�����綥����ʱװ���ƵĲ�Ʒ��</li>
                                <li class="c"><a href="http://www.neimanmarcus.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="www.http://www.bergdorfgoodman.com"><img src="images/baihuo_logo/logo_b10.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.bergdorfgoodman.com">Bergdorfgoodman.com</a></li>
                                <li class="b">Bergdorf Goodman�����������Ĵ�ͳʱ�аٻ���˾֮һ������Neiman Marcus�������¡���������ϯ���ʦ֮������һ�õĲ�����?�ŵ��� (Bergdorf Goodman) �������ʦ��ѡ�̵ꡣ</li>
                                <li class="c"><a href="http://www.bergdorfgoodman.com">SHOP NOW</a></li>
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