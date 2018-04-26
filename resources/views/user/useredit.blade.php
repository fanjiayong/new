<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- ↓ページタイトル↓ -->
<title>useredit</title>

<!-- ↓検索エンジン用ここから↓ -->
<<link rel="stylesheet" href="{{ URL::asset('js/nivo-slider/themes/tmp/tmp.css') }}">
<link rel="stylesheet" href="{{ URL::asset('js/colorbox/colorbox.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/onecoin_style.css') }}">

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/jquery.tile.min.js') }}"></script>
<script src="{{ asset('js/common.js') }}"></script>

<script>
jQuery(function() {
$('a[href$=".jpg"],a[href$=".gif"],a[href$=".png"],a[href$=".jpeg"]').colorbox();

$('#sidebar').stick_in_parent();

$(window).load(function() {
$("aside dl").tile();
});

});
</script>
<!--[if lt IE 9]>
<script src="common/js/html5shiv.min.js"></script>
<![endif]-->
</head>

<body id="top">
<noscript>
<p id="noscript">
<!--[if lt IE 9]><br>
Internet Explorer 8をお使いの方はJavaScriptをオンにしてご覧ください。
<![endif]-->
</p>
</noscript>
<!-- ▲▲ここまでは変更不可！！▲▲ -->

<div id="header">
<header>
<!-- ↓サイト名・ロゴ↓ -->
<h1><a href="index.html"><img src="images/onelogo.png" width="425"  alt="ONE COIN"></a></h1>

<!-- ↓キャッチコピー↓ -->

</header>
</div>

<div id="wrapper">
<div id="mainContent">
<main>
<header>

</header>
<section id="info" class="style3 reverse">
<!-- ↓見出し1↓ -->
<h1>ユーザー管理画面</h1>
<!-- ↓↓表1（会社概要）ここから↓↓ -->
<table class="table3">
<tr>
  <th>名前</th>
  <td></td>
</tr>
<tr>
  <th>メールアドレス</th>
  <td></td>
</tr>
<tr>
  <th>携帯電話</th>
  <td></td>
</tr>
<tr>
  <th>編集</th>
</table>
<!-- ↑↑表1（会社概要）ここまで↑↑ -->
</section>
<!-- ↑会社概要ここまで↑ -->

<section id="access" class="style3">
<!-- ↓見出し2↓ -->
<h1>注文一覧</h1>
<table>
<tr>
<th>店舗名前</th><th>料理名</th><th>価格</th><th>消費時間</th><th>消費数</th>
</tr>
</table>

</section>


</main>
</div>


<div id="sidebar">
<!-- ↓ナビゲーションここから↓ -->
<nav>
<ul>
  <li><a href="index.html">トップページ</a></li>
  <li><a href="products.html">#</a>

  </li>
</ul>
</nav>
<!-- ↑ナビゲーションここまで↑ -->
</div>


</div>
<!-- /#wrapper -->



</body>
</html>
