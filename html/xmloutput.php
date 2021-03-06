<?php
$filename = './xml/StarryEyesXml.xml';
$copyname = './xml/StarryEyesXml'.(time()*rand(1, 8)).'.xml';
//echo $copyname;
copy( $filename, $copyname);
$xml = @simplexml_load_file($copyname);
if ($xml) {
  // 正常に読み込めた場合の処理
  //GlobalKeyColor
  $xml->GlobalKeyColor = str_replace('#', '#FF', $_GET['krile']);
  //TitleBar
  $xml->TitleBarColor->BackgroundColor = str_replace('#', '#FF', $_GET['titlebar']);

  $xml->BaseColor->BackgroundColor = str_replace('#', '#FF', $_GET['krile_content']);
  //Tab
  $xml->TabColor->DefaultColor = str_replace('#', '#33', $_GET['tab']);
  $xml->TabColor->SelectedColor = str_replace('#', '#88', $_GET['tab']);
  $xml->TabColor->FocusedColor = str_replace('#', '#FF', $_GET['tab']);
  //Screen Name
  $xml->TweetDefaultColor->ForegroundKeyColor = str_replace('#', '#FF', $_GET['tldefault']);
  $xml->TweetMyselfColor->ForegroundKeyColor = str_replace('#', '#FF', $_GET['tlmyself']);
  $xml->TweetMentionColor->ForegroundKeyColor = str_replace('#', '#FF', $_GET['tlmention']);
  $xml->TweetRetweetColor->ForegroundKeyColor = str_replace('#', '#FF', $_GET['tlretweet']);
  $xml->TweetDirectColor->ForegroundKeyColor = str_replace('#', '#FF', $_GET['tldirect']);
  //TimeLine Default Color
  $xml->TweetMyselfColor->Default->BackgroundColor = str_replace('#', '#16', $_GET['tlmyself']);
  $xml->TweetMentionColor->Default->BackgroundColor = str_replace('#', '#16', $_GET['tlmention']);
  $xml->TweetRetweetColor->Default->BackgroundColor = str_replace('#', '#16', $_GET['tlretweet']);
  $xml->TweetDirectColor->Default->BackgroundColor = str_replace('#', '#16', $_GET['tldirect']);
  //TimeLine Default TextColor
  $xml->TweetDefaultColor->Default->ForegroundColor = str_replace('#', '#FF', $_GET['tweet']);
  $xml->TweetMyselfColor->Default->ForegroundColor = str_replace('#', '#FF', $_GET['tweet']);
  $xml->TweetMentionColor->Default->ForegroundColor = str_replace('#', '#FF', $_GET['tweet']);
  $xml->TweetRetweetColor->Default->ForegroundColor = str_replace('#', '#FF', $_GET['tweet']);
  $xml->TweetDirectColor->Default->ForegroundColor = str_replace('#', '#FF', $_GET['tweet']);
  //TimeLine Highlight
  $xml->TweetMyselfColor->Highlight->BackgroundColor = str_replace('#', '#20', $_GET['tlmyself']);
  $xml->TweetMentionColor->Highlight->BackgroundColor = str_replace('#', '#20', $_GET['tlmention']);
  $xml->TweetRetweetColor->Highlight->BackgroundColor = str_replace('#', '#20', $_GET['tlretweet']);
  $xml->TweetDirectColor->Highlight->BackgroundColor = str_replace('#', '#20', $_GET['tldirect']);
  //上書き保存
  $xml->asXml($copyname);

} else {
    // 読み込めなかった場合のエラー処理
}
?>
