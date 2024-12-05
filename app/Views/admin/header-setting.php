<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>


<?= $this->extend('admin/admin-layout'); ?>

<?= $this->section('content'); ?>
<div class="content-wrapper">
    <form action="/upload" method="post" enctype="multipart/form-data">
        <label for="file">header logo</label>
        <input type="file" id="file" name="file" required>
        <div id="imagePreview" style="margin-top: 10px;">
            <img id="uploadedImage" src="<?= base_url('uploads/' . basename($filePath)) ?>" alt="Uploaded Image"
                style="max-width: 150px; margin-right: 10px;">
            <span id="removeImage" style="cursor: pointer; color: red; font-size: 18px;">&times;</span>
        </div>
        <button type="submit">Upload</button>
    </form>
</div>

<?= $this->endSection(); ?>