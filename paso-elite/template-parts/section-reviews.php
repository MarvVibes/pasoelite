<?php
/**
 * Template part: Verified Client Reviews Section
 *
 * @package Paso_Elite
 */

if (!defined('ABSPATH')) {
    exit;
}

$whatsapp = paso_get_whatsapp();
?>
<section class="section wrap reviews-section" id="reviews">
  <div class="section-heading">
    <div>
      <p class="eyebrow">VERIFIED CLIENT REVIEWS · 5.0 RATING</p>
      <h2>
        Real words from<br />
        real clients in Uyo.
      </h2>
    </div>
    <div class="reviews-header-action">
      <a class="button button-outline" href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener">
        <span>Join our happy clients</span>
        <svg aria-hidden="true" focusable="false"><use href="#lucide-arrow-up-right" /></svg>
      </a>
    </div>
  </div>

  <div class="reviews-summary-bar">
    <div class="summary-score-box">
      <span class="summary-score">5.0</span>
      <div class="summary-stars-col">
        <div class="stars-row" aria-label="5 out of 5 stars">
          <svg class="star-icon" aria-hidden="true"><use href="#lucide-star" /></svg>
          <svg class="star-icon" aria-hidden="true"><use href="#lucide-star" /></svg>
          <svg class="star-icon" aria-hidden="true"><use href="#lucide-star" /></svg>
          <svg class="star-icon" aria-hidden="true"><use href="#lucide-star" /></svg>
          <svg class="star-icon" aria-hidden="true"><use href="#lucide-star" /></svg>
        </div>
        <span class="summary-count">100% 5-Star Reviews in Uyo</span>
      </div>
    </div>
    <div class="summary-divider"></div>
    <div class="summary-perks">
      <span class="summary-tag">
        <svg aria-hidden="true"><use href="#lucide-circle-check" /></svg>
        Sterile UV Single-Use Blades
      </span>
      <span class="summary-tag">
        <svg aria-hidden="true"><use href="#lucide-circle-check" /></svg>
        Zero-Wait Guaranteed Chair
      </span>
      <span class="summary-tag">
        <svg aria-hidden="true"><use href="#lucide-circle-check" /></svg>
        No 6 Itu Road Studio in Uyo
      </span>
    </div>
  </div>

  <!-- Reviews Track -->
  <div class="reviews-slider-wrapper">
    <div class="reviews-slider-viewport">
      <div class="reviews-slider-track">
        
        <article class="review-card">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar">EA</div>
              <div>
                <h3 class="reviewer-name">Ememobong Akpan</h3>
                <span class="reviewer-meta">Executive Client · Uyo</span>
              </div>
            </div>
            <div class="stars-row">
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
            </div>
          </div>
          <p class="review-body">
            "Finding a salon in Uyo that respects appointment times used to be impossible until I found Paso Elite on Itu Road. The barber was ready the second I walked in. Clean razor, sharp line-up, and great AC ambience."
          </p>
          <div class="review-card-footer">
            <span class="review-source">Verified Client</span>
            <span class="review-highlight">Punctual &amp; Master Fades</span>
          </div>
        </article>

        <article class="review-card">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar">BO</div>
              <div>
                <h3 class="reviewer-name">Blessing Okon</h3>
                <span class="reviewer-meta">Regular Client · Shelter Afrique</span>
              </div>
            </div>
            <div class="stars-row">
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
            </div>
          </div>
          <p class="review-body">
            "I got my bohemian knotless braids here and it was completely painless. Usually my scalp throbs for days with other braiders, but Paso Elite was so gentle and neat. Three weeks in and it still looks brand new."
          </p>
          <div class="review-card-footer">
            <span class="review-source">Verified Client</span>
            <span class="review-highlight">Painless Knotless Braids</span>
          </div>
        </article>

        <article class="review-card review-card-featured">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar">AU</div>
              <div>
                <h3 class="reviewer-name">Aniebiet Udoh</h3>
                <span class="reviewer-meta">Bride · Ewet Housing</span>
              </div>
            </div>
            <div class="stars-row">
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
              <svg class="star-icon"><use href="#lucide-star" /></svg>
            </div>
          </div>
          <p class="review-body">
            "They handled my bridal hair and frontal installation for my traditional and white wedding. Everyone asked who styled my hair! The lace melted like real scalp. 100% recommend them to anyone who wants luxury quality."
          </p>
          <div class="review-card-footer">
            <span class="review-source">Verified Bride</span>
            <span class="review-highlight">Bridal Lace Perfection</span>
          </div>
        </article>

      </div>
    </div>
  </div>
</section>
