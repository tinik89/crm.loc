<?php

use app\assets\AppAsset;
use app\assets\IeAsset;
use yii\helpers\Html;

AppAsset::register($this);
IeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <?= Html::csrfMetaTags() ?>


	

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>

<body class="login-page">
                    <?php $this->beginBody() ?>
	<div class="page">

		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner"></div>
				</div>
			</div>
		</div>

		<!-- Wrapper -->
		<div class="login-container">
            <?=$content;?>
            <div class="title">Hello!</div>
            <div class="subtitle">Войдите под учетными данными <br />которые вам дали в Pushkin Studio</div>
            <div class="login-form">
                <form id="login-form" method="post">
                    <div class="login-title"><span>Pushkin CRM <em>beta</em></span></div>
                    <div class="group">
                        <div class="field">
                            <input type="text" name="name" placeholder="Логин" required />
                        </div>
                    </div>
                    <div class="group">
                        <div class="field">
                            <input type="password" name="password" placeholder="Пароль" required />
                        </div>
                    </div>
                    <input type="submit" class="submit-btn" value="Вход" />
                </form>
            </div>

		</div>

	</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>