<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();
echo $form->field($model, 'name')->label('Your Name');
echo $form->field($model, 'email')->label('Your Email');

?>
<div class="form-group">
    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
</div>

<?php ActiveForm::end(); ?>
