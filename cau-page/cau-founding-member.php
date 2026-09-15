<?php
/**
 * Template Name: CAU Founding Member Page
 *
 * Task: 868m4yep5
 *
 * INSTALLATION STEPS (Furqan):
 * ─────────────────────────────────────────────────────────────
 * 1. Copy THIS FILE to:
 *      /wp-content/themes/review_books_child/page-cau-founding-member.php
 *
 * 2. Copy cau-founding-member.css to:
 *      /wp-content/themes/review_books_child/assets/css/cau-founding-member.css
 *
 * 3. In /wp-content/themes/review_books_child/functions.php, add:
 *
 *      function gbr_enqueue_cau_founding_styles() {
 *          if ( is_page_template( 'page-cau-founding-member.php' ) ) {
 *              wp_enqueue_style(
 *                  'cau-founding-member',
 *                  get_stylesheet_directory_uri() . '/assets/css/cau-founding-member.css',
 *                  [],
 *                  '1.0.0'
 *              );
 *          }
 *      }
 *      add_action( 'wp_enqueue_scripts', 'gbr_enqueue_cau_founding_styles' );
 *
 * 4. In WP Admin → Pages → Add New:
 *      - Set slug: cau-founding-member  (or any slug you prefer)
 *      - Under Page Attributes → Template: select "CAU Founding Member Page"
 *      - Publish
 * ─────────────────────────────────────────────────────────────
 */

get_header();
?>

<div class="cau-page">

  <!-- ═══════════════════════════════════════
       S1 — HERO
       ═══════════════════════════════════════ -->
  <section class="cau-hero" aria-labelledby="cau-hero-heading">
    <div class="cau-hero__eyebrow">✝️ Christian Authors Unite — Founding Member Offer</div>

    <h1 class="cau-hero__h1" id="cau-hero-heading">
      Your CAU Community Has a <em>New Home</em>
    </h1>

    <p class="cau-hero__sub">
      Same faith. Same family. Better platform.<br>
      We saved your spot — and we're offering you a founding member rate to come back together.
    </p>

    <blockquote class="cau-hero__quote">
      "Hey CAU family — it's Ben. I wanted to reach out personally because this community means something to me, and I want to make sure you don't get left behind in this transition. Everything you loved about CAU is here — but now it's running on a platform that's actively maintained and built to last."
    </blockquote>

    <div class="cau-hero__cta-row">
      <a href="#cau-pricing" class="cau-btn-primary">Claim Your Founding Member Rate →</a>
      <a href="/member-login/" class="cau-btn-ghost-light">Already on GBR? Log in</a>
    </div>

    <p class="cau-hero__fine">No credit card needed to start &nbsp;·&nbsp; Cancel anytime</p>
  </section>

  <!-- ═══════════════════════════════════════
       S2 — THE HONEST STORY
       ═══════════════════════════════════════ -->
  <section class="cau-story" aria-labelledby="cau-story-heading">
    <h2 class="cau-section-heading" id="cau-story-heading">Here's what happened — and why this time is different</h2>
    <p class="cau-section-sub">We're not going to sugarcoat it. Here's the truth.</p>

    <div class="cau-story__body">
      <p>CAU never reached the critical mass it needed to thrive. We had a churn cycle — people would sign up, leave, and new people would arrive right after. Nobody overlapped long enough to build momentum. Not enough members active at the same time meant not enough reviews circulating.</p>
      <p>That's on us — not on the community. The solution isn't to rebuild CAU from scratch — it's to bring everyone together in one place where the infrastructure is already working.</p>
      <p><strong>The key is everybody coming back in the next couple of months. That's what creates the critical mass that makes reviews flow.</strong></p>
    </div>

    <div class="cau-story__cards">
      <div class="cau-story__card">
        <div class="cau-story__card-icon">🔄</div>
        <div class="cau-story__card-label">Same community identity, new home</div>
      </div>
      <div class="cau-story__card">
        <div class="cau-story__card-icon">📚</div>
        <div class="cau-story__card-label">Larger review library — never run out of books</div>
      </div>
      <div class="cau-story__card">
        <div class="cau-story__card-icon">✅</div>
        <div class="cau-story__card-label">Actively maintained and growing</div>
      </div>
      <div class="cau-story__card">
        <div class="cau-story__card-icon">⚡</div>
        <div class="cau-story__card-label">Critical mass — if we return together</div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       S3 — FEATURES
       ═══════════════════════════════════════ -->
  <section class="cau-features" aria-labelledby="cau-features-heading">
    <h2 class="cau-section-heading" id="cau-features-heading">Everything CAU had — and more</h2>
    <p class="cau-section-sub">You can interact only with CAU subgroup books, or open up to the full GBR network. Your choice, always.</p>

    <div class="cau-features__grid">

      <!-- LEFT: Carries over -->
      <div class="cau-features__col">
        <h3 class="cau-features__col-heading">✝️ What Carries Over from CAU</h3>

        <div class="cau-features__item">
          <span class="cau-features__item-icon">✝️</span>
          <span>Christian Authors Unite subgroup, intact</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">📖</span>
          <span>Faith-based categories — Amish, Biblical Fiction, Christian Romance, and more</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">🤝</span>
          <span>Review-for-review community of Christian authors</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">⭐</span>
          <span>Your identity as a CAU founding member</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">🔒</span>
          <span>Option to interact only with CAU subgroup content</span>
        </div>
      </div>

      <!-- RIGHT: What's new -->
      <div class="cau-features__col">
        <h3 class="cau-features__col-heading">🚀 What's New on GBR</h3>

        <div class="cau-features__item">
          <span class="cau-features__item-icon">🌐</span>
          <span>Access to GBR's full reviewer network — not just CAU</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">🏆</span>
          <span>Token economy — earn tokens reviewing, spend them requesting reviews</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">📊</span>
          <span>Controlled review limits — Amazon guidelines compliant</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">👨‍👩‍👧</span>
          <span>Friends &amp; Family network for trusted reviewers</span>
        </div>
        <div class="cau-features__item">
          <span class="cau-features__item-icon">💬</span>
          <span>Active platform, regular updates, real support</span>
        </div>
      </div>

    </div>

    <p class="cau-features__note">* Your previously reviewed CAU books can be imported into your "Books I've Already Reviewed" list in about 2 minutes.</p>
  </section>

  <!-- ═══════════════════════════════════════
       S4 — PRICING
       ═══════════════════════════════════════ -->
  <section class="cau-pricing" id="cau-pricing" aria-labelledby="cau-pricing-heading">
    <h2 class="cau-section-heading cau-section-heading--center" id="cau-pricing-heading">Choose your plan</h2>
    <p class="cau-section-sub cau-section-sub--center">Start free. Upgrade when you're ready. The founding member rate won't last forever.</p>

    <div class="cau-pricing__grid">

      <!-- FREE -->
      <div class="cau-pricing__card">
        <div class="cau-pricing__plan-name">Free Account</div>
        <div class="cau-pricing__amount">$0 <span class="cau-period">/ forever</span></div>
        <div class="cau-pricing__was">&nbsp;</div>

        <ul class="cau-pricing__list">
          <li>✅ Full GBR profile</li>
          <li>✅ CAU subgroup access</li>
          <li>✅ Browse the review library</li>
          <li>✅ Review books &amp; earn tokens</li>
          <li>✅ Friends &amp; Family network</li>
          <li class="cau-dim">❌ Cannot add your book</li>
          <li class="cau-dim">❌ Cannot request reviews</li>
        </ul>

        <a href="/registration-cau-limited/" class="cau-btn-outline">Create Free Account</a>
        <p class="cau-pricing__fine">No credit card required</p>
      </div>

      <!-- PREMIUM — CAU RATE (FEATURED) -->
      <div class="cau-pricing__card cau-pricing__card--featured">
        <div class="cau-pricing__badge">⭐ CAU Exclusive Rate</div>
        <div class="cau-pricing__plan-name">Premium — CAU Rate</div>
        <div class="cau-pricing__amount"><sup>$</sup>10 <span class="cau-period">/ mo</span></div>
        <div class="cau-pricing__was">Standard rate: $25/mo</div>

        <ul class="cau-pricing__list">
          <li>✅ Everything in Free</li>
          <li>✅ <strong>Add your book to the library</strong></li>
          <li>✅ <strong>Request reviews from CAU community</strong></li>
          <li>✅ <strong>Request reviews from full GBR network</strong></li>
          <li>✅ Bonus tokens on reviews you give</li>
          <li>✅ Priority listing in review queue</li>
          <li>✅ Cancel anytime — two clicks</li>
        </ul>

        <a href="/registration-cau-limited/" class="cau-btn-plan-primary">Get Started at $10/mo →</a>
        <p class="cau-pricing__fine">Founding member rate &nbsp;·&nbsp; Limited time</p>
      </div>

      <!-- YEARLY -->
      <div class="cau-pricing__card">
        <div class="cau-pricing__plan-name">Yearly — Best Value</div>
        <div class="cau-pricing__amount cau-pricing__amount--sm">
          <span class="cau-pricing__tbd">Rate TBD</span>
        </div>
        <div class="cau-pricing__was">Save vs monthly</div>

        <ul class="cau-pricing__list">
          <li>✅ Everything in monthly plan</li>
          <li>✅ Locked-in CAU founding rate for full year</li>
          <li>✅ No price increase while subscribed</li>
          <li>✅ Billed annually</li>
          <li>✅ Cancel before renewal — full refund</li>
          <li style="visibility:hidden;">&nbsp;</li>
          <li style="visibility:hidden;">&nbsp;</li>
        </ul>

        <a href="/registration-cau-limited/" class="cau-btn-outline">Get the Yearly Rate</a>
        <p class="cau-pricing__fine">Billed once per year</p>
      </div>

    </div>

    <p class="cau-pricing__disclaimer">⚠️ Free accounts can browse and review — but cannot add a book or request reviews. No surprises.</p>
  </section>

  <!-- ═══════════════════════════════════════
       S5 — HOW IT WORKS
       ═══════════════════════════════════════ -->
  <section class="cau-how" aria-labelledby="cau-how-heading">
    <h2 class="cau-section-heading" id="cau-how-heading">Getting started takes about 5 minutes</h2>
    <p class="cau-section-sub">No complicated setup. No data migration required.</p>

    <div class="cau-how__steps">

      <div class="cau-how__step">
        <div class="cau-how__step-num" aria-hidden="true">1</div>
        <h3>Create your free GBR account</h3>
        <p>Register on our CAU-specific sign-up page. 2 minutes. No credit card yet.</p>
      </div>

      <div class="cau-how__step">
        <div class="cau-how__step-num" aria-hidden="true">2</div>
        <h3>Explore as a free member</h3>
        <p>Browse the library, join the CAU subgroup, set your book categories and preferences.</p>
      </div>

      <div class="cau-how__step">
        <div class="cau-how__step-num" aria-hidden="true">3</div>
        <h3>Upgrade when you're ready</h3>
        <p>Add your book and start requesting reviews. Upgrade to $10/mo from your account page.</p>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════
       S6 — BEN'S NOTE
       ═══════════════════════════════════════ -->
  <section class="cau-ben-note" aria-labelledby="cau-ben-heading">
    <div class="cau-ben-note__avatar" aria-hidden="true">👤</div>
    <div>
      <p class="cau-ben-note__label" id="cau-ben-heading">A Personal Note from Ben</p>
      <blockquote class="cau-ben-note__quote">
        "I know some of you have been waiting to see what happens with CAU. I get it — you've been through a platform that didn't deliver on its promise, and I'm not going to pretend otherwise.<br><br>
        Here's what I know: the biggest problem was never the people. It was timing. Not enough of us were active at the same time to make it work. That's what this moment is about — if we all come back together over the next couple of months, this community will have the critical mass it needs to actually thrive.<br><br>
        I'm offering the $10/mo rate because I want to see this community succeed. I hope to see you on the other side."
      </blockquote>
      <p class="cau-ben-note__sig">— Ben Johnstone, Founder of Get Books Reviewed</p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
       S7 — FAQ
       ═══════════════════════════════════════ -->
  <section class="cau-faq" aria-labelledby="cau-faq-heading">
    <h2 class="cau-section-heading" id="cau-faq-heading">Quick answers</h2>
    <p class="cau-section-sub">Still have questions? Our support team is available anytime.</p>

    <div class="cau-faq__grid">

      <div class="cau-faq__item">
        <p class="cau-faq__question">I already have a GBR account. What do I do?</p>
        <p class="cau-faq__answer">Log in, visit the CAU community page to join the subgroup. To get the founding member rate, upgrade from your account dashboard.</p>
      </div>

      <div class="cau-faq__item">
        <p class="cau-faq__question">Do I lose my CAU reviews or history?</p>
        <p class="cau-faq__answer">GBR has a built-in import tool to pull your previously reviewed CAU books into your "Books I've Already Reviewed" list. Takes about 2 minutes.</p>
      </div>

      <div class="cau-faq__item">
        <p class="cau-faq__question">What happens to the old CAU site?</p>
        <p class="cau-faq__answer">It stays up during the transition so you can use the import tool. Eventually it will become a landing page pointing here.</p>
      </div>

      <div class="cau-faq__item">
        <p class="cau-faq__question">Is the $10/mo rate permanent?</p>
        <p class="cau-faq__answer">It's your rate for as long as you stay subscribed. Cancel and come back later — the standard rate applies. We won't raise it mid-subscription.</p>
      </div>

      <div class="cau-faq__item">
        <p class="cau-faq__question">What if I only want to review Christian books?</p>
        <p class="cau-faq__answer">Set your preferences to only see and review CAU subgroup books. You'll never be required to interact with content outside your community.</p>
      </div>

      <div class="cau-faq__item">
        <p class="cau-faq__question">Can I try free before paying?</p>
        <p class="cau-faq__answer">Yes — create a free account. Browse, explore, join the CAU subgroup. Only upgrade when you're ready to add your book and request reviews.</p>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════
       S8 — FINAL CTA
       ═══════════════════════════════════════ -->
  <section class="cau-final-cta" aria-labelledby="cau-cta-heading">
    <h2 id="cau-cta-heading">The community is forming right now.</h2>
    <p>Don't miss the founding window. Start free, upgrade when you're ready, and lock in your CAU founding member rate before this campaign closes.</p>
    <a href="/registration-cau-limited/" class="cau-btn-dark">Create Free Account →</a>
    <a href="/member-login/" class="cau-final-cta__link">Already have a GBR account? Log in and join the subgroup →</a>
  </section>

</div><!-- /.cau-page -->

<?php get_footer(); ?>
