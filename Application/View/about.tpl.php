<article>
  <ul id="about_accordion">
   <?php if($accordion):?>
    <?php foreach($accordion["tabs"] as $tab):?>
    <li>
   	 <h3 class="accordion_tab">
   	  <?php echo @str_replace("_", " ", $tab["name"]);?>
   	 </h3>
   	 <div class="accordion_content">
   	  <?php App::Load()->view($tab["template"]);?>
   	 </div>
    </li>
    <?php endforeach;?>
   <?php else:?>
   <li>
   	<h3 class="accordion_tab">
     <a>About</a>
   	</h3>
   	<div class="accordion_content">
   	 <p>Content</p>
   	</div>
    </li>
   <li>
   	<h3 class="accordion_tab">
   	 <a>Artist Statement</a>
   	</h3>
   	<div class="accordion_content">
   	 <p>Content</p>
   	</div>
   </li>
   <li>
   	<h3 class="accordion_tab">
   	 <a class="accordion_link">Link</a>
   	</h3>
   	<div class="accordion_content">
   	 <p>Studio</p>
   	</div>
   </li>
  <?php endif;?>
 </ul>
</article>