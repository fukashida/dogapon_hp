<?php get_header(); ?>

<div style="display:none">
<?php
// var_dump($_POST);

// 変数の初期化
$page_flag = 0;
$clean = array();

// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	}
}

// 変数とタイムゾーンを初期化
$header = null;
$auto_reply_subject = null;
$auto_reply_text = null;
$admin_reply_subject = null;
$admin_reply_text = null;
date_default_timezone_set('Asia/Tokyo');

// 宛先 ※同時に指定
$to = "info@academydpm.com,m-obata@liartpromotion.com,info@typesinc.com,kawana@dogapon.com,lifework.mo.pk@gmail.com,zerodirector@liartpromotion.com";
// $to = "f-shida@spirits-gr.com";

// ヘッダー情報を設定
$header = "MIME-Version: 1.0\n";
$header .= "From: ドガポン <info@academydpm.com>\n";
$header .= "Reply-To: ドガポン <info@academydpm.com>\n";

// 運営側へ送るメールの件名
$admin_reply_subject = "ドガポン無料カウンセリングへのお問い合わせがありました。";

// 本文を設定
$admin_reply_text = "\n";
$admin_reply_text .= "以下の内容でWEBサイトへのお問い合わせがありました。\n";
$admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n\n";
$admin_reply_text .= "お申込み番号：" . $_POST['application_number'] . "\n\n";
$admin_reply_text .= "名前：" . $_POST['your_name'] . "\n";
$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
$admin_reply_text .= "第一希望日程 時間：" . $_POST['datetime_local01'] . "\n";
$admin_reply_text .= "第二希望日程 時間：" . $_POST['datetime_local02'] . "\n";
$admin_reply_text .= "ご検討段階について：" . $_POST['stage'] . "\n";
$admin_reply_text .= "動画編集経験：" . $_POST['experience'] . "\n";
$admin_reply_text .= "動画スクールに入ったことがあるか：" . $_POST['project'] . "\n";
$admin_reply_text .= "学んだ後の目標：" . $_POST['goals'] . "\n";
$admin_reply_text .= "\n";
$admin_reply_text .= "ご相談内容：" . $_POST['message'] . "\n\n";
$admin_reply_text .= "--\n\n";
$admin_reply_text .= "問い合わせ内容一覧\n";
$admin_reply_text .= "https://docs.google.com/spreadsheets/d/1YLyV22yUHG3juhbIXdfxPes_11bxoM_6v3Jiq9RQGFY/edit#gid=0 \n\n";
$admin_reply_text .= "このメールは ドガポン (https://dogapon.com/) の無料カウンセリングフォームから送信されました\n";

// 運営側へメール送信
mb_send_mail( $to , $admin_reply_subject, $admin_reply_text, $header);

session_start();
if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {


if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbz8xwBfMJFRBhxkrHSKI--ZcyqoGFF9QAkdutl0f7aRzZ-MpE5oJXayIhzvUBPGVcj1/exec';
    $data = array(
        'application_number' => $_POST['application_number'],
        'your_name' => $_POST['your_name'],
        'email' => $_POST['email'],
        'datetime_local01' => $_POST['datetime_local01'],
        'datetime_local02' => $_POST['datetime_local02'],
        'stage' => $_POST['stage'],
        'experience' => $_POST['experience'],
        'project' => $_POST['project'],
        'joined' => $_POST['joined'],
        'goals' => $_POST['goals'],
        'message' => $_POST['message'],
    );
    $context = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => implode("\r\n", array('Content-Type: application/x-www-form-urlencoded',)),
            'content' => http_build_query($data)
        )
    );
    $response_json = file_get_contents($url, false, stream_context_create($context));
    $response_data = json_decode($response_json);
    var_dump($response_data);
}

// セッションの削除
unset($_SESSION['page']);

// ✅ サンクスページにリダイレクト
header("Location: /thanks/");



} else {
    $page_flag = 0;
}

?>
</div>


<section class="complete">
    <div class="container">
        <div class="sub-container">
            <h2 class="std7">送信完了</h2>
            <p>お問い合わせありがとうございます。<br>
            ご入力いただいた内容を確認後、担当者よりご連絡させていただきます。
            </p>
            <a class="button" href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=X9807N&uqid=<?php echo $_POST['email']; ?>"></script>


<script>
(function acsTrack(){
var PV = "phr4yzy4oltl";
var date = new Date();
var order_id = date.getFullYear() +''+ (date.getMonth()+1) +''+ date.getDate() +''+ date.getHours() +''+ date.getMinutes() +''+ date.getSeconds();
var _ARGSV = order_id;
var KEYS = {cid : ["CL_", "ACT_", "cid_auth_get_type"], plid : ["PL_", "APT_", "plid_auth_get_type"]};
var turl = "https://s8affi.net/track.php?p=" + PV + "&args=" + _ARGSV;
var cks = document.cookie.split("; ").reduce(function(ret, s){ var kv = s.split("="); if(kv[0] && kv[1]) ret[kv[0]] = kv[1]; return ret; }, []);
turl = Object.keys(KEYS).reduce(function(url, k){ var vk = KEYS[k][0] + PV; var tk = KEYS[k][1] + PV; var v = "", t = ""; if(cks[vk]){ v = cks[vk]; if(cks[tk]) t = cks[tk]; }else if(localStorage.getItem(vk)){ v = localStorage.getItem(vk); t = "ls"; } if(v) url += "&" + k + "=" + v; if(t) url += "&" + KEYS[k][2] + "=" + t; return url; }, turl);
var xhr = new XMLHttpRequest(); xhr.open("GET", turl); xhr.send(); })();
</script>


<script type="text/javascript">
(function(){
function loadScriptRTCV(callback){
var script = document.createElement('script');
script.type = 'text/javascript';
script.src = 'https://www.rentracks.jp/js/itp/rt.track.js?t=' + (new Date()).getTime();
if ( script.readyState ) {
script.onreadystatechange = function() {
if ( script.readyState === 'loaded' || script.readyState === 'complete' ) {
script.onreadystatechange = null;
callback();
};
};
} else {
script.onload = function() {
callback();
};
};
document.getElementsByTagName('head')[0].appendChild(script);
}

loadScriptRTCV(function(){
_rt.sid = 9284;
_rt.pid = 13194;
_rt.price = 0;
_rt.reward = -1;
_rt.cname = '';
_rt.ctel = '';
_rt.cemail = '';
_rt.cinfo = '<?php echo $_POST['application_number']; ?>';
rt_tracktag();
});
}(function(){}));
</script>
  

<?php get_footer(); ?>

</body>  
</html>