<!-- header section start -->
<div class="header_section" id="myHeader" style="z-index: 9999;">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <a class="navbar-brand" href="index.html"><img id="logo" width="200px" height="75px"
                    src="{{ asset('style/images/logo.png') }}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Instalasi Gas Medis</a></li>
                            <li><a class="dropdown-item" href="#">Alat Kesehatan</a></li>
                            <li><a class="dropdown-item" href="#">Interior Rumah Sakit</a></li>
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

<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {
        myFunction()
    };

    // Get the header
    var header = document.getElementById("myHeader");

    // Get the offset position of the navbar
    var sticky = header.offsetTop;

    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
         document.getElementById("logo").style.width = "130px"
      } else {
         document.getElementById("logo").style.width = "200px"
      }
      
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<!-- header section end -->
