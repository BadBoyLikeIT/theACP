<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle cu-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand cu-logo" href="index.php">
                <!--<img src="images/logo.png" alt="logo">-->
                theACP
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <? if (NAV == 'index') echo 'class = "active"' ?>>
                    <a href="index.php">首页</a>
                </li>
                <li <? if (NAV == 'about-us') echo 'class = "active"' ?>>
                    <a href="about-us.php">关于theACP</a>
                </li>
                <li <? if (NAV == 'project') echo 'class = "active"' ?>>
                    <a href="project-list.php">志愿项目</a>
                </li>
                <li <? if (NAV == 'reg') echo 'class = "active"' ?>>
                    <a href="registration.php">注册</a>
                </li>
                <li <? if (NAV == 'login') echo 'class = "active"' ?>>
                    <a href="login.php">登录</a>
                </li>
                <!--<li><a href="portfolio.html">登录</a></li>-->

                <!--<li class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">志愿项目 <i class="icon-angle-down"></i></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li><a href="career.html">项目一</a></li>-->
                <!--<li><a href="blog-item.html">项目二</a></li>-->
                <!--<li><a href="pricing.html">项目三</a></li>-->
                <!--<li><a href="404.php">项目四</a></li>-->
                <!--<li class="divider"></li>-->
                <!--<li><a href="privacy.html">Privacy Policy</a></li>-->
                <!--<li><a href="terms.html">Terms of Use</a></li>-->
                <!--</ul>-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</header><!--/header-->