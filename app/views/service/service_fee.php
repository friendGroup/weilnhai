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
            
            //���ñ��ĸ��л�ɫ
//            $(".feelist tr").each(function(index){
//                if(index!=0)
//                {
//                    if(index%2==0)
//                        $(".feelist tr:eq("+index+") td").attr("class","bgc");
//                }
//            });
            //���ñ��ĸ��л�ɫ
            $("table.feelist tr:nth-child(odd) td").addClass("bgc");
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
.news_zoom table{line-height:25px;}
.feelist{width:400px;margin:10px auto;border:none;border-collapse:collapse;line-height:25px;}
.feelist td{border-bottom:solid 1px #ffffff;border-right:solid 1px #ffffff;line-height:25px;height:25px; text-align:center;background-color:#efefef;padding:0px;margin:0px;}
.feelist .bgc{background-color:#e7e7e7;}
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
                        <li class="sel"><a href="service_fee.html">�˷�</a></li>
                        <li><a href="service_storage.html">����</a></li>
						<li><a href="service_extra.html">��ֵ����</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > �����շ� > �˷�</div>
                </div>
                <div id="formzoom">
                    <h1 class="STYLE1">�˷�</h1>
                  <div class="news_zoom">
                        <p><b>���ʿ���˷ѣ� �������࣬һ���װ�7��Ԫ������5��Ԫ��</b></p>
                        <p>ע1������1����1���Ʒѣ��������ع�˰�Ϳ��ܵ����˷ѡ�<br />
                      ע2������ذ��ճ�x��x��/166 inch/lb������ش���ʵ������ʱ�����ְ�ÿ��1��Ԫ��ȡ<br />
                      <br />
                      <br />
                      <br />
                    </p>                        
                        <h2 style="border-bottom:dotted 1px #dddddd;margin:0px;padding:0px;font-size:12px;">��������ͷ���</h2>
                        
                        <table border="0" cellpadding="0" cellspacing="0" class="feelist" style="width:600px;line-height:25px;">
                        <tbody>
                            <tr style="font-weight:bold;">
                                <td style="background-color:#1845a2;color:#fff;">����</td>
                                <td style="background-color:#1845a2;color:#fff;text-align:center;">����</td>
                                <td style="background-color:#1845a2;color:#fff;">˵��</td>
                            </tr>
                            <tr>
                                <td>�����ջ���ַ��2����</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">�ṩ�����ջ���ַ</td>
                            </tr>
                            <tr>
                                <td>BuyForMe�����</td>
                                <td>10%</td>
                                <td style="text-align:left;padding-left:10px;">Ϊ���˹�����Ʒ��ȡ�Ĵ�����</td>
                            </tr>
                            <tr>
                                <td>��˰��ת�˷���</td>
                                <td>1��Ԫ/��</td>
                                <td style="text-align:left;padding-left:10px;">Ϊʹ����˰�ݵ�ַ�Ļ�Ա�ṩת�˵����ݲֿ�ķ���</td>
                            </tr>
                            <tr>
                                <td>�ϲ����ط���</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">�����������Ʒ�ϲ���һ����������</td>
                            </tr>
                            <tr>
                                <td>�������</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">һ��������ֳ����ɸ���������</td>
                            </tr>
                            <tr>
                                <td>ȡ����Ʊ</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">ϣ���۸���ȡ����Ʊ�ķ���</td>
                            </tr>
                            <tr>
                                <td>�������</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">��Ҫ�Ի�Ʒ���������˶�</td>
                            </tr>
                            <tr>
                                <td>��������</td>
                                <td>���</td>
                                <td style="text-align:left;padding-left:10px;">�����������װ��ķ���</td>
                            </tr>
                            <tr>
                                <td>��������</td>
                                <td>5��Ԫ/��</td>
                                <td style="text-align:left;padding-left:10px;">��������Ʒ���գ�1��10����ƬΪ��</td>
                            </tr>
                            <tr>
                                <td>����ӹ�</td>
                                <td>1��Ԫ/��</td>
                                <td style="text-align:left;padding-left:10px;">Ϊ���ء������Ʒ���л����︲������䡢�ĵ桢֧�ŵȲ���</td>
                            </tr>
                            <tr>
                                <td>�ִ���</td>
                                <td>30�����</td>
                                <td style="text-align:left;padding-left:10px;">Ϊ��Ա�ṩ�ִ��ķ���</td>
                            </tr>
                            <tr>
                                <td>�˻�����</td>
                                <td>5��Ԫ/��</td>
                                <td style="text-align:left;padding-left:10px;">����ֱ�Ӱ����˻أ��˻��˷��ɿ������ге���</td>
                            </tr>
                            <tr>
                                <td>���շ���</td>
                                <td>2%</td>
                                <td style="text-align:left;padding-left:10px;">ת���жԻ������ۣ�ÿ����߳б�2000��Ԫ��</td>
                            </tr>
                        </tbody>
                    </table>
                                            
                      <p>&nbsp;</p>
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