<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>����|ת��|ε��������</title>
    <meta name="keywords" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <meta name="description" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery-1.2.1.pack.js" type="text/javascript"></script>
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
            <div id="logo"><a href="../../views/index.php"><img src="../images/logo.jpg" alt="ε����ȫ��λ��������ƽ̨" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">�����ղ�</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../../login.php">��¼</a> | &nbsp;<a href="../../user_reg.php">���ע��</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="../../views/index.php">��վ��ҳ</a></li>
                        <li><a href="#">����Ƶ��</a></li>
                        <li><a href="#">�����շ�</a></li>
                        <li><a href="../../views/index.php">�ҵ��ʻ�</a></li>
                        <li><a href="../faq.html">����֧��</a></li>
                        <li><a href="#">������Ѷ</a></li>
                        <li><a href="../contact.html">��ϵ��ʽ</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="../coupon.php">���ۺ��ۿ�</a></li>
                            <li><a href="../catalog.php">������վĿ¼</a></li>
                            <li><a href="../tip.php">������ʿ</a></li>
                            <li><a href="../skill.php">���Ծ���</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="../newsboard.php">���¹���</a></li>
                            <li><a href="../promotion.php">�Żݻ</a></li>
                            <li><a href="../custom.php">��������</a></li>
                            <li><a href="../term1.php">Э������</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner" style="height:100px;">
            <img src="../images/step4.jpg" />
        </div>
        
        <div id="erjipnl">
            <div id="lftpnl">
                <div class="l_tle"><img src="../images/left2.JPG" width="205" height="52" /></div>
                <div id="l_list">
                    <ul>
                        <li><a href="service_bfm.php">BuyForMe����</a></li>
                        <li><a href="service_diy.php">�����������</a></li>
                        <li><a href="service_fee.php">�˷�</a></li>
                        <li><a href="service_storage.php">����</a></li>
						<li><a href="service_extra.php">��ֵ����</a></li>
                        <li><a href="service_return.php">�˻�</a></li>
						<li><a href="service_insur.php">����</a></li>
                    </ul> 
                </div>
                <div id="picpnl">
                    <a href="../../contact.php"><img src="../images/a2.jpg" alt="�ͷ�����" border="0" /></a>
                    <a href="../../howto.php"><img src="../images/a3.jpg" alt="��������" border="0" /></a>
                    <a href="../../coupon.php"><img src="../images/a1.jpg" alt="����" border="0" /></a></div>
            </div>
            <div id="rgtpnl">
                <div class="r_tle">
                    <div class="posi">������λ�ã�<a href="../../views/index.php">ε����</a> > �����շ�</div>
                </div>
                <div id="formzoom">
                    <h1 class="STYLE1">����ͷ���</h1>
                    <div class="news_zoom">
                        <p>ע����վ�����ǻ��ṩ��������ѵ�������ַ��һ����ַλ�ڶ��ո��ݲ������У�����˰������һ����ַλ�ڼ����������ݡ���Թ�����վ˰��Ҫ��ͬ��������ѡ��ʹ������֮һ��</p>
                        <p><img src="../images/img-service.JPG" width="200" height="200" /></p>
                        <p><b>���ǵ�����</b></p>
                        
                        <ul class="wrdlist">
                            <li>û��ע����û��·�</li>
                            <li>��Ѹ���������ַ</li>
                            <li>���о��������˷ѷ���</li>
                            <li>����ѡ����������ַ�ϲ����Ͱ����Խ�ʡ�˷�</li>
                            <li>�κΰ�����ѡ�����°�װ</li>
							<li>������ַ��Ѵ洢����30��</li>
							<li>ʵʱ���߼ල�������Ķ������˵�</li>
							<li>���ǵĿͷ���Ա�ṩ���߷���</li>
                          </li>
                        </ul>
                        <p><b>���ǵı�֤</b></p>
                        
                        <ul class="wrdlist">
                            <li>��֤���ﵽ�ﵱ�����</li>
                            <li>�ύ����24Сʱ�ڴ�������׼ȷ�������ͷ���</li>
                            <li>���˷��ú�����֧�������ص��Ķึһ��Ǯ��Ҳ����Ԥ��</li>
							<li>������췢����ȫ�̸�������״̬</li>
							<li>����ڶ����ʼ���ʱ֪ͨ<br />
							  <br />
							</li>
                        </ul>
                  </div>
                </div>
            </div>
        </div>
        
        <div id="btm">
            <p><a href="../../about.php">��������</a> |
            <a href="../../faq.php">�û�����</a> | <a href="../term1.html">ʹ������</a> |
            <a href="../../term2.php">��������</a> | <a href="../job.html">�˲���Ƹ</a> |
            <a href="../../partner.php">�������</a> |
            <a href="../../weibo.php" style="color:#c20f08;">�ٷ�΢��</a>
            <br/>
            ��Ȩ���� Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
</body>
</html>