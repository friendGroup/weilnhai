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
.STYLE1 {color: #0000ff}
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
            <img src="images/step44.jpg" alt="����һ��" width="980" height="100" />        </div>
        
        <div id="erjipnl">
            <div id="lftpnl">
                <div class="l_tle"><img src="images/gouwu.jpg" /></div>
                <div id="l_list">
                    <ul>
                        <li><a href="coupon.html">���ۺ��ۿ�</a></li>
                        <li><a href="catalog.html">������վĿ¼</a></li>
                        <li class="sel"><a href="tip.html">������ʿ</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ���� > ������ʿ</div>
                </div>
                <div id="tipzoom">
                    <div class="item">
                        <div class="q_n">��ʿ1����ѡ����������վ</div>
                        <div class="a_n">�����̼���վ�ܲ�����������Ҳ�и�����վ�����IP��ַ�Զ�ת�����й���վ����ȷ����������վ��ѡ��Ĺ�������������������վ��ʾ�ļ�λ�Ƿ�����Ԫ��</div>
                    </div>
                    <div class="item">
                        <div class="q_n STYLE1">��ʿ2�����������͵�һ��������ַ</div>
                        <div class="a_n">����Ӳ�ͬ���̼ҹ�������Ʒ������ȫ�����͵�����������ַ�Ļ���������֧�������̼ҵĹ����˷ѣ�ֻ��ҪΪ�������������Ʒ֧��һ�ι����˷ѡ� ����������������ѵĺϲ����ط�������ʡ�����˷ѡ�<br />
 Խ��Խ����̼Ҹ���IP��ַ����Ϊ�����Թ��ʹ���˿͵����ݶ�����Ʒ�������̼ҿ��ܻὫ��������ɱ��ӵ���Ʒ�۸��С���Ӧ�ó�����������ַ���ˣ�����ȷ�����ռ۸����Ʒҳ���ʾ�ļ۸�һ�¡�</div>
                    </div>
                    <div class="item">
                        <div class="q_n">��ʿ3��ע����㡰���ּۡ�</div>
                        <div class="a_n">���ּ�����Ʒ�ۡ�������վ�˷ѡ�ת�˹�˾�˷Ѽ���ֵ����ѵ���ɡ����й�����վ���Լ������˷ѹ涨��ת���˷����������㣬�ټ����շѵ���ֵ����Ϳ��ܵĲִ��ѵȡ����Ϸ�����ӣ�����Ϊ����ң��õ������ּۡ����Դ˺����۸��Ƿ��㡣
                          <br />
                      �������ѵ��ǣ�ѡ����Ʒǰһ��Ҫ�鿴��Ʒ˵�������������һ��������װ������ֽ���������������վ�����г��������������Ʒת�˹�˾���ܻ���ȡ�������������������Ĺ���ɱ���</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ4��ʹ���Ż�ȯ</div>
                        <div class="a_n">��������ǰ������������һ�����ڣ�����������������վ���ṩ����Ч���Ż�ȯ���������ϰ�ߣ�����������ʡ���벻���Ľ������Ƽ����ۿ���վ�� Dealmoon.com�� RetailMeNot.com, Dealsea.com��</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ5���۸�Ƚ�</div>
                        <div class="a_n">��ϸ����һ���Ƿ���Ϊ����һ����Ʒ�����˶����Ǯ���ر���ͨ��������վ������Ʒ��������Ҳ���ڹ���֮ǰ�Ƚ�һ��������վ�뱾�ص��̵ļ۸���ô����һ��Ҫ�����������ΪҲ�п������������������������Լ������ѡ��Ƽ��ļ۸�Ƚ���վ�� Pricegrabber.com , Shopzilla.com, Shopping.com</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ6��������˽����������Ʒ</div>
                        <div class="a_n">���Ķ��̼ҵĲ�Ʒ������һ��ҪС�����ֵ����۸��������Ʒ���Լ�ͼƬ������"����"��"����"��Ʒ��
</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ7������������Ϣ</div>
                        <div class="a_n">�벻Ҫͨ�������ʼ����������κβ�����Ϣ������һ�°�ȫ�����Ƿ��ꡣ��Ҳ����ͨ������URL��ַ����Ƿ����һ��"s"��ȷ�ϸ���վ�Ƿ�ȫ���ǰ�ȫ����վ����ҳ����http://��ͷ�ģ���ȫ��վ����https://��ͷ��</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ8���������Ʒ����������ʵ��</div>
                        <div class="a_n">�Ƚ��������վͨ�����ṩ��������ϵ��Ϣ��������˾�����ַ�绰��ʵ����ַ�绰������˽Ȩ���ߡ���ȷ��һ���������ҵ�ʵ�ʵ�ַ�͵绰���롣������������ҵ�Ľ��֣�www.bbb.org/us��֮�����վ����ȷ�ϣ�����Google����һ�¶Ը���վ�������̵����ۡ�Ҳ����Google Map����ʵ�ʵĵ�ַ��ۡ���Ȼ����Ҫ�Ļ��Ǿ������ڱȽ�֪���Ĵ���վ���</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ9���û�����</div>
                        <div class="a_n">�벻Ҫ����С���ֵ��û���������������һ����˵����Ҫ�鿴��Щ��һ�����������ģ����Ҵ󲿷��û�ƫ����ϲ������ϲ���������Ѿ��������Ʒ���������û����۱ȽϿɿ����а�����</div>
                    </div>
                    <div class="item">
					<div class="q_n">��ʿ10�������˻����˿���ͺʹ����������Լ�������������</div>
                        <div class="a_n">������޷��ҵ��˻����˿��������ߵĻ������������̼ҷ��͵����ʼ����绰ѯ������վ�����������Щ���ݻ��������ṩ�������������������վ�����Щ���ݷ��ڡ�Help��ҳ�档�������Ķ���վ�����ͺ��˻����ߣ�ȷ������������˻��Ļ���˭���е������˷ѡ��й��ҹ�˾���˻������鿴<a href="service_return.html">�˻�</a>��</div>
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