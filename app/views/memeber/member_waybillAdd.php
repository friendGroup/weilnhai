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
<link href="../css/common.css" rel="stylesheet" type="text/css" />
<link href="../css/user.css" rel="stylesheet" type="text/css" />
<link href="../css/index.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../js/openlayer.js"></script>

<script language="javascript" type="text/javascript" src="../js/Expand_Directory.js"></script>
<script src="../js/basic.js"></script>

 	  <script language="javascript">

function checkForm(){

	var form=document.waybill;
	if(!isText(form.uWayBillInfo.value)){
		form.uWayBillInfo.focus();
		return false;
	}
	if(form.uPAID.value==""){
		alert("��ѡ��ؿ�");
		form.uPAID.focus();
		return false;	
	}
	if(form.uWayBillRemark.value.length>500){
		alert("������ı�ע��Ϣ̫���ˣ������ַ�500");
		form.uWayBillRemark.focus();
		return false;
	}

	if(!isText(form.sdZipCode.value)){
		form.sdZipCode.focus();
		return false;
	}
	if(form.sdRemark.value.length>500){
		alert("������ı�ע��Ϣ̫���ˣ������ַ�500");
		form.sdRemark.focus();
		return false;
	}
	return true;
}

</script>

<style type="text/css">
.STYLE2 {color: #999999}
</style>
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
                    <div class="posi">������λ�ã�<a href="../index.php">ε����</a> > �˵����� > �ύ�˵�</div>
                </div>
                <div id="formzoom">
                    <h1>�ύ�˵�</h1>
                    <form name="waybill" action="member_waybillaction.php" method="post" onsubmit="return checkForm()">
                    <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                      <tbody>
                      	<tr>
                        	<td height="30" colspan="6" style="text-align:left;padding-left:10px;"><b>��һ����ѡ��ֿ����</b></td>
	                    </tr>
                      	<tr>
                        	<td colspan="2" valign="top" style="padding-top:8px;">
		                        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="user_right_box">
        							<tr>
					                   <td height="100%" valign="top">
                    						<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
								                <tbody>
                                                	<tr>
									                  <td  width="200">&nbsp;<strong>&nbsp;&nbsp;�˵���</strong></td>
                                                        <td width="80"><strong>�ֿ�λ��</strong></td>
                                                        <td width="70" align="center"><strong>ʵ��</strong></td>
                                                        <td width="50" align="center"><strong>�����</strong></td>
                                                        <td width="120" align="center"><strong>�ִ���</strong></td>
                                                        <td width="60" align="center"><strong>  ����</strong></td>                
                                      				</tr>
			                                  	</tbody>
                                             </table>
	 										 <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="link_bk" style="border-top:1px #666666 solid;">
                    							<tbody>
                                                    <tr class="row">
                                                        <td width="200" style="border-bottom:1px #CCCCCC dotted;"></td>
                                                        <td height="34" width="80" style="border-bottom:1px #CCCCCC dotted; color:#666666">
                                                            <span style="border-bottom:1px #CCCCCC dotted"></span>
                                                        </td>
                                                        <td width="70" align="center" style="border-bottom:1px #CCCCCC dotted"></td>
                                                          <td width="50" align="center" style="border-bottom:1px #CCCCCC dotted"></td>
                                                        <td width="120" align="center" style="border-bottom:1px #CCCCCC dotted">
                                                            &nbsp; <span style="border-bottom:1px #CCCCCC dotted; color:#666666"></span>
                                                        </td>
                                                        <td width="60" align="center" style="border-bottom:1px #CCCCCC dotted">
                                                            <span style="border-bottom:1px #CCCCCC dotted;">
                                                                <input name="ustorgeID" type="checkbox" id="" onclick="tj(1,);" value="" />
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td width="120" style="border-bottom:1px #CCCCCC solid;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ע��</td>
                                                        <td height="34" colspan="3" style="border-bottom:1px #CCCCCC solid;" >&nbsp;</td>
                                                        <td width="60" align="center" style="border-bottom:1px #CCCCCC solid">&nbsp;</td>	  
                                                        <td width="60" align="center" style="border-bottom:1px #CCCCCC solid">&nbsp;</td>
                                                    </tr>
                                                    <tr class="row">
                                                        <td height="34" colspan="6" style="border-bottom:1px #CCCCCC solid;">��û�е������,�����ύ�˵�!</td>
                                                    </tr>
												</tbody>
                                             </table>
		 
 		  <!--�ջ���ַ --> 		  </td>
          							</tr>
							    </table>
							</td>
						</tr>
                        </tbody>
			  		</table>
                    <br />
                    <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                        <tr>
                            <td height="30" colspan="3" style="text-align:left;padding-left:10px;"><b>�ڶ�����������Ϣ����ֵ����</b></td>
                        </tr>	  			  
                        <tr>
                            <td width="144" valign="top" style="padding-top:8px;"><b>����˵����</b></td>
                            <td colspan="2">
                                <div align="left">
                                    <input name="uWayBillInfo" type="text" size="30" maxlength="30" value="">
                                    <font color="#ff0000"><font color="#999999">�磺Ь��5˫�����뵶2�����綯���1��</font></font>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><strong>ѡ����ؿڰ�:</strong></td>
                            <td colspan="2">
                                <div align="left">
                                    <select name="uPAID">
                                        <option selected="selected"  value="" >ѡ��ڰ����</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><b>�����걨��ֵ��</b></td>
                            <td colspan="2">
                                <div align="left">
                                    <span style="text-align:left;padding-left:3px;"><input name="value" type="text" id="value" /></span>
                                    <span style="text-align:left;padding-left:3px;"><label for="Radio4"></label></span>
                                    <span style="text-align:left;padding-left:3px;"><label for="Radio4"></label></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><b>�����գ�</b></td>
                            <td width="550">
                                <div align="left">
                                    <input id="insurance" type="radio" name="chk_bx" />
                                    ��	����:	 
                                    <input type="text" name="uWayBillPrice" value="0" size="6" onkeyup="value=value.replace(/[^\d\.]/g,'')" />
                                    ��Ԫ
                                    <input id="insurance" type="radio" name="chk_bx" />
                                    ��
                                </div>
                            </td>
                            <td width="88">
                                <span style="text-align:left;padding-left:3px;">
                                    <label for="Radio4"></label>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><b>����Ҫ��</b></td>
                            <td colspan="2">
                                <div align="left">
                                    <input id="ss1" type="radio" name="uWayBillRequire" value="1" checked="checked" onclick="return getServiceType()" />
                                    <label for="ss1">ԭ��ת��</label>
                                    <input id="ss2" type="radio" name="uWayBillRequire" value="2" onclick="return getServiceType()" />
                                    <label for="ss2">�������(���)</label>
                                    &nbsp;
                                    <input id="ss2" type="radio" name="uWayBillRequire" value="3" onclick="return getServiceType()" />
                                    <label for="ss2">�������(���)</label>
                                    &nbsp;
                                    ��������
                                    <select name="uWayBillNumPackage" id="select" >
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><strong>�����ֵ����:</strong></td>
                            <td colspan="2"><label for="vs5" style="background-color:#CCFFFF;height:20px;padding-top:3px;"></label>
                                <div align="left">
                                    <label for="vs5" style="height:20px;padding-top:3px;"></label>&nbsp;
                                    <label for="vs1" style="height:20px;padding-top:3px;">&nbsp;ȡ����Ʊ</label>
                                    <input id="vs1" type="checkbox" name="vs1" value="1" style="" />
                                    <label for="label" style="background-color:#CCFFFF;height:20px;padding-top:3px;"></label>
                                    <label for="ps2" style="height:20px;padding-top:3px;">&nbsp;�������(ʮ���������)</label>
                                    <input id="ps2" type="checkbox" name="ps2" value="1" style="" />
                                    <label for="ps3" style="height:20px;padding-top:3px;">&nbsp;��������(����Ҫ)</label>
                                    <input name="ps3" type="checkbox" id="ps3" style="" value="1" checked="checked" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><strong><strong>�շѷ���:</strong></strong></td>
                            <td colspan="2"><label for="vs1" style="background-color:#CCFFFF;height:20px;padding-top:3px;"></label>
                                <div align="left">
                                    <label for="vs1" style="height:20px;padding-top:3px;"></label>&nbsp;&nbsp;
                                    <label for="vs5" style="height:20px;padding-top:3px;">��������(ÿ������5��Ԫ)</label>
                                    <input id="vs5" type="checkbox" name="vs5" value="1" style="" />
                                    <label for="ps1" style="height:20px;padding-top:3px;">&nbsp;����ӹ�(ÿ��1��Ԫ)</label>
                                    <input id="ps1" type="checkbox" name="ps1" value="1" style="" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="padding-top:8px;"><b>��ע˵����</b></td>
                            <td colspan="2">
                                <div align="left">
                                    <textarea name="uWayBillRemark" rows="3" cols="71"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table border="0" cellpadding="0" cellspacing="0" class="tbllist">
                        <tr>
                            <td height="30" style="text-align:left;padding-left:10px;">
                                <b>���������ջ���Ϣ<span style="font-size:12px;font-weight:lighter;color:#000;">���趨�����ջ���Ϣ��</span></b>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" colspan="2">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="STYLE2">�������ѣ��ռ��������͵�ַ�����ظ���������ܻ�������ˣ�</div>
                                                <div bgcolor="#FAFAFA" style="height:120px;width:600px;z-index:1; overflow: auto;border:1px solid #C2CBEC;">
                                                    <div align="left">
                                                        <input type="checkbox" name="uReceiverID"   value=""/>(�ջ���˾)
                                                        <a href="member_receiver.php" style="color:red;" > ��������ջ���Ϣ</a>						
                                                    </div>
                                                </div>
                                            </td>
                                            <td width="100" valign="top" align="center">
                                                <br><br>
                                                <input type="button" value="��ַ����" name="nButton" onclick="javascript:window.location.href='member_receiver.php';">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                           </td>
                        </tr>
                        <tr>
                            <td height="50" colspan="2">
                                <input type="submit" value="�ύ�˵�" name="cButton" id="cButton">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="button" value=" ���� " name="dButton" onclick="javascript:location.href=/member/">
                            </td>
                        </tr>
                    </table>
					</form>
                    <p style="text-align:right;"><a href="#"></a>&nbsp;&nbsp;</p>
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