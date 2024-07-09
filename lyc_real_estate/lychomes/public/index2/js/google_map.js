jq = typeof(jq) === "undefined" ? jQuery : jq;
extra_send_hook = typeof(extra_send_hook) === "undefined" ? function(){} : extra_send_hook;
extra_recv_hook = typeof(extra_recv_hook) === "undefined" ? function(){} : extra_recv_hook;
extra_reload = typeof(extra_reload) === "undefined" ? function(data){location.reload();} : extra_reload;
extra_href = typeof(extra_href) === "undefined" ? function(data){location.href = data.res.app_data.href;} : extra_href;
console = typeof(console) === "undefined" ? console = {} : console;
console.log = typeof(console.log) === "undefined" ? console.log = function(){} : console.log;

var GoogleMap = function(option) {
	this.option = option;
	this.g_data = {
		'marker': {}
	};
	this.g_map = option.g_map;
	this.centerImg = new Image();
	this.otherImg = new Image();
	this.centerMarkerImg = null;
	this.otherMarkerImg = null;
	this.infoWindow = null;

	this.adjustLatlng = new AdjustLatlng({
		offset_lat: 0.00022522522522523,
		offset_lng: 0.00021978021978022
	});

	this.main();
};

GoogleMap.prototype.main = function() {
	var self = this;

	// Preload of Marker image
	self.centerImg.src = '/images/google_map/center.gif';
	self.otherImg.src = '/images/google_map/other.gif';

	self.centerMarkerImg = new google.maps.MarkerImage(
		self.centerImg.src,
		// This marker is 20 pixels wide by 32 pixels tall.
		new google.maps.Size(25, 25),
		// The origin for this image is 0,0.
		new google.maps.Point(0, 0),
		// The anchor for this image is the base of the flagpole at 0,32.
		new google.maps.Point(12, 25)
	);

	self.otherMarkerImg = new google.maps.MarkerImage(
		self.otherImg.src,
		// This marker is 20 pixels wide by 32 pixels tall.
		new google.maps.Size(25, 25),
		// The origin for this image is 0,0.
		new google.maps.Point(0, 0),
		// The anchor for this image is the base of the flagpole at 0,32.
		new google.maps.Point(12, 25)
	);

	self.shadow = new google.maps.MarkerImage(
		'/images/google_map/shadow.png',
		// The shadow image is larger in the horizontal dimension
		// while the position and offset are the same as for the main image.
		new google.maps.Size(42, 23),
		new google.maps.Point(0, 0),
		new google.maps.Point(10, 20)
	);

	// DragEnd
	google.maps.event.addListener(self.g_map, 'dragend', function() {
		var center = self.g_map.getCenter();
		self.getMap(center.lat(), center.lng(), self.option.is_bunjyo);

		if (self.infoWindow !== null) {
			self.infoWindow.close();
			self.infoWindow = null;
		}
	});

	setTimeout(function() {
		self.getMap(self.option.lat, self.option.lng, self.option.is_bunjyo);
	}, 100);
};

GoogleMap.prototype.getMap = function(lat, lng, is_bunjyo) {
	var self = this;

	jq.ajax({
		type: "GET",
		url: zqx_mansion_neighbor,
		data: {"lat" : lat, "lng" : lng, "is_bunjyo" : is_bunjyo, "aaaaaaaaaaaa" : app.data.request_time},
		dataType: "json",
		success: function(data) {
			extra_recv_hook(data);
			if (data.res.error_code === 0) {
				if ("neighbors" in data.res.app_data) {
					// クリア
					for (var key in self.g_data['marker']) {
						self.g_data['marker'][key].marker.setMap(null);
						self.g_data['marker'][key] = null;
					}
					self.g_data = {
						'marker': {}
					};
					self.adjustLatlng.reset();

					jq.each(data.res.app_data.neighbors, function() {
						var mansion = this;

						if ('data_' + mansion.id in self.g_data['marker']) {
							// continue;
							return true;
						}

						// 対象物件以外はスルー（2018-01-19）
						if (self.option.mansion_id != mansion.id) {
							return true; // eachのcontinue;
						}

						var address_lat = mansion.address_lat;
						var address_lng = mansion.address_lng;
						address_lat = parseFloat(address_lat);
						address_lng = parseFloat(address_lng);
						var latlng = self.adjustLatlng.adjust(address_lat, address_lng);
						address_lat = latlng.lat;
						address_lng = latlng.lng;

						var marker = new google.maps.Marker({
							position: new google.maps.LatLng(address_lat, address_lng),
							map: self.g_map,
							shadow: self.shadow,
//							icon: self.option.mansion_id == mansion.id ? self.centerMarkerImg : self.otherMarkerImg
							icon: self.centerMarkerImg
						});

						var link_url = '/mansion/' + mansion.id + '.html';
						var img = '';
						var ready = undefined;
						if (mansion.image !== '') {
							img = '<img src="' + '/img/?image=' + encodeURIComponent(mansion.image) + '&width=150&height=150' + '" />';
						}
						if (img === '') {
							var id = 'gm' + mansion.id;
							img = "<div style='width: 150px; height: 150px;' id='" + id + "' class='street_view'></div>";
							ready = function() {
								var panorama = load_thumbnail(mansion.lat, mansion.lng, mansion.yaw, mansion.pitch, mansion.zoom, id);
								setTimeout(function() {
									panorama.setVisible(true);
								}, 100);
							};
						}

						var chikunen = '';
						if (mansion.chikunen) {
							chikunen = '<b>築年数：</b>' + mansion.chikunen + '<br />';
						}
						var sokosu = '';
						if (mansion.sokosu) {
							sokosu = '<b>総戸数：</b>' + mansion.sokosu + '<br />';
						}
						var kaidate = '';
						if (mansion.kaidate) {
							kaidate = '<b>階建て：</b>' + mansion.kaidate + '<br />';
						}
						var content = '' +
							'<div class="infowindow">' +
								'<div class="clearfix" style="width: 100%; background-color: #EEE;">' +
									'<div class="title"><a href="' + link_url + '" target="_blank">' + mansion.name + '</a></div>' +
									'<a href="javascript:void(0);" id="closeButton' + mansion.id + '"><img src="' + '/images/google_map/closebigger.gif' + '" alt="" style="float: right; margin-top: 7px;" /></a>' +
								'</div>' +
								'<div class="address">' + mansion.address + '</div>' +
								'<table style="width: 100%;">' +
									'<tr>' +
										'<th>外観図</th>' +
										'<th>物件情報</th>' +
									'</tr>' +
									'<tr>' +
										'<td class="img"><a href="' + link_url + '" target="_blank">' + img + '</a></td>' +
										'<td>' +
											mansion.kotsu + '<br />' +
											chikunen +
											sokosu +
											kaidate +
										'</td>' +
									'</tr>' +
								'</table>' +
								'<div class="link"><a href="' + link_url + '" target="_blank" class="button">詳細はこちら！</a></div>' +
							'</div>' +
						'';
						marker.content = content;

						google.maps.event.addListener(marker, 'click', function(e) {
							if (self.infoWindow !== null) {
								self.infoWindow.close();
								self.infoWindow = null;
							}

							self.infoWindow = new SmartInfoWindow({
								position: new google.maps.LatLng(address_lat, address_lng),
								map: self.g_map,
								content: content,
								imagebasedir: '/images/google_map',
								infoId: mansion.id,
								ready: ready
							});
						});

						self.g_data['marker']['data_' + mansion.id] = {
							marker: marker
						};

						return undefined;
					});
				}
			}
		},
		error: function(xhr) {
			extra_recv_hook(xhr);
		},
		beforeSend: function() {
			extra_send_hook(this);
		}
	});
};

var AdjustLatlng = function(option) {
	this.offset_lat = option.offset_lat;
	this.offset_lng = option.offset_lng;

	this.offset = [
		{lat: 0, lng: +this.offset_lng}, // 右
		{lat: -this.offset_lat, lng: 0}, // 下
		{lat: 0, lng: -this.offset_lng}, // 左
		{lat: +this.offset_lat, lng: 0} // 上
	];
};

AdjustLatlng.prototype.reset = function() {
	this.latlng = {};
};

// 同一緯度経度が渡されたら重ならないように少しづつ緯度経度をずらして返す
// 最初の座標から右、下、左、上、右、．．．と座標をずらしていく
AdjustLatlng.prototype.adjust = function(lat, lng, direction, done_count, execute_count, limit_execute_count) {
	direction = typeof(direction) === "undefined" ? 0 : direction;
	done_count = typeof(done_count) === "undefined" ? 0 : done_count;
	execute_count = typeof(execute_count) === "undefined" ? 0 : execute_count;
	limit_execute_count = typeof(limit_execute_count) === "undefined" ? 1 : limit_execute_count;

	if (lat + ' ' + lng in this.latlng) {
		lat += this.offset[direction].lat;
		lng += this.offset[direction].lng;

		if (lat + ' ' + lng in this.latlng) {
			execute_count += 1;
			if (execute_count === limit_execute_count) {
				direction = (direction + 1) % 4;
				done_count += 1;
				execute_count = 0;
			}

			if (done_count === 2) {
				limit_execute_count += 1;
			}
			done_count %= 2;

			return this.adjust(lat, lng, direction, done_count, execute_count, limit_execute_count);
		}
	}

	this.latlng[lat + ' ' + lng] = true;

	return {
		lat: lat,
		lng: lng
	};
};
