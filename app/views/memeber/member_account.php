<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>����|ת��|ε��������</title>
    <meta name="keywords" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <meta name="description" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script src="../js/jquery.js" type="text/javascript"></script>
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
            <div id="logo"><a href="../index.php"><img src="../images/logo.jpg" alt="ε����ȫ��λ��������ƽ̨" border="0" /></a></div>
            <div id="favnav">
                <div id="fav"><a href="javascript:void(0)" onclick="addBookmark(document.title)">�����ղ�</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="../login.php">��¼</a> | &nbsp;<a href="../register.php">���ע��</a></div>
                <div id="nav">
                    <ul>
                        <li><a href="../index.php">��վ��ҳ</a></li>
                        <li><a href="#">����Ƶ��</a></li>
                        <li><a href="../service/service.php">�����շ�</a></li>
                        <li><a href="../memeber/index.php">�ҵ��ʻ�</a></li>
                        <li><a href="../help/faq.php">����֧��</a></li>
                        <li><a href="#">������Ѷ</a></li>
                        <li><a href="../contact.php">��ϵ��ʽ</a></li>
                    </ul>
                    <div id="tag1" class="childmenu">
                        <ul>
                            <li><a href="../catalog/coupon.php">���ۺ��ۿ�</a></li>
                            <li><a href="../catalog/catalog.php">������վĿ¼</a></li>
                            <li><a href="../catalog/tip.php">������ʿ</a></li>
                            <li><a href="../catalog/skill.php">���Ծ���</a></li>
                        </ul>
                    </div>
                    <div id="tag5" class="childmenu">
                        <ul>
                            <li><a href="../news/newsboard.php">���¹���</a></li>
                            <li><a href="../news/promotion.php">�Żݻ</a></li>
                            <li><a href="../news/custom.php">��������</a></li>
                            <li><a href="../news/term1.php">Э������</a></li>
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
                <div id="menu">
                    <div class="item">
                        <div class="cagname"><img src="../images/gouwudingdan.jpg" /></div>
                        <ul>
                            <li><a href="addbuy.php">���ﵥ���</a></li>
                            <li><a href="ordercurrenview.php">��ǰ����</a></li>
                            <li><a href="orderhistory.php">��ʷ����</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="cagname"><img src="../images/yundanguanli.jpg" /></div>
                        <ul>
                            <li><a href="addshipinfo.php">�ύԤ��</a></li>
                            <li><a href="view.php">Ԥ����ѯ</a></li>
                            <li><a href="member_storge_list.php">������</a></li>
                            <li><a href="member_waybillAdd.php">�ύ�˵�</a></li>
                            <li><a href="member_waybillindex.php">��ǰ�˵�</a></li>
                            <li><a href="member_waybill_list.php">��ʷ�˵�</a></li>
                            <li><a href="member_receiver.php">��ַ��</a></li>
                        </ul>
                    </div>
                    <div class="item">
                        <div class="cagname"><img src="../images/zhanghuguanli.jpg" /></div>
                        <ul>
                            <li><a href="index.php">��������</a></li>
                            <li><a href="member_edit_pw.php">�޸�����</a></li>
                            <li><a href="#">���߳�ֵ</a></li>
                            <li><a href="member_account.php">������ϸ</a></li>
                            <li><a href="member_account_bill.php">�����˵�</a></li>
                            <li><a href="member_logout.php">��ȫ�˳�</a></li>
                        </ul>
                    </div>
                </div>
                <div id="picpnl">
                   <a href="../contact.php"><img src="../images/a2.jpg" alt="�ͷ�����" border="0" /></a>
                    <a href="../howto.html"><img src="../images/a3.jpg" alt="��������" border="0" /></a>
                    <a href="../catalog/coupon.php"><img src="../images/a1.jpg" alt="����" border="0" /></a>
                </div>
            </div>
            <div id="rgtpnl">
                <div class="r_tle">
                    <div class="posi">������λ�ã�<a href="../index.php">ε����</a> > �˻����� > ������ϸ</div>
                </div>
                <div id="formzoom">
                    <h1>������ϸ</h1>
						<form id="Form1" name="Form1" method="post" action="member_edit_pw.php" onsubmit="return chk_form();">
						  <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" class="user_right_box">
                            <tbody>
                              
                              <tr>
                                <td height="30" align="left" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed"><!--��ֵ��¼ -->
                                     <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                        <tbody>
                                        <tr>
                                          <td width="120" height="26"><strong>��ֵ��</strong></td>
                                          <td width="123"><strong>����</strong></td>
                                          <td width="97" align="center"><strong>��ֵ���</strong></td>
                                          <td width="174" align="center"><strong>
                                            <!--֧���˺� -->
                                          </strong></td>
                                          <td width="60" align="center"><strong>
                                            <!--״̬ -->
                                          </strong></td>
                                          <td width="161" align="center"><strong>
                                            <!--���� -->
                                          </strong></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
                                      <tbody>
                                        <tr >
                                          <td width="120" height="26"></td>
                                          <td width="121"></td>
                                          <td width="99" align="center"></td>
                                          <td width="174" align="center"></td>
                                          <td width="60" align="center"></td>
                                          <td width="161" align="center"><strong></strong></td>
                                        </tr>                                    
                                      </tbody>
                                    </table>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td></td>
                                      </tr>
                                    </table>
                                  </td>
                              </tr>
                            </tbody>
                          </table>
						</form>
	
                </div>
            </div>
        </div>
        
       <div id="btm">
            <p><a href="../about.html">��������</a> |
            <a href="../help/faq.php">�û�����</a> | 
            <a href="../news/term1.php">ʹ������</a> |
            <a href="../news/term2.html">��������</a> | 
            <a href="../job.php">�˲���Ƹ</a> |
            <a href="../partner.php">�������</a> |
            <a href="../weibo.php" style="color:#c20f08;">�ٷ�΢��</a>
            <br/>
            ��Ȩ���� Copyright <span style="font-size:12px;font-family:Arial;">&copy;</span> 2008-2012 weilanhai. All Rights Reserved
            </p>
        </div>
    </div>
</body>
</html>