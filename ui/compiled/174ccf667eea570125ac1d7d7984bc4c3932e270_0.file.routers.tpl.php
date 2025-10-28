<?php
/* Smarty version 4.5.3, created on 2025-10-28 17:55:21
  from 'C:\xampp\htdocs\routeiq\ui\ui\admin\maps\routers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900d959df19a1_68964621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '174ccf667eea570125ac1d7d7984bc4c3932e270' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\ui\\ui\\admin\\maps\\routers.tpl',
      1 => 1761663307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_6900d959df19a1_68964621 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Search form -->
<form id="site-search" method="post" action="<?php echo Text::url('');?>
routers/maps">
    <input type="hidden" name="_route" value="routers/maps">
    <div class="input-group mb-3">
        <div class="input-group-addon">
            <span class="fa fa-search"></span>
        </div>
        <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="<?php echo Lang::T('Search');?>
...">
        <div class="input-group-btn">
            <button class="btn btn-success" type="submit"><?php echo Lang::T('Search');?>
</button>
        </div>
    </div>
</form>

<!-- Map container -->
<div id="map" class="well" style="width: 100%; height: 75vh; margin: 20px auto;"></div>

<?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Modal for adding a new device -->
<div class="modal fade" id="addDeviceModal" tabindex="-1" role="dialog" aria-labelledby="addDeviceModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addDeviceModalLabel">Add Device Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="deviceForm">
          <div class="form-group">
            <label>Device/Router Name</label>
            <input type="text" class="form-control" id="deviceName" required>
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="deviceDescription"></textarea>
          </div>
          <input type="hidden" id="latitude">
          <input type="hidden" id="longitude">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success" id="saveDevice">Save Device</button>
      </div>
    </div>
  </div>
</div>


<?php echo '<script'; ?>
>
let map, marker, currentLat, currentLng;

// Initialize map
function initMap() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition((pos) => {
      setupMap(pos.coords.latitude, pos.coords.longitude);
    }, () => {
      setupMap(-1.2921, 36.8219); // Default to Nairobi
    });
  } else {
    setupMap(-1.2921, 36.8219);
  }
}

// Setup Leaflet map
function setupMap(lat, lng) {
  map = L.map('map').setView([lat, lng], 10);

  // Base map layer (Google Maps style)
  L.tileLayer('https://{s}.google.com/vt/lyrs=m&hl=en&x={x}&y={y}&z={z}', {
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
    maxZoom: 20
  }).addTo(map);

  // Load existing routers from backend
  const routers = <?php echo json_encode($_smarty_tpl->tpl_vars['d']->value);?>
;
  routers.forEach(function(router) {
    const coords = router.coordinates ? router.coordinates.split(',') : null;
    if (coords) {
      const marker = L.marker(coords).addTo(map);
      marker.bindPopup(`
        <strong>${router.name}</strong><br>
        ${router.description || ''}<br>
        <a href='?_route=routers/edit/${router.id}'>More Info</a>
      `);
    }
  });

  // Click to add a new device
  map.on('click', function(e) {
    currentLat = e.latlng.lat;
    currentLng = e.latlng.lng;

    // If a marker already exists, remove it
    if (marker) {
      map.removeLayer(marker);
    }

    // Add new marker at clicked position
    marker = L.marker([currentLat, currentLng]).addTo(map);

    // Fill hidden inputs and open modal
    document.getElementById('latitude').value = currentLat;
    document.getElementById('longitude').value = currentLng;
    $('#addDeviceModal').modal('show');
  });
}

// Handle Save button click
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('saveDevice').addEventListener('click', function() {
    const name = document.getElementById('deviceName').value.trim();
    const desc = document.getElementById('deviceDescription').value.trim();
    const lat = document.getElementById('latitude').value;
    const lng = document.getElementById('longitude').value;

    if (!name || !lat || !lng) {
      alert('Please enter a device name and select a location on the map.');
      return;
    }

    fetch('?_route=routers/save_location', {
      method: 'POST',
      headers: {'Content-Type': 'application/json'},
      body: JSON.stringify({
        name: name,
        description: desc,
        coordinates: lat + ',' + lng
      })
    })
    .then(res => res.json())
    .then(data => {
      if (data.status === 'success') {
        alert('✅ Device saved successfully!');
        $('#addDeviceModal').modal('hide');
        location.reload(); // refresh map to show new pin
      } else {
        alert('❌ Error saving device: ' + (data.message || 'Unknown error'));
      }
    })
    .catch(err => alert('❌ Request failed: ' + err));
  });
});

// Initialize the map when page loads
window.onload = initMap;
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
