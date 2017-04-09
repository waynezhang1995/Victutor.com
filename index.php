<!DOCTYPE html>

<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Victutors.com - 维多利亚家教网">
    <meta name="author" content="Wayne Zhang, Zihan Ye">
    <meta name="keywords" content="Victutors,Victoria Tutor,Tutor,Uvic, Chinese, University of Victoria,Camosun College,家教,维多利亚,补习,维多利亚家教网" />

    <title>victutors - 维多利亚家教网 !</title>

    <link rel="stylesheet" href="./lib/CSS/w3.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="./CSS/index.css">
    <link href="./Images/favicon.ico" rel="icon" type="Images/x-icon" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="./javascript/bootstrap-select.js"></script>
    <script type="text/javascript" src="./javascript/victutors.js"></script>
    <script type="text/javascript" src="./javascript/victutors.list.js"></script>
    <script type="text/javascript" src="./javascript/victutors.functions.js"></script>
    <script type="text/javascript" src="./javascript/victutors.utils.js"></script>
    <!-- Google tracking -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-81667903-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body>
    <div id="Navbar">
        <ul id="navbarlogo">
            <li>
                <a class="w3-left"><img id="topnav-logo" src="./Images/icon_white.png">Victutors.com</a>
            </li>
        </ul>
        <ul id="navbarlist" class="topnav">
            <li id="home_link"><a href="#home"><span class="w3-large">Victutors.com</span></a></li>
            <li><a class="w3-btn" onclick="document.getElementById('databaseModal').style.display = 'block'"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;题库分享</a></li>
            <li><a class="w3-btn" onclick="document.getElementById('joinUsModal').style.display = 'block'"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;成为家教</a></li>
            <li><a class="w3-btn" onclick="document.getElementById('ContactUsModal').style.display = 'block'"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;联系我们</a></li>
            <li><a class="w3-btn" onclick="document.getElementById('FeedbackModal').style.display = 'block'"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;问题反馈</a></li>
            <li><a class="w3-btn" onclick="document.getElementById('FAQModal').style.display = 'block'"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;疑难解答</a></li>
            <li class="w3-animate-zoom w3-large icon"><a href="javascript:void(0);" onclick="victutors.functions.responsive()">&#9776;</a></li>
        </ul>
    </div>
    <div id="MainBody">
        <div id="search_panel">
            <h1>维多利亚家教网<span id="searchPanelIcon"><img src="./Images/victutors_Icon_White.png" alt="victutors_Icon" width="10%"></span></h1>
            <div>
                <select id="Fselecter" class="selectpicker" data-width="400px" data-size="6" title="选择专业" data-live-search="true" data-width="auto" title="选择专业">
                </select>
                <button id="search_button" class="w3-btn w3-hover-red" onclick="victutors.functions.GetTutorByFaculty()">
                    搜索家教
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div id="Footer" class="w3-bottom">
        <div class="row no-gutters">
            <ul class="footer">
                <li id="copyright"><a>© Victutors.com - VICTUTORS ALL RIGHTS RESERVED</a></li>
                <li id="partner03" class="partner-pane"><a href="#" id="partner03.JPG" class="partner_tag">维城酒家</a></li>
                <li id="partner02" class="partner-pane"><a href="#" id="partner02.JPG" class="partner_tag">维城续签服务</a></li>
                <li id="partner01" class="partner-pane"><a href="#" id="partner01.JPG" class="partner_tag">维城生活信息馆</a></li>
                <li class="partner-pane"><a>合作伙伴 :</a></li>
            </ul>
        </div>
    </div>

    <!--Assignments database modal-->
    <div id="databaseModal" class="modal">
        <div class="modal-content w3-animate-top w3-card-1">
            <header class="w3-container">
                <span onclick="document.getElementById('databaseModal').style.display='none'" class="w3-closebtn">&times;</span>
                <h3>题库分享</h3>
            </header>
            <div class="w3-container">
                <div id="warning" class="w3-card-8">
                    <h3><b>免责声明</b></h3>
                    <p>Victutors创建本题库只为内部学习交流使用 不得用于任何商业用途</p>
                    <p>本题库试题作业资源由各位UVic战友提供 资源来之不易 望各位战友万加珍惜</p>
                    <p>同时恳请各位战友匿名分享习题资源 学习不易 多一份习题 多一些拿高分的可能</p>
                    <p>部分题库资源可在UVic官网(www.uvic.ca)搜索找到</p>
                </div>
                <div class="w3-center">
                    <button onclick="victutors.functions.DBlogin()" type="submit" class="w3-teal w3-btn">登录题库</button>
                </div>
            </div>
            <footer class="w3-center w3-container">
                <p>www.victutors.com</p>
            </footer>
        </div>
    </div>
    <div id="partnerModal" class="w3-modal" onclick="this.style.display='none'">
        <div class="w3-modal-content w3-animate-zoom">
            <img src="./Images/Partner/partner01.jpg">
        </div>
    </div>
    <?php include 'Include/modals.php'; ?>
    <?php include 'Include/alerts.php'; ?>
</body>
</html>