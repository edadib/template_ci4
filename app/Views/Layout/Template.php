<?= $this->extend($system_setting['layout']) ?>

<?= $this->section('content_dyn') ?>

<?= $this->include($system_setting['page']); ?>

<?= $this->endSection() ?>