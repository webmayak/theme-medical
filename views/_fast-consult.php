<div class="fast-consult__block">
    <div class="row">
		<div class="col-md-4">
			<div class="fast-consult">
	    		<div class="fast-consult__icon">
					<img src="/images/icon-phone-bg.svg">
	    		</div>
	    		<div class="fast-consult__text">
	        		<div class="fast-consult__title">Быстрая консультация</div>
	        		<a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->settings->get('phone_city', 'contacts')) ?>" class="fast-consult__phone"><?= Yii::$app->settings->get('phone_city', 'contacts') ?></a>
	        	</div>
	        </div>
		</div>
		<div class="col-md-4">
			<div class="fast-consult">
	    		<div class="fast-consult__icon">
	    			<img src="/images/icon-wa.svg">
	    		</div>
	    		<div class="fast-consult__text">
	        		<div class="fast-consult__title">Ответим на все Ваши вопросы</div>
	        		<a href="<?= Yii::$app->settings->get('social_whatsapp', 'contacts') ?>" class="fast-consult__phone"><?= Yii::$app->settings->get('phone_mobile', 'contacts') ?></a>
	        	</div>
	        </div>
		</div>
		<div class="col-md-4">
			<div class="fast-consult__social-icons">
	    		<a href="<?= Yii::$app->settings->get('social_facebook', 'contacts') ?>" target="_blank"><img src="/images/icon-fb.svg"></a>
	    		<a href="<?= Yii::$app->settings->get('social_youtube', 'contacts') ?>" target="_blank"><img src="/images/icon-youtube.svg"></a>
	    		<a href="<?= Yii::$app->settings->get('social_instagram', 'contacts') ?>" target="_blank"><img src="/images/icon-instagram.svg"></a>
	    		<a href="<?= Yii::$app->settings->get('social_vkontakte', 'contacts') ?>" target="_blank"><img src="/images/icon-vk.svg"></a>
			</div>
		</div>
	</div>
</div>
