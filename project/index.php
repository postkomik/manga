<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <style>
    ​#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  center: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}
</style>
    </head>
    
    <body>
        <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script> 
   <div class="header">
          <div class="container">
              <div class="text-center" ><p><a href="https://postkomik.blogspot.com/">POSTKOMIK</a></p></div>
             
          </div>
          <style>
         .header {
  background-color: white;
  padding: 10px;
  font-size:25px;
  
}
img{
    width: 100%;
    height: auto;
} 
          </style>
      </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="https://postkomik.blogspot.com/">Home</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pilihan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://postkomik.blogspot.com/search/label/manga">Manga</a>
          <a class="dropdown-item" href="https://postkomik.blogspot.com/search/label/manhwa">Manhwa</a>
          <a class="dropdown-item" href="https://postkomik.blogspot.com/search/label/manhua">Manhua</a>
          <div class="dropdown-divider"></div>
      <li class="nav-item active">
        <a class="nav-link" href="https://postkomik.blogspot.com/search/label/ongoing">On going<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
          <a class="nav-link" href="https://postkomik.blogspot.com/search/label/tamat">Tamat<span class="sr-only">(current)</span></a>
      </li>
    </ul>
   
  </div>
        </div>
</nav>
<div class="jumbotron">
      <div class="container">
                                            <!--- Isi konten---->
                                         
 
  
  
   <?php
       
 

$dir_path = "folder/";
$extensions_array = array('jpg','png','jpeg','JPEG');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
          //  echo "File Name -> $files[$i]<br>";
            
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
          //  echo "File Extension-> $extension<br>";
            
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
            echo "<img src='$dir_path$files[$i]' "
                    . "style='"
                    . "width:100%;"
                    . "height:auto;"
                    . "background-color: white;"
                    . "margin:10px auto;"
                    . "'><br>";
            }
        }
    }
}
          


// put your code here
        ?>
  
                                  
</div>  
      
  </div>   
<div id="disqus_thread" class="container"></div>
<center><button><img src="http://2.bp.blogspot.com/-ePqbjiLEGEI/TivrqfGbPvI/AAAAAAAAEZE/cFdcqMze9Bw/s400/Top.png" onclick="topFunction()" id="myBtn" title="Go to top"/></button></center>
<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://pokomanga.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript><a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<div class="footer">
          
         <div class="container">
             
                       
             <div class="text-center" ><p><a href="https://postkomik.blogspot.com/">PostKomik</a></p></div>
             
          </div>
          <style>
         .footer {
  background-color: black;
  padding: 10px;
  font-size:20px;
  
}
      </style> 
          
      </div>  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
       
    </body>
</html>
