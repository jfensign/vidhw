
<ul id="gallery_list">
<?php if($gallery):?>
 <?php foreach($gallery["images"] as $img):?>
 <li>
  <figure>
   <img src="<?php echo $image_path . $img['src'];?>" alt="<?php echo $img['name'];?>" />
  </figure>
 </li>
 <?php endforeach;?>
<?php endif;?>
</ul>
