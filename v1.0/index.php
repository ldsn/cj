<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <meta http-equiv="keywords" content="³����ѧ��ɼ�,³����ѧУ��ɼ���ѯ,³����ѧ�ɼ�" />
 <meta http-equiv="description" content="³����ѧУ��ɼ���ѯϵͳ,��³��ѧ����Ϊ���õķ���³��ʦ����������У��ɼ���ѯϵͳ,�û���ʹ�÷�У�������ѯ�ɼ���">
 <title>³����ѧУ��ɼ���ѯϵͳ����³��ѧ����</title>
 <link href="css/css.css" rel="stylesheet" type="text/css"/>
 <!--[if IE]> 

 <![endif]-->
 <script>
 function submitform(){
	 document.cha_form.submit();
	 }
 function keyLogin(){  
        if (event.keyCode==13){
			cha();
			} 
        }  
 function cha(){
	 	var zjh=document.cha_form.zjh.value;
		var mm=document.cha_form.mm.value;
		if(zjh==""){
				alert('����дѧ�š�');
				return 0;
			}
		if(mm==""){
				alert('����д���롣');
				return 0;
			}
		submitform();
	 }
 </script>
 
 </head>

 <body class="index">
<?
/*
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$from=$_SERVER['HTTP_REFERER'];
$search='mp.weixin.qq.com';
$pd=strpos($from,$search);
if(!empty($pd)){
echo "<script>location.href='http://www.ldustu.com/cj/bq.html'</script>";
}
*/
?>

   <div class="center">
    <h1 class="title">³����ѧ�ɼ���ѯϵͳ</h1>
    <img src="./images/logo.png" class="logo"/>
    <p class="title2">�ɼ���ѯ</p>
    <div class="form_box">
       <form action="./cha.php" name="cha_form" class="cha_form" method="post" onsubmit="return cha()" onkeydown="keyLogin()">
        <div class="text_box">
           <input type="text" name="zjh" class="textbox" placeholder="ѧ��"/>
           <input type="password" name="mm" class="textbox" placeholder="����"/>
         </div>
        <a href="javascript:cha();" class="submit_btn"><span>��ѯ</span></a>
      </form>
     </div>
    <p class="tip">��ʾ��������ѡ��ʱ�õ�ѧ�ź����롣</p>
	 <div class="copy">
	 Power by <a href="http://www.ldustu.com">³��ѧ����</a>
	 </div> 
  </div>
 <div style="display:none"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_5796710'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s13.cnzz.com/stat.php%3Fid%3D5796710' type='text/javascript'%3E%3C/script%3E"));</script></div>
</body>
</html>