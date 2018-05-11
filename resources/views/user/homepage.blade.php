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
<h1><a href="index.html">
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

<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>ハンバーグ屋さん</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>【東武東上線大山駅徒歩3分】肉質にこだわりあり。落ち着いた空間で絶品和牛をリーズナブルに</h2>
    <!-- ↓↓内容1の文章↓↓ -->

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
    <img src="{{ URL::asset('images/picture01.jpg') }}" width="250" height="280" alt="ソーラーパネル試作品">
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>「香辛料よりケチャップの方が味に深みが出るよ♪」</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>

<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>ハンバーグ屋さん</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>「香辛料よりケチャップの方が味に深みが出るよ♪」</h2>
    <!-- ↓↓内容1の文章↓↓ -->
    <p>クリーンエネルギーとは、電気、熱などに変えても二酸化炭素、窒素酸化物などの有害物質を排出しない（または少ない）エネルギーのことです。</p>

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
    <img src="{{ URL::asset('images/products01.jpg') }}" width="280" height="185" alt="ソーラーパネル試作品">
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>クリーンエネルギーに関する研究・開発</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>
<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>ハンバーグ屋さん</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>「香辛料よりケチャップの方が味に深みが出るよ♪」</h2>
    <!-- ↓↓内容1の文章↓↓ -->
    <p>クリーンエネルギーとは、電気、熱などに変えても二酸化炭素、窒素酸化物などの有害物質を排出しない（または少ない）エネルギーのことです。</p>

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
    <img src="{{ URL::asset('images/products01.jpg') }}" width="280" height="185" alt="ソーラーパネル試作品">
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>クリーンエネルギーに関する研究・開発</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>
<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>ハンバーグ屋さん</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>「香辛料よりケチャップの方が味に深みが出るよ♪」</h2>
    <!-- ↓↓内容1の文章↓↓ -->
    <p>クリーンエネルギーとは、電気、熱などに変えても二酸化炭素、窒素酸化物などの有害物質を排出しない（または少ない）エネルギーのことです。</p>

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
    <img src="{{ URL::asset('images/products01.jpg') }}" width="280" height="185" alt="ソーラーパネル試作品">
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>クリーンエネルギーに関する研究・開発</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>
<section id="feature" class="style3">
<!-- ↓見出し1↓ -->
<h1>ハンバーグ屋さん</h1>

<!-- ↓内容1ここから↓ -->
<article>
  <div>
    <!-- ↓↓内容1の見出し↓↓ -->
    <h2>「香辛料よりケチャップの方が味に深みが出るよ♪」</h2>
    <!-- ↓↓内容1の文章↓↓ -->
    <p>クリーンエネルギーとは、電気、熱などに変えても二酸化炭素、窒素酸化物などの有害物質を排出しない（または少ない）エネルギーのことです。</p>

  </div>

  <figure>
    <!-- ↓↓内容1の画像↓↓ -->
    <img src="{{ URL::asset('images/products01.jpg') }}" width="280" height="185" alt="ソーラーパネル試作品">
    <!-- ↓↓画像の説明文↓↓ -->
    <figcaption>クリーンエネルギーに関する研究・開発</figcaption>
  </figure>
</article>
<!-- ↑内容1ここまで↑ -->
</section>

<section id="list" class="style3">
<!-- ↓見出し3↓ -->
<h1>営業所一覧</h1>

<!-- ↓内容3（表）ここから↓ -->
<table class="table1">
<tr>
  <th>都道府県</th>
  <th>店舗名</th>
  <th>住所</th>
  <th>TEL</th>
</tr>
<tr>
  <th rowspan="2">青森</th>
  <td>NIPPON ECOENE　立川営業所</td>
  <td>〒123-4567　青森市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <td>NIPPON ECOENE　相生営業所</td>
  <td>〒123-4567　青森市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <th rowspan="3">埼玉</th>
  <td>NIPPON ECOENE　笹場本店</td>
  <td>〒123-4567　埼玉市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <td>NIPPON ECOENE　恵比寿営業所</td>
  <td>〒123-4567　埼玉市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <td>NIPPON ECOENE　阿仁部営業所</td>
  <td>〒123-4567　埼玉市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <th rowspan="3">東京</th>
  <td>NIPPON ECOENE　枝端営業所</td>
  <td>〒123-4567　東京市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <td>NIPPON ECOENE　笹部営業所</td>
  <td>〒123-4567　東京市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
<tr>
  <td>NIPPON ECOENE　広川営業所</td>
  <td>〒123-4567　東京市○○町1-2-3</td>
  <td>00-0000-0000</td>
</tr>
</table>
<!-- ↑内容3（表）ここまで↑ -->
</section>

<!-- ↓リンクバナーここから↓ -->
<aside>
<!-- ↓↓リンクバナー1↓↓ -->
<dl>
  <dt>
  <a href="#" target="_blank"><img src="images/twitter.png" width="40" height="40" alt="Twitter"></a>
  </dt>
  <dd>Twitterで<br>
  情報発信中です。</dd>
</dl>
<!-- ↓↓リンクバナー2↓↓ -->
<dl>
  <dt>
  <a href="#" target="_blank"><img src="images/facebook.png" width="40" height="40" alt="Facebook"></a>
  </dt>
  <dd>Facebookページを<br>
  開設いたしました。</dd>
</dl>
</aside>
<!-- ↑リンクバナーここまで↑ -->

</main>
</div>

<div id="sidebar">
<!-- ↓ナビゲーションここから↓ -->
<nav>
<ul>
  <li><a href="index.html">トップページ</a></li>
  <li class="here"><a href="products.html">事業・製品</a>
  <!-- ↓↓サブメニューここから↓↓ -->
    <ul>
      <li><a href="products.html#feature">特徴</a></li>
      <li><a href="products.html#case">事例</a></li>
      <li><a href="products.html#list">営業所一覧</a></li>
    </ul>
    <!-- ↑↑サブメニューここまで↑↑ -->
  </li>
  <li><a href="recruit.html">リクルート</a></li>
  <li><a href="aboutus.html">会社概要</a>
    <!-- ↓↓サブメニューここから↓↓ -->
    <ul>
      <li><a href="aboutus.html#info">当社について</a></li>
      <li><a href="aboutus.html#access">アクセス</a></li>
    </ul>
    <!-- ↑↑サブメニューここまで↑↑ -->
  </li>
</ul>
</nav>
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
