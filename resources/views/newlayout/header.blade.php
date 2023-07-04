<!-- header section start -->
<div class="header_section sticky-top">
    <div class="container">
       <nav class="navbar navbar-expand-lg navbar-light bg-light ">
         <a class="navbar-brand" href="index.html"><img id="logo" width="200px" height="75px" src="{{ asset('style/images/logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link" href="index.html">Berand</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="about.html">Tentang</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Produk
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="gallery.html">Pengalaman</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="client.html">Galeri</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Berita</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Hubungi Kami</a>
                </li>
             </ul>
             <form class="form-inline my-2 my-lg-0">
             </form>
          </div>
       </nav>
    </div>
 </div>
{{-- 
 <script>
   window.onscroll = function() {scrollFunction()};
   
   function scrollFunction() {
     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
       document.getElementById("logo").width = "150px";
       document.getElementById("logo").heigth = "60px";
     } else {
      document.getElementById("logo").width = "200px";
       document.getElementById("logo").heigth = "75px";
     }
   }
   </script> --}}
 <!-- header section end -->