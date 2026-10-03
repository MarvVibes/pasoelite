(() => {
  'use strict';

  // ============================================
  // PASO ELITE SALON - JAVASCRIPT
  // Modeled on SWOT Gadgets Interactivity & Flow
  // ============================================

  // 0. SWOT-Style Loading Screen Animation Dismissal
  const preloader = document.getElementById('sitePreloader');
  if (preloader) {
    const dismissPreloader = () => {
      preloader.classList.add('loaded');
      setTimeout(() => {
        try { preloader.remove(); } catch (err) { preloader.style.display = 'none'; }
      }, 600);
    };

    if (document.readyState === 'complete') {
      setTimeout(dismissPreloader, 400);
    } else {
      window.addEventListener('load', () => {
        setTimeout(dismissPreloader, 600);
      });
      // Safety fallback timer so user is never stuck
      setTimeout(dismissPreloader, 2200);
    }
  }

  // 1. Site Header Scrolled Effect
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 20) {
      header?.classList.add('scrolled');
    } else {
      header?.classList.remove('scrolled');
    }
  }, { passive: true });

  // 2. Mobile Menu Toggle
  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('nav-links');

  if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
      const isOpen = navLinks.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', isOpen);
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  // 3. Lookbook Category Filtering (Exact SWOT Gadgets Filter List)
  const filterButtons = document.querySelectorAll('#styleFilterList .filter');
  const productCards = document.querySelectorAll('.products .product');

  function filterCatalog(category) {
    // Update active filter button
    filterButtons.forEach(btn => {
      const btnFilter = btn.getAttribute('data-filter');
      const isActive = (btnFilter === category);
      btn.classList.toggle('active', isActive);
      btn.setAttribute('aria-pressed', isActive);
    });

    // Filter products
    productCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      if (category === 'all' || cardCategory === category) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const category = btn.getAttribute('data-filter');
      filterCatalog(category);
    });
  });

  // Category quick links across the page (e.g. from .category-small or .category tiles)
  document.querySelectorAll('.category-grid [data-category], .category-small [data-filter]').forEach(link => {
    link.addEventListener('click', (e) => {
      const filterTarget = link.getAttribute('data-filter') || link.getAttribute('data-category');
      if (filterTarget && filterTarget !== 'all') {
        filterCatalog(filterTarget);
      }
    });
  });

  // Image load reliability safeguard: ensure images never remain stuck as empty boxes
  const setupImageRetry = () => {
    document.querySelectorAll('img').forEach(img => {
      img.addEventListener('error', () => {
        if (!img.dataset.retried) {
          img.dataset.retried = '1';
          setTimeout(() => {
            const rawSrc = img.src.split('?')[0];
            img.src = rawSrc + '?r=' + Date.now();
          }, 300);
        }
      });
    });
  };
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', setupImageRetry);
  } else {
    setupImageRetry();
  }

  // 4. Appointment Booking Form -> Direct WhatsApp Link Builder
  const bookingForm = document.getElementById('bookingForm');
  const bookingStatus = document.getElementById('bookingStatus');
  const whatsappProceedLink = document.getElementById('whatsappProceedLink');

  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = document.getElementById('bookName')?.value.trim() || '';
      const phone = document.getElementById('bookPhone')?.value.trim() || '';
      const service = document.getElementById('bookService')?.value || '';
      const date = document.getElementById('bookDate')?.value || '';
      const time = document.getElementById('bookTime')?.value || '';
      const details = document.getElementById('bookDetails')?.value.trim() || 'No additional notes';

      if (!name || !phone || !service || !date || !time) {
        alert('Please fill out all required fields.');
        return;
      }

      // Format WhatsApp message cleanly
      const message = `Hello Paso Elite Unisex Salon!
I would like to reserve an appointment:
• Name: ${name}
• Phone: ${phone}
• Service: ${service}
• Date: ${date}
• Preferred Time: ${time}
• Notes: ${details}

Please confirm availability at No 6 Itu Road, Uyo.`;

      const encodedMessage = encodeURIComponent(message);
      const waNum = (typeof window.pasoEliteConfig !== 'undefined' && window.pasoEliteConfig.whatsappNum) ? window.pasoEliteConfig.whatsappNum : '2347014987308';
      const whatsappUrl = `https://wa.me/${waNum}?text=${encodedMessage}`;

      // Update proceed link
      if (whatsappProceedLink) {
        whatsappProceedLink.href = whatsappUrl;
      }

      // Show status box
      if (bookingStatus) {
        bookingStatus.hidden = false;
        bookingStatus.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }

      // Automatically trigger WhatsApp in new tab
      window.open(whatsappUrl, '_blank', 'noopener,noreferrer');
    });
  }

  // Pre-fill service from Solutions list items
  document.querySelectorAll('[data-intent]').forEach(item => {
    item.addEventListener('click', () => {
      const intent = item.getAttribute('data-intent');
      const serviceSelect = document.getElementById('bookService');
      if (serviceSelect && intent) {
        for (let i = 0; i < serviceSelect.options.length; i++) {
          if (serviceSelect.options[i].text.toLowerCase().includes(intent.toLowerCase())) {
            serviceSelect.selectedIndex = i;
            break;
          }
        }
      }
    });
  });

  // 5. WhatsApp Floating Widget Popover
  const widgetButton = document.querySelector('.widget-button');
  const widgetPopover = document.getElementById('widgetPopover');

  if (widgetButton && widgetPopover) {
    // Show popover briefly after 4 seconds
    setTimeout(() => {
      widgetPopover.classList.add('show');
      setTimeout(() => {
        widgetPopover.classList.remove('show');
      }, 7000);
    }, 4000);

    widgetButton.addEventListener('mouseenter', () => {
      widgetPopover.classList.add('show');
    });

    document.addEventListener('click', (e) => {
      if (!e.target.closest('.whatsapp-widget')) {
        widgetPopover.classList.remove('show');
      }
    });
  }

  // 6. Dynamic Current Year in Footer
  const yearEl = document.getElementById('year');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // Set minimum date for booking input to today
  const bookDateInput = document.getElementById('bookDate');
  if (bookDateInput) {
    const today = new Date().toISOString().split('T')[0];
    bookDateInput.min = today;
  }
})();
