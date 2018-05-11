<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="{{ URL::asset('css/onecoin_style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/signin.css') }}">


    <script>
    jQuery(function() {
    $('a[href$=".jpg"],a[href$=".gif"],a[href$=".png"],a[href$=".jpeg"]').colorbox();

    $('#sidebar').stick_in_parent();

    $(window).load(function() {
    $(".style3 > figure").tile(2);
    $("aside dl").tile();
    });

    });
    </script>


    <script>
    jQuery(function() {
    $('a[href$=".jpg"],a[href$=".gif"],a[href$=".png"],a[href$=".jpeg"]').colorbox();

    $('#sidebar').stick_in_parent();

    $(window).load(function() {
    $(".style3 > figure").tile(2);
    $("aside dl").tile();
    });

    });
    </script>
</head>
<body id="top">
@include('user.toolbar')
<noscript>
<p id="noscript">
</p>
</noscript>
<!-- ▲▲ここまでは変更不可！！▲▲ -->

<div id="header">
<header>
<!-- ↓サイト名・ロゴ↓ -->

<img src="{{ URL::asset('images/logo.png') }}" width="425" height="55" alt="ONE COIN"></a></h1>
<!-- ↓キャッチコピー↓ -->
<h2>ONE COIN＆値段を抑えたい！栄養もあって美味しいものも食べたい！
あなたの思い出をより「おいしく」。</h2>
</header>
</div>

<div id="wrapper">

<div id="mainContent">
<main>
<header>
  <!-- ↓ページの見出し↓ -->
  <h1>お店、レストランを探す</h1>
  <!-- ↓ページのリード文↓ -->
  <p>新着口コミを紹介します。</p>
</header>
<form method="get">
  {{ csrf_field() }}
  @foreach($items as $item)
<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>{{$item->shop_name}}</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>店のアドレス：{{$item->shop_address}}</h2>
    <!-- ↓↓内容1の文章↓↓ -->

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
{{$item->shop_photo}}
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>電話番号{{$item->shop_phone}}</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>
<a href="{{ url('user/homepagemenu/'.$item->id) }}">詳細</a>
@endforeach


</form>

<section id="list" class="style3">
<!-- ↓見出し3↓

<! ↓リンクバナーここから↓ -->
</main>
</div>

<div id="sidebar">
<!-- ↓ナビゲーションここから↓ -->
<!-- <nav>
<ul>
  <li><a href="index.html">トップページ</a></li>
  <li class="here"><a href="products.html">事業・製品</a>

    <ul>
      <li><a href="products.html#feature">特徴</a></li>
      <li><a href="products.html#case">事例</a></li>
      <li><a href="products.html#list">営業所一覧</a></li>
    </ul>

  </li>
  <li><a href="recruit.html">リクルート</a></li>
  <li><a href="aboutus.html">会社概要</a>

    <ul>
      <li><a href="aboutus.html#info">当社について</a></li>
      <li><a href="aboutus.html#access">アクセス</a></li>
    </ul>

  </li>
</ul>
</nav> -->
<!-- ↑ナビゲーションここまで↑ -->
</div>

</div>
<!-- /#wrapper -->

<footer>
<!-- ↓コピーライト↓ -->
<small>© NIPPON ECOENE</small>
</footer>

</body>
</html>
