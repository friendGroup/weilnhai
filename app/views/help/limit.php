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
                        <li><a href="pay.html">����</a></li>
                        <li><a href="fragile.html">����Ʒ˵��</a></li>
						<li class="sel"><a href="limit.html">������Ʒ</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ����֧�� > ������Ʒ</div>
                </div>
                <div id="formzoom">
                    <h1 class="STYLE1">������Ʒ</h1>
                    <div class="news_zoom">
                        <b>һ���й����ؽ��޽�������Ʒ</b><br />
                          1������������������������ҩ����ը��Ʒ�� <br />
                          2��α��Ļ��Ҽ�α����м�֤ȯ�� <br />
                          3�����й����Ρ����á��Ļ��������к���ӡˢƷ��������Ƭ����Ƭ��ӰƬ��¼������¼������������̡�������洢���ʼ�������Ʒ�� <br />
                          4���������Զ�ҩ��ѻƬ����ȡ������򡢴����Լ�������ʹ�˳�������Ʒ������ҩ� <br />
                          5������Σ���Բ��������漰�����к�����Ķ��ֲ�Ｐ���Ʒ�� <br />
                          6���а����󽡿��ġ������������Լ������ܴ���������ʳƷ��ҩƷ��������Ʒ�� <br />
                          <br />
                      <strong>�����й������ֽ���Ʒ�涨</strong> <br />
                          1��������������ҩ����ǹ֧���ӵ����ڵ������񵯡����ס�ը���ȡ� <br />
                          2�������ױ�ը����Ʒ�����׹ܡ�ըҩ����ҩ�����ڵȡ� <br />
                          3��������ȼ������Ʒ������Һ�塢����͹��塣�����͡�ú�͡�ͩ�͡��ƾ������ᡢ���͡�������������������˹��ƿ���ס���ǡ����ȡ� <br />
                          4�������׸�ʴ����Ʒ��������ᡢ���ᡢ���ᡢ�л��ܼ���ũҩ��˫��ˮ��Σ�ջ�ѧƷ�ȡ� <br />
                          5�����������Ԫ�ؼ����������ˡ��ܡ��ء��еȡ��������Զ�ҩ�����衢�軯���˪�ȡ� <br />
                          6����������ҩ���ѻƬ��������ڿǡ���������Ҷ������ȡ��ɿ��򡢺����򡢴��顢����������ؼ�������Ʒ�ȡ� <br />
                          7������������Ʒ�ʹ�Ⱦ����Ʒ����̿�ҡ�Σ���Բ�����ҽҩ�÷�����ȡ� <br />
                          8������Σ�����Ұ�ȫ����������ȶ��Լ�����ĳ��������Ʒ��ӡˢƷ�ȡ� <br />
                          9�����ַ���������������Ʒ����ʬ�ǡ��������١�֫�塢δ�����Ƶ���Ƥ��δ��ҩ�Ƶ��޹ǵȡ� <br />
                          10�����ҷ��ɡ����桢�������������ֹ��ͨ���ĵݻ����������Ʒ������������ļ������ϡ����һ��Ҽ�α��Ļ��Һ��м�֤ȯ���������������Ƶ��ߡ���������ΣҰ�����Ｐ����Ʒ�ȡ� <br />
                          11����װ���ף�����Σ������ȫ����Ⱦ������������ĵݼ����豸����Ʒ�ȡ� <br />
                          12�����Ĵ������������ֹ�ĵݽ��ڵ���Ʒ�ȡ� <br />
                          13��������ֹ�ĵݵ���Ʒ�� <br />
                      <br />
  <strong>����</strong><strong>EMS</strong><strong>��ֹ�ĵݵ���Ʒ</strong> <br />
                          1�����ҷ��ɷ����ֹ��ͨ���߼ĵݵ���Ʒ�� <br />
                          2����ը�ԡ���ȼ�ԡ���ʴ�ԡ������ԺͶ��Ե�Σ����Ʒ�� <br />
                          3�������������鼮�����ڻ���������Ʒ�� <br />
                          4�����ֻ��ң� <br />
                          5������������������Ʒ�� <br />
                          6�����׸��õ���Ʒ�� <br />
                          7����Ķ����װ��ȷ���ĵݺ͹�����Ա��ȫ���۷䡢�ϡ�ˮ�γ��⣩�� <br />
                          8����װ���ף�����Σ������ȫ����Ⱦ����������ʼ��豸����Ʒ�� <br />
                          9���������ʺ��ʵ���������Ʒ�� </p>
                        <p align="left"><strong><br />
                        �ġ�</strong><strong> </strong><strong>������������Ʒ</strong> <br />
                          ��һ����ݽ���Ʒ�� <br />
                          1�����Թ����ֵ���м�֤ȯ���׶�ʧ�Ĺ�����Ʒ���磺������������������ա����֤�����֤��ִ�ա�˽��֤������Ʊ����Ʊ��������������ң��ֽ𣩡���������������Ρ��ֻ��� <br />
                          2����ȼ�ױ�����ʴ�ԡ����ԡ�ǿ����Ժͷ����Եĸ���Σ��Ʒ���磺����׹ܡ���ҩ���������͡����͡�ú�͡��ƾ���Һ��͹��壩�����ᡢ���ᡢ���ᡢ�л��ܼ���ũҩ���������뻯ѧ��ҵ���������ġ���ѧΣ��Ʒʵ���ֲᡱ�еĻ�����Ʒ�� <br />
                          3���������Զ�ҩ������ҩ��;�����Ʒ���磺��˪��ѻƬ����ȡ��ɿ��򡢺���Ӣ������ȡ� <br />
                          4�����ҷ����ֹ��ͨ����˵���Ʒ���磺�����������ҩ�����������ȡ� <br />
                          5�����з�������������˷绯���ݵı����鼮��ͼƬ������Ʒ��������Ʒ���������̣�VCD��DVD��LD������������̼����̵ȡ� <br />
                          6���������������ģ���ʬ�ǣ������ѷٵ�ʬ�ǣ���δ�����Ƶ���Ƥ��δ��ҩ�Ƶ��޹ǵȡ� <br />
                          7�����ֲ���Լ����ǵı걾�� <br />
                          8�����Ա��ϳɷֵİ�ɫ��ĩ�� <br />
                          9��˽���ź��ȡ� <br />
                          ���������ս���Ʒ�� <br />
                          1����в���շ��а�ȫ����Ʒ��ָ�ں��������У��������Ե�Σ������������ȫ��ԲƲ�����𺦵���Ʒ�����ʡ���Ҫ�����¼��ࣺ <br />
                          A. ��ըƷ�����̻����������ŵȣ� <br />
                          B. ���壺��ѹ�����塢�ɱ��������������Ͳ(���ŷ�װ�ã������ٳ�����)��������(���Զ����͵�)�ȣ� <br />
                          C. ��ȼҺ�壺�����ᡢ���͡��ƾ��ࡢ���͡������͡���������Һ���ɽ��͡�����ˮ����ˮ����ˮ�ȣ� <br />
                          D. ��ȼ���壺��ȼ���ʣ���ˮ�ͷ���ȼ��������ʣ������̼���ѷۡ�Ҭ��ɡ�������Ʒ������м����ȫ���(�в��Ļ�Ƭ����)������İ��ס�����Ļ��ס�þ�۵ȣ� <br />
                          E. ���������л���������������أ� <br />
                          F. ���Ժʹ�Ⱦ����Ʒ����ũҩ��﮵�ء����ᵯ�ȣ� <br />
                          G. ���������ʣ� <br />
                          H. ��ʴƷ�������ء����Եĵ��Һ�� <br />
                          I. δ�����ŷ�����װ�Ĵ������ŸֵȺ�ǿ�ŵ���Ʒ�� <br />
                          2���κ�ҩƷ�� <br />
                      3���������ս���Ʒ���磺��ĩ״��Ʒ (���ۺ�����ɫ) ��Һ�壨����ʹ�ú��ְ�װ�������װ��Σ�ձ�־�Ļ�Ʒ��û�й������������֤����������Ʒ����CD��VCD�������ߡ�����������������漰���������͡�ǹ֧��������κλ�Ʒ������ߣ��ȡ� </p>
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