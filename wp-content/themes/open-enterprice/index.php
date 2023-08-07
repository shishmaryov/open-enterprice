<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package open-enterprice
 */


 /*
 Template Name: Главная
 */
?>



<?php get_header(); ?>
    <main class="main">
      <section class="promo wow animate__animated animate__fadeIn">
        <div class="container">
          <div class="promo__info">
            <h1 class="title--1 promo__title">
              A new model for open collaboration
            </h1>
            <p class="description promo__description">Run an organization where members get rewarded for their contributions with fractional ownership.</p>
            <button class="btn-reset button promo__button" data-graph-path="request">Request early access</button>
          </div>
          <picture>
            <source srcset="img/promo-img.webp" type="image/webp">
            <img src="img/promo-img.png" alt="promo-img" class="promo__img">
          </picture>
        </div>
      </section>
      <section class="reimagining">
        <div class="container">
          <h2 id="reimagining" class="title--2 reimagining__title wow animate__animated animate__fadeInDown">Reimagining what it means to work</h2>
        <p class="description reimagining__description wow animate__animated animate__fadeInDown">Teams and communities using Open Enterprise fundamentally unlock a reality of work that reimagines how people engage in economic opportunity, meeting the demands and expectations of a modern organization.</p>
        <div class="reimagining__cards wow animate__animated animate__fadeIn">
          <div class="reimagining__card">
            <svg class="reimagining__icon" width="104" height="88" viewBox="0 0 104 88" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_28_42" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8" y="0" width="88" height="88">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              </mask>
              <g mask="url(#mask0_28_42)">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              <circle opacity="0.8" cx="32" cy="43" r="32" fill="#303031"/>
              <circle opacity="0.8" cx="72" cy="43" r="32" fill="#71A894"/>
              </g>
              </svg>
            <h3 class="title--3 reimagining__subtitle">Modern workforce</h3>
            <p class="reimagining__subtext">Multistakeholder governance aligns employees with the organization’s wider community.</p>
          </div>
          <div class="reimagining__card">
            <svg class="reimagining__icon" width="104" height="88" viewBox="0 0 104 88" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_28_46" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8" y="0" width="88" height="88">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              </mask>
              <g mask="url(#mask0_28_46)">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              <path opacity="0.8" d="M52 20L79.7128 68H24.2872L52 20Z" fill="#303031"/>
              <path d="M52 68L24.2872 20L79.7128 20L52 68Z" fill="#F3F0EA"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M38.1437 44L52.0001 68L65.8565 44L52.0001 20L38.1437 44Z" fill="#71A894"/>
              </g>
              </svg>

            <h3 class="title--3 reimagining__subtitle">Meritocratic by design</h3>
            <p class="reimagining__subtext">Tokenized ownership aligns deeply committed individuals with the organization’s success.</p>
          </div>
          <div class="reimagining__card">
            <svg class="reimagining__icon" width="104" height="88" viewBox="0 0 104 88" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_28_53" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="8" y="0" width="88" height="88">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              </mask>
              <g mask="url(#mask0_28_53)">
              <circle cx="52" cy="44" r="44" fill="#F3F0EA"/>
              <circle cx="52" cy="44" r="28" fill="#71A894"/>
              <circle opacity="0.8" cx="52" cy="44" r="16" fill="#303031"/>
              <path d="M52 36L53.7961 41.5279H59.6085L54.9062 44.9443L56.7023 50.4721L52 47.0557L47.2977 50.4721L49.0938 44.9443L44.3915 41.5279H50.2039L52 36Z" fill="#F3F0EA"/>
              </g>
              </svg>

            <h3 class="title--3 reimagining__subtitle">Engineered for resilience</h3>
            <p class="reimagining__subtext">Open Enterprise supports best practices in sociocratic management.</p>
          </div>
        </div>
        </div>
      </section>
      <section class="kickstart__wrapper">
        <div class="container">
          <div class="kickstart wow animate__animated animate__fadeIn">
            <div id="features" class="kickstart__info">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none" class="kickstart__icon">
                <g clip-path="url(#clip0_39_6)">
                  <rect width="80" height="80" rx="40" fill="#F3F0EA"/>
                  <circle cx="60" cy="40" r="28" fill="#66645E"/>
                  <circle cx="60" cy="40" r="12" fill="#807E76"/>
                  <path d="M53 40L-1 71.1769L-1 8.82308L53 40Z" fill="#71A894"/>
                  <path d="M62 40L26 60.7846L26 19.2154L62 40Z" fill="#81BFA8"/>
                </g>
                <defs>
                  <clipPath id="clip0_39_6">
                    <rect width="80" height="80" rx="40" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
              <h2 class="title--2 kickstart__title">Kickstart an organization with your co-founders</h2>
              <p class="description kickstart__description">It’s the early days, you just had a long conversation with two friends about a meaningful challenge that you’re all passionate about and have a potential solution for. You’re ready to embark the startup journey.</p>
            </div>
            <picture>
              <source srcset="img/kickstart-img-1.webp" type="image/webp">
              <img src="img/kickstart-img-1.jpg" alt="kickstart-img">
            </picture>
          </div>
          <div class="kickstart wow animate__animated animate__fadeIn">
            <picture>
              <source srcset="img/kickstart-img-2.webp" type="image/webp">
              <img src="img/kickstart-img-2.jpg" alt="kickstart-img">
            </picture>
            <div class="kickstart__info">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                <rect width="80" height="80" rx="40" fill="#F3F0EA"/>
                <circle opacity="0.2" cx="40" cy="40" r="32" fill="#71A894"/>
                <circle opacity="0.4" cx="40" cy="40" r="24" fill="#71A894"/>
                <circle opacity="0.6" cx="40" cy="40" r="17" fill="#71A894"/>
                <circle cx="40" cy="40" r="9" fill="#71A894"/>
              </svg>
              <h2 class="title--2 kickstart__title">Onboard users, investors and advisors as you grow</h2>
              <p class="description kickstart__description">You’ve bootstrapped and delivered an MVP, and some investors and advisors are interested in having a chat with you. As an Open Enterprise, you can onboard them seamlessly into your digital organization and align them with your success.</p>
            </div>
          </div>
          <div class="kickstart wow animate__animated animate__fadeIn">
            <div class="kickstart__info">
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
                <path d="M18.1178 17.3726C12.1166 23.3738 8.74519 31.5131 8.74519 40C8.74518 48.487 12.1166 56.6263 18.1178 62.6275C24.1189 68.6286 32.2582 72 40.7452 72C49.2321 72 57.3714 68.6286 63.3726 62.6275L40.7452 40L18.1178 17.3726Z" fill="#71A894"/>
                <circle cx="40.7451" cy="40" r="22.4" transform="rotate(135 40.7451 40)" fill="#303031"/>
                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M24.906 24.1607C16.1582 32.9085 16.1582 47.0914 24.906 55.8391C33.6537 64.5869 47.8366 64.5869 56.5843 55.8391C56.5843 55.8391 56.5843 55.8391 56.5843 55.8391L40.7452 39.9999L24.906 24.1607Z" fill="#71A894"/>
              </svg>
              <h2 class="title--2 kickstart__title wow animate__animated animate__fadeIn">Engage highly committed contributors</h2>
              <p class="description kickstart__description wow animate__animated animate__fadeIn">You need talented people on-demand across various tasks that your full-time workforce can’t prioritize at the moment. As an Open Enterprise, you can easily fund tasks and have people apply to work on them in return for funds or shares.</p>
            </div>
            <picture>
              <source srcset="img/kickstart-img-3.webp" type="image/webp">
              <img src="img/kickstart-img-3.jpg" alt="kickstart-img">
            </picture>
          </div>
        </div>
      </section>
      <section class="help">
        <div class="container">
          <h2 id="contribute" class="title--2 help__title wow animate__animated animate__fadeInDown">Help us improve Open Enterprise</h2>
          <p class="description help__description wow animate__animated animate__fadeInDown">As an Open Enterprise ourselves, we are actively looking for new talent to join our mission of improving and delivering the Open Enterprise model to the world. Apply for open tasks and earn a stake in our success.</p>
          <div class="help__cards wow animate__animated animate__fadeIn">
            <div class="help__card">
              <h3 class="help__subtitle">Ideate a list of features based on the Sociocracy model</h3>
              <p class="help__subtext">We’re looking for someone interested in business theory and research that’ll help us bridge the gap between our s…</p>
              <div class="help__meta">
                <span class="help__date">5 AUT</span>
                <span class="help__apply">Apply by May 15</span>
              </div>
            </div>
            <div class="help__card">
              <h3 class="help__subtitle">Update documentation with FAQs</h3>
              <p class="help__subtext">Review our community chat for the most frequently asked questions and document answers for our product docs.</p>
              <div class="help__meta">
                <span class="help__date">10 AUT</span>
                <span class="help__apply">Apply by May 18</span>
              </div>
            </div>
            <div class="help__card">
              <h3 class="help__subtitle">Tutorial video series</h3>
              <p class="help__subtext">Create a series of video tutorials that cover everything from start to finish on using Open Enterprise.</p>
              <div class="help__meta">
                <span class="help__date">40 AUT</span>
                <span class="help__apply">20</span>
              </div>
            </div>
          </div>
          <button class="btn-reset button button--dark help__button wow animate__animated animate__fadeIn" data-graph-path="request">View more</button>
        </div>
      </section>
      <section class="start wow animate__animated animate__fadeIn">
        <div class="start__decor"></div>
        <div class="container">
          <div class="start__info">
            <h2 id="request" class="title--2 start__title">Start an Open Enterprise</h2>
            <p class="description start__description">If you can’t wait to run a new or existing organization on Open Enterprise and are willing to explore and navigate the beta, we’d love to get you started.</p>
            <button class="btn-reset button start__button" data-graph-path="request">Request early access</button>
          </div>
          <picture>
            <source srcset="img/start-img.webp" type="image/webp">
            <img src="img/start-img.png" alt="start-img">
          </picture>
        </div>
      </section>
    </main>
<?php get_footer(); ?>