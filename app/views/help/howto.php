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
    <style type="text/css">
<!--
.STYLE1 {
	font-size: 16px;
	color: #0033FF;
}
-->
    </style>
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
            <img src="images/step4.jpg" />
        </div>
        
        <div id="erjipnl">
            <div id="lftpnl">
                <div class="l_tle"><img src="images/left4.JPG" width="205" height="52" /></div>
                <div id="l_list">
                    <ul>
                        <li><a href="faq.html">��������</a></li>
                        <li class="sel"><a href="howto.html">���ٲ���ָ��</a></li>
                        <li><a href="pay.html">����</a></li>
                        <li><a href="fragile.html">����Ʒ˵��</a></li>
						<li><a href="limit.html">������Ʒ</a></li>
                        <li><a href="reportto.html">�����걨Ҫ��</a></li>
						<li><a href="claim.html">���պ�����</a></li>
				  </ul> 
                </div>
                <div id="picpnl">
                    <a href="contact.html"><img src="images/a2.jpg" alt="�ͷ�����" border="0" /></a>
                    <a href="howto.html"><img src="images/a3.jpg" alt="��������" border="0" /></a>
                    <a href="coupon.html"><img src="images/a1.jpg" alt="����" border="0" /></a>
                </div>
            </div>
            <div id="rgtpnl">
                <div class="r_tle">
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ����֧�� > ����ָ��</div>
                </div>
                <div id="shop_container">
                    <div id="cart">
                        <a href="catalog.html">BuyForMe����ָ��</a> |
                        <a href="catalog_mall.html">�����������ָ��</a> 
                        </div>
					<div id="formzoom">
                    <h1 class="STYLE1">BuyForMe</h1>
                    <div class="news_zoom">
                        <p><b>�����ѡ��BuyForMe����ֻ��Ҫ�ڹ��ﵥ������ṩ��Ҫ�������Ʒ��Ϣ������֧����Ӧ�Ķ��������Ķ���������������</b></p>
                        <p>1. �ڵ�һ�����빺����վ�����������drugstore.com���������һ�����룺www.drugstore.com
�ڵڶ���������Ʒҳ������ӣ���һ������Ҫ�������Ǹ�����һ��������ֱ�ӽ��뵽��Ʒҳ�棬�����������ȷȫ�����ƣ����磺http://www.drugstore.com/aquaphor-healing-ointment/qxp40444?catid=182918��
�����Ʒ���ӵ�ַ�ܳ������ڲ���ȫ����ʾ��û��ϵ������ȥ������ֻҪȷ�����ӵ�ַȫ��������������Ϳ����ˡ�</p>
                        <p><img src="images/howto1.jpg" width="550" height="231" /></p>
                        <p>2. ��Ʒ��������д��ҳ��ʾ�ļ۸�Ҳ����˵��ҳ��ʾ���ټ۸����д���١�</p>
                        <p>3. ѡ����Ҫ�����������Ĭ����1��</p>
						<p>4. ��Ʒ��ɫ�����У�����غ���ҳ��ʾ��Ӣ��һ�¡�Ʃ����ҳ��ʾColat Blue, ��ǧ��ҪֻдBlue������ȫ��д����</p>
						<p>5. �ߴ�����ҳ��ʾ�ߴ�Ϊ׼����ʱ����и�ѡ��Ʃ��ߴ�Large���ַ�Regular Larger��Pettie Large����ע�⡣</p>
						<p>6. ��ƷͼƬ���ӵ�ַ����ȷ�����ǹ������Ʒ��ȷ��IE������ľ���������£�
                        <p><img src="images/howto2.jpg"></p>
                        <p>���������������Firefox, Google Chrome��ͼƬ����Ҽ����ֱ����ʾ������ͼƬ��ַ����ֱ�Ӹ��Ƽ��ɡ�</p>
						<p>7. ���һ���ۿ۴���/������ע�������Ը���������Ч���ۿ۴��룻�����֪�����룬Ҳ���Ը��������ж����ۿۡ�Ʃ���������д����Ӧ����75�ۣ����۲�Ҫ���򡰲���ҲҪ����
ͬʱҲ���Ը��������κζԹ����а�������Ϣ��Ʃ�硰Ҫ����Ѱ�װ��С����������˷Ѷ�����Ԫ���Խ��ܡ��ȵȡ�</p>  
                        <p>8. ��ɵ�һ����Ʒ�������Ҫ�������򣬵������������ť�����³��ֵ�����ظ�����������</p>
						<p>9. ȫ����Ʒ����д��ɺ���ͣ���ڹ��ﵥ���ҳ�棬��ϸ�˶�һ�飬ȷ��������������Ȼ��ŵ�����ύ����ť��</p>
						<p>10. ������뵽Ԥ��ҳ�棬�ٴκ˶����ݺͽ������Կ�����Ҫ֧���Ķ����������˻������㣬�����ȳ�ֵ�������޷��ύ�����������Ҫ�޸ĵĵط���ֻ�ܡ�BACK�������ع��ﵥ��壬������д�������ݡ����ﵥһ���ύ�����޷��Ķ��������Ȼ��Ҫ�Ķ�������2Сʱ�ڷ��ʼ������ǡ�</p>
						<p><img src="images/howto3.jpg"></p>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
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
	<script type="text/javascript" charset="utf-8" src="http://gate.looyu.com/47016/98582.js"></script>
</body>
</html>