<footer class="page-footer blue scrollspy" id="about">
      <div class="container">
        <div class="row">
          <div class="col s12 l6">
            <h5>Emergency & Important Numbers:</h5>
            <p><b>(Nigeria)</b></p>
            <ul>
              
                  <li> Ambulance - 112 or 199</li>
                  <li>Fire - 112 or 199</li>
                  <li>Police - 112 or 199</li>
          
            </ul>
          </div>
          <div class="col s12 l4 offset-l2">
            <h5>Connect with Us On:</h5>
            <ul>
              <li><a href="https://web.facebook.com/groups/428424611842358/about" class="btn-floating btn-small indigo darken-4 prefix">
                <i class="fab fa-facebook"></i>
              </a>Facebook</a></li>
              <li><a href="https://www.instagram.com/first_responses/" class="btn-floating btn-small indigo darken-4 prefix">
                  <i class="fab fa-instagram purple"></i>
              </a>Instagram</li>
              <li><a href="#" class="btn-floating btn-small indigo darken-4 prefix">
                  <i class="fab fa-twitter"></i></a>Twitter</li>
                <li><a href="#" class="btn-floating btn-small indigo darken-4 prefix">
                  <i class="fab fa-github black"></i></a>Github</li>
            </ul>
          </div>
        </div>
      </div>
        
      <div class="footer-copyright blue darken-4">
       <div class="container center-align">&copy; 2020 Team Pervigeo for <a class="black-text" href="https://pearlsafrica.org"> Pearls Africa</a></div> 
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!--Compiled and minified Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <!-- <script src="ASSETS/js/jquery.js"></script> -->
            
            <!--Compiled and minified Javascript-->
            <!-- <script src="ASSETS/js/materialize.min.js"></script>     -->
            <script>
                $(document).ready(function(){
                  $('.sidenav').sidenav();
                  $('.tooltipped').tooltip();
                });
              </script>
            
            <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApD5vFlvR4z60yOFRPB8mWtnh1e1N319Q&callback=initMap&libraries=places&v=weekly"
    defer
  ></script>     
        <script >
          let map;
          let places;
          let infoWindow;
          let markers = [];
          let autocomplete;
          const countryRestrict = { country: "ng" };
          const MARKER_PATH =
            "https://developers.google.com/maps/documentation/javascript/images/marker_green";
          const hostnameRegexp = new RegExp("^https?://.+?/");
          const countries = {
            au: {
              center: { lat: -25.3, lng: 133.8 },
              zoom: 4,
            },
            br: {
              center: { lat: -14.2, lng: -51.9 },
              zoom: 3,
            },
            ca: {
              center: { lat: 62, lng: -110.0 },
              zoom: 3,
            },
            fr: {
              center: { lat: 46.2, lng: 2.2 },
              zoom: 5,
            },
            de: {
              center: { lat: 51.2, lng: 10.4 },
              zoom: 5,
            },
            mx: {
              center: { lat: 23.6, lng: -102.5 },
              zoom: 4,
            },
            nz: {
              center: { lat: -40.9, lng: 174.9 },
              zoom: 5,
            },
            it: {
              center: { lat: 41.9, lng: 12.6 },
              zoom: 5,
            },
            za: {
              center: { lat: -30.6, lng: 22.9 },
              zoom: 5,
            },
            es: {
              center: { lat: 40.5, lng: -3.7 },
              zoom: 5,
            },
            pt: {
              center: { lat: 39.4, lng: -8.2 },
              zoom: 6,
            },
            ng: {
              center: { lat: 9.0064911, lng: 4.178262 },
              zoom: 6,
            },
            uk: {
              center: { lat: 54.8, lng: -4.6 },
              zoom: 5,
            },
          };
          
          function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
              zoom: countries["ng"].zoom,
              center: countries["ng"].center,
              mapTypeControl: false,
              panControl: false,
              zoomControl: false,
              streetViewControl: false,
            });
            infoWindow = new google.maps.InfoWindow({
              content: document.getElementById("info-content"),
            });
            
            // Create the autocomplete object and associate it with the UI input control.
            // Restrict the search to the default country, and to place type "cities".
            autocomplete = new google.maps.places.Autocomplete(
              document.getElementById("autocomplete"),
              {
                types: ["geocode"],
                componentRestrictions: countryRestrict,
              }
            );
            places = new google.maps.places.PlacesService(map);
            autocomplete.addListener("place_changed", onPlaceChanged);
            // Add a DOM event listener to react when the user selects a country.
            document
              .getElementById("country")
              .addEventListener("change", setAutocompleteCountry);
          }
          
          // When the user selects a city, get the place details for the city and
          // zoom the map in on the city.
          function onPlaceChanged() {
            const place = autocomplete.getPlace();
          
            if (place.geometry) {
              map.panTo(place.geometry.location);
              map.setZoom(15);
              search();
            } else {
              document.getElementById("autocomplete").placeholder = "Enter your location";
            }
            
          }
          
          // Search for hospital in the selected city, within the viewport of the map.
          function search() {
            const search = {
              bounds: map.getBounds(),
              types: ["hospital", "pharmacy"],
            };
            places.nearbySearch(search, (results, status, pagination) => {
              if (status === google.maps.places.PlacesServiceStatus.OK) {
                clearResults();
                clearMarkers();
          
                // Create a marker for each hospital found, and
                // assign a letter of the alphabetic to each marker icon.
                for (let i = 0; i < results.length; i++) {
                  const markerLetter = String.fromCharCode("A".charCodeAt(0) + (i % 26));
                  const markerIcon = MARKER_PATH + markerLetter + ".png";
                  // Use marker animation to drop the icons incrementally on the map.
                  markers[i] = new google.maps.Marker({
                    position: results[i].geometry.location,
                    animation: google.maps.Animation.DROP,
                    icon: markerIcon,
                  });
                  // If the user clicks a hospital marker, show the details of that hospital
                  // in an info window.
                  markers[i].placeResult = results[i];
                  google.maps.event.addListener(markers[i], "click", showInfoWindow);
                  setTimeout(dropMarker(i), i * 100);
                  addResult(results[i], i);
                }
              }
            });
          }
          
          function clearMarkers() {
            for (let i = 0; i < markers.length; i++) {
              if (markers[i]) {
                markers[i].setMap(null);
              }
            }
            markers = [];
          }
          
          // Set the country restriction based on user input.
          // Also center and zoom the map on the given country.
          function setAutocompleteCountry() {
            const country = document.getElementById("country").value;
          
            if (country == "all") {
              autocomplete.setComponentRestrictions({ country: [] });
              map.setCenter({ lat: 15, lng: 0 });
              map.setZoom(2);
            } else {
              autocomplete.setComponentRestrictions({ country: country });
              map.setCenter(countries[country].center);
              map.setZoom(countries[country].zoom);
            }
            clearResults();
            clearMarkers();
          }
          
          function dropMarker(i) {
            return function () {
              markers[i].setMap(map);
            };
          }
          
          function addResult(result, i) {
            const results = document.getElementById("results");
            const markerLetter = String.fromCharCode("A".charCodeAt(0) + (i % 26));
            const markerIcon = MARKER_PATH + markerLetter + ".png";
            const tr = document.createElement("tr");
            tr.style.backgroundColor = i % 2 === 0 ? "#F0F0F0" : "#FFFFFF";
          
            tr.onclick = function () {
              google.maps.event.trigger(markers[i], "click");
            };
            const iconTd = document.createElement("td");
            const nameTd = document.createElement("td");
            const icon = document.createElement("img");
            icon.src = markerIcon;
            icon.setAttribute("class", "placeIcon");
            icon.setAttribute("className", "placeIcon");
            const name = document.createTextNode(result.name);
            iconTd.appendChild(icon);
            nameTd.appendChild(name);
            tr.appendChild(iconTd);
            tr.appendChild(nameTd);
            results.appendChild(tr);
          }
          
          function clearResults() {
            const results = document.getElementById("results");
          
            while (results.childNodes[0]) {
              results.removeChild(results.childNodes[0]);
            }
          }
          
          // Get the place details for a hospital. Show the information in an info window,
          // anchored on the marker for the hospital that the user selected.
          function showInfoWindow() {
            const marker = this;
            places.getDetails(
              { placeId: marker.placeResult.place_id },
              (place, status) => {
                if (status !== google.maps.places.PlacesServiceStatus.OK) {
                  return;
                }
                infoWindow.open(map, marker);
                buildIWContent(place);
              }
            );
          }
          
          // Load the place information into the HTML elements used by the info window.
          function buildIWContent(place) {
            document.getElementById("iw-icon").innerHTML =
              '<img class="hospitalIcon" ' + 'src="' + place.icon + '"/>';
            document.getElementById("iw-url").innerHTML =
              '<b><a href="' + place.url + '">' + place.name + "</a></b>";
            document.getElementById("iw-address").textContent = place.vicinity;
          
            if (place.formatted_phone_number) {
              document.getElementById("iw-phone-row").style.display = "";
              document.getElementById("iw-phone").textContent =
                place.formatted_phone_number;
            } else {
              document.getElementById("iw-phone-row").style.display = "none";
            }
          
            // Assign a five-star rating to the hospital, using a black star ('&#10029;')
            // to indicate the rating the hospital has earned, and a white star ('&#10025;')
            // for the rating points not achieved.
            if (place.rating) {
              let ratingHtml = "";
          
              for (let i = 0; i < 5; i++) {
                if (place.rating < i + 0.5) {
                  ratingHtml += "&#10025;";
                } else {
                  ratingHtml += "&#10029;";
                }
                document.getElementById("iw-rating-row").style.display = "";
                document.getElementById("iw-rating").innerHTML = ratingHtml;
              }
            } else {
              document.getElementById("iw-rating-row").style.display = "none";
            }
          
            // The regexp isolates the first part of the URL (domain plus subdomain)
            // to give a short URL for displaying in the info window.
            if (place.website) {
              let fullUrl = place.website;
              let website = String(hostnameRegexp.exec(place.website));
          
              if (!website) {
                website = "http://" + place.website + "/";
                fullUrl = website;
              }
              document.getElementById("iw-website-row").style.display = "";
              document.getElementById("iw-website").textContent = website;
            } else {
              document.getElementById("iw-website-row").style.display = "none";
            }
          }
          </script>
        
          
  
  
    <!-- <script src="ASSETS/js/materialize/min.js"></script> -->
  </body>
</html>