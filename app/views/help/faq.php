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
                        <li class="sel"><a href="faq.html">��������</a></li>
                        <li><a href="howto.html">���ٲ���ָ��</a></li>
                        <li><a href="pay.html">����</a></li>
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
                    <div class="posi">������λ�ã�<a href="index.html">ε����</a> > ����֧�� > ��������</div>
                </div>
                <div id="tipzoom">
                    <div class="item">
                        <div class="q_n">�ʣ������յ�����İ�����֪ͨ����</div>
                        <div class="a_n">�𣺻�ġ�ÿ���������ǲֿ�İ������������ʼ��ķ�ʽ����������������Ա�����ʱ���ύ�˵���</div>
                    </div>
                    <div class="item">
                        <div class="q_n">�ʣ��ں�����վ�µ���ʱ�� �����ȷ��д�������ջ���ַ�� </div>
                        <div class="a_n">����ע���Ժ󶼿����ڸ��������Ϸ�����2��������ַ����ѡ��һ�����ʵİ������и�ʽ׼ȷ����ճ�����ɡ�
                          <br />
                          NAME: ���Ӣ�������������ĺ���ƴ�� 
                          <br />
                          Address1��671 Brea Canyon Road, Ste. 3��
                          <br />
                          # (����ʺ�) 
                          <br />
                          City: Walnut, 
                          <br />
                          ZIPCODE: California.91789 
                          <br />
                      TEL:626-964 1958</div>
                    </div>
                    <div class="item">
                        <div class="q_n">�ʣ�������վҪ����д���ÿ����˵���ַ����Ӧ�������д��</div>
                        <div class="a_n">���м��ְ취��һ�־�����ƴ����д�����ÿ����й��˵���ַ��
                          <br />
                          �� ����һ��PayPal�˺ţ����������վ��֧��PayPal������㰲ȫ
                          <br />
                      �� ʹ�����ǵ�BuyForMe����</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ��������ݺ���˰���ջ���ַ��ʲô����</div>
                        <div class="a_n">������������ɼ������˰Ϊ8.75%���������յ������в�𣩣�<br />
                          ��˰��û������˰��
��Щ��վ�ṩ������˰�����ݣ�Ʃ��Amazon,Drugstore,6pm,Zappos ����վ�������ʵ�ڲ�ȷ���ĸ���ַ������˰����������д���ݵ�ַ�����������ǰ��ʾ��˰���ٻع�ͷʹ����˰�ݵ�ַ����
                            <br />
                          ���а�������˰�ݲֿ�ת�˵����ݲֿ⣬��Ҫ����ÿ�� $1�������������ת�˷ѡ�ת��ʱ��Ϊ3�����������ҡ�
��˰���ռ���ԭ���ϵ��ռ��ᷢ�����ݣ�һ�����������Ϳ������ҵ��˻��￴����˰�ݲֿⷢ����¼��<br />
������ȵ����ݲֿ��յ�������ʾ���󷽿�������������ָ����������ʾ����������ɼ�ʱ�䵱����6��ǰ��ɡ�</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ�Ϊʲô��ʱ�����ǵĵ���������UPS, FEDEX�Ȼ��˹�˾��ʾ�в�ͬ��</div>
                        <div class="a_n">�𣺺ܶ๺����վ��ʾ�������ǲ����������װ���������������ģ���UPS�Ȼ��˹�˾������ʾ��վ����ʱ��������¼������һ������ʵ������������������������ʵ������Ϊ׼��
                          <br />
                      ����������ݲֿⶼ����һ���أ�������ȷ��С�����2λ�����а�����ַ��������Ǻ˶�����Ϊ׼��</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ���������ڶ��������վ���й���ܷ�һ���˻����أ�</div>
                        <div class="a_n">�𣺿��Եġ������ṩ30����Ѳִ��ڣ�������ͬʱ�ڶ��������վ�µ����Ȼ���ȫ��������ݲֿ��ѡ�񡰺ϲ����ء���ֵ�������ǻὫ������������кϲ����˻ع����ջ���ַ��</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ�ʲôʱ���ֵ�˷ѣ����ٳ�ֵ�˷ѽ��Ϊ���٣�</div>
                        <div class="a_n">�𣺳�ֵ�˷ѿ��ڰ���������ݲֿ���ύ�˵�ǰ����ʵ�ʽ���ֵ��
��ֵ�˷ѵĽ�������ϵͳ�����������޷��ύ�˵���<br />
������������ͽ�����κ����ʣ���Ҫ��������ֵ���񣬽������ȳ�ֵϵͳ�������ڲ�����ɷ���ǰ�Ḵ�ư����������˷ѽ����ڴ����˻��������˻���</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ�����ϵͳ�ύ�˵��󣬶�ÿ������й��յ�������</div>
                        <div class="a_n">����������Ӱ�������£���һ�����5-7���������յ����ں�����վ��������Ʒ��</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ��ҿ��Բ�ѯ�ҵİ������͵�״̬��</div>
                        <div class="a_n">�𣺿��ԡ�����һ�����������ǻ��ṩ��һ�����ʿ���˵����ٺţ������Ը��ݴ��˵���ϵͳ��ȫ��׷�����İ����������顣
</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ����������ǰ���ʲô��λ����ģ� </div>
                        <div class="a_n">�𣺰��գ�����������ģ� 1 KG= 2.2 �� ������1���İ�1���Ʒѣ���֧��0.1��Ĩ�㡣Ʃ��1.11�����ϰ�2���շ�,1.1����1���շѡ�</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ�ʲô��ʵ��������������������������μ���ģ�</div>
                        <div class="a_n">��ʵ������ָ����ʵ�ʳ��������������ָ���հ�������ռ��������������ԭ���ϲ�����������������ر��Ӵ�����������Ʒ�Ż���ȡ���������ڹ�����Ʒǰ������Ʒ˵������������<br />
                          �������ڵ������ڿ����鿴����������������ʾ�����ǲ���ȡ���������
����������㹫ʽ�ǣ�����Ӣ�磩x��Ӣ�磩x �ߣ�Ӣ�磩/ 166 = �� ������</div>
                    </div>
					<div class="item">
                        <div class="q_n">�ʣ����������˰���֧����</div>
                        <div class="a_n">�����������нɸ�Ҳ���Գ�ֵ��ί�����Ǵ�����</div>
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