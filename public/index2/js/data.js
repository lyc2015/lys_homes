jq = typeof(jq) === "undefined" ? jQuery : jq;
extra_send_hook = typeof(extra_send_hook) === "undefined" ? function(){} : extra_send_hook;
extra_recv_hook = typeof(extra_recv_hook) === "undefined" ? function(){} : extra_recv_hook;
extra_reload = typeof(extra_reload) === "undefined" ? function(data){location.reload();} : extra_reload;
extra_href = typeof(extra_href) === "undefined" ? function(data){location.href = data.res.app_data.href;} : extra_href;
extra_href_log = typeof(extra_href_log) === "undefined" ? function(href){location.href = href;} : extra_href_log;
extra_open_log = typeof(extra_open_log) === "undefined" ? function(href){window.open(href, "_blank");} : extra_open_log;
app = typeof(app) === "undefined" ? {} : app;
app.data = typeof(app.data) === "undefined" ? {} : app.data;

app.data.request_time = app.fn.js_date_time(new Date());
app.data.url = location.protocol + "//" + location.host + "/";

zqx_mansion_neighbor = base64.decode("L21hbnNpb24vbmVpZ2hib3Iv");
zqx_shinchiku_mansion_neighbor = base64.decode("L3NoaW5jaGlrdS9tYW5zaW9uL25laWdoYm9yLw==");
