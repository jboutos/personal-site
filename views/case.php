<div class ='column'>
	<article>
		<h1 class='attention-voice'>Layout theme challenge case study</h1>
		<h2 class='subtle-voice'>Or how to drive yourself insane while adjusting margins and font sizes</h2>
		<p class='calm-voice'>Ok, so this module started as a layout challenge where you had to copy a webpage and its various breakpoints based off a video. At this stage of the course, this was no challenge at all, but of course that was not the point of the module, but more like a pit stop to check that everything is fine with the driver. The real challenge turned out to be having to theme said premade template so as to evoke the feeling of an industry of your choosing without touching the HTML code.</p>
		<p class='calm-voice'>I decided to go with merino wool clothing companies as my subject. I do like myself some merino t-shirts, so I did not choose something I could not relate to at all, although apparently the niche, according to Derek, was more that of upscale clothing rather than something textile-specific like merino wool. Anyhow, having decided the industry I’d try to evoke through my code, the next step was to do some research with the goal of finding emerging patterns for colors, link stylings, fonts, and other industry-specific key points.</p>
		<picture>
			<img src='images/research.png' alt=''>
		</picture>
		<p class='calm-voice'>After finding some sites that included the particular sections of the premade template and taking a ton of snapshots, I was at first troubled. My simple-minded attitude was that if the patterns are not absolute, they are not patterns at all. Thankfully, I did not entertain this idea too much; there were patterns to be found. Colors were mostly earthy/beige/greige, font-sizes mostly sans-serif (which apparently is not that much of a surprise), and sharp edges were preferred for images and containers for the most part.</p>
		<p class='calm-voice'>Next in line were the style tiles. I must admit, I am still confused with them. While it’s made clear that style tiles should evoke more of a vibe for where you’re going with things (always with some finality in the touches you’re including), I kept on seeing style tiles that resembled mockups. Even Derek flexed somewhat of a complete layout in one of his frankentile tutorials. I suppose I shouldn’t take things too seriously; it’s a fine balance sometimes. So, while I ended up with two style tiles, the second one was more of a “let’s make a second one just for the sake of having one.” My mind was made up on which font to use (I must admit, I understand nothing about the language of fonts, but there still is some magic in choosing fonts, even as a font-illiterate person) and what would be my main colors. I’m afraid I didn’t follow closely the font sizes I chose in the style tiles, but looking back, that would be an impossible task. The intricacy required to make a site look pro requires foresight I simply have not yet acquired!</p>
		<picture>
			<img src='images/style-tile-1.png' alt=''>
		</picture>
		<picture>
			<img src='images/style-tile-2.png' alt=''>
		</picture>
		<p class='calm-voice'>Style tiles done! Onto the main menu I suppose. For reference, this is the premade template we are given to style:</p>
		<picture>
			<img src='images/original.png' alt=''>
		</picture>
		<p class='calm-voice'>The first step was to implement the color palette I had chosen: a dark olive green for accentuated sections and a shade of beige mostly for backgrounds. I soon realized that, for consistency’s sake, I should use the olive green as my font color too—there goes the first style tile divergence. Then came the pictures, the link styling, and the font-size choices—another style-tile divergence here. The page was, for the most part, done, or so I thought.</p>
		<picture>
			<img src='images/theme-old.png' alt=''>
		</picture>
		<p class='calm-voice'>Here’s the thing: Derek cares, which is a good thing, not necessarily for one’s mental health but certainly for the sake of the skills you acquire. Most everything had to change! The magic was not there, professionalism nowhere to be found. Be it section paddings, margins between elements, font-sizes, line-heights, paragraph widths, or link stylings, nothing really was fine-tuned to the point of regarding this as a professional’s work. Back to the drawing board it was. After a few back-and-forths trying things out and a lot of frustration, I finally had something resembling a proper web page:</p>
		<picture>
			<img src='images/theme-new.png' alt=''>
		</picture>
		<p class='calm-voice'>Some things that really stuck with me:</p>
		<ul>
         <?php foreach ($data as $item) { ?>
             <li>
                 <?= component($component, $item); ?>
             </li>
         <?php } ?>
      </ul>
		<h2 class='subtle-voice'>And some final thoughts:</h2>
		<p class='calm-voice'>People tend to say “think outside the box,” but as a fan of tautology, I like to turn things on their heads sometimes. The thoughts you’re sometimes looking for are outside the box for a reason, because there is no box outside of which to think as per one’s perception, you're (usually) limited by the mental matrix you inhabit. So, while honing your eye and working your brain muscles is always a good idea for personal growth, sometimes you just have to be presented with new concepts. The first iteration of my page was flat for reasons I couldn’t quite comprehend. If not for Derek’s directions, I’d still be going around in circles…</p>
		<p class='calm-voice'>Having researched multiple sites for this project and being the sort of obtuse person I am it took me a while to notice the importance of having a proper stock of images as well as some custom designs for what you intend to build. I would so far as to say that this material might as well dictate the layout of the whole site/app.</p>
		<p class='calm-voice'>Bonus code snippet, the cool hover effect I just learned about:</p>
		<div class="media">
			<video width="640" height="360" controls>
			  <source src="images/hover.mp4" type="video/mp4">
			  Your browser does not support the video tag.
			</video>
		</div>
		<picture>
			<img src='images/code.png' alt=''>
		</picture>
	</article>
</div>