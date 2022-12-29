<?php
    $midias_sociais = [
    'facebook' => 'https://www.facebook.com/',
    'twitter' => 'https://twitter.com/',
    'instagram' => 'https://www.instagram.com/',
    'youtube' => 'https://www.youtube.com/',
    'linkedin' => 'https://www.linkedin.com/',
    'whatsapp' => 'https://api.whatsapp.com/'
    ];
foreach($midias_sociais as $ind => $url){
?>
<div class="form-floating mb-3">
  <div class="input-group mb-3">
    <!-- <div class="input-group-text">
      <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
    </div> -->
    <div class="input-group-text">
      <?=$url?>
    </div>
    <input name=midias[<?=$ind?>] id="midias<?=$ind?>" value="<?=$midias->$ind?>" type="text" class="form-control" aria-label="Text input with checkbox">
  </div>
</div>
<?php
}
?>