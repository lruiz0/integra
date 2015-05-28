
(function reload(fullscreen) {
    var doc = document;
    var header = doc.getElementsByTagName("header")[0];
    var iframe = doc.createElement("iframe");
    doc.body.appendChild(iframe);
    var iwin = iframe.contentWindow;
    var idoc = iframe.contentDocument;
    idoc.open();
    idoc.close();
    idoc.write("<!doctype html>" + '<html style="margin: 0; padding: 0; border: 0;' + (true ? ' width: 100%; height: 100%;' : '') + '">' + "<head>" + '<meta charset="utf-8">' + '<body style="margin: 0; padding: 0; border: 0;' + (true ? ' width: 100%; height: 100%;' : '') + '">' + (true ? '<canvas style="display: block;' +
    (false ? "margin: auto;" : "") + '"></canvas>' : "") + "");
    if (true) {
        var canvas = idoc.getElementsByTagName("canvas")[0];
        var cs = canvas.style;
        idoc.body.clientWidth;
        cs.width = (canvas.width = Math.max(Math.min(0 || innerWidth, innerWidth), 0) || 0) + "px";
        cs.height = (canvas.height = Math.max(Math.min(0 || innerHeight - 50, innerHeight - 50), 0) || 0) + "px"
    }
    if (true)
        onorientationchange = reloadClick;
    iwin.AudioContext = iwin.AudioContext || iwin.webkitAudioContext;
    iwin.requestAnimationFrame = iwin.requestAnimationFrame || iwin.mozRequestAnimationFrame || iwin.webkitRequestAnimationFrame || iwin.msRequestAnimationFrame || function (f) {
        iwin.setTimeout(f, 1E3 / 30)
    };
    if (true)
        canvas.requestPointerLock = canvas.requestPointerLock || canvas.mozRequestPointerLock || canvas.webkitRequestPointerLock;
    idoc.body.requestPointerLock = idoc.body.requestPointerLock || idoc.body.mozRequestPointerLock || idoc.body.webkitRequestPointerLock;
    navigator.getUserMedia = navigator.getUserMedia ||
    navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
    if (true)
        iwin.a = canvas;
    iwin.b = idoc.body;
    if (true) {
        if (!false)
            iwin.c = canvas.getContext("2d");
        if (false)
            iwin.g = function () {
                iwin.onorientationchange = iwin.onresize = null;
                try {
                    var o = {antialias: true, stencil: true};
                    var gl = canvas.getContext("webgl", o) || canvas.getContext("experimental-webgl", o);
                    iwin.__glExts = ["OES_texture_float", "OES_texture_float_linear", "OES_standard_derivatives", "EXT_texture_filter_anisotropic",
                        "MOZ_EXT_texture_filter_anisotropic", "WEBKIT_EXT_texture_filter_anisotropic", "WEBGL_compressed_texture_s3tc", "MOZ_WEBGL_compressed_texture_s3tc", "WEBKIT_WEBGL_compressed_texture_s3tc"].map(function (ext) {
                            return gl.getExtension(ext)
                        })
                } catch (e) {
                    idoc.body.innerHTML = "WebGL not supported.";
                    iwin.a = iwin.b = iwin.c = iwin.d = null;
                    throw e;
                }
                return gl
            }()
    }


    var demo = idoc.createElement("script");
    demo.textContent = doc.querySelector('script[type="demo"]').textContent;
    idoc.body.appendChild(demo);
    idoc.close();
    iframe.contentWindow.focus();

    var firstLine = doc.getElementsByTagName("div")[0];

    function reloadClick(b) {
        doc.body.removeChild(iframe);
        r.parentElement.removeChild(r);
        iframe = null;
        r = null;
        idoc = null;
        header = null;
        reload(b)
    }
    window.reload = reloadClick;
    var r = doc.createElement("div");

    r.innerHTML = "&#8635;";
    r.className = "button r";
    r.title = "restart just the demo (local, without remote fetch)";
    r.onclick = reloadClick;
    header.insertBefore(r, firstLine)
})();