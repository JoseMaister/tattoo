<link href="<?= base_url("template/css/lightbox.css")?>" rel="stylesheet" />

<body>
<div class="gallery_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container heading_center">
        <h2>
          Our Tattoo Gallery
        </h2>

<div class="row">
  <div class="columna">
    <img src="<?= base_url('template/images/gallery/g1.jpg')?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="columna">
    <img src="<?= base_url('template/images/gallery/g2.jpg')?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="columna">
    <img src="<?= base_url('template/images/gallery/g3.jpg')?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="columna">
    <img src="<?= base_url('template/images/gallery/g4.jpg')?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <img src="<?= base_url('template/images/gallery/g1.jpg')?>" style="width:100%">
    </div>

    <div class="mySlides">
      <img src="<?= base_url('template/images/gallery/g2.jpg')?>" style="width:100%">
    </div>

    <div class="mySlides">
      <img src="<?= base_url('template/images/gallery/g3.jpg')?>" style="width:100%">
    </div>
    
    <div class="mySlides">
      <img src="<?= base_url('template/images/gallery/g4.jpg')?>" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>
 </div>
  </div>
  
<script src="<?= base_url("template/js/lightbox.js")?>"></script>

</body>
</html>


































