<div class="fast-consult__block">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="fast-consult">
                <div class="fast-consult__icon">
                    <img src="/images/icon-phone-bg.svg">
                </div>
                <div class="fast-consult__text">
                    <div class="fast-consult__title">Быстрая консультация</div>
                    <a href="tel:<?= preg_replace('/[^0-9\+]/', '', Yii::$app->contactsManager->get('phone_city')) ?>" class="fast-consult__phone"><?= Yii::$app->contactsManager->get('phone_city') ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="fast-consult">
                <div class="fast-consult__icon">
                    <img src="/images/icon-wa.svg">
                </div>
                <div class="fast-consult__text">
                    <div class="fast-consult__title">Ответим на все Ваши вопросы</div>
                    <a href="<?= Yii::$app->contactsManager->get('social_whatsapp') ?>" class="fast-consult__phone"><?= Yii::$app->contactsManager->get('phone_mobile') ?></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="fast-consult__social-icons">
                <?php if ($social_whatsapp = Yii::$app->contactsManager->get('social_whatsapp')):  ?><a href="<?= $social_whatsapp ?>" target="_blank"><img src="/images/icon-wa.svg"></a><?php endif; ?>
                <?php if ($social_telegram = Yii::$app->contactsManager->get('social_telegram')):  ?><a href="<?= $social_telegram ?>" target="_blank"><img src="/images/icon-tg.svg"></a><?php endif; ?>
                <?php if ($social_youtube = Yii::$app->contactsManager->get('social_youtube')):   ?><a href="<?= $social_youtube ?>" target="_blank"><img src="/images/icon-youtube.svg"></a><?php endif; ?>
                <?php if ($social_instagram = Yii::$app->contactsManager->get('social_instagram')): ?><a href="<?= $social_instagram ?>" target="_blank"><img src="/images/icon-instagram.svg"></a><?php endif; ?>
                <?php if ($social_vkontakte = Yii::$app->contactsManager->get('social_vkontakte')): ?><a href="<?= $social_vkontakte ?>" target="_blank"><img src="/images/icon-vk.svg"></a><?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="dblclick-area" data-id="wy4ss6hK" style="margin: 40px 0 0;">loading..</div>

<div class="dblclick-area" data-id="hKs6wy2a" style="margin: 40px 0 0;">loading..</div>
