<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

?>




<div id="mtex_LayoutGrid8">
    <div id="LayoutGrid8">
        <div class="row">
            <!-- Меню категорий -->
            <div class="col-1">
                <div id="mtex_PanelMenu1">
                    <a href="#PanelMenu1_markup" id="PanelMenu1">КАТАЛОГ</a>
                    <div id="PanelMenu1_markup">
                        <!-- Вызов виджета меню -->
                        <ul class="catalog">
                            <?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
                        </ul>

                    </div>
                </div>
            </div>
            <!-- Конец меню категорий -->
            <div class="col-2">
                <div id="wb_LayoutGrid14">
                    <div id="LayoutGrid14">
                        <div class="row">
                            <div class="col-1">
                                <div id="wb_Text16">
                                    <span id="wb_uid3"><strong>ТЭДДИ РОЗОВЫЕ</strong></span>
                                </div>
                                <hr id="Line10">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="wb_LayoutGridforeach" class="form-row number-range-combi show-activevaluetooltip">
                    <form name="form" method="post" action="send.php" accept-charset="UTF-8" id="LayoutGridforeach" class="form-row number-range-combi show-activevaluetooltip">
                        <div class="row">
                            <div class="col-1">
                                <hr id="Line7">
                                <div id="wb_PhotoGallery1">
                                    <div id="PhotoGallery1">
                                        <div class="thumbnails">
                                            <div class="thumbnail">
                                                <a href="/images/19933247_144911686086542_5564267927403757568_n.jpg" data-rel=""><img alt="" src="/images/19933247_144911686086542_5564267927403757568_n.jpg"></a>
                                            </div>
                                            <div class="clearfix visible-col1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <hr id="Line8">
                                <div id="wb_Text21">
                                    <span id="wb_uid4"><strong>Тедди розовые</strong></span>
                                </div>
                                <div id="wb_Text5">
                                    <span id="wb_uid5">Артикул: 436545353</span>
                                </div>
                                <div id="wb_Text1">
                                    <span id="wb_uid6">Категория: ХЛОПОК</span>
                                </div>
                                <div id="wb_Text18">
                                    <span id="wb_uid7"><strong>56 РУБ.</strong></span>
                                </div>
                                <div id="wb_Text3">
                                    <span id="wb_uid8">Количество Мx:</span>
                                </div>
                                <input type="range" id="Editbox2" name="Editbox2" value="0.5" step="0.5" max="100" min="0.5">
                                <input type="number" id="Editbox3" name="Editbox2" value="0.5" maxlength="1" step="0.5" max="100" min="0.5">
                                <div id="wb_Text4">
                                    <span id="wb_uid9">(хлопок 100%) <br>в наличии 250р/м<br>при покупке от 3х м 230р/м </span>
                                </div>
                                <input type="submit" id="Button2" name="" value="В корзину">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>