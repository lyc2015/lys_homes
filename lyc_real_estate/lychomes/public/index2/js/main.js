jq = typeof(jq) === "undefined" ? jQuery : jq;
extra_send_hook = typeof(extra_send_hook) === "undefined" ? function(){} : extra_send_hook;
extra_recv_hook = typeof(extra_recv_hook) === "undefined" ? function(){} : extra_recv_hook;
extra_reload = typeof(extra_reload) === "undefined" ? function(data){location.reload();} : extra_reload;
extra_href = typeof(extra_href) === "undefined" ? function(data){location.href = data.res.app_data.href;} : extra_href;

function open_mansion(id) {
	jq.ajax({
		type: "POST",
		url: "/mansion/open/",
		data: {"id" : id, "href" : location.href},
		dataType: "json",
		success: function(data) {
			extra_recv_hook(data);
			if (data.res.error_code === 0) {
				if ("href" in data.res.app_data) {
					extra_href(data);
					return;
				}
			}
			extra_reload(data);
		},
		error: function(xhr) {
			extra_recv_hook(xhr);
			extra_reload(data);
		},
		beforeSend: function() {
			extra_send_hook(this);
		}
	});
}

function open_review(id) {
	jq.ajax({
		type: "POST",
		url: "/review/open/",
		data: {"id" : id, "href" : location.href},
		dataType: "json",
		success: function(data) {
			extra_recv_hook(data);
			if (data.res.error_code === 0) {
				if ("href" in data.res.app_data) {
					extra_href(data);
					return;
				}
			}
			extra_reload(data);
		},
		error: function(xhr) {
			extra_recv_hook(xhr);
			extra_reload(data);
		},
		beforeSend: function() {
			extra_send_hook(this);
		}
	});
}

function load_thumbnail(lat, lng, yaw, pitch, zoom, id) {
	lat = parseFloat(lat);
	lng = parseFloat(lng);
	yaw = parseFloat(yaw);
	pitch = parseFloat(pitch);
	zoom = parseInt(zoom, 10);
	return new google.maps.StreetViewPanorama(document.getElementById(id), {
		addressControl: false,
		navigationControl: false,
		position: new google.maps.LatLng(lat, lng),
		scrollwheel: false,
		pov: {
			heading: yaw,
			pitch: -pitch,
			zoom: zoom + 1
		},
		zoomControl: false,
		panControl: false,
		linksControl: false,
		imageDateControl: false
	});
}

function load_thumbnail_street_view_image(lat, lng, yaw, pitch, zoom, id) {
	lat = parseFloat(lat);
	lng = parseFloat(lng);
	yaw = parseFloat(yaw);
	pitch = parseFloat(pitch);
	zoom = parseInt(zoom, 10);

	var zoomToFovTable = {
		"-1": 120,
		"0": 90,
		"1": 45,
		"2": 22.5,
		"3": 11.25,
		"4": 10
	};

	var fov = zoomToFovTable[0];
	if (zoom in zoomToFovTable) {
		fov = zoomToFovTable[zoom];
	}

	var container = document.getElementById(id);
	var width = parseInt(container.style.width, 10);
	var height = parseInt(container.style.height, 10);

	var src = "" +
		"http://maps.googleapis.com/maps/api/streetview" +
		"?size=" + width + "x" + height +
		"&location=" + lat + "," + lng +
		"&heading=" + yaw +
		"&pitch=" + -pitch +
		"&fov=" + fov +
		"&sensor=false" +
		"&key=AIzaSyBDJnbdS53BMKr0HciAB_mN2z49tYsuaR8" +
	"";

	var img = document.createElement("img");
	img.src = src;
	container.appendChild(img);
}
