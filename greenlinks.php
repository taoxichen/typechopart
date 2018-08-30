<?php
/**
 * 绿链生成
 *
 * @package custom
 *
 */
    $this->need('header.php');
?>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>短域名绿V生成助手</title>
    <meta name="keywords" content="绿V生成助手">
    <meta name="description" content="免费在线生成绿V！">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head>

  <style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
</style>


    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active">
            <a href="index.php">返回博客</a></li>
         
        </ul>
        <h3 class="text-muted" align="left">短域名生成</h3></div>
      <hr>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>
            <span class="panel-title">绿色短域名</span></h6>
        </div>
        <div class="panel-body">
          <form action="greensafe.html?qq=" method="GET">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="url" placeholder="请输入需要生成的网址">
            <br>
            <input type="submit" class="btn btn-primary btn-block" value="开始生成"></form>
			<?php
				if(isset($_GET['url'])){
					$url=$_GET['url'];
					$shorturl = file_get_contents('http://sa.sogou.com/gettiny?url='.$url.'');
					echo "<div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%'>正在生成中…</div></div><div id='ajax_thread_msg'><div class='alert alert-success' style='margin-bottom: 0px;'><b>生成成功：$shorturl</b></div></div>";
				}
			?>
          <div class="tip"></div>
        </div>
      </div>
      <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-body">
          <div class="alert alert-info" role="alert">
            请勿非法用途！
            </div></div>
        <p style="text-align:center">
          <br>&copy; Powered by
          <a href="#">他爱it</a>!</p></div>
		  <?php $this->need('sidebar.php'); ?>
  </body>

</html>
