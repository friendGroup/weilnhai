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
.STYLE2 {
	color: #0000ff;
	font-weight: bold;
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
                <div class="l_tle"><img src="images/left2.JPG" width="205" height="52" /></div>
                <div id="l_list">
                    <ul>
                        <li><a href="service_bfm.html">BuyForMe����</a></li>
                        <li><a href="service_diy.html">�����������</a></li>
                        <li><a href="service_fee.html">�˷�</a></li>
                        <li><a href="service_storage.html">����</a></li>
						<li class="sel"><a href="service_extra.html">��ֵ����</a></li>
                        <li><a href="service_return.html">�˻�</a></li>
						<li><a href="service_insur.html">����</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > �����շ� > ��ֵ����</div>
                </div>
                <div id="formzoom">
                    <h1 class="STYLE1">��ֵ����</h1>
                    <div class="news_zoom">
                        <p>�����ϰ���Լ��������ͣ����������ҵ��˻��ύ�˵���ѡ��ʹ�ö�����ֵ����</p>
                        <p class="STYLE2">�����ֵ����</p>
                        <p><b>�ϲ�����</b><br />
                        һ����˵��������վʹ�õ����Ӷ�ƫ������Ҳ������ֽ�壬ֽ����Ϊ�������⣬ͬһ��������վ����ʱ���ܻ��ɢ���������ӡ�������Ҫ�����Ǻϲ���һ���������ٷ�������Ҳ����Ҫ��Ѽ�����ͬ�����Ļ���ϲ���һ�𡣺ϲ�������������Ч���������������ǻ���ݲ�ͬ��Ʒѡ������������������Ϊ��������Ч������ʡ�˷ѡ�                        </p>
                        <p><img src="images/img-extra.JPG" width="270" height="200" /></p>
                        <p><b>�������</b><br />
                        ͬһ���������������ܶ࣬���ǵ�����Ҫ�����ǿ��԰��ŷ�װ�����ɸ������ֱ𷢻������������ܻ�����������ӣ��Ӷ����������˷ѡ�</p>
						<p><b>ȡ����Ʊ</b><br />
					    �����������һ���ؿ����鿴����Ʒ���������Ҫ��������</p>
						<p><b>�������</b><br />
					    ���ǿ������Ϊ�������Ʒ������������������ṩ���г��룬���ǻᷢ�ʼ�Ҫ��ȷ�ϣ��⽫�ᵢ��2-3��ķ���ʱ�䡣����˵�����ǣ�����ֻ����������������ṩ��Ʒ�����ļ�顣���Ǵ������Ե�����Ʃ��ƿ�����飬������ѵȣ������ǻᷢ�ʼ�֪ͨ����</p>
						<p><b>��������</b><br />
					    �����յ���վ�ķ��İ����������װ���������ǻ����Ϊ�������°�װ�䡣</p>
						<p class="STYLE2">�շ���ֵ����</p>
						<p><b>��������</b><br />
					    ���Ҫ����ﵽ��ֿ������ȷ�ϣ�����ѡ��������񡣷�����ÿ������(10����Ƭ)��ȡ5��Ԫ��ͬ���ģ����ǲ��ṩ��Ʒ�����ļ�顣</p>
						<p><b>����ӹ�</b><br />
					    �������������Ʒ�͹�����Ʒ�����ǲ������κ���Ʒ��ԭ��װ��ֱ����ԭ��װ�����ӻ��屣����ÿ������1��Ԫ�˷ѡ�</p>
						<p><b>��װ����</b><br />
					    ����ʹ�����°�װ��������</p>
						<p><img src="images/pak.jpg" alt="��װ����" width="450" height="114" /><br />
						  <br />
						</p>
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
</body>
</html>