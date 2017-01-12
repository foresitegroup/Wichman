<?php
$PageTitle = "Appointments";
$Description = "";
$Keywords = "";

include "header.php";
?>

<div class="sub-header appointments-header">
  <div class="site-width">
    <h2>FOR APPOINTMENTS: <span>414-479-7000</span></h2>
    For all appointments and inquiries, please call us.
  </div>
</div>

<div class="appointments-gray">
  <div class="site-width">
    <strong>For worker's compensation and Independent Medical Examinations (IMEs), please call: 414-479-7000.</strong><br>
    <br>

    <h3>PLEASE OBTAIN AND BRING THE FOLLOWING TO YOUR APPOINTMENT:</h3>
    <ul>
      <li>Drivers License or a valid ID</li>
      <li>Insurance information</li>
      <li>Referral Letter (if required)</li>
      <li>Reports, X-rays, MRIs, CT scans etc and any other relevant information</li>
      <li>List of medications (if any)</li>
    </ul>
    <br>

    <h3>APPOINTMENT CANCELLATION</h3>
    Telephone the office during business hours and allow at least 1 day's notice so that we can offer your appointment time to patients on our waiting list.<br>
    <br>

    We recognize that your time is valuable, and we make every effort to run on time. Occasionally emergencies or patients require a little more time causing scheduling delays beyond our control. We apologize if we keep you waiting. 
  </div>
</div>

<div class="appointments-locations" id="locations">
  <div class="site-width">
    <div class="list">
      <h3>LOCATION &amp; HOURS: <span>9AM TO 5PM</span></h3>

      Patient Appointment hours in practice are <strong>9am to 5pm</strong>. Please inquire about location when setting up an appointment.<br>
      <br>

      <?php
      $locations = array(
        "1" => array("name" => "Aurora Advanced Healthcare", "address" => "2999 N Mayfair Rd", "address2" => "Suite 100", "city" => "Wauwatosa", "state" => "WI", "zip" => "53222", "lat" => "43.072918", "lon" => "-88.0505869", "doctor" => "Dr. Mark Wichman<br>Dr. Matthew Wichman"),
        "2" => array("name" => "Aurora Advanced Healthcare", "address" => "975 Port Washington Rd", "address2" => "", "city" => "Grafton", "state" => "WI", "zip" => "53024", "lat" => "43.3235915", "lon" => "-87.9305631", "doctor" => "Dr. Matthew Wichman"),
        "3" => array("name" => "Aurora Advanced Healthcare", "address" => "945 N 12th St", "address2" => "Suite 1200", "city" => "Milwaukee", "state" => "WI", "zip" => "53233", "lat" => "43.0426168", "lon" => "-87.9301253", "doctor" => "Dr. Mark Wichman<br>Dr. Matthew Wichman"),
        "4" => array("name" => "Aurora Advanced Healthcare", "address" => "14555 W National Ave", "address2" => "", "city" => "New Berlin", "state" => "WI", "zip" => "53151", "lat" => "42.9825053", "lon" => "-88.164953", "doctor" => "Dr. Mark Wichman"),
        "5" => array("name" => "Aurora Advanced Healthcare", "address" => "2424 S 90th St", "address2" => "Suite 500", "city" => "West Allis", "state" => "WI", "zip" => "53227", "lat" => "43.0011123", "lon" => "-88.0255039", "doctor" => "Dr. Mark Wichman"),
        "6" => array("name" => "Aurora Advanced Healthcare", "address" => "163 N Milwaukee Street", "address2" => "", "city" => "Milwaukee", "state" => "WI", "zip" => "53202", "lat" => "43.0319167", "lon" => "-87.9065404", "doctor" => "Dr. Matthew Wichman")
      );

      $Markers = "";
      $Info = "";

      for ($i = 1; $i <= count($locations); $i++) {
        $location = "<strong>" . $locations[$i]['name'] . "</strong><br>";
        $location .= $locations[$i]['address'];
        if (!empty($locations[$i]['address2'])) $location .= "<br>" . $locations[$i]['address2'];
        $location .= "<br>";
        $location .= $locations[$i]['city'] . ", " . $locations[$i]['state'] . " " . $locations[$i]['zip'] . "<br>";
        $location .= "<div class=\"loc-doc\">" . $locations[$i]['doctor'] . "</div>";

        echo "<div class=\"loc-num\">" . $i . ".</div>";
        echo "<div class=\"loc-loc\">" . $location . "</div>";
        echo "<div class=\"loc-clear\"></div>";

        $MyMarker = "images/map-pin" . $i . ".png";
        $Markers .= "['', " . $locations[$i]['lat'] . "," . $locations[$i]['lon'] . ", \"" . $MyMarker . "\"],\n";

        $Info .= "['" . $location . "'],\n";
      }
      ?>

      <div class="loc-phone">ALL APPOINTMENTS: <span>414-479-7000</span></div>
    </div>
  </div>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8yPmIdYf0WKeSslXyYIrbxqUlrSANimM"></script>
  <script>
    function initialize() {
      var map;
      var bounds = new google.maps.LatLngBounds();
      var mapOptions = {
        mapTypeId: 'terrain',
        scrollwheel: false
      };

      // Display a map on the page
      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

      // Multiple Markers
      var markers = [
        <?php echo $Markers; ?>
      ];

      // Info Window Content
      var infoWindowContent = [
        <?php echo $Info; ?>
      ];

      // Display multiple markers on a map
      var infoWindow = new google.maps.InfoWindow(), marker, i;

      // Loop through our array of markers & place each one on the map
      for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1],markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
          position: position,
          map: map,
          title: markers[i][0],
          icon: markers[i][3]
        });

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infoWindow.setContent(infoWindowContent[i][0]);
            infoWindow.open(map, marker);
          }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    google.maps.event.addDomListener(window, 'resize', initialize);
  </script>
  <div id="map-canvas"></div>
</div>


<div class="appointments-banner-footer">
  <div class="site-width center">
    <h2>REQUEST AN APPOINTMENT ONLINE</h2>
    <a href="https://www.aurorahealthcare.org/doctors/dr-matthew-p-wichman-md#scheduling" class="orange-button">DR. MATTHEW P. WICHMAN</a>
    <a href="https://www.aurorahealthcare.org/doctors/dr-mark-t-wichman-md#scheduling" class="orange-button">DR. MARK T. WICHMAN</a>
  </div>
</div>

<?php include "footer.php"; ?>