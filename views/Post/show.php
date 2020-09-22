<h1>Show ACTION</h1>
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
            url: 'index/',
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