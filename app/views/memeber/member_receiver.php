<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>����|ת��|ε��������</title>
    <meta name="keywords" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <meta name="description" content="����,����ת��,ת��,����,ת�˹�˾,ε��������,ε����ת��ƽ̨,�������й����" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/openlayer.js"></script>
<script language="javascript" type="text/javascript" src="../js/Expand_Directory.js"></script>
<script src="../js/basic.js"></script>
<script language="javascript">
function checkForm(){
	var form=document.InfoReceiver;
	if(!isText(form.uReceiverCompany.value)){
		form.uReceiverCompany.focus();
		return false;
	}
	if(!isText(form.uReceiverPerson.value)){
		form.uReceiverPerson.focus();
		return false;
	}
	if(!isText(form.uReceiverAddress.value)){
		form.uReceiverAddress.focus();
		return false;
	}
	if(!isText(form.uReceiverPostalCode.value)){
		form.uReceiverPostalCode.focus();
		return false;
	}
	if(!isText(form.uReceiverPhone.value)){
		form.uReceiverPhone.focus();
		return false;
	}
	if(form.uReceiverCountry.value==""){
		alert("��ѡ�����");
		form.uReceiverCountry.focus();
		return false;	
	}
	if(form.uReceiverProvience.value==""){
		alert("��ѡ�����");
		form.uReceiverProvience.focus();
		return false;	
	}
	return true;
}

</script>
<style type="text/css">
    .block{color:#000000;}
    .gray{color:#999999;padding-top:5px;}
    .tbllist{font-size:12px;}
    table{font-size:12px;}
    h1{text-align:left;}
    p{text-align:left;}
    .posi{text-align:left;}
    #menu .item{text-align:left;}
    #menu .item li{text-align:left;}
</style>
</head>
<body>            
    <div id="main" style="margin:0px auto;">
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
            <div class="posi">������λ�ã�<a href="../index.php">ε����</a> > �˵����� > �ջ���ַ</div>
        </div>
        <div id="formzoom">
          <h1 style="border:none;margin-bottom:0px;">�ջ���ַ</h1>
            <p style="text-align:right;"><a href="member_receiver.php">����ջ���ַ</a></p>			        
            <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                <tbody>
                    <tr style="font-weight:bold;">
                        <td><strong>����</strong></td>
                        <td><strong>�ջ���˾</strong></td>
                        <td><strong>�ջ���</strong></td>
                        <td><strong>�绰</strong></td>   
                        <td><strong>�ջ���ַ</strong></td>    
                        <td><strong>�ʱ�</strong></td> 
                        <td><strong>����</strong></td>                            
                    </tr>
                    <tr>
                        <td><a href="" onclick="return confirm('��ȷ��Ҫɾ����')">ɾ��</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="">�༭</a></td>  
                        <td>1</td>                                
                        <td>1</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                        <td>2</td>
                    </tr>
                    <tr class="row"><td height="34" colspan="7">��û�е�ַ��Ϣ</td></tr>
              </tbody>
            </table>	  
            <h1>����ջ���ַ</h1>
            <p><span style="color:#ff0000;">* Ϊ������</span></p>  
            <form name="InfoReceiver" action="" method="post" target="_self" onsubmit="return checkForm()">
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td align="right" style="width:100px;line-height:27px;" valign="top"><span>*</span> �ջ���˾��</td>
                        <td align="left" style="padding-bottom:8px;">
                            <input name="uReceiverCompany" type="text" size="40" maxlength="50" value="" />
                            <div class="gray">���û���ջ���˾�������ջ������� </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" style="line-height:27px;"><span>*</span> �� �� �ˣ�</td>
                        <td align="left" style="padding-bottom:8px;"><input name="uReceiverPerson" type="text" size="20" maxlength="10" value="" />
                            <div class="gray">�ջ�����������������֤�ϵ�����һ��</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" style="line-height:27px;"><span>*</span> �ջ�����</td>
                        <td align="left" style="padding-bottom:8px;">
                            <select name="uReceiverCountry">
                                <option value="" selected="selected">ѡ�����</option>
                                <option value="1">�й�</option>
                                <option value="2">����</option>
                                <option value="3">���ô�</option>
                                <option value="4">����</option>
                            </select>
                            &nbsp;&nbsp;<font style=" color:red;">*</font> ʡ��/�ݣ�
                            <select name="uReceiverProvience"  >
                                <option value="">ѡ�����</option>
                                <option value=""></option>
                            </select>
                            <div class="gray">Ϊ���������׼ȷ���ͣ������ѡ����ȷ��ʡ�ݺͳ���</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" style="line-height:27px;"><span>*</span> �ջ���ַ��</td>
                        <td align="left" style="padding-bottom:8px;">
                            <input name="uReceiverAddress" type="text" size="50" maxlength="100" value="" style="width:400px;margin-bottom:8px;" /><br/>
                            <input name="uReceiverAddress2" type="text" size="50" maxlength="100" value="" style="width:400px;" />
                            <div class="gray">�����ջ���ַ</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" style="line-height:27px;"><span>*</span> �������룺</td>
                        <td align="left" style="padding-bottom:8px;">
                            <input name="uReceiverPostalCode" type="text" size="8" maxlength="6" value="" style="width:400px;" onkeyup="value=value.replace(/[^\d\.]/g,'')" />
                            <div class="gray"><a href="http://www.ip138.com/post/" target="_blank">��ѯ��������</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><span>*</span> ��ϵ�绰��</td>
                        <td align="left">
                            <input name="uReceiverPhone" type="text" size="15" maxlength="20" value="" onkeyup="value=value.replace(/[^\d\.]/g,'')" style="width:400px;" />
                            </td>
                    </tr>
                    <tr>
                        <td align="right"> ���õ绰��</td>
                        <td align="left"><input id="uReceiverRemark" name="uReceiverRemark" type="text" style="width:400px;"/></td>
                    </tr>
                    <tr>
                        <td align="right" valign="top" style="line-height:27px;">��ע��Ϣ��</td>
                        <td align="left" style="padding-bottom:8px;">
                            <textarea name="uReceiverRemark" rows="6" cols="60" style="width:400px;"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td align="left">
                            <input type="submit" value="�����ַ" name="cButton">&nbsp;
                            <input type="submit" value="�����µ�ַ" name="cButton">&nbsp;
                            <input type="button" value=" ���� " name="bButton" onclick="javascript:window.history.back()">
                        </td>
                    </tr>
                </tbody>
            </table>
            </form>
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="user_right_box">
                <tr>
                    <td height="22" class="user_right_box_bg">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="28"><span class="right_top_tit" style="padding-left:15px;">�༭�ջ���ַ</span></td>
                                <td width="80" class="link_lan"><a href="">���ص�ַ�б�</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="100%" valign="top">
                        <form name="InfoReceiver" action="" method="post" target="_self" onsubmit="return checkForm()">
                        <table width="100%" border="0" cellspacing="3" cellpadding="3">
                          <tbody>
                              <tr>
                                <td width="20">&nbsp;
                                
                                <input name="uReceiverID" type="hidden" value="<%=ID%>" />
                                </td>
                                <td width="546">�ջ���˾��<input name="uReceiverCompany" type="text" size="40" maxlength="50" value="">&nbsp;<font color="#ff0000">*</font></td>
                              </tr>
                              <tr>
                                <td width="20">&nbsp;</td>
                                <td>����������������ʾ�����û���ջ���˾�������ջ��ˣ�</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>�� �� �ˣ�<input name="uReceiverPerson" type="text" size="20" maxlength="10" value="">&nbsp;<font color="#ff0000">*</font></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>
                                    <span style="color:#484846;" onclick="inti(0)">�ջ�����
                                        <select name="uReceiverCountry">
                                            <option value="" >ѡ�����</option>
                                            <option value="1">�й�</option>
                                            <option value="2">����</option>
                                            <option value="3">���ô�</option>
                                            <option value="4">����</option>
                                        </select>&nbsp;&nbsp;	
                                        ʡ��/�ݣ�
                                        <select name="uReceiverProvience"  >
                                            <option value="">ѡ�����</option>                
                                            <option value=""></option>
                                        </select>				
                                    </span>
                                </td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ϊ���������׼ȷ���ͣ������ѡ����ȷ��ʡ�ݺͳ���</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>�ջ���ַ��<input name="uReceiverAddress" type="text" size="50" maxlength="100" value="">&nbsp;<font color="#ff0000">*</font></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>�������룺<input name="uReceiverPostalCode" type="text" size="8" maxlength="6" value="">&nbsp;<font color="#ff0000">*</font>&nbsp;
                                <a href="http://www.ip138.com/post/" target="_blank">��ѯ��������</a></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>��ϵ�绰��<input name="uReceiverPhone" type="text" size="15" maxlength="20" value="">&nbsp;<font color="#ff0000">*</font></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>���õ绰��<input name="uReceiverPhoneRemak" type="text" size="15" maxlength="15" value=""></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td>��ע��Ϣ��<textarea name="uReceiverRemark" rows="6" cols="60"></textarea></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td height="30"><input type="submit" value="�����ַ" name="cButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="button" value=" ���� " name="bButton" onclick="javascript:window.history.back()"></td>
                              </tr>
                            </tbody>
                         </table>
                        </form>
                    </td>
                </tr>
            </table>
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