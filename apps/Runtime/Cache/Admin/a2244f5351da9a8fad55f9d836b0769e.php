<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>登 录</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" contect="no-cache" />
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
    <meta http-equiv="content-language" content="zh-CN" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ideat ideat.org">
    <meta name="copyright" content="© www.ideat.org" />
    <meta name="description" content="ideat、三月软件小组 专业从事软件开发的学生团队">
    <meta name="keywords" content="ideat、三月软件、三月软件工作室、三月软件小组、软件开发、Linux、Mysql、PHP" />
    <meta name="description" content="ideat 页面描述" />
    <meta name="keywords" content="ideat、页面关键字" />
    <meta name="robots" content="index,follow,archive" />
    <meta name="date" content="<?php echo date(DATE_ATOM); ?>" />

    <link rel='stylesheet' type='text/css' href="/Public/include/bootstrap/css/bootstrap.min.css" />
    <link rel='stylesheet' type='text/css' href="/Public/include/css/style.css" />
    <link rel='stylesheet' type='text/css' href="/Public/include/code-prettify/prettify.css" />
    <link rel='stylesheet' type='text/css' href="/Public/include/bootstrap-datetimepicker/css/datepicker.css" />
    <!--<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans' />-->
    <link rel="stylesheet" type='text/css' href="/Public/include/tablesorter/css/theme.bootstrap.css">
    <link rel="stylesheet" type='text/css' href="/Public/include/icheck/skins/flat/blue.css">
    <link rel="stylesheet" type='text/css' href="/Public/include/bootstrap-modal/css/bootstrap-modal.css">

    <script type="text/javascript" src="/Public/include/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/include/bootstrap/js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="/Public/include/bootstrap/js/bootstrap-tooltip.js"></script>-->
    <script type="text/javascript" src="/Public/include/bootstrap-modal/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="/Public/include/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
    <script type="text/javascript" src="/Public/include/icheck/jquery.icheck.min.js"></script>
    <script type="text/javascript" src="/Public/include/code-prettify/prettify.js"></script>
    <script type="text/javascript" src="/Public/include/bootstrap-datetimepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="/Public/include/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/Public/include/jquery-validation/js/jquery.metadata.js"></script>
    <script type="text/javascript" src="/Public/include/js/messages_zh.js"></script>
    <script type="text/javascript" src="/Public/include/jquery-validation/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="/Public/include/js/jquery.prettydate.js"></script>
    <script type="text/javascript" src="/Public/include/datatable/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/Public/include/js/light-table-filter.min.js"></script>
    <script type="text/javascript" src="/Public/include/tablesorter/js/jquery.tablesorter.js"></script>
    <script type="text/javascript" src="/Public/include/tablesorter/js/jquery.tablesorter.widgets.js"></script>
    <script type="text/javascript" src="/Public/include/js/comm.js"></script>
<style type="text/css">

</style>
<script type="text/javascript">
</script>
<!--[if lt IE 8]>
  <script type="text/javascript">
  </script>
<![endif]-->
</head>

<body>
<header class="navbar navbar-static-top bs-docs-nav navbar-fixed-top navbar-inverse" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="../getting-started/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-起步'])">Register</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.bootcss.com/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-Bootstrap中文网'])" target="_blank">Bootstrap中文网</a></li>
      </ul>
    </nav>
  </div>
</header>

<div class="container">
<div class="wrapper">
    <div class="row">
        <div class="col-md-6 border-radius6 border col-md-offset-2">
            <div class="row">
                <form class="form-inline center" action="" method="post">
                    <div class="col-md-9 col-md-offset-2">
                    <div class="title">
                        <input type="hidden" name="token" value="<?php echo ($token); ?>" />
                        <h3>登 录</h3>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="input-email"></label>
                        <div class="controls">
                            <div class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input  value="<?php echo ($username); ?>" name="usernameoremail" class="email-input input-large" type="text" id="input-email" placeholder="Username or Email">
                             </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="input-password"></label>
                        <div class="controls">
                            <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span>
                            <input  name="password" class="input-large" type="password" id="input-password" placeholder="Password">
                            </div>
                            <p class="help-text-inline"><a href="">Forgot?</a></p>
                        </div>
                    </div>
                    <?php if(($errors) > "3"): ?><div class="form-group">
                            <div class="controls">
                                <script type="text/javascript">
 var RecaptchaOptions = {
    theme : 'white'
 };
 </script>
<!--
<script type="text/javascript"
 src="http://www.google.com/recaptcha/api/challenge?k=6LdPzNcSAAAAAD5xZltr8TYCO5i9T5hoJ6FZnWij">
</script>
<noscript>
 <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdPzNcSAAAAAD5xZltr8TYCO5i9T5hoJ6FZnWij"
     height="300" width="500" frameborder="0"></iframe><br>
 <textarea name="recaptcha_challenge_field" rows="3" cols="40">
 </textarea>
 <input type="hidden" name="recaptcha_response_field"
     value="manual_challenge">
</noscript>
-->
<?php echo ($recaptcha); ?>
                            </div>
                        </div><?php endif; ?>
                    <div class="form-group">
                        <label class="control-label hide" for="btn-submit"></label>
                        <div class="controls">
                            <button type="submit" class="submit btn btn-large"> Sign in </button>
                            <label class="checkbox remember col-md-offset-1">
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
            <div class="mobile center">
                <p class="mobile-helper">
                  Welcome to <?php echo ($projectName); ?>. Have ideas in you mind?
                  <a href="<?php echo U('Login/signup');?>">Join us now! »</a>
                </p>
            </div>
        </div>
        <div class="span4 block well well-small border-radius6 border">
            <div class="row-fluid">
                    <div class="row-fluid inner-center">
                        <h5></h5>
                    </div>
                    <div class="row-fluid inner-center">
                        <a class="btn btn-large" href="<?php echo U('Login/signup');?>">Create Your Account</a>
                    </div>
                    <div class="row-fluid">
                        <br />
                    </div>
            </div>
            <div class="row inner-center">
               
               <script id='denglu_login_js' type='text/javascript' charset='utf-8'></script>
            </div>
            <p class="mobile-helper" style="margin:0;line-height: 5px;">&nbsp;</p>
        </div>
    </div>
</div>
</div>
<div id="alert" class="row-fluid">
    <div class="center alert message fade in hide">
        <a class="dismiss close" data-dismiss="alert">×</a>
        <label></label>
    </div>
</div>
<?php if(!empty($msg)): ?><script type="text/javascript">
		$(function(){
			alert(<?php echo '"'.$msg.'"';$msg=null; ?>);
		})
	</script><?php endif; ?>

</body>
</html>