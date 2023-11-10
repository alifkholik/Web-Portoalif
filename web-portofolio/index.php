<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <title>Portofolio Alif Kholik</title>
  </head>
  <body class="bg-black font-['montserrat'] h-[300vh]">
    <!-- Navbar mobile-->
    <nav class="navbar cursor-pointer md:hidden" id="navbar">
      <div class="navbar-toggle" id="navbar-toggle" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <div class="navbar-menu" id="navbar-menu">
        <a class="hover:text-[#49edc2]" href="#AboutPersonal">About Personal</a>
        <a class="hover:text-[#49edc2]" href="#MyServices">My Services</a>
        <a class="hover:text-[#49edc2]" href="#MyPortofolio">My Portofolio</a>
        <a class="hover:text-[#49edc2]" href="#ContactMe">Contact Me</a>
      </div>
    </nav>
    <!-- navbar Closed -->
    <!-- Navbar dekstop-->
    <nav class="[&_li]:cursor-pointer w-full h-16 backdrop-blur-sm z-50 md:flex items-center justify-center hidden" id="navbarpc">
      <ul class="font-normal text-white md:flex hidden gap-16 justify-center items-center">
        <li class="hover:text-[#49edc2]"><a href="#AboutPersonal">About Personal</a></li>
        <li class="hover:text-[#49edc2]"><a href="#MyServices">My Service</a></li>
        <li class="hover:text-[#49edc2]"><a href="#MyPortofolio">My Portofolio</a></li>
        <li class="hover:text-[#49edc2]"><a href="#ContactMe">Contact Me</a></li>
      </ul>
    </nav>

    <!-- Navbar dekstop closed-->
    <!-- About Personal -->
    <div class="header text-center" id="AboutPersonal">
      <div class="header px-10 pt-5 relative">
        <div class="w-56 h-56 md:w-72 md:h-72 rounded-full m-auto overflow-hidden [&_img]:pt-5"><img src="photo/myphoto.jpg " alt="photo profil" /></div>
      </div>
      <div class="title px-12 mt-8">
        <h1 class="text-[#49EDC2] text-xs my-3 tracking-widest">ABOUT PERSONAL</h1>
        <h2 class="text-white text-3xl md:text-5xl font-semibold">
          Hello, Im Alif <br />
          <span class="text-[#49EDC2]">Kholik Mauluddin</span>
        </h2>
        <div class="garisjudul w-20 h-[2px] bg-[#49EDC2] m-auto mt-3"></div>
        <div class="aboutme text-white text-sm mt-7 md:px-20">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam mollitia accusamus sapiente quos vitae iure cupiditate error dignissimos atque expedita qui, esse corporis repellendus? Quas quidem, totam odit nam, nostrum quis
            quisquam, voluptatem distinctio quo unde officia Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non accusantium animi doloremque atque rem aspernatur distinctio cum provident numquam, corrupti reprehenderit quos ea
            alias minima cumque praesentium aperiam. Eveniet officiis nemo debitis ipsum laboriosam, velit illo libero veritatis cum ratione Lorem ipsum dolor sit amet.
          </p>
        </div>
        <div class="sosmed flex px-12 pt-5 gap-5 justify-center">
          <a href="https://www.instagram.com/alif_kholik19/" target="_blank"><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="ant-design:instagram-filled" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="mdi:facebook" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="bi:twitter" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="mingcute:linkedin-fill" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="ri:youtube-fill" data-width="23" data-height="23"></span></a>
        </div>
      </div>
    </div>
    <!-- About Personal Closed -->
    <!-- My Services -->
    <div class="software flex px-12 mt-5 py-2 transition-all [&>div>h4]:opacity-0 justify-center gap-5 items-center bg-gradient-to-r from-[#40CBD006] to-[#49EDC236]" id="MyServices">
      <div class="photoshop flex items-center text-sm [&>h4]:hover:opacity-100 [&_h4]:hover:translate-x-12 [&_h4]:transition-all [&_h4]:duration-500 [&_h4]:absolute hover:w-32 [&_4]:hover:text-[#49edc2]">
        <span class="iconify" data-icon="simple-icons:adobephotoshop" style="color: #fff" data-width="40" data-height="40"></span>
        <h4 class="font-semibold text-white">Adobe <br />Photoshop</h4>
      </div>
      <div class="Premier Pro flex items-center text-sm [&>h4]:hover:opacity-100 [&_h4]:hover:translate-x-14 [&_h4]:transition-all [&_h4]:duration-500 [&_h4]:absolute hover:w-40">
        <span class="iconify" data-icon="basil:adobe-premiere-solid" style="color: #fff" data-width="53" data-height="53"></span>
        <h4 class="font-semibold text-white">Adobe <br />Premier Pro</h4>
      </div>
      <div class="After Effect flex items-center text-sm [&>h4]:hover:opacity-100 [&_h4]:hover:translate-x-12 [&_h4]:transition-all [&_h4]:duration-500 [&_h4]:absolute hover:w-32">
        <span class="iconify" data-icon="simple-icons:adobeaftereffects" style="color: #fff" data-width="40" data-height="40"></span>
        <h4 class="font-semibold text-white">Adobe <br />After Effect</h4>
      </div>
      <div class="Corel Draw flex items-center text-sm [&>h4]:hover:opacity-100 [&_h4]:hover:translate-x-12 [&_h4]:transition-all [&_h4]:duration-500 [&_h4]:absolute hover:w-32">
        <span class="iconify" data-icon="file-icons:coreldraw-alt" style="color: #fff" data-width="40" data-height="40"></span>
        <h4 class="font-semibold text-white">Corel <br />Draw</h4>
      </div>
      <div class="Figma flex items-center text-sm [&>h4]:hover:opacity-100 [&_h4]:hover:translate-x-12 [&_h4]:transition-all [&_h4]:duration-500 [&_h4]:absolute hover:w-32">
        <span class="iconify" data-icon="cib:figma" style="color: #fff" data-width="40" data-height="40"></span>
        <h4 class="font-semibold text-white">Adobe <br />figma</h4>
      </div>
    </div>
    <div class="myservices">
      <div class="title text-center mt-10">
        <h1 class="text-[#49EDC2] text-xs my-3 tracking-widest">MY SERVICES</h1>
        <h2 class="text-white text-5xl font-semibold">What I <span class="text-[#49EDC2]">Do.</span></h2>
        <div class="garisjudul w-20 h-[2px] bg-[#49EDC2] m-auto mt-3"></div>
      </div>
      <div class="skills flex mb-10 flex-wrap [&_div]:bg-[#49EDC226] [&_div]:w-[200px] [&_div]:p-5 gap-5 md:gap-10 justify-center mt-8 md:[&_div]:h-64 md:[&_div]:w-64 [&_div]:rounded-2xl">
        <div class="hover:-translate-y-3 transition-all text-white flex flex-col items-center gap-2 py-3">
          <span class="iconify md:w-20 md:h-20" data-icon="icon-park-outline:graphic-design" style="color: #49edc2" data-width="34" data-height="34"></span>
          <h6 class="text-xs md:text-xl font-medium">Graphic Design</h6>
          <p class="text-[9px] md:text-[12px] font-extralight text-center px-4 text-[#ffffff80]">Berpengelaman selama 3 tahun di beberapa perusahaan dan lembaga Lorem ipsum dolor sit consectetur adipisicing elit. Minus, ipsam.</p>
        </div>
        <div class="hover:-translate-y-3 transition-all text-white flex flex-col items-center gap-2 py-3">
          <span class="iconify md:w-20 md:h-20" data-icon="arcticons:youcutvideoeditor" style="color: #49edc2" data-width="34" data-height="34"></span>
          <h6 class="text-xs md:text-xl font-medium">Video Editor</h6>
          <p class="text-[9px] md:text-[12px] font-extralight text-center px-4 text-[#ffffff80]">Berpengelaman selama 2 tahun di lembaga pendidikan islam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, reiciendis.</p>
        </div>
        <div class="hover:-translate-y-3 transition-all text-white flex flex-col items-center gap-2 py-3">
          <span class="iconify md:w-20 md:h-20" data-icon="streamline:image-camera-1-photos-picture-camera-photography-photo-pictures" style="color: #49edc2" data-width="34" data-height="34"></span>
          <h6 class="text-xs md:text-xl font-medium">Photographer</h6>
          <p class="text-[9px] md:text-[12px] font-extralight text-center px-4 text-[#ffffff80]">Berpengelaman selama 2 tahun di lembaga pendidikan islam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, veritatis.</p>
        </div>
        <div class="hover:-translate-y-3 transition-all text-white flex flex-col items-center gap-2 py-3">
          <span class="iconify md:w-20 md:h-20" data-icon="fluent:video-32-regular" style="color: #49edc2" data-width="34" data-height="34"></span>
          <h6 class="text-xs md:text-xl font-medium">Videographer</h6>
          <p class="text-[9px] md:text-[12px] font-extralight text-center px-4 text-[#ffffff80]">Berpengelaman selama 2 tahun di lembaga pendidikan islam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, labore.</p>
        </div>
      </div>
    </div>
    <!-- My Services Closed -->
    <!-- My Portofolio -->
    <div class="containerporto w-full h-fit bg-[#101010] py-16 px-5 scroll-smooth" id="MyPortofolio">
      <div class="titleporto">
        <h2 class="text-white text-center text-3xl font-semibold">My <span class="text-[#49EDC2]">Portofolio</span></h2>
        <div class="garisjudul w-20 h-[2px] bg-[#49EDC2] m-auto mt-3"></div>
      </div>
      <div class="filter-buttons flex flex-wrap gap-2 justify-center mt-7 text-white text-md">
        <button onclick="filterGallery('all')" class="px-4 py-1 rounded-lg bg-[#212121] text-white hover:bg-[#303030] focus:bg-white focus:text-[#212121] transition-colors">All</button>
        <button onclick="filterGallery('graphicdesign')" class="px-4 py-1 rounded-lg bg-[#212121] text-white hover:bg-[#303030] focus:bg-white focus:text-[#212121] transition-colors">Graphic Design</button>
        <button onclick="filterGallery('videoeditor')" class="px-4 py-1 rounded-lg bg-[#212121] text-white hover:bg-[#303030] focus:bg-white focus:text-[#212121] transition-colors">video editor</button>
        <button onclick="filterGallery('photographer')" class="px-4 py-1 rounded-lg bg-[#212121] text-white hover:bg-[#303030] focus:bg-white focus:text-[#212121] transition-colors">photographer</button>
        <button onclick="filterGallery('videographer')" class="px-4 py-1 rounded-lg bg-[#212121] text-white hover:bg-[#303030] focus:bg-white focus:text-[#212121] transition-colors">videographer</button>
      </div>

      <div class="group/item gallery grid grid-cols-2 md:grid-cols-3 gap-4 mt-5 [&>div]:overflow-hidden [&>div]:rounded-lg [&_img]:transition-all [&_img]:duration-500">
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-75 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="" data-tags="graphicdesign" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" data-tags="graphicdesign" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="" data-tags="graphicdesign" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="" data-tags="videoeditor" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="" data-tags="videoeditor" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="" data-tags="videoeditor" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="" data-tags="photographer" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="" data-tags="photographer" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="" data-tags="photographer" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="" data-tags="videographer" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-10.jpg" alt="" data-tags="videographer" />
        </div>
        <div class="relative [&_div]:hover:opacity-100 [&_div]:hover:translate-y-0">
          <div class="h-12 absolute w-full bottom-0 px-5 font-semibold text-white z-10 [&_p]:pt-2 translate-y-10 transition-all duration-500">
            <p>Graphic Design</p>
          </div>
          <img class="hover:opacity-50 hover:scale-110 hover:rotate-3 duration-300 transition-all h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-11.jpg" alt="" data-tags="videographer" />
        </div>
      </div>
    </div>

    <!-- My Portofolio Closed -->
    <!-- Footer / Contact Me -->
    <div class="footer bg-gradient-to-r from-[#40CBD006] to-[#49EDC226] pt-10 pb-5 px-16 flex flex-col md:flex-row justify-center gap-5 md:justify-between" id="ContactMe ">
      <div class="rounded-3xl overflow-hidden">
        <div class="maps">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63374.29270313766!2d107.6019579057!3d-6.903362472147581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1696565993318!5m2!1sid!2sid"
            width="720"
            height="300"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      <div class="contactme flex flex-col justify-between items-center md:items-start" id="ContactMe">
        <h6 class="text-3xl font-semibold pb-3 text-white">Contact <span class="text-[#49EDC2]">Me</span></h6>
        <div class="garisjudul w-20 h-[2px] bg-[#49EDC2]"></div>
        <div class="pesan pt-5">
          <form action="" class="flex flex-col">
            <input class="outline-none text-sm rounded-md px-3 py-[3px] w-64 bg-[#ffffff50] mb-3 placeholder:text-[#ffffff30] text-white" type="email" name="email" id="email" placeholder="example@gmail.com" />
            <textarea class="outline-none resize-y text-sm rounded-md px-3 py-[3px] w-64 bg-[#ffffff50] placeholder:text-[#ffffff30] text-white" id="subject" name="subject" placeholder="Write something.." style="height: 100px"></textarea>
          </form>
        </div>
        <input class="bg-[#ffffff50] cursor-pointer hover:bg-white hover:text-[#101010] my-3 px-4 py-[5px] w-fit rounded-md text-sm text-[#49EDC2] font-medium" type="submit" value="Submit" />
      </div>
      <div class="halaman text-white flex flex-col justify-between items-center md:items-start">
        <h6 class="text-3xl font-semibold pb-3 text-center md:text-start">What Do <br /><span class="text-[#49edc2]">You Need?</span></h6>
        <div class="garisjudul w-20 h-[2px] bg-[#49EDC2] mb-3"></div>
        <table>
          <tr class="flex flex-col [&_th]:font-light [&_th]:text-center md:[&_th]:text-start text-sm gap-2">
            <th class="hover:text-[#49dec2]"><a href="#AboutPersonal">About Personal</a></th>
            <th class="hover:text-[#49dec2]"><a href="#MyServices">My Services</a></th>
            <th class="hover:text-[#49dec2]"><a href="#MyPortofolio">My Portofolio</a></th>
            <th class="hover:text-[#49dec2]"><a href="#ContactMe">Contact Me</a></th>
          </tr>
        </table>
        <div class="sosmed flex pt-5 gap-5">
          <a href="https://www.instagram.com/alif_kholik19/" target="_blank"><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="ant-design:instagram-filled" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="mdi:facebook" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="bi:twitter" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="mingcute:linkedin-fill" data-width="23" data-height="23"></span></a>
          <a href=""><span class="iconify hover:text-[#ffffff] text-[#49edc2]" data-icon="ri:youtube-fill" data-width="23" data-height="23"></span></a>
        </div>
      </div>
    </div>
    <!-- Footer / Contact Me Closed -->
    <div class="copyright text-[#ffffff40] text-xs text-center py-3 align-middle">
      <p>Copyright @ 2023 Alif Kholik Mauluddin</p>
    </div>
  </body>
  <script>
    function filterGallery(category) {
      var images = document.getElementsByClassName("gallery")[0].getElementsByTagName("img");

      if (category === "all") {
        // Menampilkan semua gambar jika kategori adalah 'all'
        for (var i = 0; i < images.length; i++) {
          images[i].style.opacity = "100%";
          images[i].style.height = "unset";
        }
      } else {
        // Menyembunyikan gambar-gambar yang tidak termasuk dalam kategori yang dipilih
        for (var i = 0; i < images.length; i++) {
          var tags = images[i].getAttribute("data-tags").split(" ");

          if (tags.indexOf(category) === -1) {
            images[i].style.opacity = "0";
            images[i].style.height = "0";
            images[i].style.translate = "0 -30px";
          } else {
            images[i].style.opacity = "100%";
            images[i].style.height = "unset";
            images[i].style.translate = "0 0";
          }
        }
      }
    }
  </script>
  <script>
    function toggleMenu() {
      var navbar = document.getElementById("navbar");
      var navbarMenu = document.getElementById("navbar-menu");
      var navbarToggle = document.getElementById("navbar-toggle");

      navbar.classList.toggle("active");
      navbarMenu.classList.toggle("active");
      navbarToggle.classList.toggle("active");
    }
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var navbar = document.getElementById("navbarpc");

      window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
          navbar.classList.add("fixed");
        } else {
          navbar.classList.remove("fixed");
        }
      });
    });
  </script>
  <style>
    /* Styling untuk navbar */
    .navbar {
      color: #fff;
      padding: 10px;
      transition: all 0.3s ease;
    }

    .navbar-brand {
      font-size: 20px;
      font-weight: bold;
    }

    .navbar-menu {
      display: flex;
      flex-direction: column;
      background-color: #00000050;
      backdrop-filter: blur(10px);
      padding: 10px;
      transform: translateX(-100%);
      transition: transform 0.3s ease;
    }

    .navbar-menu a {
      color: #fff;
      text-decoration: none;
      padding: 8px;
      font-size: 16px;
      transition: opacity 0.3s ease;
    }

    /* Styling untuk tombol toggle menu */
    .navbar-toggle {
      display: none;
    }

    .navbar-toggle .bar {
      width: 25px;
      height: 3px;
      background-color: #fff;
      margin: 5px 0;
      transition: all 0.3s ease;
    }

    #navbarpc {
      background-color: transparent;
      transition: background-color 0.3s ease;
    }

    #navbarpc.fixed {
      background-color: #15a8818f; /* Ganti dengan warna yang diinginkan */
    }

    /* Media Query untuk tampilan mobile */
    @media (max-width: 768px) {
      .navbar {
        position: fixed;
        z-index: 999;
        width: 100%;
      }
      .navbar.active {
        background-color: rgba(0, 0, 0, 0.8);
      }

      .navbar-menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        transform: translateX(-100%);
        transition: transform 0.3s ease;
      }

      .navbar.active .navbar-menu {
        transform: translateX(0);
      }

      .navbar-menu a {
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .navbar.active .navbar-menu a {
        opacity: 1;
      }

      .navbar-toggle {
        display: block;
      }

      .navbar-toggle.active .bar:nth-child(2) {
        opacity: 0;
      }

      .navbar-toggle.active .bar:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
      }

      .navbar-toggle.active .bar:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
      }
    }
  </style>
</html>
