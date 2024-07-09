function initialize_map(lat, lng, yaw, pitch, zoom, address, mansion_id, is_bunjyo) {
	// およその開発環境判定処理と開発環境用の処理
//	if (location.host.indexOf(".mansionbaibai.com") !== -1) {
	if (!window._bEnableStreetView) {
		var map_canvas = jQuery("#map-canvas");
		map_canvas.css("text-align", "center");
		map_canvas.css("display", "inline-block");
		map_canvas.css("font-weight", "bold");
		map_canvas.css("background-color", "#e5e5e5");
		map_canvas.css("line-height", map_canvas.css("height"));
		map_canvas.text("マップ");
		return;
	}

	if (lat === 0 || lng === 0) {
		new google.maps.Geocoder().geocode({"address": address}, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				lat = results[0].geometry.location.lat();
				lng = results[0].geometry.location.lng();
				draw_map(lat, lng, yaw, pitch, zoom, mansion_id, is_bunjyo);
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	} else {
		draw_map(lat, lng, yaw, pitch, zoom, mansion_id, is_bunjyo);
	}
}

function draw_map(lat, lng, yaw, pitch, zoom, mansion_id, is_bunjyo) {
	var is_enable_panorama = false;
	if (document.getElementById("street-canvas")) {
		is_enable_panorama = true;
	}

	var fenway = new google.maps.LatLng(lat, lng);

	var map = new google.maps.Map(document.getElementById("map-canvas"), {
		center: fenway,
		zoom: 17,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	if (is_enable_panorama) {
		var panorama = new google.maps.StreetViewPanorama(document.getElementById("street-canvas"), {
			addressControl: false,
			position: fenway,
			scrollwheel: false,
			pov: {
				heading: yaw,
				pitch: -pitch,
				zoom: zoom + 1
			}
		});
	}

	if (mansion_id) {
		new GoogleMap({
			g_map: map,
			mansion_id: mansion_id,
			lat: fenway.lat(),
			lng: fenway.lng(),
			is_bunjyo: is_bunjyo
		});
	} else {
		var centerImg = new Image();
		var centerMarkerImg = null;

		centerImg.src = '/images/google_map/center.gif';
		centerMarkerImg = new google.maps.MarkerImage(
			centerImg.src,
			// This marker is 20 pixels wide by 32 pixels tall.
			new google.maps.Size(25, 25),
			// The origin for this image is 0,0.
			new google.maps.Point(0, 0),
			// The anchor for this image is the base of the flagpole at 0,32.
			new google.maps.Point(12, 25)
		);

		var shadow = new google.maps.MarkerImage(
			'/images/google_map/shadow.png',
			// The shadow image is larger in the horizontal dimension
			// while the position and offset are the same as for the main image.
			new google.maps.Size(42, 23),
			new google.maps.Point(0, 0),
			new google.maps.Point(10, 20)
		);

		new google.maps.Marker({
			position: fenway,
			map: map,
			shadow: shadow,
			icon: centerMarkerImg
		});
	}

	if (is_enable_panorama) {
		var street_container = jQuery("#street-container");
		var resize_toggles = jQuery("#resize-toggles");

		google.maps.event.addListener(panorama, "visible_changed", function() {
			if (panorama.getVisible()) {
				if (resize_toggles.size() === 0) {
					street_container.slideDown("slow");
				}
//				resize_toggles.css("top", "-35px");
			} else {
				if (panBy.flg === 1) {
					toggle_map_street.trigger("click");
				}
				street_container.slideUp("slow");
				resize_toggles.css("top", "-52px");
			}
		});
	}


	if (is_enable_panorama) {
		map.setStreetView(panorama);
	}

	google.maps.event.addListener(map, "click", function(event) {
		if (document.getElementById("lat")) {
			document.getElementById("lat").value = event.latLng.lat();
		}
		if (document.getElementById("lng")) {
			document.getElementById("lng").value = event.latLng.lng();
		}
		map.panTo(event.latLng);
		if (is_enable_panorama) {
			panorama.setPosition(event.latLng);
		}
	});

	if (is_enable_panorama) {
		google.maps.event.addListener(panorama, "pano_changed", function() {
			if (document.getElementById("lat")) {
				document.getElementById("lat").value = panorama.getPosition().lat();
			}
			if (document.getElementById("lng")) {
				document.getElementById("lng").value = panorama.getPosition().lng();
			}

			if (document.getElementById("yaw")) {
				document.getElementById("yaw").value = panorama.getPov().heading;
			}
			if (document.getElementById("pitch")) {
				document.getElementById("pitch").value = -panorama.getPov().pitch;
			}
			if (document.getElementById("zoom")) {
				document.getElementById("zoom").value = panorama.getZoom() - 1;
			}
		});

		google.maps.event.addListener(panorama, "position_changed", function() {
			if (document.getElementById("lat")) {
				document.getElementById("lat").value = panorama.getPosition().lat();
			}
			if (document.getElementById("lng")) {
				document.getElementById("lng").value = panorama.getPosition().lng();
			}
		});

		google.maps.event.addListener(panorama, "pov_changed", function() {
			if (document.getElementById("yaw")) {
				document.getElementById("yaw").value = panorama.getPov().heading;
			}
			if (document.getElementById("pitch")) {
				document.getElementById("pitch").value = -panorama.getPov().pitch;
			}
			if (document.getElementById("zoom")) {
				document.getElementById("zoom").value = panorama.getZoom() - 1;
			}
		});

		var map_canvas = jQuery("#map-canvas");
		var street_canvas = jQuery("#street-canvas");

		var panBy = {
			"flg": 0
		};
		var x = (parseInt(map_canvas.css("width"), 10) - parseInt(street_canvas.css("width"), 10)) / 2;
		var y = (parseInt(map_canvas.css("height"), 10) - parseInt(street_canvas.css("height"), 10)) / 2;
		panBy[0] = {
			"x": x,
			"y": y
		};
		panBy[1] = {
			"x": -x,
			"y": -y
		};

		var toggle_map_street = jQuery("#toggle-map-street");
		toggle_map_street.bind("click", function() {
			var map_canvas_children = map_canvas.children();
			var street_canvas_children = street_canvas.children();

			map_canvas.empty();
			street_canvas.empty();

			map.panBy(panBy[panBy.flg].x, panBy[panBy.flg].y);
			panBy.flg = (panBy.flg + 1) % 2;

			map_canvas.prepend(street_canvas_children);
			street_canvas.prepend(map_canvas_children);

			panorama.setVisible(true);
		});

		var toggle_show_hide = jQuery("#toggle-show-hide");
		toggle_show_hide.bind("click", function() {
			if (panorama.getVisible() === false) {
				street_container.slideUp("slow");
				resize_toggles.css("top", "-52px");
				return;
			}
			if (street_container.is(":visible")) {
				resize_toggles.css("top", "-52px");
			} else {
				resize_toggles.css("top", "-35px");
			}
			street_container.slideToggle("slow");
		});
	}
}
