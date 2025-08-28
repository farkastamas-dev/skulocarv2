// Modern Mobile Menu Animation System
class MobileMenuAnimations {
    constructor() {
        this.mobileMenu = document.getElementById("mobile-menu");
        this.mobileMenuBtn = document.getElementById("mobile-menu-btn");
        this.mobileMenuClose = document.getElementById("mobile-menu-close");
        this.mobileMenuBackdrop = document.getElementById(
            "mobile-menu-backdrop"
        );
        this.mobileDropdowns = document.querySelectorAll(".mobile-dropdown");
        this.menuItems = document.querySelectorAll(".mobile-menu-item");

        this.isOpen = false;

        // Debug: Check if elements are found
        console.log("Menu Elements:", {
            mobileMenu: this.mobileMenu,
            mobileMenuBtn: this.mobileMenuBtn,
            mobileMenuClose: this.mobileMenuClose,
            mobileMenuBackdrop: this.mobileMenuBackdrop,
            mobileDropdowns: this.mobileDropdowns.length,
            menuItems: this.menuItems.length,
            desktopDropdowns:
                document.querySelectorAll(".desktop-dropdown").length,
        });

        this.init();
    }

    init() {
        this.setupMobileMenu();
        this.setupMobileDropdowns();
        this.setupKeyboardSupport();
        this.setupTouchGestures();
        this.setupDesktopDropdowns();
    }

    setupMobileMenu() {
        // Open mobile menu
        this.mobileMenuBtn?.addEventListener("click", () => {
            this.openMobileMenu();
        });

        // Close mobile menu
        this.mobileMenuClose?.addEventListener("click", () => {
            this.closeMobileMenu();
        });

        // Close on backdrop click
        this.mobileMenuBackdrop?.addEventListener("click", () => {
            this.closeMobileMenu();
        });
    }

    setupKeyboardSupport() {
        // Close on escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && this.isOpen) {
                this.closeMobileMenu();
            }
        });
    }

    setupTouchGestures() {
        let startX = 0;
        let currentX = 0;

        // Touch start
        this.mobileMenu?.addEventListener("touchstart", (e) => {
            startX = e.touches[0].clientX;
        });

        // Touch move
        this.mobileMenu?.addEventListener("touchmove", (e) => {
            if (!this.isOpen) return;

            currentX = e.touches[0].clientX;
            const diffX = startX - currentX;

            // Only allow swipe from right to left (close gesture)
            if (diffX > 0) {
                e.preventDefault();
                const translateX = Math.max(-diffX, -320); // Max 320px (menu width)
                this.mobileMenu.style.transform = `translateX(${translateX}px)`;
            }
        });

        // Touch end
        this.mobileMenu?.addEventListener("touchend", (e) => {
            if (!this.isOpen) return;

            const diffX = startX - currentX;

            // If swiped more than 100px, close the menu
            if (diffX > 100) {
                this.closeMobileMenu();
            } else {
                // Reset position
                this.mobileMenu.style.transform = "translateX(0)";
            }
        });
    }

    openMobileMenu() {
        if (this.mobileMenu && !this.isOpen) {
            this.isOpen = true;

            // Prevent body scroll
            document.body.style.overflow = "hidden";

            // Show menu with animation
            this.mobileMenu.classList.remove("translate-x-full");
            this.mobileMenu.classList.add("translate-x-0");

            // Animate menu items with stagger effect
            this.animateMenuItems();
        }
    }

    closeMobileMenu() {
        if (this.mobileMenu && this.isOpen) {
            this.isOpen = false;

            // Re-enable body scroll
            document.body.style.overflow = "";

            // Hide menu with animation
            this.mobileMenu.classList.remove("translate-x-0");
            this.mobileMenu.classList.add("translate-x-full");

            // Reset menu items
            this.resetMenuItems();
        }
    }

    animateMenuItems() {
        this.menuItems.forEach((item, index) => {
            item.style.opacity = "0";
            item.style.transform = "translateX(30px)";
            item.style.transition = "all 0.3s cubic-bezier(0.4, 0, 0.2, 1)";

            setTimeout(() => {
                item.style.opacity = "1";
                item.style.transform = "translateX(0)";
            }, 200 + index * 50);
        });
    }

    resetMenuItems() {
        this.menuItems.forEach((item) => {
            item.style.opacity = "";
            item.style.transform = "";
            item.style.transition = "";
        });
    }

    setupMobileDropdowns() {
        this.mobileDropdowns.forEach((dropdown) => {
            const button = dropdown.querySelector(".mobile-dropdown-btn");
            const submenu = dropdown.querySelector(".mobile-submenu");
            const icon = button?.querySelector("i:last-child");

            button?.addEventListener("click", () => {
                const isOpen = submenu?.classList.contains("hidden");

                // Close all other dropdowns
                this.mobileDropdowns.forEach((otherDropdown) => {
                    if (otherDropdown !== dropdown) {
                        const otherSubmenu =
                            otherDropdown.querySelector(".mobile-submenu");
                        const otherIcon = otherDropdown.querySelector(
                            ".mobile-dropdown-btn i:last-child"
                        );

                        otherSubmenu?.classList.add("hidden");
                        otherIcon?.classList.remove("rotate-180");
                    }
                });

                // Toggle current dropdown
                if (isOpen) {
                    submenu?.classList.remove("hidden");
                    icon?.classList.add("rotate-180");

                    // Animate submenu items
                    this.animateSubmenuItems(submenu);
                } else {
                    submenu?.classList.add("hidden");
                    icon?.classList.remove("rotate-180");
                }
            });
        });
    }

    animateSubmenuItems(submenu) {
        const submenuItems = submenu?.querySelectorAll("a");
        submenuItems?.forEach((item, index) => {
            item.style.opacity = "0";
            item.style.transform = "translateY(-10px)";
            item.style.transition = "all 0.3s cubic-bezier(0.4, 0, 0.2, 1)";

            setTimeout(() => {
                item.style.opacity = "1";
                item.style.transform = "translateY(0)";
            }, index * 80);
        });
    }

    setupDesktopDropdowns() {
        // Add hover effects for desktop dropdowns
        const desktopDropdowns = document.querySelectorAll(".desktop-dropdown");

        desktopDropdowns.forEach((dropdown) => {
            const button = dropdown.querySelector(".desktop-menu-item");
            const submenu = dropdown.querySelector("div[class*='absolute']");

            if (submenu) {
                let isHovering = false;
                let hoverTimeout;

                dropdown.addEventListener("mouseenter", () => {
                    isHovering = true;
                    clearTimeout(hoverTimeout);
                    submenu.style.opacity = "1";
                    submenu.style.visibility = "visible";
                    submenu.style.transform = "translateY(0)";
                    submenu.style.pointerEvents = "auto";
                });

                dropdown.addEventListener("mouseleave", () => {
                    isHovering = false;
                    hoverTimeout = setTimeout(() => {
                        if (!isHovering) {
                            submenu.style.opacity = "0";
                            submenu.style.visibility = "hidden";
                            submenu.style.transform = "translateY(2px)";
                            submenu.style.pointerEvents = "none";
                        }
                    }, 100);
                });

                // Also handle submenu hover
                submenu.addEventListener("mouseenter", () => {
                    isHovering = true;
                    clearTimeout(hoverTimeout);
                });

                submenu.addEventListener("mouseleave", () => {
                    isHovering = false;
                    hoverTimeout = setTimeout(() => {
                        if (!isHovering) {
                            submenu.style.opacity = "0";
                            submenu.style.visibility = "hidden";
                            submenu.style.transform = "translateY(2px)";
                            submenu.style.pointerEvents = "none";
                        }
                    }, 100);
                });
            }
        });
    }
}

// Enhanced utility functions
const MobileMenuUtils = {
    // Add ripple effect to buttons
    addRippleEffect: (element) => {
        element.addEventListener("click", (e) => {
            const ripple = document.createElement("span");
            const rect = element.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + "px";
            ripple.style.left = x + "px";
            ripple.style.top = y + "px";
            ripple.classList.add("ripple");

            element.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    },

    // Add loading state
    addLoadingState: (element) => {
        element.classList.add("opacity-50", "pointer-events-none");
        const originalContent = element.innerHTML;
        element.innerHTML += '<i class="fa-solid fa-spinner fa-spin ml-2"></i>';

        return () => {
            element.classList.remove("opacity-50", "pointer-events-none");
            element.innerHTML = originalContent;
        };
    },

    // Smooth scroll to element
    smoothScrollTo: (target) => {
        const element = document.querySelector(target);
        if (element) {
            element.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    },
};

// Hero Slider Class
class HeroSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll(".slide");
        this.dots = document.querySelectorAll(".slider-dot");
        this.prevBtn = document.getElementById("slider-prev");
        this.nextBtn = document.getElementById("slider-next");
        this.progressBar = document.getElementById("slider-progress");
        this.sliderContainer = document.getElementById("slider-container");
        this.totalSlides = this.slides.length;
        this.autoPlayInterval = null;
        this.progressInterval = null;
        this.slideDuration = 5000; // 5 seconds
        this.isTransitioning = false;
        this.touchStartX = 0;
        this.touchEndX = 0;

        this.init();
    }

    init() {
        if (this.slides.length === 0) return;

        this.setupEventListeners();
        this.startAutoPlay();
        this.updateProgressBar();
        this.updateDots();
    }

    setupEventListeners() {
        // Navigation buttons
        if (this.prevBtn) {
            this.prevBtn.addEventListener("click", () => this.prevSlide());
        }
        if (this.nextBtn) {
            this.nextBtn.addEventListener("click", () => this.nextSlide());
        }

        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener("click", () => this.goToSlide(index));
        });

        // Touch/swipe support
        this.sliderContainer.addEventListener("touchstart", (e) => {
            this.touchStartX = e.changedTouches[0].screenX;
        });

        this.sliderContainer.addEventListener("touchend", (e) => {
            this.touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe();
        });

        // Keyboard navigation
        document.addEventListener("keydown", (e) => {
            if (e.key === "ArrowLeft") {
                this.prevSlide();
            } else if (e.key === "ArrowRight") {
                this.nextSlide();
            }
        });

        // Pause autoplay on hover
        this.sliderContainer.addEventListener("mouseenter", () =>
            this.pauseAutoPlay()
        );
        this.sliderContainer.addEventListener("mouseleave", () =>
            this.startAutoPlay()
        );
    }

    handleSwipe() {
        const swipeThreshold = 50;
        const diff = this.touchStartX - this.touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                this.nextSlide();
            } else {
                this.prevSlide();
            }
        }
    }

    goToSlide(index) {
        if (this.isTransitioning || index === this.currentSlide) return;

        this.isTransitioning = true;
        this.pauseAutoPlay();

        // Hide current slide
        this.slides[this.currentSlide].style.opacity = "0";
        this.dots[this.currentSlide].classList.remove("bg-white/50");
        this.dots[this.currentSlide].classList.add("bg-white/30");

        // Show new slide
        this.currentSlide = index;
        this.slides[this.currentSlide].style.opacity = "1";
        this.dots[this.currentSlide].classList.remove("bg-white/30");
        this.dots[this.currentSlide].classList.add("bg-white/50");

        // Resume autoplay after transition
        setTimeout(() => {
            this.isTransitioning = false;
            this.startAutoPlay();
            this.updateProgressBar();
        }, 1000);
    }

    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextIndex);
    }

    prevSlide() {
        const prevIndex =
            this.currentSlide === 0
                ? this.totalSlides - 1
                : this.currentSlide - 1;
        this.goToSlide(prevIndex);
    }

    startAutoPlay() {
        if (this.autoPlayInterval) return;

        this.autoPlayInterval = setInterval(() => {
            if (!this.isTransitioning) {
                this.nextSlide();
            }
        }, this.slideDuration);

        // Start progress bar if not already running
        if (!this.progressInterval) {
            this.updateProgressBar();
        }
    }

    pauseAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
        if (this.progressInterval) {
            clearInterval(this.progressInterval);
            this.progressInterval = null;
        }
    }

    updateProgressBar() {
        if (!this.progressBar) return;

        // Clear any existing interval
        if (this.progressInterval) {
            clearInterval(this.progressInterval);
        }

        this.progressBar.style.width = "0%";

        this.progressInterval = setInterval(() => {
            const currentWidth = parseFloat(this.progressBar.style.width) || 0;
            const increment = 100 / (this.slideDuration / 50); // Update every 50ms

            if (currentWidth >= 100) {
                clearInterval(this.progressInterval);
            } else {
                this.progressBar.style.width = currentWidth + increment + "%";
            }
        }, 50);
    }

    updateDots() {
        this.dots.forEach((dot, index) => {
            if (index === this.currentSlide) {
                dot.classList.remove("bg-white/30");
                dot.classList.add("bg-white/50");
            } else {
                dot.classList.remove("bg-white/50");
                dot.classList.add("bg-white/30");
            }
        });
    }
}

// Initialize all components when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
    // Initialize mobile menu animations
    const mobileMenu = new MobileMenuAnimations();

    // Initialize hero slider
    const heroSlider = new HeroSlider();

    // Add ripple effects to buttons
    document
        .querySelectorAll(".mobile-dropdown-btn, .mobile-menu-close")
        .forEach((button) => {
            MobileMenuUtils.addRippleEffect(button);
        });

    console.log("All components initialized successfully!");
});

// Export for potential use in other modules
window.MobileMenuAnimations = MobileMenuAnimations;
window.MobileMenuUtils = MobileMenuUtils;
