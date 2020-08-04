<?php
   /*
   Plugin Name: chslider
   Plugin URI: http://my-awesomeness-emporium.com
   description: >-
  a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: http://mrtotallyawesome.com
   License: GPL2
   */
?>
<?php
// function that runs when shortcode is called
function chslider() { 
   include "style.php";
 ob_start();
   ?>
 <div class="js">
  <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
    <div class="cd-h-timeline__container container">
      <div class="cd-h-timeline__dates">
        <div class="cd-h-timeline__line">
          <ol>
            <li><a href="#0" data-date="16/01/2014" class="cd-h-timeline__date cd-h-timeline__date--selected">16 Jan</a></li>
            <li><a href="#0" data-date="28/02/2014" class="cd-h-timeline__date">28 Feb</a></li>
            <li><a href="#0" data-date="20/04/2014" class="cd-h-timeline__date">20 Mar</a></li>
            <li><a href="#0" data-date="20/05/2014" class="cd-h-timeline__date">20 May</a></li>
            <li><a href="#0" data-date="09/07/2014" class="cd-h-timeline__date">09 Jul</a></li>
            <li><a href="#0" data-date="30/08/2014" class="cd-h-timeline__date">30 Aug</a></li>
            <li><a href="#0" data-date="15/09/2014" class="cd-h-timeline__date">15 Sep</a></li>
            <li><a href="#0" data-date="01/11/2014" class="cd-h-timeline__date">01 Nov</a></li>
            <li><a href="#0" data-date="10/12/2014" class="cd-h-timeline__date">10 Dec</a></li>
            <li><a href="#0" data-date="19/01/2015" class="cd-h-timeline__date">29 Jan</a></li>
            <li><a href="#0" data-date="03/03/2015" class="cd-h-timeline__date">3 Mar</a></li>
          </ol>

          <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
        </div> <!-- .cd-h-timeline__line -->
      </div> <!-- .cd-h-timeline__dates -->
        
      <ul>
        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">Prev</a></li>
        <li><a href="#0" class="text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">Next</a></li>
      </ul>
    </div> <!-- .cd-h-timeline__container -->

    <div class="cd-h-timeline__events">
      <ol>
        <li class="cd-h-timeline__event cd-h-timeline__event--selected text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Horizontal Timeline</h2>
            <em class="cd-h-timeline__event-date">January 16th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">February 28th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">March 20th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">May 20th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">July 9th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">August 30th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">September 15th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">November 1st, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">December 10th, 2014</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">January 29th, 2015</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>

        <li class="cd-h-timeline__event text-component">
          <div class="cd-h-timeline__event-content container">
            <h2 class="cd-h-timeline__event-title">Event title here</h2>
            <em class="cd-h-timeline__event-date">March 3rd, 2015</em>
            <p class="cd-h-timeline__event-description color-contrast-medium"> 
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at, eaque hic repellendus sit dicta consequatur quae, ut harum ipsam molestias maxime non nisi reiciendis eligendi! Doloremque quia pariatur harum ea amet quibusdam quisquam, quae, temporibus dolores porro doloribus.
            </p>
          </div>
        </li>
      </ol>
    </div> <!-- .cd-h-timeline__events -->
  </section>

</div>

 
   <?php
    include "script.php";
 $html=ob_get_contents();
 ob_end_clean(); 

// Things that you want to do. 
 
 
// Output needs to be return
return $html;
} 
// register shortcode
add_shortcode('chslider', 'chslider'); 














?>