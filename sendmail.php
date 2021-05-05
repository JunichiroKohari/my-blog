<?php
// json 形式のデータを扱うための定義
header('Content-type: application/json');
// PHP5.1.0以上はタイムゾーンの定義が必須
date_default_timezone_set('Asia/Tokyo');

// --------------------------
// 個別設定項目（３つ）
// --------------------------
// 送信先メールアドレス
$to = 'junichiro@kohari.jp';
// メールタイトル
$subject = 'お問い合わせフォームより';
// ドメイン（リファラチェックと送信元メールアドレスに利用）
$domain = home_url( '/' );

//変数初期化
$errflg = false;    // エラー判定フラグ

// 入力項目
$nameval = '';   // 名前
$mailval = '';   // メールアドレス
$requirementval = '';    // ご用件
$messageval = '';   // 内容
$referrer = '';  // 遷移元画面

// 画面からのデータを取得
if(isset($_POST['name'])){ $nameval = $_POST['name']; }
if(isset($_POST['email'])){ $mailval = $_POST['email']; }
if(isset($_POST['requirement'])){ $requirementval = $_POST['requirement']; }
if(isset($_POST['message'])){ $messageval = $_POST['message']; }
if(isset($_POST['referrer'])){ $referrer = $_POST['referrer']; }

if (strpos($_SERVER['HTTP_REFERER'], $domain) === false){
  // リファラチェック
  $errflg = true;

} else{
  // メールデータ作成
  $subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,'JIS','UTF-8'))."?=";

  $message= '名前：'.$nameval."\n";
  $message.='メール：'.$mailval."\n";
  $message.='ご用件：'.$requirementval."\n";
  $message.="\n――――――――――――――――――――――――――――――\n\n";
  $message.=$messageval;
  $message.="\n\n――――――――――――――――――――――――――――――\n";
  $message.='送信日時：'.date( "Y/m/d (D) H:i:s", time() )."\n";
  $message.='送信元IPアドレス：'.@$_SERVER["REMOTE_ADDR"]."\n";
  $message.='送信元ホスト名：'.getHostByAddr(getenv('REMOTE_ADDR'))."\n";
  $message.='リファラURL：'.$referrer."\n";
  $message.='お問い合わせページ：'.@$_SERVER['HTTP_REFERER']."\n";
  $message= mb_convert_encoding($message,'JIS','UTF-8');

  $fromName = mb_encode_mimeheader(mb_convert_encoding($nameval,'JIS','UTF-8'));

  $header ='From: '.$fromName.'<wordpress@'.$domain.'>'."\n";
  $header.='Reply-To: '.$mailval."\n";
  $header.='Content-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/'.phpversion();
  // メール送信
  $retmail = mail($to,$subject,$message,$header);

  // 送信結果の判定
  if( !$retmail ){
    $errflg = true;
}

// 処理結果を画面に戻す
$result = array('errflg'=>$errflg);
echo json_encode( $result );

// HTMLエスケープ処理
function hsc_utf8($str) {
  return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
}
?>