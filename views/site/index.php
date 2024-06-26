<?php

/** @var yii\web\View $this */
/** @var app\models\Incoming  $model */
/** @var array $slider */
/** @var array $news */
/** @var array $ratingPlaces */
/** @var array $compilatePlaces */

$this->registerJsFile('web/js/main-slider.js');
$this->registerJsFile('web/js/form.js');

$this->title = 'TopAttractions';
$this->params['meta_description'] = 'Достопримечательности Краснодарского края';
?>

<?= $this->render('blocks-index/slider', ['slider'=> $slider]) ?>
<?= $this->render('news', ['news'=>$news])?>
<?= $this->render('blocks-index/rating-places', ['ratingPlaces'=>$ratingPlaces])?>
<?= $this->render('blocks-index/compilate-places', ['compilatePlaces'=>$compilatePlaces])?>
<?= $this->render('blocks/form', ['model'=>$model])?>
