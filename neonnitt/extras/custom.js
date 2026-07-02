document.addEventListener('DOMContentLoaded', function () {

    // Auto-class tables for CMS content
    document.querySelectorAll('table').forEach(function(t) { t.classList.add('nitttable'); });

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

    // Scroll-down button on desktop
    var heroCarousel = document.getElementById('hero-carousel');
    var missionSection = document.getElementById('a-mission-defined-by-possibility');
    if (heroCarousel && missionSection && window.innerWidth > 768) {
        var btn = document.createElement('button');
        btn.className = 'scroll-down';
        btn.setAttribute('aria-label', 'Skip to main content');
        btn.innerHTML = 'Skip to main content';
        btn.addEventListener('click', function () {
            var navH = document.querySelector('.navigation-wrapper').offsetHeight;
            window.scrollTo({
                top: missionSection.getBoundingClientRect().top + window.pageYOffset - navH + 55,
                behavior: 'smooth'
            });
        });
        document.body.appendChild(btn);
        var heroHeight = heroCarousel.offsetHeight;
        window.addEventListener('scroll', function () {
            if (window.scrollY > heroHeight * 0.8) {
                btn.classList.add('scroll-down-hidden');
            } else {
                btn.classList.remove('scroll-down-hidden');
            }
        });
    }

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

    // Hamburger toggle (homepage = mobile drawer, inner page = sidebar drawer)
    var toggleBtn = document.querySelector('.navbar-toggle');
    var isHomepage = document.querySelector('main:not(.page-with-sidebar)');
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            if (isHomepage) {
                var drawer = document.querySelector('.mobile-drawer');
                var overlay = document.querySelector('.mobile-drawer-overlay');
                var inner = document.querySelector('.mobile-drawer-inner');
                if (inner && !inner.hasChildNodes()) {
                    var navList = document.querySelector('.main-nav .nav-list');
                    if (navList) {
                        inner.appendChild(navList.cloneNode(true));
                    }
                }
                drawer.classList.toggle('open');
                overlay.classList.toggle('open');
                toggleBtn.classList.toggle('active');
            } else {
                var sidebar = document.querySelector('.inner-sidebar');
                var overlay = document.querySelector('.inner-sidebar-overlay');
                if (!overlay) {
                    overlay = document.createElement('div');
                    overlay.className = 'inner-sidebar-overlay';
                    document.body.appendChild(overlay);
                    overlay.addEventListener('click', function () {
                        sidebar?.classList.remove('open');
                        this.classList.remove('open');
                        document.querySelector('.navbar-toggle')?.classList.remove('active');
                    });
                }
                if (sidebar) {
                    sidebar.classList.toggle('open');
                    overlay.classList.toggle('open');
                    toggleBtn.classList.toggle('active');
                }
            }
        });
    }

    // Mobile drawer overlay close
    document.querySelector('.mobile-drawer-overlay')?.addEventListener('click', function () {
        document.querySelector('.mobile-drawer')?.classList.remove('open');
        this.classList.remove('open');
        document.querySelector('.navbar-toggle')?.classList.remove('active');
    });

    // Dropdown toggle for mobile (delegated on drawer)
    document.querySelector('.mobile-drawer')?.addEventListener('click', function (e) {
        var toggle = e.target.closest('.dropdown-toggle');
        if (toggle && window.innerWidth <= 991) {
            e.preventDefault();
            toggle.parentElement.classList.toggle('open');
        }
    });

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

    // Nav-more toggle (mobile)
    document.querySelectorAll('.nav-more-trigger').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            if (window.innerWidth <= 768) {
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

    // Collapse only the sibling menu; keep the current page children menu open.
    var sidebar = document.querySelector('.inner-sidebar');
    if (sidebar) {
        var siblingHead = sidebar.querySelector('.cms-menuhead');
        var siblingHeadBlock = siblingHead ? (siblingHead.closest('a') || siblingHead) : null;
        var siblingMenuBlock = null;
        var siblingHeadHref = siblingHeadBlock && siblingHeadBlock.tagName && siblingHeadBlock.tagName.toLowerCase() === 'a' ? siblingHeadBlock.getAttribute('href') : '#';

        if (siblingHeadBlock) {
            var cursor = siblingHeadBlock.nextElementSibling;
            while (cursor && !cursor.querySelector('.cms-menuhead') && !cursor.classList.contains('cms-menuhead')) {
                if (cursor.tagName && cursor.tagName.toLowerCase() === 'ul') {
                    siblingMenuBlock = cursor;
                    break;
                }
                if (cursor.querySelector('ul')) {
                    siblingMenuBlock = cursor;
                    break;
                }
                cursor = cursor.nextElementSibling;
            }
        }

        if (siblingHead && siblingHeadBlock && siblingMenuBlock) {
            var heading = document.createElement('div');
            heading.className = 'cms-menuhead sibling-menu-heading';
            heading.setAttribute('aria-expanded', 'false');

            var titleLink = document.createElement('a');
            titleLink.className = 'sibling-menu-parent-link';
            titleLink.href = siblingHeadHref || '#';
            titleLink.textContent = siblingHead.textContent;

            var toggle = document.createElement('button');
            toggle.type = 'button';
            toggle.className = 'sibling-menu-toggle';
            toggle.setAttribute('aria-expanded', 'false');

            var toggleCaret = document.createElement('span');
            toggleCaret.className = 'caret';

            toggle.appendChild(toggleCaret);
            heading.appendChild(titleLink);
            heading.appendChild(toggle);
            siblingMenuBlock.classList.add('sibling-menu-list', 'is-collapsed');
            siblingHeadBlock.replaceWith(heading);

            toggle.addEventListener('click', function () {
                var isCollapsed = siblingMenuBlock.classList.toggle('is-collapsed');
                heading.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
                toggle.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
            });
            heading.addEventListener('click', function (e) {
                if (e.target.closest('a') || e.target.closest('button')) {
                    return;
                }
                var isCollapsed = siblingMenuBlock.classList.toggle('is-collapsed');
                heading.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
                toggle.setAttribute('aria-expanded', isCollapsed ? 'false' : 'true');
            });
        }
    }

    
});
