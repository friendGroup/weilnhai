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
                        Page <a href="catalog_clo1.html">1</a> 2 <a href="catalog_clo3.html">3</a> <a href="catalog_clo4.html">4</a>                    </div>
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.gymboree.com"><img src="images/yi_logo/Gymboree_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.gymboree.com">Gymboree</a></li>
                                <li class="b">Gymboree��Ҫ��������the Gymboree, Janie and Jack, and Crazy 8��Ʒ�Ƶĸ�Ʒ�ʷ�װ��������𱦱���Ʒ�ƺ������㷺��</li>
                                <li class="c"><a href="http://www.gymboree.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.crazy8.com"><img src="images/yi_logo/crazy8.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.crazy8.com">Crazy 8</a></li>
                                <li class="b">Gymboree ���¶�ͯ��װƷ�ƣ��۸������</li>
                                <li class="c"><a href="http://www.crazy8.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.gap.com/"><img src="images/yi_logo/gap.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.gap.com/">Gap </a></li>
                                <li class="b">Gap���������ķ�װ��˾֮һ��ÿһ�������˻���ô��˵��³�������Ի�ӵ��һ�����ϵ�Gap��װ��Gap������һ��ȫ������֪��Ҳ���Ӱ�����Ĵ�������װƷ�ƣ�����һ��������ͬ�����м�Լ�Ļ��Ĵ��ͷ�װ���š�
</li>
                                <li class="c"><a href="http://www.gap.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://shop.guess.com/"><img src="images/yi_logo/guess.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://shop.guess.com/">Guess </a></li>
                                <li class="b">GUESS������֪���ķ�װƷ�ơ�GUESS��������¶ʽ��Ů��ţ�п㵥Ʒ��ң��������Ϸ�չ������GUESS�Ĳ�Ʒ������Ůʱװ��ͯװ��Ӿװ��Ь�ģ��ӱ���Ʒ���Σ��ִ����۾�����ˮ��������ȡ�</li>
                                <li class="c"><a href="http://shop.guess.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.hm.com/us/"><img src="images/yi_logo/hm.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.hm.com/us/">H&M </a></li>
                                <li class="b">ŷ�����ķ��������̣���1947����Erling Persson������д�������񣬺���˹Ī��˹��ȫ����1500���ר�������۷�װ�������뻯ױƷ��H&M����ҵ�����ǡ������ż۸��ṩʱ����Ʒ�ʡ���</li>
                                <li class="c"><a href="http://www.hm.com/us/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://www.hollisterco.com"><img src="images/yi_logo/hollister-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.hollisterco.com">Hollister</a></li>
                                <li class="b">A&F �Ľ���Ʒ�ƣ��۸��Ե͡�</li>
                                <li class="c"><a href="http://www.hollisterco.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.jacadi.us"><img src="images/yi_logo/jacadi.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.jacadi.us">Jacadi</a></li>
                                <li class="b">�ǿ���Ʒ��Jacadiͯװ��ŷ�޼���20�������ʷ��������ʦ�ǵĽ��Ķ��ߵ����ʹJacadi��Ϊ����������Ӱ������ͯװƷ��֮һ��Jacadiͯװ����ɫ�ǣ������ض�������ɫ�ʣ���ͳ��������������ƣ����ĵ�ϵ�вü����򵥶������ķ�� </li>
                                <li class="c"><a href="http://www.jacadi.us">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.janieandjack.com"><img src="images/yi_logo/jj.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.janieandjack.com">Janie & Jack </a></li>
                                <li class="b">Janie and Jack�ǿ����˾Gymboree���µ�ͯװƷ�ƣ����������·�����������ڲ�ͬ���Լ����������������ǼҵĿںž��ǣ�����Ϊ�����������ʣ���Ȼ�۸�Ҳ����ܶࡣ���ر��ϸ���У��ֹ����壬�ֹ���Ⱦ���͹ŵ�ӡ����
</li>
                                <li class="c"><a href="http://www.janieandjack.com">SHOP NOW</a></li>
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
                            <a href="http://www.juicycouture.com/"><img src="images/jinxuan_logo/juicy.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.juicycouture.com/">Juicy Couture</a></li>
                                <li class="b">�����������ݵ�ʱ��Ʒ�� Juicy Couture (����)�����������Ů����·�ߡ�ɫ�ʷ��棬����ѡȡ�˼�Ϊ������ɫ�ʣ���Ƴ������������ֱ��Ů��ζ�ĸо��������ǹ��������ĵ���ɫ������ɫ������ɫ���ۺ�ɫ��Ҳ�е�����Ȼ����ɫ��ǳ��ɫ�ȣ���������ɫ�ʣ���Ҫ������ܵ��ഺ�Ļ�����</li>
                                <li class="c"><a href="http://www.juicycouture.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                        <div class="item">
                            <a href="http://shop.lacoste.com"><img src="images/yi_logo/lacoste_logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://shop.lacoste.com">Lacoste</a></li>
                                <li class="b">Lacoste�Ĵ���ʼ��1933�꣮ƾ���䴿��������Ѫͳ������Lacoste������һ�����ʡ����ŵ�����̬�ȣ����ص���ƺ͸�Ʒ�ʵĲ�Ʒ��������װ��Ůװ��ͯװ��</li>
                                <li class="c"><a href="http://shop.lacoste.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.lee.com/"><img src="images/yi_logo/lee.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.lee.com/">Lee</a></li>
                                <li class="b">Lee����һ��������1889�����������ţ�п�Ʒ�ƣ�׷��ʵ����ʱ�У������˾���ĵ������˿㣬�����������ϵ�һ������ţ�п㣬ƾ�����״���������ƣ�Leeţ�п��Ϊţ�п�̳�ľ�����Ȩ��������Ϊ��������ţ�п�Ʒ��֮һ��</li>
                                <li class="c"><a href="http://www.lee.com/">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://us.levi.com/home/index.jsp"><img src="images/yi_logo/levis-logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://us.levi.com/home/index.jsp">Levi's</a></li>
                                <li class="b">Levi's ��Ϊʱװ��ţ�п���쵼Ʒ�ƣ�����������׷���£�1960�꣬Levi's �Ƴ�ˮϴϵ��ţ�п㣬1967��������ȿڿ��͡�1986�꿪ʼ����Ԥ�ȴ���������ţ�п㡢��ţ�п��ܷ������ġ����ߡ���2003���Ը��³����ö��ء� ��ʽ�����TYPE1 TMϵ�е�����</li>
                                <li class="c"><a href="http://us.levi.com/home/index.jsp">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.maidenform.com"><img src="images/yi_logo/maidenform.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.maidenform.com">Maidenform</a></li>
                                <li class="b">��������������������Ʒ��Maidenform���ĵǷ壩�����������ϸ߹����Ů�Ի����������������ϸ�¡����ʣ�������Ů���¹���ıر�Ʒ��</li>
                                <li class="c"><a href="http://www.maidenform.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.misssixty.com"><img src="images/yi_logo/Miss_Sixty_Logo.jpg" width="224" height="108" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.misssixty.com">Miss Sixty </a></li>
                                <li class="b">Miss sixty��������������Ը�ţ������Ʒ�ƣ���������Ů�������Ӱ��ķ���Ʒ�ƣ������������Ů����Ŀ������������Ը�ָ�롣</li>
                                <li class="c"><a href="http://www.misssixty.com">SHOP NOW</a></li>
                            </ul>
                      </div>
                        
                  </div>
                    <div class="pagebar">
                        Page <a href="catalog_clo1.html">1</a> 2 <a href="catalog_clo3.html">3</a> <a href="catalog_clo4.html">4</a> 
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