<?= $this->extend('frontend/layouts/main') ?>


<?= $this->section('content') ?>

<?= view_cell("\App\Libraries\HomeWidget::slider") ?>

<?= view_cell("\App\Libraries\HomeWidget::promotion") ?>
<?= view_cell("\App\Libraries\HomeWidget::category") ?>
<?= view_cell("\App\Libraries\HomeWidget::favoritecategory") ?>

<?= view_cell("\App\Libraries\HomeWidget::tag") ?>


<?= view_cell("\App\Libraries\HomeWidget::feature") ?>

<?= $this->endSection() ?>



<?= $this->section("script") ?>


<?= $this->endSection() ?>