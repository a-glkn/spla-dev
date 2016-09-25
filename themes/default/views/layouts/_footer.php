    <footer>
        <div class="footer-main">
            <div class="wrapper">
                <div class="footer-menu">
                    <div class="menu-item">
                        <h3><a href="">Услуги</a></h3>
                        <div class="menu">
                            <a href="">Внедрение и аудит ПО</a>
                            <a href="">Коммуникации</a>
                            <a href="">IT инфраструктура</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <h3><a href="">Продукты</a></h3>
                        <div class="menu">
                            <a href="">Программное обеспечение</a>
                            <a href="">Оборудование</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <h3><a href="">Блог</a></h3>
                        <div class="menu">
                            <a href="">Наше оборудование</a>
                        </div>
                    </div>
                    <div class="menu-item">
                        <h3><a href="">Контакты</a></h3>
                        <div class="menu">
                            <p class="cont address">СПб, Бумажная улица, 16</p>
                            <p class="cont phone">+7 (812) 425-12-19</p>
                            <p class="cont e-mail">info@1spla.ru</p>
                        </div>
                        <div class="socials">
                            <a href="" style="background-image: url('<?php echo $this->mainAssets; ?>/images/icon-soc-vk.png')"></a>
                            <a href="" style="background-image: url('<?php echo $this->mainAssets; ?>/images/icon-soc-fb.png')"></a>
                            <a href="" style="background-image: url('<?php echo $this->mainAssets; ?>/images/icon-soc-tw.png')"></a>
                            <a href="" style="background-image: url('<?php echo $this->mainAssets; ?>/images/icon-soc-gp.png')"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="wrapper">
                <p>© 2016. Первый Сервисный Провайдер</p>
            </div>
        </div>
    </footer>

    <div class='notifications top-right' id="notifications"></div>
    <!-- container end -->
    <?php if (Yii::app()->hasModule('contentblock')): ?>
        <?php $this->widget(
            "application.modules.contentblock.widgets.ContentBlockWidget",
            ["code" => "STAT", "silent" => true]
        ); ?>
    <?php endif; ?>

    <?php \yupe\components\TemplateEvent::fire(DefautThemeEvents::BODY_END);?>

</body>
</html>