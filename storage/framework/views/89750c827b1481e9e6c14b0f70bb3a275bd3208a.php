<?php echo e(config('app.name')); ?>株式会社
ご担当者様

私は<?php echo e($name); ?>です
<?php if(!empty($phone)): ?>
電話番号は以下になります
<?php echo e($phone); ?>

<?php endif; ?>
以下の内容を確認させていただきます
<?php echo e($content); ?>


以上、よろしくお願いいたします。