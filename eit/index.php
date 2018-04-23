<?php include('php/nav_ham.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOOFER เว็บสำหรับคนต้องการหาของหาย</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="assets/logo/icon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=47">
	<link rel="stylesheet" type="text/css" href="css/ham_style.css?v=47">

</head>

<nav id="navbar">
	<a href="index.php"><img src="assets/logo/loofer_b.png" alt="Loofer Logo" class="ghost"></a>
</nav>

<?php include('php/slidebar.php') ?>

<body>

<button id="openPopUp" class="newpost" style="text-decoration: none;color:#00aff0;font-weight: bold;font-size: 2em;"><i class="fas fa-plus"></i> New</button>
<br><br><br><br>


<h2 class="announce1"><strong>RECENT</strong></h2>

<div class="container-fluid">
	<div id="openExUp" class="box-view" style="background:url('assets/item/fade.png') center, url('assets/upload/coBxKa4.jpg') center;">
  		<div class="txt-bottom-left">
  			<h2>ตามหา GPU Card</h2>
  			<p>การ์ดจอ Nvidia ล่าสดุพบที่...</p>
  		</div>
	</div>

  <div id="openExUp" class="box-view" style="background:url('assets/item/fade.png') center, url('assets/upload/coBxKa4.jpg') center;">
      <div class="txt-bottom-left">
        <h2>ตามหา GPU Card</h2>
        <p>การ์ดจอ Nvidia ล่าสดุพบที่...</p>
      </div>
  </div>

	<div class="box-view" style="background:url('https://i.imgur.com/30p4jLR.png') center, url('https://i.imgur.com/coBxKa4.jpg') center;">
  		<div class="txt-bottom-left">
  			<h2>ตามหา GPU Card</h2>
  			<p>การ์ดจอ Nvidia ล่าสดุพบที่...</p>
  		</div>
	</div>
</div>

  <div id="openExUp" class="box-view" style="background:url('assets/item/fade.png') center, url('assets/upload/coBxKa4.jpg') center;">
      <div class="txt-bottom-left">
        <h2>ตามหา GPU Card</h2>
        <p>การ์ดจอ Nvidia ล่าสดุพบที่...</p>
      </div>
  </div>
  
<div style="clear: both;"></div>


<!-- POP UP -->
<div id="MyPopUP" class="popup">

  <!-- Modal content -->
  <div class="popup-content">
    <span class="popup-close" style="color:#fff">&times;</span>
    <h1 style="font-family:'Kanit';width:100%;background:#02a2de;color:#fff;text-align:center;border-radius:15px;padding:0.2em;margin-bottom:0.5em;">New Forum</h1>
    <div class="row">
          
          <div class="col-md-5">
            <section>
            <div class="preview" id="triggerUpload">
              <input type="file" id="filePicker">
  </div>
            
             <form>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" style="background-color:#02a2de;border:0px;color:#fff !important;" id="title">
    </div>
    
    <label for="tag">Tag</label>
                <select class="form-control" style="background-color:#02a2de;border:0px;margin-bottom:8px;color:#fff !important;" id="tag">
                  <option>Unknown</option>
                  <option>Eletronic/Powerbank/Phone/Notebook</option>
                  <option>Card/Credit/Debit/ID</option>
                  <option>Accessory</option>
                  <option>Bag</option>
                </select>

  </form>
          </div>
          <div class="col-md-7">
            <form>
            <div class="form-group">
            <label for="detail">Detail</label>
            <textarea class="form-control" rows="4" style="background-color:#02a2de;border:0px;color:#fff !important;" id="detail"></textarea>

              <div class="form-group">
      <label for="tel">Tel.</label>
      <input type="text" class="form-control" style="background-color:#02a2de;border:0px;color:#fff !important;" id="tel">
    </div>

              <label for="oth_contact">Other contacts</label>
      <input type="text" class="form-control" style="background-color:#02a2de;border:0px;margin-bottom:8px;color:#fff !important;" id="facebook">
              <input type="text" class="form-control" style="background-color:#02a2de;border:0px;margin-bottom:8px;color:#fff !important;" id="line">
    
            </div>
            </form>
            <button type="button" class="btn btn-outline-info" id="newforum">Founded</button>
          
        </div>
      </div>
  
  </div>

</div>

<!-- END POPUP Section -->

<!-- Example-Popup :: The Modal -->
<div id="Example-Popup" class="popup">

  <!-- Modal content -->
  <div class="popup-content">
    <span class="popup-close2" style="color:#fff">&times;</span>
    <h1 style="color:#fff;text-align:left;border-bottom:2px solid #02a2de;margin-top: auto;padding-bottom:0.3em;margin-bottom:0.4em;color:#0079a6;"><strong><i class="fas fa-angle-double-right"></i> ไอตูบหน้าเซเว่นหาย</strong></h1>
    <div class="row">
      <div class="col-lg-5">
        <div class="example-in-box" id="ex-date" style="text-align:center;">
          <b>DD/MM/YYYY</b>
        </div>
        
        <div class="example-in-box" id="ex-image"><img src="http://jacktnp.com/image/cat.jpg" alt="แมวหน้าเซเว่น" style="width:100%;height:auto;border-radius:10px">
          
        </div>

      </div>
      <div class="col-lg-7">
        <div class="example-in-box" id="ex-all">
          <div class="example-in-box in-box" id="ex-datail">
            <b><u><i class="fas fa-align-left"></i> Detail</u></b>
            <br>เมื่อเช้าวานนี้ เวลาประมาณ 6.30 น. หลังผมกลับจากการปั่นโปรเจคที่ Lab คณะ จนขอบตาหมีแพนด้า ผมก็ไปเจอแมวที่ผมเลี้ยงไว้ที่หอ แอบมาหลบในท่อน้ำหน้าเซเว่นหอใน อยากให้เพื่อนๆพี่ๆที่พบเจอแมวน้อย (จริงๆมันชื่อไอตูบ เลยตั้งชื่อว่างี้) สามารถติดต่อผมได้เลยนะครับ ขอบคุณมากครับผม >w<
          </div>
          <div class="example-in-box in-box" id="ex-tel">
            <b><u><i class="fas fa-phone"></i> Tel.</u></b>
            <br>089-7395107
          </div>
          <div class="example-in-box in-box" id="ex-othercontant">
            <b><u>Other contacts.</u></b>
            <br><i class="fab fa-facebook"></i> Thanapon Wongprasert<br>
            <i class="fab fa-line"></i> nostill<br>
            <i class="fab fa-instagram"></i> thanapon.w
          </div>
          
        </div> 
      </div>
    </div>

</div></div>

<!-- Example-END -->


<footer>
	<div class="row">
		<div class="col-lg-2"></div>

		<div class="col-lg-4">
			<img src="assets/logo/loofer_a.png" alt="Loofer" style="width: 100%;">
		</div>
		<div class="col-lg-4">
			<br>
			<p style="font-size: 1.2em;text-align: center;">copyright@2018 by Loofer</p>
		</div>

		<div class="col-lg-2"></div>
	</div>
</footer>

<script type="text/javascript">
    window.onscroll = () => {
    const nav = document.querySelector('#navbar');
    if(this.scrollY <= 10) nav.className = ''; else nav.className = 'scroll';
  };

  (function(){
  'use strict';

  class Menu {
    constructor(settings) {
      this.nodeMenu = settings.nodeMenu;
      settings.nodeMenuButton.addEventListener('click', this.toggle.bind(this));
    }

    toggle() {
      return this.nodeMenu.classList.toggle('js-menu_activated');
    }
  }

  let nodeMenu = document.querySelector('body');
  
  new Menu({
    nodeMenu: nodeMenu,
    nodeMenuButton: nodeMenu.querySelector('.js-menu__toggle')
  });
})();

// Get the modal
var popup = document.getElementById('MyPopUP');
var expop = document.getElementById('Example-Popup');

// Get the button that opens the modal
var btn = document.getElementById("openPopUp");
var ex_btn = document.getElementById("openExUp");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("popup-close")[0];

var span2 = document.getElementsByClassName("popup-close2")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    popup.style.display = "block";
}
ex_btn.onclick = function() {
    expop.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    popup.style.display = "none";
}

span2.onclick = function() {
    expop.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == expop) {
        expop.style.display = "none";
    }
}

/* UPLOAD JS */

var triggerUpload = document.getElementById('triggerUpload'),
    upInput = document.getElementById('filePicker'),
    preview = document.querySelector('.preview');

//force triggering the file upload here...
triggerUpload.onclick = function() {
  upInput.click();
};


upInput.onchange = function(e) {

  var uploaded = this.value,
      ext = uploaded.substring(uploaded.lastIndexOf('.') + 1),
      ext = ext.toLowerCase(),
      fileName = uploaded.substring(uploaded.lastIndexOf("\\") + 1),
      accepted = ["jpg", "png", "gif", "jpeg"];
  
  /*
    ::Add in blank img tag and spinner
    ::Use FileReader to read the img data
    ::Set the image source to the FileReader data
  */
  function showPreview() {
      preview.innerHTML = "<div class='loadingLogo'></div>";
      preview.innerHTML += '<img id="img-preview" />';
      var reader = new FileReader();
      reader.onload = function () {
          var img = document.getElementById('img-preview');
          img.src = reader.result;
      };
      reader.readAsDataURL(e.target.files[0]);
      preview.removeChild(document.querySelector('.loadingLogo'));
      document.querySelector('.fileName').innerHTML = fileName + "<b> Uploaded!</b>";
  };
  
  //only do if supported image file
  if (new RegExp(accepted.join("|")).test(ext)) {
    showPreview();
  } else {
    preview.innerHTML = "";
    document.querySelector('.fileName').innerHTML = "Hey! Upload an image file, not a <b>." + ext + "</b> file!";
  }
  
}

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>