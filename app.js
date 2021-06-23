const roadInput = document.getElementById('road');
function initMap() {
  // Инициализация объекта конструктора Карты
  const map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 48.607030, lng: 22.263979},
    zoom: 15,
    disableDoubleClickZoom: true
  }); 
  // Инициализация объекта конструктора Маркера
  const marker = new google.maps.Marker({map: map});
  // Инициализация объекта конструктора информационого окна
  const infowindow = new google.maps.InfoWindow();
  // Инициализация объекта конструктора геокодера
  const geocoder = new google.maps.Geocoder();

  map.addListener('dblclick', event =>  {
  // Установка позиции маркера в указаном месте
    marker.setPosition(event.latLng);
    geocodeLatLng(geocoder, map, infowindow);
    marker.addListener('click', () => {
      infowindow.open(map, marker);
    });
    
  });

  function geocodeLatLng(geocoder, map, infowindow) {
    const latlng = marker.getPosition();

    // метод обратного вызова
    geocoder.geocode({ location: latlng }, (results, status) => {
      // "ОК" указывает, что ошибок не было. Адрес был успешно проанализирован, и был возвращен по крайней мере один геокод.
      if (status === "OK") {
        if (results[0]) {
          marker.setPosition(latlng)
          infowindow.setContent(results[0].formatted_address);
          roadInput.value = results[0].formatted_address;
          infowindow.open(map, marker);

        } else {
          window.alert("Результаты не найдены");
        }
      } else {
        window.alert("Не удалось геокодировать из-за: " + status);
      }
    });
  }

}

//BURGER MENU
const menuBtn = document.getElementById('menu-btn');
let menuEls = document.getElementById('menu').querySelectorAll('a');

menuBtn.addEventListener('click', (e) => {
  menuBtn.classList.toggle('open');
});

for (let menuEl of menuEls) {
  menuEl.addEventListener('click', (e) => {
    console.log(e.target);
    menuBtn.classList.remove('open');
  });
}


// BUTTON HOVER ANIMATION
const btn = document.getElementById('btn');
btn.addEventListener('mousemove', e => {
  const x = e.pageX - btn.offsetLeft;
  const y = e.pageY - btn.offsetTop;
  btn.style.setProperty('--x', x + 'px');
  btn.style.setProperty('--y', y + 'px');
});
