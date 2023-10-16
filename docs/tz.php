
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>雅黑PHP探针[简体版]v0.4.7</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Powered by: Yahei.Net -->

<style type="text/css">
<!--
* {font-family: "Microsoft Yahei",Tahoma, Arial; }
body{text-align: center; margin: 0 auto; padding: 0; background-color:#fafafa;font-size:12px;font-family:Tahoma, Arial}
h1 {font-size: 26px; padding: 0; margin: 0; color: #333333; font-family: "Lucida Sans Unicode","Lucida Grande",sans-serif;}
h1 small {font-size: 11px; font-family: Tahoma; font-weight: bold; }
a{color: #666; text-decoration:none;}
a.black{color: #000000; text-decoration:none;}
table{width:100%;clear:both;padding: 0; margin: 0 0 10px;border-collapse:collapse; border-spacing: 0;
box-shadow: 1px 1px 1px #CCC;
-moz-box-shadow: 1px 1px 1px #CCC;
-webkit-box-shadow: 1px 1px 1px #CCC;
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=2, Direction=135, Color='#CCCCCC')";}
th{padding: 3px 6px; font-weight:bold;background:#dedede;color:#626262;border:1px solid #cccccc; text-align:left;}
tr{padding: 0; background:#FFFFFF;}
td{padding: 3px 6px; border:1px solid #CCCCCC;}
.w_logo{height:25px;text-align:center;color:#333;FONT-SIZE: 15px; width:13%; }
.w_top{height:25px;text-align:center; width:8.7%;}
.w_top:hover{background:#dadada;}
.w_foot{height:25px;text-align:center; background:#dedede;}
input{padding: 2px; background: #FFFFFF; border-top:1px solid #666666; border-left:1px solid #666666; border-right:1px solid #CCCCCC; border-bottom:1px solid #CCCCCC; font-size:12px}
input.btn{font-weight: bold; height: 20px; line-height: 20px; padding: 0 6px; color:#666666; background: #f2f2f2; border:1px solid #999;font-size:12px}
.bar {border:1px solid #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px; overflow: hidden;}
.bar_1 {border:1px dotted #999999; background:#FFFFFF; height:5px; font-size:2px; width:89%; margin:2px 0 5px 0;padding:1px; overflow: hidden;}
.barli_red{background:#ff6600; height:5px; margin:0px; padding:0;}
.barli_blue{background:#0099FF; height:5px; margin:0px; padding:0;}
.barli_green{background:#36b52a; height:5px; margin:0px; padding:0;}
.barli_black{background:#333; height:5px; margin:0px; padding:0;}
.barli_1{background:#999999; height:5px; margin:0px; padding:0;}
.barli{background:#36b52a; height:5px; margin:0px; padding:0;}
#page {width: 960px; padding: 0 auto; margin: 0 auto; text-align: left;}
#header{position:relative; padding:5px;}
.w_small{font-family: Courier New;}
.w_number{color: #f800fe;}
.sudu {padding: 0; background:#5dafd1; }
.suduk { margin:0px; padding:0;}
.resYes{}
.resNo{color: #FF0000;}
.word{word-break:break-all;}
-->
</style>

<script language="JavaScript" type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript"> 

<!--

$(document).ready(function(){getJSONData();});
var OutSpeed2=0;
var OutSpeed3=0;
var OutSpeed4=0;
var OutSpeed5=0;
var InputSpeed2=0;
var InputSpeed3=0;
var InputSpeed4=0;
var InputSpeed5=0;

function getJSONData()

{

	setTimeout("getJSONData()", 1000);

	$.getJSON('?act=rt&callback=?', displayData);

}
function ForDight(Dight,How)
{ 
  if (Dight<0){
  	var Last=0+"B/s";
  }else if (Dight<1024){
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"B/s";
  }else if (Dight<1048576){
  	Dight=Dight/1024;
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"K/s";
  }else{
  	Dight=Dight/1048576;
  	var Last=Math.round(Dight*Math.pow(10,How))/Math.pow(10,How)+"M/s";
  }
	return Last; 
}

function displayData(dataJSON)

{
	$("#useSpace").html(dataJSON.useSpace);

	$("#freeSpace").html(dataJSON.freeSpace);
	$("#hdPercent").html(dataJSON.hdPercent);
	$("#barhdPercent").width(dataJSON.barhdPercent);

	$("#TotalMemory").html(dataJSON.TotalMemory);

	$("#UsedMemory").html(dataJSON.UsedMemory);

	$("#FreeMemory").html(dataJSON.FreeMemory);

	$("#CachedMemory").html(dataJSON.CachedMemory);
	$("#Buffers").html(dataJSON.Buffers);

	$("#TotalSwap").html(dataJSON.TotalSwap);

	$("#swapUsed").html(dataJSON.swapUsed);

	$("#swapFree").html(dataJSON.swapFree);

	$("#swapPercent").html(dataJSON.swapPercent);

	$("#loadAvg").html(dataJSON.loadAvg);

	$("#uptime").html(dataJSON.uptime);

	$("#freetime").html(dataJSON.freetime);

	$("#stime").html(dataJSON.stime);

	$("#bjtime").html(dataJSON.bjtime);

	$("#memRealUsed").html(dataJSON.memRealUsed);
	$("#memRealFree").html(dataJSON.memRealFree);
	$("#memRealPercent").html(dataJSON.memRealPercent);

	$("#memPercent").html(dataJSON.memPercent);
	$("#barmemPercent").width(dataJSON.memPercent);

	$("#barmemRealPercent").width(dataJSON.barmemRealPercent);
	$("#memCachedPercent").html(dataJSON.memCachedPercent);
	$("#barmemCachedPercent").width(dataJSON.barmemCachedPercent);

	$("#barswapPercent").width(dataJSON.barswapPercent);

	$("#NetOut2").html(dataJSON.NetOut2);

	$("#NetOut3").html(dataJSON.NetOut3);

	$("#NetOut4").html(dataJSON.NetOut4);

	$("#NetOut5").html(dataJSON.NetOut5);

	$("#NetOut6").html(dataJSON.NetOut6);

	$("#NetOut7").html(dataJSON.NetOut7);

	$("#NetOut8").html(dataJSON.NetOut8);

	$("#NetOut9").html(dataJSON.NetOut9);

	$("#NetOut10").html(dataJSON.NetOut10);
	$("#NetInput2").html(dataJSON.NetInput2);
	$("#NetInput3").html(dataJSON.NetInput3);
	$("#NetInput4").html(dataJSON.NetInput4);
	$("#NetInput5").html(dataJSON.NetInput5);
	$("#NetInput6").html(dataJSON.NetInput6);
	$("#NetInput7").html(dataJSON.NetInput7);
	$("#NetInput8").html(dataJSON.NetInput8);
	$("#NetInput9").html(dataJSON.NetInput9);
	$("#NetInput10").html(dataJSON.NetInput10);	
	$("#NetOutSpeed2").html(ForDight((dataJSON.NetOutSpeed2-OutSpeed2),3));	OutSpeed2=dataJSON.NetOutSpeed2;
	$("#NetOutSpeed3").html(ForDight((dataJSON.NetOutSpeed3-OutSpeed3),3));	OutSpeed3=dataJSON.NetOutSpeed3;
	$("#NetOutSpeed4").html(ForDight((dataJSON.NetOutSpeed4-OutSpeed4),3));	OutSpeed4=dataJSON.NetOutSpeed4;
	$("#NetOutSpeed5").html(ForDight((dataJSON.NetOutSpeed5-OutSpeed5),3));	OutSpeed5=dataJSON.NetOutSpeed5;
	$("#NetInputSpeed2").html(ForDight((dataJSON.NetInputSpeed2-InputSpeed2),3));	InputSpeed2=dataJSON.NetInputSpeed2;
	$("#NetInputSpeed3").html(ForDight((dataJSON.NetInputSpeed3-InputSpeed3),3));	InputSpeed3=dataJSON.NetInputSpeed3;
	$("#NetInputSpeed4").html(ForDight((dataJSON.NetInputSpeed4-InputSpeed4),3));	InputSpeed4=dataJSON.NetInputSpeed4;
	$("#NetInputSpeed5").html(ForDight((dataJSON.NetInputSpeed5-InputSpeed5),3));	InputSpeed5=dataJSON.NetInputSpeed5;

}

-->

</script>

</head>

<body>
<a name="w_top"></a>

<div id="page">

	
	<table>
		<tr>
			<th class="w_logo">雅黑PHP探针</th>
			<th class="w_top"><a href="#w_php">PHP参数</a></th>
			<th class="w_top"><a href="#w_module">组件支持</a></th>
			<th class="w_top"><a href="#w_module_other">第三方组件</a></th>
			<th class="w_top"><a href="#w_db">数据库支持</a></th>
			<th class="w_top"><a href="#w_performance">性能检测</a></th>
			<th class="w_top"><a href="#w_networkspeed">网速检测</a></th>
			<th class="w_top"><a href="#w_MySQL">MySQL检测</a></th>
			<th class="w_top"><a href="#w_function">函数检测</a></th>
			<th class="w_top"><a href="#w_mail">邮件检测</a></th>
			<th class="w_top"><a href="http://www.yahei.net/tz/tz.zip">探针下载</a></th>
		</tr>
	</table>



<!--服务器相关参数-->

<table>

  <tr><th colspan="4">服务器参数</th></tr>

  <tr>

    <td>服务器域名/IP地址</td>

    <td colspan="3">admin - x.aqde.net(192.168.1.6)&nbsp;&nbsp;你的IP地址是：111.39.38.46</td>

  </tr>

  <tr>

    <td>服务器标识</td>

    <td colspan="3">Linux nas 3.10.35 #1 SMP Sun Jul 17 16:02:22 CEST 2016 x86_64</td>

  </tr>

  <tr>

    <td width="13%">服务器操作系统</td>

    <td width="37%">Linux &nbsp;内核版本：3.10.35</td>

    <td width="13%">服务器解译引擎</td>

    <td width="37%">Apache</td>

  </tr>

  <tr>

    <td>服务器语言</td>

    <td></td>

    <td>服务器端口</td>

    <td>9</td>

  </tr>

  <tr>

	  <td>服务器主机名</td>

	  <td>nas</td>

	  <td>绝对路径</td>

	  <td>/var/services/web</td>

	</tr>

  <tr>

	  <td>管理员邮箱</td>

	  <td>admin</td>

		<td>探针路径</td>

		<td>/volume1/web/tz.php</td>

	</tr>	

</table>









<table width="100%" cellpadding="3" cellspacing="0" align="center">

  <tr>

    <th colspan="4">PHP已编译模块检测</th>

  </tr>

  <tr>

    <td colspan="4"><span class="w_small">

Core&nbsp;&nbsp;date&nbsp;&nbsp;ereg&nbsp;&nbsp;libxml&nbsp;&nbsp;pcre&nbsp;&nbsp;filter&nbsp;&nbsp;hash&nbsp;&nbsp;pcntl&nbsp;&nbsp;readline&nbsp;&nbsp;Reflection&nbsp;&nbsp;SPL&nbsp;&nbsp;session&nbsp;&nbsp;cgi-fcgi&nbsp;&nbsp;<br />ctype&nbsp;&nbsp;dom&nbsp;&nbsp;json&nbsp;&nbsp;mbstring&nbsp;&nbsp;PDO&nbsp;&nbsp;standard&nbsp;&nbsp;SimpleXML&nbsp;&nbsp;tokenizer&nbsp;&nbsp;xml&nbsp;&nbsp;xmlreader&nbsp;&nbsp;xmlwriter&nbsp;&nbsp;syno_compiler&nbsp;&nbsp;posix&nbsp;&nbsp;<br />bz2&nbsp;&nbsp;exif&nbsp;&nbsp;gd&nbsp;&nbsp;iconv&nbsp;&nbsp;pdo_pgsql&nbsp;&nbsp;pgsql&nbsp;&nbsp;zip&nbsp;&nbsp;calendar&nbsp;&nbsp;fileinfo&nbsp;&nbsp;openssl&nbsp;&nbsp;zlib&nbsp;&nbsp;pdo_sqlite&nbsp;&nbsp;curl&nbsp;&nbsp;<br />mapi&nbsp;&nbsp;apcu&nbsp;&nbsp;bcmath&nbsp;&nbsp;dba&nbsp;&nbsp;ftp&nbsp;&nbsp;gettext&nbsp;&nbsp;imap&nbsp;&nbsp;intl&nbsp;&nbsp;mcrypt&nbsp;&nbsp;shmop&nbsp;&nbsp;soap&nbsp;&nbsp;sockets&nbsp;&nbsp;sqlite3&nbsp;&nbsp;<br />ssh2&nbsp;&nbsp;wddx&nbsp;&nbsp;xmlrpc&nbsp;&nbsp;mysqlnd&nbsp;&nbsp;mysql&nbsp;&nbsp;mysqli&nbsp;&nbsp;pdo_mysql&nbsp;&nbsp;mhash&nbsp;&nbsp;apc&nbsp;&nbsp;Zend OPcache&nbsp;&nbsp;</span>

    </td>

  </tr>

</table>

<a name="w_php"></a>

<table>

  <tr><th colspan="4">PHP相关参数</th></tr>

  <tr>

    <td width="32%">PHP信息（phpinfo）：</td>

    <td width="18%">

		
    <a href='/tz.php?act=phpinfo' target='_blank'>PHPINFO</a>
    </td>

    <td width="32%">PHP版本（php_version）：</td>

    <td width="18%">5.5.33</td>

  </tr>

  <tr>

    <td>PHP运行方式：</td>

    <td>FPM-FCGI</td>

    <td>脚本占用最大内存（memory_limit）：</td>

    <td>128M</td>

  </tr>

  <tr>

    <td>PHP安全模式（safe_mode）：</td>

    <td><font color="red">×</font></td>

    <td>POST方法提交最大限制（post_max_size）：</td>

    <td>32M</td>

  </tr>

  <tr>

    <td>上传文件最大限制（upload_max_filesize）：</td>

    <td>32M</td>

    <td>浮点型数据显示的有效位数（precision）：</td>

    <td>14</td>

  </tr>

  <tr>

    <td>脚本超时时间（max_execution_time）：</td>

    <td>240秒</td>

    <td>socket超时时间（default_socket_timeout）：</td>

    <td>60秒</td>

  </tr>

  <tr>

    <td>PHP页面根目录（doc_root）：</td>

    <td><font color="red">×</font></td>

    <td>用户根目录（user_dir）：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>dl()函数（enable_dl）：</td>

    <td><font color="red">×</font></td>

    <td>指定包含文件目录（include_path）：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>显示错误信息（display_errors）：</td>

    <td><font color="green">√</font></td>

    <td>自定义全局变量（register_globals）：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>数据反斜杠转义（magic_quotes_gpc）：</td>

    <td><font color="red">×</font></td>

    <td>"&lt;?...?&gt;"短标签（short_open_tag）：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>"&lt;% %&gt;"ASP风格标记（asp_tags）：</td>

    <td><font color="red">×</font></td>

    <td>忽略重复错误信息（ignore_repeated_errors）：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>忽略重复的错误源（ignore_repeated_source）：</td>

    <td><font color="red">×</font></td>

    <td>报告内存泄漏（report_memleaks）：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>自动字符串转义（magic_quotes_gpc）：</td>

    <td><font color="red">×</font></td>

    <td>外部字符串自动转义（magic_quotes_runtime）：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>打开远程文件（allow_url_fopen）：</td>

    <td><font color="green">√</font></td>

    <td>声明argv和argc变量（register_argc_argv）：</td>

    <td><font color="red">×</font></td>

  </tr>
  <tr>
    <td>Cookie 支持：</td>
    <td><font color="green">√</font></td>
    <td>拼写检查（ASpell Library）：</td>
    <td><font color="red">×</font></td>
  </tr>
   <tr>
    <td>高精度数学运算（BCMath）：</td>
    <td><font color="green">√</font></td>
    <td>PREL相容语法（PCRE）：</td>
    <td><font color="green">√</font></td>
   <tr>
    <td>PDF文档支持：</td>
    <td><font color="red">×</font></td>
    <td>SNMP网络管理协议：</td>
    <td><font color="red">×</font></td>
  </tr> 
   <tr>
    <td>VMailMgr邮件处理：</td>
    <td><font color="red">×</font></td>
    <td>Curl支持：</td>
    <td><font color="green">√</font></td>
  </tr> 
   <tr>
    <td>SMTP支持：</td>
    <td><font color="red">×</font></td>
    <td>SMTP地址：</td>
    <td><font color="red">×</font></td>
  </tr> 

	<tr>
		<td>默认支持函数（enable_functions）：</td>
		<td colspan="3"><a href='/tz.php?act=Function' target='_blank' class='static'>请点这里查看详细！</a></td>		
	</tr>
	<tr>
		<td>被禁用的函数（disable_functions）：</td>
		<td colspan="3" class="word">
<font color=red>×</font>		</td>
	</tr>

</table>

<a name="w_module"></a>

<!--组件信息-->

<table>

  <tr><th colspan="4" >组件支持</th></tr>

  <tr>

    <td width="32%">FTP支持：</td>

    <td width="18%"><font color="green">√</font></td>

    <td width="32%">XML解析支持：</td>

    <td width="18%"><font color="green">√</font></td>

  </tr>

  <tr>

    <td>Session支持：</td>

    <td><font color="green">√</font></td>

    <td>Socket支持：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>Calendar支持</td>

    <td><font color="green">√</font>	</td>

    <td>允许URL打开文件：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>GD库支持：</td>

    <td>

    bundled (2.1.0 compatible)</td>

    <td>压缩文件支持(Zlib)：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>IMAP电子邮件系统函数库：</td>

    <td><font color="green">√</font></td>

    <td>历法运算函数库：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>正则表达式函数库：</td>

    <td><font color="green">√</font></td>

    <td>WDDX支持：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>Iconv编码转换：</td>

    <td><font color="green">√</font></td>

    <td>mbstring：</td>

    <td><font color="green">√</font></td>

  </tr>

  <tr>

    <td>高精度数学运算：</td>

    <td><font color="green">√</font></td>

    <td>LDAP目录协议：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>MCrypt加密处理：</td>

    <td><font color="green">√</font></td>

    <td>哈稀计算：</td>

    <td><font color="green">√</font></td>

  </tr>

</table>

<a name="w_module_other"></a>
<!--第三方组件信息-->
<table>
  <tr><th colspan="4" >第三方组件</th></tr>
  <tr>
    <td width="32%">Zend版本</td>
    <td width="18%">2.5.0</td>
    <td width="32%">
ZendGuardLoader[启用]	</td>
    <td width="18%"><font color=red>×</font></td>
  </tr>
  <tr>
    <td>eAccelerator</td>
    <td><font color=red>×</font></td>
    <td>ioncube</td>
    <td><font color=red>×</font></td>
  </tr>
  <tr>
    <td>XCache</td>
    <td><font color=red>×</font></td>
    <td>APC</td>
    <td>4.0.6</td>
  </tr>
</table>

<a name="w_db"></a>

<!--数据库支持-->

<table>

  <tr><th colspan="4">数据库支持</th></tr>

  <tr>

    <td width="32%">MySQL 数据库：</td>

    <td width="18%"><font color="green">√</font>
    &nbsp; mysql_server 版本：5.5.47-MariaDB
	</td>

    <td width="32%">ODBC 数据库：</td>

    <td width="18%"><font color="red">×</font></td>

  </tr>

  <tr>

    <td>Oracle 数据库：</td>

    <td><font color="red">×</font></td>

    <td>SQL Server 数据库：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>dBASE 数据库：</td>

    <td><font color="red">×</font></td>

    <td>mSQL 数据库：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>SQLite 数据库：</td>

    <td><font color=green>√</font>　SQLite3　Ver 3.8.10.2</td>

    <td>Hyperwave 数据库：</td>

    <td><font color="red">×</font></td>

  </tr>

  <tr>

    <td>Postgre SQL 数据库：</td>

    <td><font color="green">√</font></td>

    <td>Informix 数据库：</td>

    <td><font color="red">×</font></td>

  </tr>
  <tr>
    <td>DBA 数据库：</td>
    <td><font color="green">√</font></td>
    <td>DBM 数据库：</td>
    <td><font color="red">×</font></td>
  </tr>    
  <tr>
    <td>FilePro 数据库：</td>
    <td><font color="red">×</font></td>
    <td>SyBase 数据库：</td>
    <td><font color="red">×</font></td>
  </tr> 

</table>

<a name="w_performance"></a><a name="bottom"></a>

<form action="/tz.php#bottom" method="post">

<!--服务器性能检测-->

<table>

  <tr><th colspan="5">服务器性能检测</th></tr>

  <tr align="center">

    <td width="19%">参照对象</td>

    <td width="17%">整数运算能力检测<br />(1+1运算300万次)</td>

    <td width="17%">浮点运算能力检测<br />(圆周率开平方300万次)</td>

    <td width="17%">数据I/O能力检测<br />(读取10K文件1万次)</td>

    <td width="30%">CPU信息</td>

  </tr>
  <tr align="center">
    <td align="left">美国 LinodeVPS</td>
    <td>0.357秒</td>
    <td>0.802秒</td>
    <td>0.023秒</td>
    <td align="left">4 x Xeon L5520 @ 2.27GHz</td>
  </tr> 

  <tr align="center">

    <td align="left">美国 PhotonVPS.com</td>

    <td>0.431秒</td>

    <td>1.024秒</td>

    <td>0.034秒</td>

    <td align="left">8 x Xeon E5520 @ 2.27GHz</td>

  </tr>

  <tr align="center">

    <td align="left">德国 SpaceRich.com</td>

    <td>0.421秒</td>

    <td>1.003秒</td>

    <td>0.038秒</td>

    <td align="left">4 x Core i7 920 @ 2.67GHz</td>

  </tr>

  <tr align="center">

    <td align="left">美国 RiZie.com</td>

    <td>0.521秒</td>

    <td>1.559秒</td>

    <td>0.054秒</td>

    <td align="left">2 x Pentium4 3.00GHz</td>

  </tr>

  <tr align="center">

    <td align="left">埃及 CitynetHost.com</a></td>

    <td>0.343秒</td>

    <td>0.761秒</td>

    <td>0.023秒</td>

    <td align="left">2 x Core2Duo E4600 @ 2.40GHz</td>

  </tr>

  <tr align="center">

    <td align="left">美国 IXwebhosting.com</td>

    <td>0.535秒</td>

    <td>1.607秒</td>

    <td>0.058秒</td>

    <td align="left">4 x Xeon E5530 @ 2.40GHz</td>

  </tr>

  <tr align="center">

    <td>本台服务器</td>

    <td>未测试<br /><input class="btn" name="act" type="submit" value="整型测试" /></td>

    <td>未测试<br /><input class="btn" name="act" type="submit" value="浮点测试" /></td>

    <td>未测试<br /><input class="btn" name="act" type="submit" value="IO测试" /></td>

    <td></td>

  </tr>

</table>

<input type="hidden" name="pInt" value="未测试" />

<input type="hidden" name="pFloat" value="未测试" />

<input type="hidden" name="pIo" value="未测试" />

<a name="w_networkspeed"></a>
<!--网络速度测试-->
<table>
	<tr><th colspan="3">网络速度测试</th></tr>
  <tr>
    <td width="19%" align="center"><input name="act" type="submit" class="btn" value="开始测试" />
        <br />
	向客户端传送1000k字节数据<br />
	带宽比例按理想值计算
	</td>
    <td width="81%" align="center" >

  <table align="center" width="550" border="0" cellspacing="0" cellpadding="0" >
    <tr >
    <td height="15" width="50">带宽</td>
	<td height="15" width="50">1M</td>
    <td height="15" width="50">2M</td>
    <td height="15" width="50">3M</td>
    <td height="15" width="50">4M</td>
    <td height="15" width="50">5M</td>
    <td height="15" width="50">6M</td>
    <td height="15" width="50">7M</td>
    <td height="15" width="50">8M</td>
    <td height="15" width="50">9M</td>
    <td height="15" width="50">10M</td>
    </tr>
   <tr>
    <td colspan="11" class="suduk" ><table align="center" width="550" border="0" cellspacing="0" cellpadding="0" height="8" class="suduk">
    <tr>
      <td class="sudu"  width="0"></td>
      <td class="suduk" width="550"></td>
    </tr>
    </table>
   </td>
  </tr>
  </table>
  <font color='#cc0000'>&nbsp;未探测&nbsp;</font>
    </td>
  </tr>
</table>

<a name="w_MySQL"></a>

<!--MySQL数据库连接检测-->

<table>

	<tr><th colspan="3">MySQL数据库连接检测</th></tr>

  <tr>

    <td width="15%"></td>

    <td width="60%">

      地址：<input type="text" name="host" value="localhost" size="10" />

      端口：<input type="text" name="port" value="3306" size="10" />

      用户名：<input type="text" name="login" size="10" />

      密码：<input type="password" name="password" size="10" />

    </td>

    <td width="25%">

      <input class="btn" type="submit" name="act" value="MySQL检测" />

    </td>

  </tr>

</table>

  	
<a name="w_function"></a>

<!--函数检测-->

<table>

	<tr><th colspan="3">函数检测</th></tr>

  <tr>

    <td width="15%"></td>

    <td width="60%">

      请输入您要检测的函数：

      <input type="text" name="funName" size="50" />

    </td>

    <td width="25%">

      <input class="btn" type="submit" name="act" align="right" value="函数检测" />

    </td>

  </tr>

  
</table>

<a name="w_mail"></a>

<!--邮件发送检测-->

<table>

  <tr><th colspan="3">邮件发送检测</th></tr>

  <tr>

    <td width="15%"></td>

    <td width="60%">

      请输入您要检测的邮件地址：

      <input type="text" name="mailAdd" size="50" />

    </td>

    <td width="25%">

    <input class="btn" type="submit" name="act" value="邮件检测" />

    </td>

  </tr>

  
</table>

</form>



	<table>
		<tr>
			<td class="w_foot"><A HREF="http://www.aqde.Net" target="_blank">雅黑PHP探针[简体版]v0.4.7</A></td>
			<td class="w_foot">Processed in 1.0026 seconds. 0.18MB memory usage.</td>
			<td class="w_foot"><a href="#w_top">返回顶部</a></td>
		</tr>
	</table>

</div>

</body>

</html>
