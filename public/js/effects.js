/**
 * Effects.js - Handles animation effects for portfolio
 */

$(document).ready(function() {
    // View more technologies functionality with enhanced animations
    const $viewMoreBtn = $('#viewMoreTech');
    const $hiddenTechItems = $('.hidden-card');
    const hiddenCount = $hiddenTechItems.length;
    let techExpanded = false;
    
    // Update the button text to show the correct number of hidden cards
    if ($viewMoreBtn.length && hiddenCount > 0) {
        $viewMoreBtn.html(`View ${hiddenCount} More Technologies <i class="fas fa-chevron-down"></i>`);
    }
    
    if ($viewMoreBtn.length) {
        $viewMoreBtn.on('click', function() {
            if (!techExpanded) {
                // Show all hidden technology cards with improved animation
                $hiddenTechItems.slideDown(2000);
                $('html, body').animate({
                    scrollTop: $hiddenTechItems.first().offset().top - 100
                }, 800);
                techExpanded = true;
                $viewMoreBtn.html(`View Less <i class="fas fa-chevron-up"></i>`);
            } else {
                // Hide technology cards again with smooth fade-out
                $hiddenTechItems.slideUp(1500);
                techExpanded = false;
                setTimeout(() => {
                    $viewMoreBtn.html(`View ${hiddenCount} More Technologies <i class="fas fa-chevron-down"></i>`);
                    $('html, body').animate({
                        scrollTop: $('.technologies-section').offset().top + 200
                    }, 800);
                }, 1600);
            }
        });
    }
    
    // Card appear animation for project cards (one-time only)
    const $projectCards = $('.project-card');
    
    // Using jQuery to handle project card animations with scroll
    function handleProjectCardAnimation() {
        $projectCards.each(function(index) {
            const $card = $(this);
            const cardTop = $card.offset().top;
            const cardHeight = $card.height();
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            
            // Check if card is in viewport (1/3 visible)
            if (scrollTop + windowHeight > cardTop + (cardHeight / 3) && 
                scrollTop < cardTop + cardHeight - (cardHeight / 3)) {
                
                if (!$card.hasClass('appear')) {
                    // Add a more pronounced delay for each card to create a smoother cascade effect
                    const columnPosition = (index % 3) + 1;
                    const rowPosition = Math.floor(index / 3) + 1;
                    const delay = (columnPosition * 200) + (rowPosition * 100); // Delay based on both column and row position
                    
                    setTimeout(function() {
                        $card.addClass('appear');
                    }, delay);
                }
            }
        });
    }
    
    // Initial check for cards in viewport
    handleProjectCardAnimation();
    
    // Check on scroll
    $(window).on('scroll', function() {
        handleProjectCardAnimation();
    });
    
    // Convert inline scripts to jQuery
    const $cookieBanner = $('#cookieBanner');
    const $acceptCookie = $('#acceptCookie');
    const $declineCookie = $('#declineCookie');

    if ($cookieBanner.length && $acceptCookie.length && $declineCookie.length) {
        $acceptCookie.on('click', function() {
            $cookieBanner.hide();
            // Here you would typically set a cookie to remember this choice
        });
        $declineCookie.on('click', function() {
            $cookieBanner.hide();
        });
    }

    // Scroll effect for header
    const $header = $('header');
    let lastScrollPosition = 0;
    
    // Add scroll-active class to header when page loads if not at the top
    if ($(window).scrollTop() > 50) {
        $header.addClass('scroll-active');
    }
    
    $(window).on('scroll', function() {
        const currentScrollPosition = $(window).scrollTop();
        
        // Add or remove scroll-active class based on scroll position
        if (currentScrollPosition > 50) {
            $header.addClass('scroll-active');
        } else {
            $header.removeClass('scroll-active');
        }
        
        // Update last scroll position
        lastScrollPosition = currentScrollPosition;
    });
});
