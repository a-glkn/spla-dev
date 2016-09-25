<?php
Yii::import('application.modules.menu.components.YMenu');


$out = '<button class="menu-spoiler">
                    <i></i> <i></i> <i></i>
                </button>';
$out .= '<nav class="main-menu">';

foreach ($this->params['items'] as $item) {
    // $url = Yii::app()->urlManager->createUrl($item['url']);
    $url = $item['url'];
    $out .= '<a href="' . $url . '">' . $item['label'] . '</a>';
}

$out .= '</nav>';

echo $out;