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
                        <li><a href="howto.html">���ٲ���ָ��</a></li>
                        <li class="sel"><a href="pay.html">����</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ����֧�� > ����</div>
                </div>
                <div id="formzoom">
                    <h1 class="STYLE1">����</h1>
                    <div class="news_zoom">
                        <p><b>�����Ǵ������︶���������</b></p>
                        <p>���ǵĴ�������ʹ�����Ϲ��﷽������ɡ�������������Ĺ����嵥�����ǽ��������̼ҽ��ܵ����ÿ���������</p>
                        <p>������ѡ���ڰ�������������ַʱ�����ǰ������ͣ��������ҵ��˻��Լ��������͡�</p>
                        <p><img src="images/img-buyforme.jpg" width="550" height="229" /></p>
                        <p><b>�ʺ���Ⱥ</b></p>
                        
                        <ul class="wrdlist">
                            <li>������·��ȫ����Ը���ṩ�Լ��ĸ������Ϻ����ÿ���Ϣ�����ǵ�����֧��������Paypal�������˵��Ŀǰ�ȫ�ĵ�����֧��ƽ̨��</li>
                            <li>����ѡ���ԡ����������ɵ��ھ������������վ���߹��򣬶����赣������̼Ҳ����ܷ�������������ÿ���</li>
                            <li>����ȥ���Ĵ����������й�������ϸ�ڡ�ʹ�����ǵķ���, �������İ��������ʵ�ݵķ�����ȫ���͵������С�</li>
                            <li>����������蹺���ա���һ���������价����ʧ������õ�ȫ���˿</li>
                            <li>Ӣ�Ĳ��ã�û��ʱ�䣬Ҳ�����ɡ�
                          </li><hr size="1" />
                        </ul>
                        <p><b>�����</b></p>
                        <p>������ȡ�����������10%��Ϊ����ѣ��˷�������㡣����鿴<a href="/">�˷ѷ���</a>��</p>
                        <p>������Ҫ֧������˰�����ǻ�Ϊ������˰�ݹ���</p>
                        
                        <p>��������շѣ�</p>
                        <ul class="wrdlist">
                            <li>�����ڹ��ﵥ�������д���������ṩ���Ĺ����嵥�����ǽ�������ȡ��Ʒ����50%��Ϊ���𡣾��������Ĺ����嵥�ܽ����50���𣬣���վ������30���������������˷ѣ�����Ҫ�������߳�ֵ����25���𡣵������յ����Ķ���󣬻��������Ųɹ���������ɡ����������ҵ��˻���鿴�����Ķ��������</li>
                            <li>�����������������ǲֿ⣬���ǻ�֪ͨ����Ҫ֧���Ļ����ܽ�����10%�ķ���ѣ�ͬʱ���������Ĺ����˷ѡ����ǻ�������ȡ�⼸����õ��ܺͣ��۵���ǰ֧���Ķ��𡣵����������֧�������ǻ����ϰ��ŷ����������蹺��������̵ı��շѡ���һ����;����ʧ��������õ���֧�������н����˿</li>
                            <li>�����ӣ���Ҫ��Ĺ����嵥�ܽ����50������֧����25����Ķ�����һ����Ʒ�ڹ��������û����ʵ�ʹ�������45�����ܷ�����45����+4.5��������+�����˷�-25���𶨽��������Ҫ�󷢻�ǰ����Ҫ֧����ȫ�����á�</li>
                        </ul>
                        <p>�����İ��������й����أ��п���Ҫ����֧��˰��͹�˰�� ���ǲ���������ȡ��Щ���ã�����Ҫ�Լ����ɻ��ֵ��ί�����Ǵ��ɡ�</p>
                        <p>���<a href="/">�˷ѷ���</a>�˽�������顣</p>
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