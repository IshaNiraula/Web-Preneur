 <!-- Start Footer Top Area -->
 <footer class="footer-top-area pt-100 pb-70">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6">
                 <div class="single-widget">
                     <a href="index.html">
                         {{-- <img src="assets/img/black-logo.png" alt="Image"> --}}
                         <h3>Himalyan Buds</h3>
                     </a>

                     <p>Lorem ipsum dolor, sit amet earum consectetur adipisicing elit sit. Cupiditate rerum quidem
                         fugiat sapiente! to quae perspiciatis.</p>

                     <div class="social-area">
                         <ul>
                             <li>
                                 <a href="#" target="_blank">
                                     <i class="bx bxl-facebook"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#" target="_blank">
                                     <i class="bx bxl-twitter"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#" target="_blank">
                                     <i class="bx bxl-linkedin"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#" target="_blank">
                                     <i class="bx bxl-youtube"></i>
                                 </a>
                             </li>
                             <li>
                                 <a href="#" target="_blank">
                                     <i class="bx bxl-instagram"></i>
                                 </a>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>



             <div class="col-lg-4 col-md-6">
                 <div class="single-widget">
                     <h3>Featured</h3>
                     <ul>
                         @foreach ($posts as $index => $post)
                             @if ($index < 4)
                                 <li>
                                     <a href="{{ route('post.show', ['post_slug' => $post->slug]) }}">
                                         <i class="bx bx-chevrons-right"></i>
                                         {{ $post->title }}
                                     </a>
                                 </li>
                             @endif
                         @endforeach
                     </ul>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6">
                 <div class="single-widget contact">
                     <h3>Get In Touch</h3>

                     <ul>
                         <li>
                             <i class="bx bx-phone-call"></i>
                             <span>Hotline:</span>
                             <a href="tel:+61-821-456">
                                 +91-821-456
                             </a>
                         </li>

                         <li>
                             <i class="bx bx-envelope"></i>
                             <span>Email:</span>
                             <a href="">
                                 <span class="">buds@himalyan.com</span>
                             </a>
                         </li>

                         <li>
                             <i class="bx bx-location-plus"></i>
                             <span>Address:</span>
                             Bhaktapur, sallahgahri
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- End Footer Top Area -->

 <!-- Start Footer Bottom Area -->
 <footer class="footer-bottom-area">
     <div class="container">
         <div class="copy-right">
             <p>Copyright <i class="bx bx-copyright"></i>2023 Himalyan Buds. Designed By<a
                     href="https://outofboxdesign.com/" target="blank" class="ms-2">Outofbox Design</a></p>
         </div>
     </div>
 </footer>
 <!-- End Footer Bottom Area -->
