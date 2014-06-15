<!--
var w3c = (document.getElementById) ? true : false; 
var agt = navigator.userAgent.toLowerCase(); 
var ie = ((agt.indexOf("msie") != -1) && (agt.indexOf("opera") == -1) && (agt.indexOf("omniweb") == -1)); 
var mymovey = new Number(); 
function IeTrueBody(){ 
	return (document.compatMode && document.compatMode!="BackCompat") ? document.documentElement : document.body;
 } 
function GetScrollTop(){ 
	return ie ? IeTrueBody().scrollTop : window.pageYOffset; 
} 
function heartBeat(){ 
	diffY=GetScrollTop(); 
	mymovey += Math.floor((diffY-document.getElementById('backi').style.top.replace("px","")+150)*0.1+3); 
	document.getElementById('backi').style.top = mymovey+"px"; 
	} 
	
function close_float_left(){document.getElementById('backi').style.visibility='hidden';}

function WriteQqStr()
{
	document.write('<DIV id=backi style="RIGHT:20px; OVERFLOW: visible; POSITION: absolute;TOP:200px;border:1px solid #ddd;">');
	document.write('<table border="0" cellpadding="0" cellspacing="0" width="55">');
	document.write("<tr><td align=center><img src=\"/images/qqkefu/zxkf_title.gif\"></td></tr>");
	document.write("<tr><td align=center><br><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=291793194&site=qq&menu=yes\" ><IMG src=\"/images/qqkefu/zxkf_qq.gif\" border=0></a></td></tr>");
	document.write("<tr><td align=center><br><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=111111&site=qq&menu=yes\" ><IMG src=\"/images/qqkefu/zxkf_qq.gif\" border=0></a></td></tr>");
	document.write("<tr><td align=center><br><a target=\"_blank\" href=\"http://qun.qq.com/#jointhegroup/gid/111111\"><IMG src=\"/images/qqkefu/zxkf_sh.gif\" border=0></a><br><br></td></tr>");
	document.write('</table>');
	document.write('</DIV>');
}

WriteQqStr();
window.setInterval("heartBeat()",1); 
//-->
