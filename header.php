<?php echo
'
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php"><img src="img/CUfinal.gif"/></a>    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="menu-item"><a href=resume.php>Resume</a></li>
          <li class="menu-item"><a class="dropdown-toggle" data-toggle="dropdown" href="0design.php">Projects</a></li>
          <li class="menu-item"><a href="#" data-toggle="modal" data-target="#contactModal">Contact</a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- Modal -->
<div id="contactModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form id="formobject" role="form" method="post">
            <div class="mail">
                <h1 id="emailme">Shoot me an e-mail!</h1>
                <div class="trigger">
                    <textarea name="name" rows="4" cols="40"></textarea>
                    <p>
                        <button type="submit" name="send" class="send">send</button>
                </div>
                <svg id="check" height="30px" version="1.1" viewBox="0 0 18 15" width="18px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1">
                        <g fill="#000000" transform="translate(-423.000000, -47.000000)">
                            <g transform="translate(423.000000, 47.500000)">
                                <path id="path" d="M6,10.2 L1.8,6 L0.4,7.4 L6,13 L18,1 L16.6,-0.4 L6,10.2 Z"/>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
        </form>
      </div>
    </div>

  </div>
</div>
' ;
?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
}
</script>
<script>
$('.send').on('click', function(){
  $.ajax({
    type: "POST",
    url: "contact.php", // 
    data: $('#formobject').serialize(),
    success: function(msg){
      $("#thanks").html(msg)
      $(".contactModal").modal('hide'); 
    },
    error: function(){
      alert("failure");
    }
  });
});
</script>
<script>
$('.mail').on('click', function() {
  if ($("div").hasClass('active')){
    $('#emailme').css('display', 'block');
    $('.trigger').removeClass('open');
    $('.mail').removeClass('active');
    $('textarea').focus();
  }
  else {
    $('#emailme').css('display', 'none');
    $('.trigger').addClass('open');
    $('.mail').addClass('active');
    $('textarea').focus();
  }
});

</script>