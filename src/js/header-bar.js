($ => {
  $(document).ready(() => {
    const bodyContainer = $("body");
    const headerContainer = $("header");
    const headerContent = $("header .torque-header-content-wrapper");
    const outsideHeaderBar = $(".torque-header-logo-wrapper, main, footer");
    const headerBurgerMenu = $("header .torque-burger-menu");
    const headerMenuItemsContainer = $("header .torque-header-menu-items-mobile");

    const bodyScrolledClass = "is-scrolled";
    const headerFixedClass = "is-fixed";

    const menuOverlayHTML = '<div class="menu-overlay"></div>';
    const menuOverlayClass = ".menu-overlay";

    // add overlay when user clicks on burger menu
    headerBurgerMenu.click(function() {
      // open/close of menu is already handled by the parent theme...
      // this is additional functionality in the child theme...
      addRemoveOverlay();
    });

    // When user clicks outside of menu container
    outsideHeaderBar.click(function() {
      // ONLY If the meun is open, close it...
      if (headerContent.hasClass("active")) {
        openCloseMenu();
      }
    });

    // check once on load, add/remove class to style header
    checkUserScroll();
    // When user scrolls, add/remove class to style header
    $(window).scroll(function() {
      checkUserScroll();
    });

    // Function to open/close the menu
    function openCloseMenu() {
      headerContent.toggleClass("active");
      headerBurgerMenu.toggleClass("active");
      headerMenuItemsContainer.toggleClass("active");
    }

    // Function to add/remove the menu overlay
    function addRemoveOverlay() {
      if (headerContent.hasClass("active")) {
        // Create and show the menu overlay
        headerMenuItemsContainer.append(menuOverlayHTML);
        $(menuOverlayClass).animate(
          { opacity: 0.67 },
          150
        );
        // Add event handler for newly created menu overlay element
        $(menuOverlayClass).click(function() {
          openCloseMenu();
          addRemoveOverlay();
        });
      } else {
        // Remove the menu overlay
        $(menuOverlayClass).fadeOut(250, function() {
          $(this).remove();
        });
      }
    }

    function checkUserScroll() {
      if ($(this).scrollTop() >= 5) {
        headerContainer.addClass(bodyScrolledClass);
        headerContainer.addClass(headerFixedClass);
      } else {
        headerContainer.removeClass(bodyScrolledClass);
        headerContainer.removeClass(headerFixedClass);
      }
    }
  });
})(jQuery);
