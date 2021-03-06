<?php
    /* Template Name: Home Page */
    get_header();
?>

<main id="mainTag" class="bg-purple">
	<section class="py-20 md:pb-56 md:pt-40 relative z-10 | section" data-color="bg-purple">
		<img src="<?php echo get_bloginfo('template_url') ?>/img/svgs/fade-circle-pink.svg"
			class="absolute top-0 right-0 w-5/12 md:w-3/12 svg-shadow" />

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
			class="stroke-current absolute text-lightBlue opacity-25 | position-svg-1">
			<rect width="262" height="262" x="20" y="550" fill="none" stroke-width="20" rx="131"
				transform="rotate(-14 -1993.018 431.577)" />
		</svg>

		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"
			class="hidden md:block stroke-current absolute w-5/12 text-pink opacity-75 | position-svg-3">
			<rect width="270" height="270" x="20" y="536" fill="none" stroke-width="18" rx="150"
				transform="rotate(-14 -1993.018 431.577)" />
		</svg>

		<div class="container relative z-20">
			<div class="row">
				<div class="col w-full xl:w-4/12 xl:ml-1/12 text-left">
					<h2 class="alpha" style="-webkit-text-stroke-color: #00DCFF;">Hey!</h2>
					<p class="charlie text-white mt-8 md:ml-2">My name is</p>
				</div>
			</div>
			<div class="row">
				<div class="col w-full xl:w-10/12 xl:ml-1/12 mt-16 md:mt-32 text-right">
					<h2 class="alpha uppercase">
						Olly<br /><span class="robinson" style="-webkit-text-stroke-color: #FFC7DB;">Robinson</span>
					</h2>
					<p class="charlie text-white mt-8 ml-2">and I am a Web Developer</p>
				</div>
			</div>
			<div class="row">
				<div class="col w-full md:w-8/12 lg:w-6/12 xl:w-4/12 xl:ml-1/12 mt-20 md:mt-40 paragraph-lg">
					<p class="mb-6">
						I love working in collaboration with designers and UX experts to build websites that pop.
					</p>
					<p>
						This October I’m looking for a new front-end role, so why don’t you get in touch
					</p>
					<div class="flex mt-8">
						<a href="#" class="button mr-6">
							View my CV
						</a>
						<a href="mailto: ollythedeveloper@gmail.com" class="button">
							Send me and email
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-24 md:pb-48 md:pt-24 | section" data-color="bg-blue">
		<div class="container">
			<div class="row">
				<div class="col w-full sm:w-10/12 xl:ml-1/12 mb-20 md:mb-48">
					<h2 class="alpha break-words | js-translateX" style="-webkit-text-stroke-color: #00DCFF;">
						Projects
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col w-full xl:w-10/12 xl:ml-1/12 mb-20 md:mb-32 relative">
					<div class="relative w-full bg-blue z-20" style="padding-top:71.0709318498%;">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/landtech-desktop.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
					<svg viewBox="0 0 274 274"
						class="stroke-current absolute text-lightBlue z-10 | position-svg-4 | js-parallax parallax-scroll"
						data-parallax="-0.1">
						<rect width="234" height="234" x="20" y="20" fill="none" stroke-width="20" rx="131" />
					</svg>
					<svg width="137" height="137" viewBox="0 0 137 137"
						class="fill-current absolute text-pink md:z-30 | position-svg-5 svg-shadow | js-parallax parallax-scroll"
						data-parallax="0.15">
						<rect width="137" height="137" x="1233" y="640" fill-rule="evenodd" rx="68.5"
							transform="translate(-1233 -640)" class="shadow-2xl" />
					</svg>
				</div>
			</div>
			<div class="row">
				<div class="col w-full md:w-6/12 xl:w-5/12 xl:ml-1/12 md:text-right">
					<h3 class="bravo mb-8 break-words">
						LandTech
					</h3>
				</div>
				<div class="col w-full md:w-6/12 lg:w-5/12 xl:w-4/12">
					<p class="paragraph mb-2">
						LandTech are a London-based proptech startup aiming to modernise the way property developers
						source land, apply for planning
						permission and ultimately build on it.
					</p>
					<p class="paragraph mb-10">
						I worked on this project with a senior developer at Parallax using Blade templating language and
						Tailwind CSS. I focused
						mainly on reusable and responsive layout components, customs hover states and complex SVG work.
					</p>
					<a href="https://land.tech/" target="_blank" class="button">
						View live site
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class=" md:pt-32 md:pb-40 xl:pb-24 relative | section" data-color="bg-purple">
		<svg viewBox="0 0 137 137"
			class="hidden md:block absolute fill-current text-pink | position-svg-6 svg-shadow | js-parallax parallax-scroll"
			data-parallax="-0.2">
			<rect width="137" height="137" x="1233" y="640" fill-rule="evenodd" rx="68.5"
				transform="translate(-1233 -640)" />
		</svg>
		<div class="container">
			<div class="row items-center flex-col-reverse md:flex-row mb-32">
				<div class="col w-full md:w-6/12 lg:w-5/12 xl:w-4/12 lg:ml-1/12 pb-8 md:mb-16 ">
					<h2 class="bravo mb-8">
						CitiPark PCN
					</h2>
					<p class="paragraph mb-2">
						CitiPark are a nation-wide parking operator who have created the BaySentry brand to use
						technology created by Parallax to
						manage parking penalties.
					</p>
					<p class="paragraph mb-10">
						I created the homepage using Laravel Blade and Tailwind CSS. I used vanilla JS and exisiting
						libraries to create a
						modal-style menu and a collapsible accordion section.
					</p>
					<a href="#" class="button">
						View live site
					</a>
				</div>
				<div class="col w-full md:w-5/12 lg:w-5/12 xl:w-4/12 md:ml-1/12 mb-20 relative">
					<div class="relative w-full z-20 hidden md:block | scroll-effect-image"
						style="padding-top:217.1581769437%;">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/citipark-pcn-mobile.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
					<div class="relative w-full z-20 block md:hidden | scroll-effect-image"
						style="padding-top:71.0709318498%;">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/citipark-pcn-desktop.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
					<svg viewBox="0 0 137 137"
						class="absolute fill-current text-lightBlue w-4/12 z-10 | position-svg-7 | js-parallax parallax-scroll"
						data-parallax="0.2">
						<rect width="137" height="137" x="1233" y="640" fill-rule="evenodd" rx="68.5"
							transform="translate(-1233 -640)" />
					</svg>
				</div>
			</div>
		</div>
	</section>

	<section class="relative | section" data-color="bg-blue">
		<svg viewBox="0 0 273 274" class="fill-current absolute text-pink opacity-50 | position-svg-8">
			<rect width="262" height="262" x="13.801" y="530" rx="131" transform="rotate(-14 -1993.018 431.577)" />
		</svg>
		<svg viewBox="0 0 273 274" class="fill-current absolute text-lightBlue | position-svg-9 svg-shadow">
			<rect width="262" height="262" x="13.801" y="530" rx="131" transform="rotate(-14 -1993.018 431.577)" />
		</svg>
		<svg viewBox="0 0 270 270" class="absolute | position-svg-10 js-parallax parallax-rotate" data-parallax="-0.2">
			<linearGradient id="myGradient" gradientTransform="rotate(90)">
				<stop offset="5%" stop-color="#00DCFF" />
				<stop offset="95%" stop-color="#FFC7DB" />
			</linearGradient>
			<rect width="230" height="230" x="20" y="20" fill="none" stroke="url(#myGradient)" stroke-width="14"
				rx="131" />
		</svg>
		<div class="container">
			<div class="row">
				<div class="col w-full xl:w-11/12 mb-32">
					<h2 class="alpha text-right" style="-webkit-text-stroke-color: #00DCFF;">
						<span style="font-size:0.8em;">Smaller Contributions</span>
					</h2>
				</div>
			</div>
			<div class="row flex-col-reverse md:flex-row pb-32 md:pb-48 lg:pb-64 md:pt-20">
				<div class="col w-full md:w-7/12 xl:w-6/12 xl:ml-1/12 md:-mt-16">
					<div class="relative w-full | js-parallax parallax-scroll" style="padding-top:71.0709318498%;"
						data-parallax="-0.1">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/crap-travel-desktop.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
				</div>
				<div class="col hidden lg:block lg:w-3/12 md:-ml-1/12 lg:-mt-32">
					<div class="relative w-full | js-parallax parallax-scroll" style="padding-top:217.1581769437%;"
						data-parallax="-0.16">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/crap-travel-mobile.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
				</div>
				<div
					class="col w-full sm:w-8/12 md:w-3/12 xl:w-3/12 md:ml-1/12 lg:ml-0 xl:-ml-1/12 md:text-right mb-16 z-20">
					<h3 class="bravo md:charlie mb-2 md:mb-0 break-words">
						Crap Travel
					</h3>
					<div class="charlie mb-6" style="-webkit-text-fill-color: #FFC7DB;">
						Loserboard
					</div>
					<a href="https://craptravel.com/" target="_blank" class="button">
						View live site
					</a>
				</div>
			</div>

			<div class="row flex-col md:flex-row pb-32 md:pb-64 md:pt-48">
				<div class="col w-full md:w-4/12 xl:ml-1/12 text-right md:text-left z-10 mb-16">
					<h3 class="bravo md:charlie mb-2 md:mb-0 break-words">
						Present and Correct
					</h3>
					<div class="charlie mb-6" style="-webkit-text-fill-color: #FFC7DB;">
						Demo rebuild
					</div>
					<a href="https://github.com/Ronald-Crosby/Present-and-Correct" target="_blank" class="button">
						View on GitHub
					</a>
				</div>
				<div class="col hidden lg:block lg:w-3/12 xl:-ml-1/12">
					<div class="relative w-full z-20 | js-parallax parallax-scroll" style="padding-top:217.1581769437%;"
						data-parallax="-0.15">
						<img src="<?php echo get_bloginfo('template_url') ?>/img/present-mobile.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
				</div>
				<div class="col w-full md:w-7/12 xl:w-6/12 md:ml-1/12 lg:-ml-2/12 md:-mt-16">
					<div class="relative w-full | js-parallax parallax-scroll" style="padding-top:71.0709318498%;"
						data-parallax="-0.1">
						<img src="<?php echo get_bloginfo('template_url') ?>/img//present-desktop.jpg"
							class="inset-0 absolute w-full h-full rounded-lg shadow-2xl object-cover" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
    get_footer();
  ?>
</main>
