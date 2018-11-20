<?php
    use yii\helpers\Html;

    $this->beginPage();
?>
<!Doctype html>
<html xmlns=http://www.w3.org/1999/xhtml>
<?php
    $this->beginContent('@app/views/layouts/head.php');
    $this->endContent();
?>
    <body>
        <?php
           // $this->beginContent('@app/views/layouts/search.php');
           // $this->endContent();
        ?>
        <?php
            $this->beginContent('@app/views/layouts/nav.php');
            $this->endContent();
        ?>
        <?php $this->beginBody(); ?>
        <div class="container main">
            <div class="row">
                <?=$content?>
            </div>
        </div>
        <?php $this->endBody(); ?>
        <?php
            $this->beginContent('@app/views/layouts/foot.php');
            $this->endContent();
        ?>
    </body>
</html>
<?php
    $this->endPage();
?>
