document.addEventListener('DOMContentLoaded', function () {

    // Hero Swiper
    var heroSwiper = new Swiper('.heroSwiper', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Achievements & Events Swipers
    var achievementsSwiper = new Swiper('#achievementsSwiper', {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '#achievementsSwiper .swiper-pagination',
            clickable: true,
        },
    });

    var eventsSwiper = new Swiper('#eventsSwiper', {
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '#eventsSwiper .swiper-pagination',
            clickable: true,
        },
    });

    // Hamburger toggle
    var toggleBtn = document.querySelector('.navbar-toggle');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            document.querySelector('.main-nav').classList.toggle('open');
        });
    }

    // Collapse toggles (action-bar, translate-bar)
    document.querySelectorAll('[data-toggle="collapse"]').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            var target = document.querySelector(this.getAttribute('data-target'));
            if (target) {
                target.classList.toggle('in');
            }
        });
    });

    // Mobile parent toggles
    document.querySelectorAll('.main-nav .nav-list > li.has-dropdown > a, .main-nav .nav-list > li.has-mega-menu > a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            if (window.innerWidth <= 991) {
                e.preventDefault();
                this.parentElement.classList.toggle('open');
            }
        });
    });

    // Scroll-based header opacity
    var navWrapper = document.querySelector('.navigation-wrapper');
    var heroCarousel = document.getElementById('hero-carousel');
    if (navWrapper) {
        if (heroCarousel) {
            document.querySelector('main')?.classList.add('has-hero-carousel');
        }
        function updateHeader() {
            if (heroCarousel) {
                if (window.scrollY >= heroCarousel.offsetHeight - navWrapper.offsetHeight) {
                    navWrapper.classList.add('scrolled');
                } else {
                    navWrapper.classList.remove('scrolled');
                }
            } else {
                navWrapper.classList.add('scrolled');
            }
        }
        window.addEventListener('scroll', updateHeader);
        updateHeader();
    }

    // Dynamic padding for pages without hero carousel
    var mainEl = document.querySelector('main');
    if (!heroCarousel && mainEl && navWrapper) {
        function adjustMainPadding() {
            mainEl.style.paddingTop = navWrapper.offsetHeight + 'px';
        }
        adjustMainPadding();
        window.addEventListener('resize', adjustMainPadding);
    }

    // Count-up animation for stats
    var statNumbers = document.querySelectorAll('.nitt-stat-number');
    statNumbers.forEach(function(el) {
        var target = parseInt(el.textContent.trim(), 10);
        if (!isNaN(target)) {
            el.dataset.target = target;
            if (el.classList.contains('count-down')) {
                var from = el.dataset.start ? parseInt(el.dataset.start) : Math.round(target * 2);
                el.dataset.from = from;
                el.textContent = from;
            } else {
                el.textContent = '0';
            }
        }
    });

    function animateCountUp(el) {
        var target = parseInt(el.dataset.target);
        var duration = 2000;
        var start = performance.now();

        if (el.classList.contains('count-down')) {
            var from = parseInt(el.dataset.from);
            function update(now) {
                var elapsed = now - start;
                var progress = Math.min(elapsed / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.round(from - (from - target) * eased);
                if (progress < 1) requestAnimationFrame(update);
            }
            requestAnimationFrame(update);
        } else {
            function update(now) {
                var elapsed = now - start;
                var progress = Math.min(elapsed / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(eased * target);
                if (progress < 1) requestAnimationFrame(update);
            }
            requestAnimationFrame(update);
        }
    }

    var statsSection = document.getElementById('nitt-stats');
    if (statsSection) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    statsSection.querySelectorAll('.nitt-stat-number').forEach(animateCountUp);
                    observer.disconnect();
                }
            });
        });
        observer.observe(statsSection);
    }

});
