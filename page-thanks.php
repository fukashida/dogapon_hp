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

if(count($_POST)){
    $url = 'https://script.google.com/macros/s/AKfycbzKY72h3pK5GhTr-EH2rEozojY2V-46qcfj0mF38hkPc49I8BjDJtcxtrLi1fFPkKBR/exec';
    $data = array(
        'your_name' => $_POST['your_name'],
        'email' => $_POST['email'],
        'datetime_local01' => $_POST['datetime_local01'],
        'datetime_local02' => $_POST['datetime_local02'],
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
<script type="text/javascript" src="https://js.felmat.net/fmcv.js?adid=X9807N&uqid={{orderNo}}"></script>

<?php get_footer(); ?>