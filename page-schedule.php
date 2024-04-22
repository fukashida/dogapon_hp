<?php get_header(); ?>
<div style="display:none">
<?php
// var_dump($_POST);

// 変数の初期化
$page_flag = 0;
$clean = array();
$error_message = array();

// サニタイズ
if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$clean[$key] = htmlspecialchars( $value, ENT_QUOTES);
	}
}

if( !empty($_POST['btn_confirm']) ) {

	$error_message = validation($clean);

	if( empty($error_message) ) {
		$page_flag = 1;

		// セッションの書き込み
		session_start();
		$_SESSION['page'] = true;
	}


} else {
        $page_flag = 0;
    }

    function validation($data) {

        $error_message = array();

        // いずれかが埋まっていない時
        if( empty($data['your_name'] ||  $data['email'] || $data['datetime_local01'] || $data['datetime_local02'] || ($data['message']) ) ) {
            $error_message[5] = "入力内容に問題があります。\n\n\n確認して再度お試しください。";
        } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $error_message[5] = "入力内容に問題があります。\n\n\n確認して再度お試しください。";
        } 

        // 名前のバリデーション
        if( empty($data['your_name']) ) {
            $error_message[0] = "必須項目に入力してください。";
        }

        // メールアドレスのバリデーション
        if( empty($data['email']) ) {
            $error_message[1] = "必須項目に入力してください。";
        } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $error_message[1] = "正しいメールアドレスを入力してください。";
        } 

        // 第一希望日程のバリデーション
        if( empty($data['datetime_local01']) ) {
            $error_message[2] = "必須項目に入力してください。";
        }

        // 第二希望日程 のバリデーション
        if( empty($data['datetime_local02']) ) {
            $error_message[3] = "必須項目に入力してください。";
        }

        // 問い合わせ内容のバリデーション
        if( empty($data['message']) ) {
            $error_message[4] = "必須項目に入力してください。";
        }
    
        return $error_message;
    } 
    
?>
</div>


<?php if( $page_flag === 1 ): ?>

    <!-- ここに確認ページが入る -->


    <section class="confirm">
            <form method="post" action="/thanks">
                <div class="contact-confirm">
                    <h2>ご入力内容確認</h2>
                    <div class="container">
                        <div class="sub-container">
                            <div class="confirm-content">

                                <div class="flex">
                                    <div class="flex-item">
                                        <p class="text-bold">名前</p>
                                    </div>
                                    <div class="flex-item">
                                        <p><?php echo $_POST['your_name']; ?></p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-item">
                                        <p class="text-bold">メールアドレス</p>
                                    </div>
                                    <div class="flex-item">
                                        <p><?php echo $_POST['email']; ?></p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-item">
                                        <p class="text-bold">第一希望日程</p>
                                    </div>
                                    <div class="flex-item">
                                        <p><?php echo $_POST['datetime_local01']; ?></p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-item">
                                        <p class="text-bold">第二希望日程</p>
                                    </div>
                                    <div class="flex-item">
                                        <p><?php echo $_POST['datetime_local02']; ?></p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="flex-item">
                                        <p class="text-bold">ご相談内容</p>
                                    </div>
                                    <div class="flex-item">
                                        <p id="message"><?php echo nl2br($_POST['message']); ?></p>
                                    </div>
                                </div>
                                <div class="button-content">
                                    <div class="flex confirm-button">
                                            <input class="btn_back" type="button" name="btn_back" value="入力画面に戻る" onclick="history.back()">
                                            <input type="submit" name="btn_submit" value="送信する">
                                    </div>
                                </div>
                                    <input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
                                    <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
                                    <input type="hidden" name="datetime_local01" value="<?php echo $_POST['datetime_local01']; ?>">
                                    <input type="hidden" name="datetime_local02" value="<?php echo $_POST['datetime_local02']; ?>">
                                    <input type="hidden" name="message" value="<?php echo $_POST['message']; ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- ここまで確認ページが入る -->



    <?php else: ?>


    <!-- ここに問い合わせページが入る -->


    <section class="contact">
        <h2>無料カウンセリング<br class="sp">お申込フォーム</h2>
        <div class="container">
            <p>無料カウンセリングでは、当校カウンセラーより、あなたの活動に対するカウンセリングを行い、当校の説明も丁寧に行います。費用は一切かかりませんので、ご安心してお申し込みください。</p>
            <div class="box">
                <div class="flex">
                    <p>面談場所</p>
                    <p>ZOOM</p>
                </div>
                <div class="flex">
                    <p>所要時間</p>
                    <p>60分程度</p>
                </div>
                <p>下記、フォームにご記入頂いた後、当校カウンセラーより連絡を差し上げます。</p>
            </div>
            <?php if(!empty($error_message[5])):?>
                <p class="error_msg_5"><?php echo $error_message[5];?></p>
            <?php endif;?>
            <form method="post" action="">
                <div class="contact-content">

                        <div class="flex-item">
                            <label for="">名前</label>
                            <p>
                                <input class="form-area name" type="text" name="your_name" value="<?php if( !empty($_POST['your_name']) ){ echo $_POST['your_name']; } ?>" placeholder="名前*">
                            </p>
                            <?php if(!empty($error_message[0])):?>
                                <style>
                                    .form-area.name {
                                        border: solid 1px #F5CF00;
                                    }
                                </style>
                                <p class="error_msg"><?php echo $error_message[0];?></p>
                            <?php endif;?>
                        </div>

                        <div class="flex-item">
                            <label for="">メールアドレス</label>
                            <p>
                                <input class="form-area email" name="email" value="<?php if( !empty($_POST['email']) ){ echo $_POST['email']; } ?>" placeholder="メールアドレス*" type="text">
                            </p>
                            <?php if(!empty($error_message[1])):?>
                                <style>
                                    .form-area.email {
                                        border: solid 1px #F5CF00;
                                    }
                                </style>
                                <p class="error_msg"><?php echo $error_message[1];?></p>
                            <?php endif;?>
                        </div>

                        <div class="flex-item">
                            <label for="">第一希望日程 時間</label>
                            <p>
                                <input class="form-area datetime-local" type="datetime-local" name="datetime_local01" value="<?php if( !empty($_POST['datetime_local01']) ){ echo $_POST['datetime_local01']; } ?>" >
                            </p>
                            <?php if(!empty($error_message[2])):?>
                                <style>
                                    .form-area.datetime-local {
                                        border: solid 1px #F5CF00;
                                    }
                                </style>
                                <p class="error_msg"><?php echo $error_message[2];?></p>
                            <?php endif;?>
                        </div>

                        <div class="flex-item">
                            <label for="">第二希望日程 時間</label>
                            <p>
                                <input class="form-area datetime-local" type="datetime-local" name="datetime_local02" value="<?php if( !empty($_POST['datetime_local02']) ){ echo $_POST['datetime_local02']; } ?>" >
                            </p>
                            <?php if(!empty($error_message[3])):?>
                                <style>
                                    .form-area.datetime-local {
                                        border: solid 1px #F5CF00;
                                    }
                                </style>
                                <p class="error_msg"><?php echo $error_message[3];?></p>
                            <?php endif;?>
                        </div>

                        <div class="contact-detail">
                            <label for="">ご相談内容</label>
                            <p>
                                <textarea id="contact_message" class="form-area message" name="message" placeholder="※可能な範囲でご相談内容をご記入ください。"><?php if( !empty($_POST['message']) ){ echo $_POST['message']; } ?></textarea>
                            </p>
                            <?php if(!empty($error_message[4])):?>
                                <style>
                                    #contact_message.form-area.message {
                                        border: solid 1px #F5CF00;
                                    }
                                </style>
                                <p class="error_msg error_contact"><?php echo $error_message[4];?></p>
                            <?php endif;?>
                        </div>

                </div>
                <div class="submit_area">
                    <p>
                        <input type="submit" name="btn_confirm" value="入力内容を確認する">
                    </p>
                </div>
            </form>
        </div>
    </section>

    <!-- ここまで問い合わせページが入る -->

    <?php endif; ?>

    <?php get_footer(); ?>