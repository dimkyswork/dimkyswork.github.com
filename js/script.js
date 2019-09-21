 var moscow_map;
      var points = [];
      var names_point = [];
      var balloon = null;

      ymaps.ready(function(){

        moscow_map = new ymaps.Map("first_map", {
          center: [55.749073, 37.607949],
          zoom: 10,
          controls: []
        }),
        myGeoObject = new ymaps.Placemark([52.519881, 13.407338], {
         balloonContentHeader:  ' <span style="color:#3064d9; font-weight:bold">Cafe Votive</span>',
         balloonContentBody: 'Dies ist eln unbestatigter Eintrag',
         balloonContentFooter: '1010 Wien',
         hintContent: 'Cafe Votive',
       },
       {
        iconLayout: 'default#image',
        iconImageHref: './img/servise_map.png',
        iconImageSize: [30, 30],
        iconImageOffset: [-15, -15],


      });

        moscow_map.geoObjects.add(myGeoObject);
        myGeoObject.balloon.open();
      });


      $(document).ready(function(){
      $('.regular').slick({
        dots: true,
        infinite:true, 
        slidesToShow:3,
        slidesToScroll:3
      });
    });