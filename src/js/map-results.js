($ => {
  $(document).ready(() => {
    const poiBtn = $(".torque-map-poi > button");
    const poiBtnContainer = $(".torque-map-pois");
    const poiList = $(".torque-map-pois-list");

    // on page ready
    adjustTop();

    // when button clicked
    poiBtn.click(function(){
      adjustTop();
    });

    function adjustTop(){
      if ( 0 < poiBtnContainer.length ) {
        // TODO: should probably adjust the overall height, too...
        poiList.css('top', poiBtnContainer.outerHeight() + 'px');
      }
    }

  });
})(jQuery);
