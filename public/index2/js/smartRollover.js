_qqq_ = typeof(_qqq_) === "undefined" ? {} : _qqq_;

function smartRollover() {
	if(document.getElementsByTagName) {
		var images = document.getElementsByTagName("img");

		for(var i=0; i < images.length; i++) {
			if(images[i].getAttribute("src").match("_off."))
			{
				images[i].onmouseover = function() {
					this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
				};
				images[i].onmouseout = function() {
					this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
				};
			}
		}
	}
}

if(window.addEventListener) {
	window.addEventListener("load", smartRollover, false);
}
else if(window.attachEvent) {
	window.attachEvent("onload", smartRollover);
}

function smartInputRollover() {
	if(document.getElementsByTagName) {
		var images = document.getElementsByTagName("input");

		for(var i=0; i < images.length; i++) {
			if(images[i].getAttribute("src") && images[i].getAttribute("src").match("_off."))
			{
				images[i].onmouseover = function() {
					this.setAttribute("src", this.getAttribute("src").replace("_off.", "_on."));
				};
				images[i].onmouseout = function() {
					this.setAttribute("src", this.getAttribute("src").replace("_on.", "_off."));
				};
			}
		}
	}
}

if(window.addEventListener) {
	window.addEventListener("load", smartInputRollover, false);
}
else if(window.attachEvent) {
	window.attachEvent("onload", smartInputRollover);
}

function page_link(url) {
	window.location.href = base64.decode(url);
}

function page_link_post(url) {
	url = base64.decode(url);
	if (url.indexOf("?", 0) === -1) {
		exec_post(url);
	} else {
		window.location.href = url;
	}
}

function exec_post(action) {
	var form = document.createElement("form");
	form.setAttribute("action", action);
	form.setAttribute("method", "post");
	form.style.display = "none";
	document.body.appendChild(form);
	form.submit();
}

function setHttpsPort(port) {
	_qqq_.httpsPort = port;
}

function getHttpsPort() {
	return _qqq_.httpsPort;
}

function execPost(action, data) {
	var form = document.createElement("form");
	form.setAttribute("action", action);
	form.setAttribute("method", "post");
	form.style.display = "none";
	document.body.appendChild(form);
	if (data !== undefined) {
		for (var paramName in data) {
			var input = document.createElement("input");
			input.setAttribute("type", "hidden");
			input.setAttribute("name", paramName);
			input.setAttribute("value", data[paramName]);
			form.appendChild(input);
		}
	}
	form.submit();
}

function execPostBlank(action, data) {
	var form = document.createElement("form");
	form.setAttribute("action", action);
	form.setAttribute("method", "post");
	form.setAttribute("target", "_blank");
	form.style.display = "none";
	document.body.appendChild(form);
	if (data !== undefined) {
		for (var paramName in data) {
			var input = document.createElement("input");
			input.setAttribute("type", "hidden");
			input.setAttribute("name", paramName);
			input.setAttribute("value", data[paramName]);
			form.appendChild(input);
		}
	}
	form.submit();
}


function execPostBlankMansionBaikyaku(data) {
	execPostBlank("/mansion/baikyaku/", data);
}

function execPostBlankMansionChintaisatei(data) {
	execPostBlank("/mansion/chintaisatei/", data);
}


function execPostMansionMap(data) {
	execPost("http://" + location.hostname + "/mansion/map/", data);
}

function execPostMansionBaikyaku(data) {
	execPost("http://" + location.hostname + "/mansion/baikyaku/", data);
}

function execPostMansionChintaisatei(data) {
	execPost("http://" + location.hostname + "/mansion/chintaisatei/", data);
}

function execPostMansionChintaikanri(data) {
	execPost("http://" + location.hostname + "/mansion/chintaikanri/", data);
}

function execPostMansionSublease(data) {
	execPost("http://" + location.hostname + "/mansion/sublease/", data);
}

function execPostMansionStockChintai(data) {
	execPost("http://" + location.hostname + "/mansion/stock_chintai/", data);
}

function execPostMansionMeasure(data) {
	execPost("http://" + location.hostname + "/mansion/measure/", data);
}

function execPostMansionSale(data) {
	execPost("http://" + location.hostname + "/mansion/sale/", data);
}

function execPostMansionKonyu(data) {
	execPost("https://" + location.host + ":" + getHttpsPort() + "/mansion/konyu/", data);
}

function execPostMansionChintai(data) {
	execPost("https://" + location.host + ":" + getHttpsPort() + "/mansion/chintai/", data);
}

function execPostMansionRent(data) {
	execPost("http://" + location.hostname + "/mansion/rent/", data);
}

function execPostMansionOrderExplain(data) {
	execPost("http://" + location.hostname + "/mansion/order/explain/", data);
}

function execPostMansionOrderChintaiExplain(data) {
	execPost("http://" + location.hostname + "/mansion/order_chintai/explain/", data);
}

function execPostSalesRentalFavorites(data) {
	execPost("http://" + location.hostname + "/sales/rental/favorites/", data);
}
function execPostSalesMansionFavorites(data) {
	execPost("http://" + location.hostname + "/sales/mansion/favorites/", data);
}
function execPostSalesHouseFavorites(data) {
	execPost("http://" + location.hostname + "/sales/house/favorites/", data);
}
function execPostSalesLandFavorites(data) {
	execPost("http://" + location.hostname + "/sales/land/favorites/", data);
}
function execPostSalesNoFavoritesFavorites(data) {
	execPost("http://" + location.hostname + "/sales/common/nofavorites/", data);
}

function execPostMemberOrder(data) {
	execPost("http://" + location.hostname + "/member/order/", data);
}

function execPostSalesRentalComparison(data) {
	execPost("http://" + location.hostname + "/sales/" + type + "/comparison/", data);
}

function execPostSalesMansionComparison(data) {
	execPost("http://" + location.hostname + "/sales/mansion/comparison/", data);
}

function execPostKonyu(action, data) {
	execPost(action, data);
}

function execPostBaikyaku(action, data) {
	execPost(action, data);
}

function adjust_image_90(image) {
  adjust_image(image, 90);
}

function adjust_image_280(image) {
  adjust_image(image, 280);
}

function adjust_image(image, size) {
	image.style.display = "block";

	var width  = image.width;
	var height = image.height;

	var longer = width;
	if (longer < height) {
		longer = height;
	}

	var factor = size / longer;

	width  = parseInt(width  * factor, 10);
	height = parseInt(height * factor, 10);

	image.width  = width;
	image.height = height;
}

function adjust_image_rectangle_homes_base_mini_thumbnail_image_url(image, max_width, max_height) {
	max_width = typeof(max_width) === "undefined" ? 80 : max_width;
	max_height = typeof(max_height) === "undefined" ? 60 : max_height;
  adjust_image_rectangle(image, max_width, max_height);
}

function adjust_image_rectangle_homes_photo_thumbnail_image_url(image, max_width, max_height) {
	max_width = typeof(max_width) === "undefined" ? 96 : max_width;
	max_height = typeof(max_height) === "undefined" ? 72 : max_height;
  adjust_image_rectangle(image, max_width, max_height);
}

function adjust_image_rectangle_homes_photo_image_url(image, max_width, max_height) {
	max_width = typeof(max_width) === "undefined" ? 400 : max_width;
	max_height = typeof(max_height) === "undefined" ? 300 : max_height;
  adjust_image_rectangle(image, max_width, max_height);
}

function adjust_image_rectangle(image, max_width, max_height) {
	image.style.display = "block";

	var width  = image.width;
	var height = image.height;

  var factor_width = 1;
  if (width > max_width) {
    factor_width = max_width / width;
  }
  var factor_height = 1;
  if (height > max_height) {
    factor_height = max_height / height;
  }

  var factor = Math.min(factor_width, factor_height);
  if (factor >= 1) {
    return;
  }

	width  = parseInt(width  * factor, 10);
	height = parseInt(height * factor, 10);

	image.width  = width;
	image.height = height;
}

function clearSearchBlockForm(form) {
	for (var i = 0; i < form.elements.length; ++i) {
		clearSearchBlockElement(form.elements[i]);
	}
}

function clearSearchBlockElement(element) {
	switch (element.type) {
		case "hidden":
		case "submit":
		case "reset":
		case "button":
		case "image":
			return;
		case "file":
			return;
		case "text":
		case "password":
		case "textarea":
			element.value = "";
			return;
		case "checkbox":
			element.checked = false;
			return;
		case "radio":
			if (element.value === "0") {
				element.checked = true;
			} else {
				element.checked = false;
			}
			return;
		case "select-one":
		case "select-multiple":
			element.selectedIndex = 0;
			return;
		default:
			break;
	}
}

function showMenu(id) {
	jQuery(function() {
		jQuery("div.gnaviSub").hide();
		jQuery("#" + id).show();
	});
}

function showPhoto(id) {
	jQuery(function() {
		jQuery("#morePhotoTxt").hide();
		jQuery("#" + id).show();
	});
}

/**
 * 指定されたnameのアイテムを指定されたchecked状態に変更
 */
function checkAll(name, checked) {
	var items = document.getElementsByName(name);
	for (var i = 0; i < items.length; i++) {
		if (items[i].disabled === true) continue;
		items[i].checked = checked;
	}
}
