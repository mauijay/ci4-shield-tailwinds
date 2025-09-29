<input type="checkbox" id="<?= $id ?>" class="modal-toggle" />
<div class="modal" role="dialog">
  <div class="modal-box max-w-[50rem] bg-white text-gray-800">
    <h3 class="font-bold text-lg text-center text-gray-900"><?= $title ?></h3>

    <?php if ($schedule): ?>
      <div class="text-justify flex flex-col text-gray-700 mb-4">
        <span><strong class="text-gray-900">Schedule:</strong></span>
        <span><?= $schedule ?></span>
      </div>
    <?php endif; ?>

    <div class="flex flex-col text-justify whitespace-pre-line text-gray-700">
      <strong class="text-gray-900"><?= $section1Title ?>:</strong>
      <?= $section1Content ?>

      <div class="mt-4">
        <strong class="text-gray-900"><?= $section2Title ?>:</strong>
        <?= $section2Content ?>
      </div>
    </div>

    <div class="modal-action justify-center">
      <label for="<?= $id ?>" class="btn btn-outline btn-error">Close</label>
    </div>
  </div>
</div>