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
                            <<li><a href="newsboard.html">���¹���</a></li>
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
                        <li class="sel"><a href="coupon.html">���ۺ��ۿ�</a></li>
                        <li><a href="catalog.html">������վĿ¼</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ���� > ���ۺ��ۿ�</div>
                </div>
                <div id="shop_container">
                    <!--<div id="cart">
                        <a href="/">��ѡ�̼�</a> |
                        <a href="/">�ۺ����̼�</a> |
                        <a href="/">����Ьñ</a> |
                        <a href="/">ĸӤ����</a> |
                        <a href="/">���ݻ���</a>
                    </div>-->
                    <!--<div class="pagebar">
                        Page <a href="#">&lt;Previous</a> <a href="#">1</a> 2 <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> <a href="#">8</a> <a href="#">Next&gt;</a>
                    </div>-->
                    <div id="shop_list">
                        <div class="item">
                            <a href="http://www.dealam.com/cn"><img src="images/c1.JPG" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.dealam.com/cn">�Ҷ���</a></li>
                                <li class="b">�Ҷ���deal�����Ǳ�������ǧ��deal��վ�е�һ����ÿ���ռ���������վ���ۿ���Ϣ���俯�ǵ���Ʒdeals��Ҫ����Amazon��Walmart��Newegg��Lancome�ȴ��͹�����վ����ЩdealsΪ����ҷ����� �Ҷ���ʱ�̹�ע�������˵�����͹�������ÿ��24Сʱ���ϸ��»�������ĵ���Ʒdeals����Ӣ˫����档</li>
                                <li class="c"><a href="http://www.dealam.com/cn">www.dealam.com/cn</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.dealmoon.com/cn"><img src="images/c2.JPG" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.dealmoon.com/cn">����ʡǮ�챨</a></li>
                                <li class="b">����ʡǮ�챨, ÿ�������ṩ��������ȵ��ۿ���Ϣ��24Сʱ�޼�Ϲ�������������������������Ϣ����Ӣ˫����档</li>
                                <li class="c"><a href="http://www.dealmoon.com/cn">www.dealmoon.com/cn</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.retailmenot.com"><img src="images/c3.JPG" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.retailmenot.com">retailmenot </a></li>
                                <li class="b">�����ۿ���վretailmenot.comÿ���ṩ��ȫ�����ŵ��ۿ���Ʒ���������Щ���ŵ���ʱDeal���Լ�������վ��Coupon�Ż��롣Ӣ���</li>
                                <li class="c"><a href="http://www.retailmenot.com">www.retailmenot.com</a></li>
                            </ul>
                      </div>
                        <div class="item">
                            <a href="http://www.dealsea.com"><img src="images/c4.JPG" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.dealsea.com">dealsea</a></li>
                                <li class="b">Dealsea�ۿ���վÿ��ĸ������ܴ󡣵�Ȼȱ��Ҳ�����ԣ������������㿴����ʱ����Ʒ�Ѿ������ˡ����ǲ�������������ÿ���������²�Ʒ��</li>
                                <li class="c"><a href="http://www.dealsea.com">www.dealsea.com</a></li>
                            </ul>
					  </div>
							<div class="item">
                              <a href="http://www.amazon.com"><img src="images/c5.jpg" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.amazon.com">����ѷGold Box</a></li>
                                <li class="b">Amazon�����ÿ���˵������Ʒ��������ʷ����Gold Box�ڵ���Ʒ������ÿ���˺ܿ��ܶ���һ����һ��Ҫ��¼�����ܿ�����Ʒ���������ּ�����ƽ������Ȥ�����͵Ĳ�Ʒ����Ʒÿ��һˢ�¡�
��������Gold Box��ǡ�������������Ʒ�����빺�ﳵ������һСʱ֮�ڽ��ˡ�</li>
                                <li class="c"><a href="http://www.amazon.com">www.amazon.com</a></li>
                            </ul>
                      </div>
						<div class="item">
                            <a href="http://www.deals.ebay.com"><img src="images/c6.jpg" width="250" height="125" border="0" /></a>
                            <ul>
                                <li class="a"><a href="http://www.deals.ebay.com">ebay daily deal</a></li>
                                <li class="b">�����˸���ebay����ľ�Ӣ���Ҿ�����ѡ��ÿ���ؼ���Ʒ�����п����ó����˵ļ�Ǯ��������Ʒ��</li>
                                <li class="c"><a href="http://www.deals.ebay.com">www.deals.ebay.com</a></li>
                            </ul>
                      </div>
                        <br />
<br />
</div>
                    <!--<div class="pagebar">
                        Page <a href="#">&lt;Previous</a> <a href="#">1</a> 2 <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> <a href="#">8</a> <a href="#">Next&gt;</a>
                    </div>-->
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