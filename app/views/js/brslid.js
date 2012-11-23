var _imgwid=730;
var _num = 0;
var _idxPhoTmOut=null;
$(document).ready(function(){
    _num = $("#banner ul:eq(0) li").length;
    if(_num<2) return;
    $("#banner ul:eq(0)").css("width",(_imgwid*_num)+"px");
    $("#banner ul:eq(0)").css("overflow","hidden");
    
    var str="";
    for(var i=1;i<=_num;i++)
    {
        if(i==1)
            str+="<li class=\"sel\">"+i+"</li>";
        else
            str+="<li>"+i+"</li>";
    }
    $("#numbar").html("<ul>"+str+"</ul>");
    
    $("#numbar li").each(function(index){
        $(this).bind("mouseover",function(){goBanner(index);});
    });
    var sBrowser1 = detect();
    if(sBrowser1=="IE"&&$.browser.version=="6.0")
    {
        $("#numbar").css("left",(_imgwid-_num*20-5)+"px");
    }
    
    $("#banner").bind("mouseover",function(){clearInterval(_idxPhoTmOut);});
    $("#banner").bind("mouseout",function(){_idxPhoTmOut = setInterval("AutoPlay()",4000);});
    
    _idxPhoTmOut = setInterval("AutoPlay()",4000);
});
var _imgidx=0;
function goBanner(idx)
{
   $("#banner ul:eq(0) li").hide();
   $("#banner ul:eq(0) li:eq("+idx+")").fadeIn(500);
   
   $("#numbar li").attr("class","");
   $("#numbar li:eq("+idx+")").attr("class","sel");
   
   _imgidx = idx;
}
function AutoPlay()
{
    _imgidx++;
    if(_imgidx>=_num) _imgidx=0;
    goBanner(_imgidx);
}
function detect(){
    if($.browser.msie)
        return "IE";
    if($.browser.mozilla)
        return "Mozilla";
    if($.browser.safari)
        return "Safari";
    if($.browser.opera)
        return "Opera";
}