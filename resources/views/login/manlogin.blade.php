<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- ↓ページタイトル↓ -->
<title>login</title>

<!-- ↓検索エンジン用ここから↓ -->
<meta name="Description" content="検索用文言">
<meta name="Keywords" content="検索用キーワードカンマ（,）区切り">
<link rel="stylesheet" href="{{ URL::asset('js/nivo-slider/themes/tmp/tmp.css') }}">
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
<h1><img src="images/onelogo.png" width="425"alt="ONE COIN"></a></h1>
</header>
</div>

<div id="wrapper">
<div id="mainContent">
<main>
<header>
  <!-- ↓ページの見出し↓ -->
  <h1>管理ログイン</h1>
  <!-- ↓ページのリード文↓ -->
</header>
<section id="info" class="style3 reverse">

<table class="table3">
<tr>
  <th>名前</th>
  <td></td>
</tr>
<tr>
  <th>パスワード</th>
  <td></td>
</tr>
<tr>
  <th></th>
  <td>提出</td>
</tr>
</table>

</section>

</body>
</html>
