<?php
use app\components\MyWidget;
// $this->title = "Одная статья";
?>
<?php //Данные из вида в шаблон
$this->beginBlock('Block1');
?>
<h1>Заголовок страницы</h1>
<?php $this->endBlock();?>
<h1>Show ACTION</h1>
<?php
// echo MyWidget::widget(['name' => 'Вася']);
?>

<?php MyWidget::begin()?>
<h1>привет ммир1</h1>
<?php MyWidget::end()?>

<?php //debug ($cats); ?>
<?php //echo count($cats->products) ?> <!--products - название метода в ммодели (без get) *Ленивая загрузка* -->
<!-- <?php //echo count($cats[0]->products)?> -->
<!-- <?php ///debug ($cats); ?> -->

<!-- <?php 
    // foreach($cats as $cat){
    //     echo '<ul>';
    //     echo '<li>' . $cat->title . '</li>';
    //     $products = $cat->products;
    //     foreach($products as $product){
    //         echo '<ul>';
    //         echo '<li>' . $product->title . '</li>';
    //         echo '</ul>';
    //     }
    //     echo '</ul>';

    // }
?> -->


<?php /* $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']);*/

use yii\web\View;
?>
<button id="btn" class="btn-success">Click here!</button>
<?php
$this->registerJs("$('.container').append('<p>SHOW!!! jQuery</p>');", View::POS_LOAD);
$this->registerCss('.container{background: #ccc}');
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }

        })
    })
JS;
$this->registerJS($js);
?>