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
  
    <style type="text/css">
<!--
body,td,th {
	color: #000000;
}
.STYLE3 {color: #CCCCCC}
-->
    </style>
</head>
<body>
    <div id="main">
        <div id="top">
            <div id="logo"><a href="../index.html"><img src="../images/logo.jpg" alt="ε����ȫ��λ��������ƽ̨" border="0" /></a></div>
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
                    <div class="posi">������λ�ã�<a href="../index.html">ε����</a> > �˻����� > ��������</div>
                </div>
			<form name="formInfo" action="member_user_do.asp?act=user_edit" method="post"  onsubmit="return checkForm()">
                <div id="formzoom">
                    <h1>��������</h1>
                    <table border="0" cellpadding="0" cellspacing="0" align="center" style="width:auto;">
                        <tr>
                            <td ><div style="width:270px;height:90px;float:left;border:solid 3px #eaeaea;line-height:18px;margin:0px 20px 0px 40px;padding:5px;font-family:Arial;"> <span style="color:#a7103d;"><strong>�����ջ���ַ</strong></span><br />
                              922 SW BARBUR BLVD<br />
                              C/0 W-<br />
                              CA <br />
                            XXXXX </div></td>
                            <td><div style="width:270px;height:90px;float:left;border:solid 3px #eaeaea;line-height:18px;margin:0px 20px 0px 0px;padding:5px;font-family:Arial;"> <span style="color:#a7103d;"><strong>���ո����ջ���ַ</strong></span><br />
                              XXXXXXX<br />
                              C/0 W-<br />
                              CA <br />
                            XXXXX </div></td>
                        </tr>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="0" style="margin-top:20px;">
                        <tbody>
                            <tr>
                                <td align="right" style="width:150px;">���ĵ����ʼ���ַ��</td>
                                <td><font color="#0000ff"></font></td>
                            </tr>
                            <tr>
                                <td align="right">��������������</td>
                                <td><span><span>
                                  <input name="chinesename" type="text" id="text" />
                                </span>                                </span></td>
                            </tr>
                            <tr>
                                <td align="right">����Ӣ��������</td>
                              <td><input name="uFirstName" type="text" size="15" maxlength="10" value="" onblur="if(!/^([a-z]|[A-Z]){0,20}$/.test(this.value)){alert('����������ƴ��');this.focus();return false;}" />
                                &nbsp;
                                  <input name="uLastName" type="text" size="15" maxlength="10" value="" onblur="if(!/^([a-z]|[A-Z]){0,20}$/.test(this.value)){alert('����������ƴ��');this.focus();return false;}" />
                                <span>*</span>                              </td>
                            </tr>
                            <tr>
                                <td align="right">�����Ա�</td>
                                <td>
                                    <select id="sex">
                                        <option>��</option>
                                        <option>Ů</option>
                                    </select>                                </td>
                            </tr>
                            <tr>
                                <td align="right">��������/������</td>
                                <td><select name="uCountryID">
					<option value="1">�й�</option>
					<option value="2">����</option>
					<option value="3">���ô�</option>
					<option value="4">����</option>
				</select>
                                <span>*</span></td>
				            </tr>
                            <tr>
                                <td align="right">����ʡ/����</td>
                                <td>	<select name="uprovinceID"  >
	<option value="">ѡ�����</option>
	<option value=""></option>
    </select>				 
					                                &nbsp;<span>*</span>                                </td>
                            </tr>
                            <tr>
                                <td align="right" valign="top" style="padding-top:4px;">��ϵ��ַ��</td>
                                <td><input name="uAddress" type="text" size="60" maxlength="200" value="" />
                              <span>*</span><br/></td>
                            </tr>
                            <tr>
                                <td align="right">�������룺</td>
                                <td><input name="uPostalCode" type="text" size="8" maxlength="6" value="" />
                                <span>*</span></td>
                            </tr>
                            <tr>
                                <td align="right">���֤�ţ�</td>
                              <td><input name="uIdentityNum" type="text" size="18" maxlength="18" value="" />
                                  <font color="#999999">����󲻿��޸�</font></td>
                            </tr>
                            <tr>
                                <td align="right">�ֻ����룺</td>
                                <td><input name="uTel" type="text" size="18" maxlength="15" value="" />
                                <span>*</span></td>
                            </tr>
                            <tr>
                                <td align="right">�������룺</td>
                                <td><input name="uPhone" type="text" size="18" maxlength="22" value="" /></td>
                            </tr>
                            <tr>
                                <td align="right">��ѶQQ��</td>
                                <td><input name="uQQ" type="text" size="15" maxlength="20" value="" /></td>
                            </tr>
                            <tr>
                                <td align="right">M S N��</td>
                                <td><input name="uMsn" type="text" size="15" maxlength="60" value="" /></td>
                            </tr>
                            <tr>
                                <td align="right" valign="top" style="padding-top:4px;">��ע��Ϣ��</td>
                                <td><textarea name="uRemark" rows="6" cols="60"></textarea></td>
                            </tr>
                            <tr>
                                <td align="right">&nbsp;</td>
                                <td><input type="submit" value="��������" name="cButton" class="member_submit" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
     
        		</form>		
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