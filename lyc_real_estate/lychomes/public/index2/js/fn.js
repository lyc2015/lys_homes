jq = typeof(jq) === "undefined" ? jQuery : jq;
extra_send_hook = typeof(extra_send_hook) === "undefined" ? function(){} : extra_send_hook;
extra_recv_hook = typeof(extra_recv_hook) === "undefined" ? function(){} : extra_recv_hook;
extra_reload = typeof(extra_reload) === "undefined" ? function(data){location.reload();} : extra_reload;
extra_href = typeof(extra_href) === "undefined" ? function(data){location.href = data.res.app_data.href;} : extra_href;
extra_href_log = typeof(extra_href_log) === "undefined" ? function(href){location.href = href;} : extra_href_log;
extra_open_log = typeof(extra_open_log) === "undefined" ? function(href){window.open(href, "_blank");} : extra_open_log;
app = typeof(app) === "undefined" ? {} : app;
app.data = typeof(app.data) === "undefined" ? {} : app.data;

app.fn = (function() {
	var

	init = function(spec) {
	},

	js_hash_length = function(hash) {
		var length = 0;
		for (var key in hash) {
			length++;
		}
		return length;
	},

	js_reload = function() {
		var href = location.href;
		var index = location.href.indexOf("#");
		if (index >= 0) {
			href = location.href.slice(0, index);
		}
		location.href = href;
	},

	js_scroll = function(selector) {
		var height = jq("#sub_header").height();
		if (typeof(height) === "undefined") {
			height = 0;
		}
		var targetOffset = jq(selector).offset().top - height;
		$("html, body").animate({scrollTop: targetOffset}, 400);
	},

	js_date_time = function(date) {
		var year = date.getFullYear();
		var month = date.getMonth() + 1;
		if (month < 10) {
			month = "0" + month;
		}
		var day = date.getDate();
		if (day < 10) {
			day = "0" + day;
		}
		var hour = date.getHours();
		if (hour < 10) {
			hour = "0" + hour;
		}
		var min = date.getMinutes();
		if (min < 10) {
			min = "0" + min;
		}
		var sec = date.getSeconds();
		if (sec < 10) {
			sec = "0" + sec;
		}
		var date_time = year + "-" + month + "-" + day + " " + hour + ":" + min + ":" + sec;
		return date_time;
	},

	js_view_item = function(HashedEmail, SiteType, ItemIdList) {
		window.criteo_q = window.criteo_q || [];
		window.criteo_q.push(
			{ event: "setAccount", account: 17744 },
			{ event: "setHashedEmail", email: HashedEmail },
			{ event: "setSiteType", type: SiteType },
			{ event: "viewItem", item: ItemIdList[0] }
		);
		if (app.data.is_debug) {
			console.log(jq.print_r({ event: "setAccount", account: 17744 }));
			console.log(jq.print_r({ event: "setHashedEmail", email: HashedEmail }));
			console.log(jq.print_r({ event: "setSiteType", type: SiteType }));
			console.log(jq.print_r({ event: "viewItem", item: ItemIdList[0] }));
		}
	},

	js_view_list = function(HashedEmail, SiteType, ItemIdList) {
		window.criteo_q = window.criteo_q || [];
		window.criteo_q.push(
			{ event: "setAccount", account: 17744 },
			{ event: "setHashedEmail", email: HashedEmail },
			{ event: "setSiteType", type: SiteType },
			{ event: "viewList", item: ItemIdList}
		);
		if (app.data.is_debug) {
			console.log(jq.print_r({ event: "setAccount", account: 17744 }));
			console.log(jq.print_r({ event: "setHashedEmail", email: HashedEmail }));
			console.log(jq.print_r({ event: "setSiteType", type: SiteType }));
			console.log(jq.print_r({ event: "viewList", item: ItemIdList}));
		}
	},

	js_view_home = function(HashedEmail, SiteType) {
		window.criteo_q = window.criteo_q || [];
		window.criteo_q.push(
			{ event: "setAccount", account: 17744 },
			{ event: "setHashedEmail", email: HashedEmail },
			{ event: "setSiteType", type: SiteType },
			{ event: "viewHome" }
		);
		if (app.data.is_debug) {
			console.log(jq.print_r({ event: "setAccount", account: 17744 }));
			console.log(jq.print_r({ event: "setHashedEmail", email: HashedEmail }));
			console.log(jq.print_r({ event: "setSiteType", type: SiteType }));
			console.log(jq.print_r({ event: "viewHome" }));
		}
	},

	js_track_transaction = function(HashedEmail, SiteType, ItemIdList) {
		var item = [];
		for (var i = 0; i < ItemIdList.length; i++) {
			item.push({ id: ItemIdList[i], price: 1, quantity: 1 });
		}

		window.criteo_q = window.criteo_q || [];
		window.criteo_q.push(
			{ event: "setAccount", account: 17744 },
			{ event: "setHashedEmail", email: HashedEmail },
			{ event: "setSiteType", type: SiteType },
			{ event: "trackTransaction",
				id: Math.floor(Math.random() * 99999999999),
				item: item
			}
		);
		if (app.data.is_debug) {
			console.log(jq.print_r({ event: "setAccount", account: 17744 }));
			console.log(jq.print_r({ event: "setHashedEmail", email: HashedEmail }));
			console.log(jq.print_r({ event: "setSiteType", type: SiteType }));
			console.log(jq.print_r({ event: "trackTransaction",
				id: Math.floor(Math.random() * 99999999999),
				item: item
			}));
		}
	},

	escape_html = function(content) {
		var TABLE_FOR_ESCAPE_HTML = {
			"&": "&amp;",
			"\"": "&quot;",
			"<": "&lt;",
			">": "&gt;"
		};
		return content.replace(/[&"<>]/g, function(match) {
			return TABLE_FOR_ESCAPE_HTML[match];
		});
	},

	number_format = function(number) {
		return number.toString().replace(/([0-9]+?)(?=(?:[0-9]{3})+$)/g , '$1,');
	},

	end = true;

	return {
		init : init,
		js_hash_length : js_hash_length,
		js_reload : js_reload,
		js_scroll : js_scroll,
		js_date_time : js_date_time,
		js_view_item : js_view_item,
		js_view_list : js_view_list,
		js_view_home : js_view_home,
		js_track_transaction : js_track_transaction,
		number_format : number_format,
		escape_html : escape_html,

		end : end
	};
})();
app.fn.init();
