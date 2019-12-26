<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package olly-robinson-theme
 */

?>

<footer class="pb-24 pt-10 lg:mt-32 min-h-screen-y relative | section" data-color="bg-grey">
  <svg viewBox="0 0 560 560" class="absolute w-5/12 lg:w-4/12 | position-svg-11">
    <defs>
      <linearGradient id="fade-blue-pink-a" x1="23.219%" x2="95.8%" y1="68.142%" y2="5.388%">
        <stop offset="0%" stop-color="#FFE7F0" />
        <stop offset="100%" stop-color="#00DCFF" />
      </linearGradient>
    </defs>
    <rect width="560" height="560" x="0" y="0" fill="url(#fade-blue-pink-a)" fill-rule="evenodd" rx="321.5" />
  </svg>
  <div class="container">
    <div class="row">
      <div class="col w-11/12 lg:w-10/12 lg:ml-1/12 text-right">
        <h2 class="alpha" style="-webkit-text-stroke-color: #FFC7DB;">
          Get in touch
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col w-9/12 ml-2/12 md:ml-1/12 text-right">
        <ul class="mt-16 bravo">
          <li class="relative">
            <a href="#" class="block py-4 hover-fill-text" data-text="Email">
              Email
            </a>
          </li>
          <li class="relative">
            <a href="#" class="block py-4 hover-fill-text" data-text="My CV">
              My CV
            </a>
          </li>
          <li class="relative">
            <a href="#" class="block py-4 hover-fill-text" data-text="This Repo">
              This Repo
            </a>
          </li>
          <li class="relative">
            <a href="#" class="block py-4 hover-fill-text" data-text="GitHub">
              GitHub
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>
<link rel="stylesheet"
  href="<?php bloginfo('template_directory') ?>/js/main.js">
</body>

</html>
