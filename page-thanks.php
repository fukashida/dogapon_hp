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
$to = "info@academydpm.com,m-obata@liartpromotion.com,info@typesinc.com";

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
$admin_reply_text .= "名前：" . $_POST['your_name'] . "\n";
$admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
$admin_reply_text .= "第一希望日程 時間：" . $_POST['datetime_local01'] . "\n";
$admin_reply_text .= "第二希望日程 時間：" . $_POST['datetime_local02'] . "\n";
$admin_reply_text .= "ご検討段階について：" . $_POST['stage'] . "\n";
$admin_reply_text .= "\n";
$admin_reply_text .= "ご相談内容：" . $_POST['message'] . "\n\n";
$admin_reply_text .= "--\n\n";
$admin_reply_text .= "問い合わせ内容一覧\n";
$admin_reply_text .= "https://docs.google.com/spreadsheets/d/1YLyV22yUHG3juhbIXdfxPes_11bxoM_6v3Jiq9RQGFY/edit#gid=0 \n\n";
$admin_reply_text .= "このメールは ドガポン (https://dogapon.com/) の無料カウンセリングフォームから送信されました\n";

// 運営側へメール送信
mb_send_mail( $to , $admin_reply_subject, $admin_reply_text, $header);

// セッションの削除
unset($_SESSION['page']);

session_start();
if( !empty($_SESSION['page']) && $_SESSION['page'] === true ) {


if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbxk9i_kGXoJkaNv8VVtbv6Nz9K62YGFC50XbLUagt_beYessf9jJOETLlhtPP-gPfep/exec';
    $data = array(
        'your_name' => $_POST['your_name'],
        'email' => $_POST['email'],
        'datetime_local01' => $_POST['datetime_local01'],
        'datetime_local02' => $_POST['datetime_local02'],
        'stage' => $_POST['stage'],
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
var _ARGSV = <?php echo $_POST['email']; ?>;
var KEYS = {cid : ["CL_", "ACT_", "cid_auth_get_type"], plid : ["PL_", "APT_", "plid_auth_get_type"]};
var turl = "https://s8affi.net/track.php?p=" + PV + "&args=" + _ARGSV;
var cks = document.cookie.split("; ").reduce(function(ret, s){ var kv = s.split("="); if(kv[0] && kv[1]) ret[kv[0]] = kv[1]; return ret; }, []);
turl = Object.keys(KEYS).reduce(function(url, k){ var vk = KEYS[k][0] + PV; var tk = KEYS[k][1] + PV; var v = "", t = ""; if(cks[vk]){ v = cks[vk]; if(cks[tk]) t = cks[tk]; }else if(localStorage.getItem(vk)){ v = localStorage.getItem(vk); t = "ls"; } if(v) url += "&" + k + "=" + v; if(t) url += "&" + KEYS[k][2] + "=" + t; return url; }, turl);
var xhr = new XMLHttpRequest(); xhr.open("GET", turl); xhr.send(); })();
</script>

<?php get_footer(); ?>