<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */

use budyaga\cropper\Widget;
$route = "article/set-image?id=$article_id";
?>


<a class="btn btn-success" href="/article/view?id=<?=$article_id?>">Save Image</a>
<?php $form = ActiveForm::begin(['id' => 'form-profile']); ?>
<?php echo $form->field($model, 'image')->widget(Widget::className(), [
    'uploadUrl' => Url::toRoute($route),
    'width' => 1600,
    'height' => 718
]) ?>
<?php ActiveForm::end(); ?>


