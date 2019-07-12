<?php

/*
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:FormTheme:form_simple.html.php');

?>
<?php
$view['slots']->start('primaryFormContent');
/** @var \MauticPlugin\MauticSqlConditionsBundle\Entity\SqlConditionsltiple $sqlConditions */
$sqlConditions = $entity;
$types    = ['plugins', 'themes', 'translations', 'assets'];
?>
<style>
    .btn-apply {display:none }
</style>

<div class="row">
    <div class="col-md-6">
        <?php echo $view['form']->row($form['name']); ?>
    </div>
    <div class="col-md-6">
        <?php echo $view['form']->row($form['isPublished']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php echo $view['form']->row($form['sqlQuery']); ?>
    </div>
</div>

<div class="ide">
    <?php echo $view['form']->rest($form); ?>
</div>


<?php $view['slots']->stop(); ?>

