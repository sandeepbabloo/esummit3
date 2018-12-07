
<section id="section2" class="cd-section">

<div class="content">
<div class="card"><!-- Face 2 -->
  <div class="card-face face-2"><!-- Back trigger -->
    <button class="card-face__back-button" data-card-back="data-card-back"><img src="http://imgh.us/arrow_1.svg" width="19" height="19" draggable="false"/></button><img class="card-face__stats" src="http://imgh.us/Likes.png" width="100" height="100" draggable="false"/><img class="card-face__stats" src="http://imgh.us/Followers.png" width="100" height="100" draggable="false"/><img class="card-face__stats" src="http://imgh.us/Views.png" width="100" height="100" draggable="false"/><!-- Settings Button --><img class="card-face__settings-button" src="http://imgh.us/cog.svg" width="17" height="17" draggable="false"/>
  </div><!-- Face 1 -->
  <div class="card-face face-1"><!-- Menu trigger -->
    <button class="card-face__menu-button" data-card-menu="data-card-menu"><img src="http://imgh.us/dots_1.svg" width="5" height="23" draggable="false"/></button><!-- Avatar -->
    <div class="card-face__avatar"><!-- Bullet notification --><span class="card-face__bullet">2</span><!-- User avatar -->
      <img src="https://s3.amazonaws.com/uifaces/faces/twitter/csswizardry/128.jpg" width="110" height="110" draggable="false"/></div><!-- Name -->
    <h2 class="card-face__name">Mattia Astorino</h2><!-- Title --><span class="card-face__title">Web Designer & Developer</span><!-- Cart Footer -->
    
    <div class="card-face-footer"><a class="card-face__social" href="https://dribbble.com/astorino_mattia" target="_blank"><img src="http://imgh.us/dribbble.svg" width="36" height="36" draggable="false"/></a><a class="card-face__social" href="https://www.behance.net/mattia_astorino" target="_blank"><img src="http://imgh.us/beh.svg" width="36" height="36" draggable="false"/></a><a class="card-face__social" href="https://plus.google.com/u/0/+MattiaAstorino/posts" target="_blank"><img src="http://imgh.us/plus_5.svg" width="36" height="36" draggable="false"/></a></div>
    <button id="seven" class="button">click</button>
  </div>

</div>
  
</div>
<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <!-- <div class="cont_principal"> -->
<div class="cont_central">

  <div class="cont_modal cont_modal_active">
    
  <div class="cont_photo">
<div class="cont_img_back">
    <img src="https://s-media-cache-ak0.pinimg.com/736x/57/98/9f/57989f2a2e186e38bf93429aa395120c.jpg" alt="" />
    </div>
<div class="cont_mins">
    <div class="sub_mins">
  <h3>50</h3>
<span>MINS</span>
  </div>
  <div class="cont_icon_right">
<a href="#">  <i class="material-icons">&#xE8E7;</i></a>
  </div>
    </div>
<div class="cont_servings">
      <h3>4</h3>
<span>SERVINGS</span>
    </div>
<div class="cont_detalles">
    <h3>Shakshuka With Feta</h3>
<p>orem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis est est aliquam, sed faucibus massa lobortis. Maecenas non est justo.</p>
    </div>
    </div>

<div class="cont_text_ingredients">
<div class="cont_over_hidden">
      <span style="float:right;color:white;font-size:50px;cursor:pointer" id="close">&times</span>
  <div class="cont_tabs">
  <ul>
    <li><a href="#"><h4>INGREDIENTS</h4></a></li>
    <li><a href="#"><h4>PREPARATION</h4></a></li>
  </ul>  
  </div>
   
  <div class="cont_text_det_preparation">
  <div class="cont_title_preparation">
    <p>STEP 1</p>
    </div>
  <div class="cont_info_preparation">
    <p>Heat oven to 375 degress</p>
    </div>  
  <div class="cont_text_det_preparation">

  <div class="cont_title_preparation">
    <p>STEP 2</p>
    </div>
  <div class="cont_info_preparation">
    <p>Heat oil in a large skillet over medium-low head. Add onion and bell papper. Cook gently until very soft, about 20 minutes. Add garlic and cook until tender, 1 to 2 minutes; stir in cumin, paprika and cook 1 minute. Pour in tomatoes and season with 3/4 teaspoon salt and 1/4 teaspoon pepper;</p>
    </div> 
  
  </div>
</div>  
  <div class="cont_btn_mas_dets">
  <a href="#"><i class="material-icons">&#xE313;</i></a>
  </div>
    
  </div>
  <div class="cont_btn_open_dets">
  <a href="#e" onclick="open_close()"><i class="material-icons">&#xE314;</i></a>
  </div>

    </div>
   </div>
</div>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
                <rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
              </svg>
    </div>
    <!-- <span style="float:right;color:white;font-size:50px;cursor:pointer;z-index:5000" id="close">&times</span> -->
  </div>

</div>
</section>
<script src="../card9/js/index.js"></script>
<script src="../card10/js/index.js"></script>
<script>
    $('.button').click(function(){
  var buttonId = $(this).attr('id');
  $('#modal-container').removeAttr('class').addClass(buttonId);
  $('body').addClass('modal-active');
  open_close();
})

$('#close').click(function(){
  $('#modal-container').addClass('out');
  $('body').removeClass('modal-active');
  close();
});

</script>