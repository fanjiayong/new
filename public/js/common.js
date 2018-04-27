//タッチデバイス判定用
var touchDevice;

if("ontouchend" in window){
touchDevice = true;//タッチデバイス
}else{
touchDevice = false;//PC
}

jQuery(function(){
if( touchDevice ){
$('head').prepend('<meta name="viewport" content="width=1200">');
}
});


//画像|テキスト のレイアウトで画像サイズに合わせてテキスト部分の横幅を
//スタイルに書込  pageWidth 725はmargin類を省いたサイトの幅
//スタイルに書込  imgWrapperPadding 20は画像回りのpadding
jQuery(function(){
var pageWidth = 725;
var imgWrapperPadding = 20;

$('section img').each(function(){
var imgWidth = $(this).attr("width");
var textWidth = parseInt(pageWidth) - parseInt(imgWidth);
var imgWrapperWidth = parseInt(imgWidth) + parseInt(imgWrapperPadding);

$(this).closest("article").children('div').css("width", textWidth);
$(this).closest("section").find('figure').css("width", imgWrapperWidth);
$(this).closest("section").find('div[class*="img"]').css("width", imgWrapperWidth);
$(this).closest("section").find('div[class*="img"] + table').css("width", textWidth);
});

});


//2個おきにclass 追加 topのミニバナー専用
jQuery(function () {
$("aside dl:nth-child(even)").addClass("end-line");
});




















