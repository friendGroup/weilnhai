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
        var form_model="";
		$(function(){
            $("#nav ul:eq(0) li").each(function(index){
                $(this).mouseover(function(){LoadNav(index);});
            });
            $("#banner").mouseover(function(){LoadNav(-1);});
			form_model = $("#tablezoom .item:eq(0)").html();
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
   <script type="text/javascript">
var i = 1;
function addRow(id){
    var tbody = document.getElementById(id).getElementsByTagName("TBODY")[0];
    var nid = i;     //�����б��   ����ɾ��
    var id = 'tr'+nid;  //����������  ����ɾ��
    var row = document.createElement("TR")  //������
    var row2 = document.createElement("TR")  //������
    row.setAttribute("id",id);       //���� id���Ը�ֵ
    var td1 = document.createElement("TD")  //������
    td1.setAttribute("className","zit");  //�������� ��ʽ
    td1.align="center";                  //����
    td1.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";  //��� �� ���±߿�
    td1.innerHTML+=nid;
    var td2 = document.createElement("TD")
    td2.setAttribute("className","zit");
    td2.align="center";
    td2.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td2.innerHTML+="* �����빺����վ��ַ:<input   type='text'   name='website"+nid+"'  size='70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>* ��Ʒ���ӵ�ַ��<input   type='text'   name='contact"+nid+"'  size='70'>&nbsp;&nbsp;&nbsp;</br></br>&nbsp;* ��Ʒ���ۣ�<input   type='text'   name='price"+nid+"' size='40'>&nbsp;&nbsp;&nbsp;����: <select name='quality"+nid+"'><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>��Ʒ��ɫ:<input   type='text'   name='productname"+nid+"'  size='40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>��Ʒ�ߴ�:<input   type='text'   name='picturelink"+nid+"'   size='40'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>��ƷͼƬ���ӵ�ַ: <input   type='text'   name='discount"+nid+"' size='70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br>�ۿ۴���/������ע: <input   type='text'   name='memo"+nid+"' size='70'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	
	
    var td3 = document.createElement("TD")
    td3.setAttribute("className","zit");
    td3.align="center";

    td3.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td3.innerHTML+="";
    var td5 = document.createElement("TD")
    td5.setAttribute("className","zit");
    td5.align="center";
    td5.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td5.innerHTML+="";
    var td7 = document.createElement("TD")
    td7.setAttribute("className","zit");
    td7.align="center";
    td7.style.cssText ="border-bottom:1px #8CA5B5 solid;border-right:1px #8CA5B5 solid;";
    td7.innerHTML+="<a href='javascript:deleRow("+nid+");'  size='10'>[ɾ��] </a>"  //���б�Ž���ɾ��js
    row.appendChild(td7);
    row.appendChild(td2);   
    tbody.appendChild(row);
    i++;
}
function deleRow(index){
    var mytable = document.getElementById("mytbody");
    var myrow = document.getElementById("tr"+index);
    mytable.deleteRow(myrow.rowIndex);
}
</script>
<style type="text/css">
    .block{color:#000000;}
    .gray{color:#999999;}
</style>
<link href="../css/common.css" rel="stylesheet" type="text/css" />
<link href="../css/user.css" rel="stylesheet" type="text/css" />
<link href="../css/index.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="../js/openlayer.js"></script>

<script language="javascript" type="text/javascript" src="../js/Expand_Directory.js"></script>

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
                    <div class="posi">������λ�ã�<a href="../index.php">ε����</a> > BuyForMe���� > ���ﵥ���</div>
                </div>
              <div id="formzoom">
					<form id="myForm" method="get" action="presave.asp" />
        
        <h1>Buy For Me ���ﵥ���</h1>
        <p><span style="color:#ff0000;">* Ϊ������</span> �����������ϸ�Ķ�<a href="../howto.html">����ָ��</a>����</p>
        <div id="tablezoom">
            <div id="item_0" class="item">
                <table border="0" cellpadding="0" cellspacing="0" style="border:solid 1px #dedede;">
                    <tr>
                        <td style="border-right:solid 1px #dedede;" width="50px" align="center"><a href="javascript:deleteForm(0)">ɾ��</a></td>
                        <td style="padding-bottom:8px;">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td align="right" style="width:150px;"><span>*</span> ������վ��ַ��</td>
                                        <td><input id="txt_net_url_0" name="txt_net_url_0" type="text" style="width:400px;" 
                                        class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><span>*</span> ��Ʒ���ӵ�ַ��</td>
                                        <td><input id="txt_shop_url_0" name="txt_shop_url_0" type="text" style="width:400px;"
                                        class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><span>*</span> ��Ʒ���ۣ�</td>
                                        <td><input id="txt_price_0" name="txt_price_0" type="text"class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" />
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <span>*</span> ������<select id="select_num_0" name="select_num_0">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                            </select>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td align="right">��Ʒ��ɫ��</td>
                                        <td><input id="txt_color_0" type="text" name="txt_color_0" class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right">��Ʒ�ߴ磺</td>
                                        <td><input id="txt_size_0" name="txt_size_0" type="text" 
                                        class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right"><span>*</span> ��ƷͼƬ���ӵ�ַ��</td>
                                        <td><input id="txt_shop_pic_url_0" name="txt_shop_pic_url_0" type="text" style="width:400px;" 
                                        class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';" /></td>
                                    </tr>
                                    <tr>
                                        <td align="right" valign="top">�ۿ۴���/������ע��</td>
                                        <td><textarea id="txt_remark_0" name="txt_remark_0" cols="20" rows="2" type="text" style="width:400px;height:60px;"
                                        class="gray" onfocus="if(this.value==this.defaultValue){this.value='';} this.className='block';" 
                                        onblur="if(this.value==''){this.value=this.defaultValue;} this.className='gray';"></textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <p style="text-align:right;">
         <input type="button" name="button" value="����" onclick="javascript:addForm();"/>&nbsp;&nbsp;
         <input name="Submit" type="submit" value="�ύ" />      
			      </form>
          </p>
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