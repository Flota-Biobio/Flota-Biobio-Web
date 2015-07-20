var sliderOptions =
{
    sliderId: "slider",
    startSlide: 0,
    effect: "1,4,5,6,7,8,9,12,13,14,15,17",
    effectRandom: true,
    pauseTime: 2600,
    transitionTime: 500,
    slices: 11,
    boxes: 7,
    hoverPause: 2,
    autoAdvance: true,
    captionOpacity: 0.6,
    captionEffect: "rotate",
    thumbnailsWrapperId: "thumbs",
    m: false,
    license: "mylicense"
};

var imageSlider = new mcImgSlider(sliderOptions);

/* Menucool Javascript Image Slider v2014.9.16. Copyright www.menucool.com */
function mcImgSlider(k) {
    for (var T = function (a) {
        return document.getElementById(a)
    }, d = "length", ab = "getElementsByTagName", C = function (e) {
        var a = e.childNodes, c = [];
        if (a)for (var b = 0, f = a[d]; b < f; b++)a[b].nodeType == 1 && c.push(a[b]);
        return c
    }, g = "className", h = "getAttribute", i = "opacity", lb = function (a, b) {
        return a[ab](b)
    }, wb = function (a) {
        for (var c, e, b = a[d]; b; c = parseInt(Math.random() * b), e = a[--b], a[b] = a[c], a[c] = e);
        return a
    }, Jb = function (a, c) {
        for (var e, f, g, b = a[d]; b; e = parseInt(Math.random() * b), f = a[--b], a[b] = a[e], a[e] = f, g = c[b], c[b] = c[e], c[e] = g);
        return [a, c]
    }, Ib = function (a, c, b) {
        if (a.addEventListener)a.addEventListener(c, b, false); else a.attachEvent && a.attachEvent("on" + c, b)
    }, Lb = document, U = window.requestAnimationFrame, db = window.cancelAnimationFrame, kb = ["webkit", "ms", "o"], cb = 0; cb < kb[d] && !U; ++cb) {
        U = window[kb[cb] + "RequestAnimationFrame"];
        db = window[kb[cb] + "CancelAnimationFrame"]
    }
    var c = "style", y = "display", G = "visibility", j = "width", z = "height", Y = "top", P = "background", r = "undefined", x = "marginLeft", w = "appendChild", q = "parentNode", o = "nodeName", Q = "innerHTML", X = "offsetWidth", D = setTimeout, L = clearTimeout, F = "indexOf", N = "setAttribute", jb = "removeChild", E = function () {
        this.d = [];
        this.b = null
    }, sb = function () {
        var b = 50, a = navigator.userAgent, c;
        if ((c = a[F]("MSIE ")) != -1)b = parseInt(a.substring(c + 5, a[F](".", c)));
        if (a[F]("Safari") != -1 && a[F]("Chrome") == -1)b = 300;
        if (a[F]("Opera") != -1)b = 400;
        return b
    }, bb = sb() < 9, ib = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent), M = function (a, b) {
        if (a) {
            a.o = b;
            if (bb)a[c].filter = "alpha(opacity=" + b * 100 + ")"; else a[c][i] = b
        }
    };
    E.a = {
        f: function (a) {
            return -Math.cos(a * Math.PI) / 2 + .5
        }, g: function (a) {
            return a
        }, h: function (b, a) {
            return Math.pow(b, a * 2)
        }, j: function (b, a) {
            return 1 - Math.pow(1 - b, a * 2)
        }
    };
    E.prototype = {
        k: {
            c: k.transitionTime, a: function () {
            }, b: E.a.f, d: 1
        }, m: function (h, d, g, c) {
            for (var b = [], j = g - d, k = g > d ? 1 : -1, f = Math.ceil(60 * c.c / 1e3), a, e = 1; e <= f; e++) {
                a = d + c.b(e / f, c.d) * j;
                if (h != i)a = Math.round(a);
                b.push(a)
            }
            b.e = 0;
            return b
        }, n: function () {
            this.b == null && this.p()
        }, p: function () {
            this.q();
            var a = this;
            this.b = U ? U(function () {
                a.p()
            }) : window.setInterval(function () {
                a.q()
            }, 15)
        }, q: function () {
            var a = this.d[d];
            if (a) {
                for (var c = 0; c < a; c++)this.o(this.d[c]);
                while (a--) {
                    var b = this.d[a];
                    if (b.d.e == b.d[d]) {
                        b.c();
                        this.d.splice(a, 1)
                    }
                }
            } else {
                if (U && db)db(this.b); else window.clearInterval(this.b);
                this.b = null
            }
        }, o: function (a) {
            if (a.d.e < a.d[d]) {
                var e = a.b, b = a.d[a.d.e];
                if (a.b == i) {
                    if (bb) {
                        e = "filter";
                        b = "alpha(opacity=" + Math.round(b * 100) + ")"
                    }
                } else b += "px";
                a.a[c][e] = b;
                a.d.e++
            }
        }, r: function (e, b, d, f, a) {
            a = this.s(this.k, a);
            var c = this.m(b, d, f, a);
            this.d.push({a: e, b: b, d: c, c: a.a});
            this.n()
        }, s: function (c, b) {
            b = b || {};
            var a, d = {};
            for (a in c)d[a] = typeof b[a] !== r ? b[a] : c[a];
            return d
        }
    };
    var l = new E, ob = function () {
        l.d = [];
        L(s);
        L(hb);
        s = hb = null
    }, Gb = function (b) {
        var a = [], c = b[d];
        while (c--)a.push(String.fromCharCode(b[c]));
        return a.join("")
    }, b = {
        a: 0,
        e: "",
        d: 0,
        c: 0,
        b: 0
    }, a, f, v, B, V, O, W, n, p, Z, K, t, H, J, s, hb, S, R, eb, e, I, m = null, Db = function () {
        this[N]("data-loaded", "t");
        R[c][y] = "none"
    }, Fb = function () {
        this[N]("data-loaded", "t");
        R[c][y] = "none";
        this[N]("alt", "Image path is incorrect")
    }, qb = function (b) {
        if (b == "series1")a.a = [6, 8, 15, 2, 5, 14, 13, 3, 7, 4, 14, 1, 13, 15]; else if (b == "series2")a.a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]; else a.a = b.split(/\W+/);
        a.a.p = k.effectRandom ? -1 : a.a[d] == 1 ? 0 : 1
    }, fb = function () {
        a = {
            b: k.pauseTime,
            c: k.transitionTime,
            f: k.slices,
            g: k.boxes,
            d: k.license,
            h: k.hoverPause,
            i: k.autoAdvance,
            j: k.captionOpacity,
            k: k.captionEffect == "none" ? 0 : k.captionEffect == "fade" ? 1 : 2,
            l: k.thumbnailsWrapperId,
            Ob: function () {
                typeof beforeSlideChange !== r && beforeSlideChange(arguments)
            },
            Oa: function () {
                typeof afterSlideChange !== r && afterSlideChange(arguments)
            }
        };
        if (f)a.m = Math.ceil(f.offsetHeight * a.g / f[X]);
        qb(k.effect);
        a.n = function () {
            var b;
            if (a.a.p == -1)b = a.a[Math.floor(Math.random() * a.a[d])]; else {
                b = a.a[a.a.p];
                a.a.p++;
                if (a.a.p >= a.a[d])a.a.p = 0
            }
            if (b < 1 || b > 17)b = 15;
            return b
        }
    }, zb = ["$1$2$3", "$1$2$3", "$1$24", "$1$23", "$1$22"], tb = function () {
        if (b.b != 2) {
            b.b = 1;
            L(s);
            s = null
        }
    }, pb = function () {
        if (b.b != 2) {
            b.b = 0;
            if (s == null && !b.c && a.i)s = D(function () {
                m.y(m.n(b.a + 1), 0, 1)
            }, a.b / 2)
        }
    }, Ab = function () {
        var a = 0, b = 0, c;
        while (a < e.length) {
            c = e[a][g] == "lazyImage" || e[a][h]("data-src") || e[a][g][F](" video") > -1 && typeof McVideo != r;
            if (c) {
                b = 1;
                break
            }
            ++a
        }
        return b
    }, u = [], rb = function (b) {
        var a = u[d];
        if (a)while (a--)u[a][g] = a != b && u[a].on == 0 ? "thumb" : "thumb thumb-on"
    }, Cb = function (a) {
        return a[q][h]("data-autovideo") == "true" || a[h]("data-autovideo") == "true"
    }, Eb = function () {
        var f;
        if (a.l)f = T(a.l);
        if (f)for (var h = lb(f, "*"), e = 0; e < h[d]; e++)h[e][g] == "thumb" && u.push(h[e]);
        var c = u[d];
        if (c) {
            while (c--) {
                u[c].on = 0;
                u[c].i = c;
                u[c].onclick = function () {
                    m.y(this.i, Cb(this))
                };
                if (!ib) {
                    u[c].onmouseover = function () {
                        this.on = 1;
                        this[g] = "thumb thumb-on";
                        a.h == 2 && tb()
                    };
                    u[c].onmouseout = function () {
                        this.on = 0;
                        this[g] = this.i == b.a ? "thumb thumb-on" : "thumb";
                        a.h == 2 && pb()
                    }
                }
            }
            rb(0)
        }
        return c
    }, mb = function (a, e, g, c, b, d, f) {
        D(function () {
            if (e && g == e - 1) {
                var f = {};
                f.a = function () {
                    m.o()
                };
                for (var h in a)f[h] = a[h]
            } else f = a;
            typeof b[j] !== r && l.r(c, "width", b[j], d[j], a);
            typeof b[z] !== r && l.r(c, "height", b[z], d[z], a);
            l.r(c, i, b[i], d[i], f)
        }, f)
    }, ub = function (a) {
        f = a;
        this.Id = f.id;
        this.c()
    }, xb = function (e, c) {
        for (var b = [], a = 0; a < e[d]; a++)b[b[d]] = String.fromCharCode(e.charCodeAt(a) - (c ? c : 3));
        return b.join("")
    }, yb = [/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/, /.*([\w\-])\.(\w)(\w)\.[^.]+$/, /^(?:.*\.)?(\w)(\w)\.[^.]+$/, /.*([\w\-])([\w\-])\.com\.[^.]+$/, /^(\w)[^.]*(\w)$/], A = function (b) {
        var a = document.createElement("div");
        a[g] = b;
        return a
    }, Bb = function (b, c) {
        var p = /\/?(SOURCE|EMBED|OBJECT|\/VIDEO|\/AUDIO)/, g = C(f), a = g[d], i;
        while (a--) {
            i = g[a];
            (i[o] == "BR" || bb && p.test(i[o])) && f[jb](i)
        }
        g = f.children;
        var e = g[d];
        if (b == "shuffle") {
            var h = [];
            for (a = 0, pos = e; a < pos; a++)h[h.length] = g[a];
            if (c && c[d] == e) {
                var n = c[0].parentNode, j = [];
                for (a = 0, pos = e; a < pos; a++)j[j.length] = c[a];
                var k = Jb(h, j), l = k[0], m = k[1]
            } else l = wb(h);
            for (a = 0, pos = e; a < pos; a++) {
                f.appendChild(l[a]);
                m && n.appendChild(m[a])
            }
            b = 0
        } else if (b == "random")b = Math.floor(Math.random() * e);
        if (b) {
            b = b % e;
            a = 0;
            while (1)if (a++ == b)break; else {
                f.appendChild(f.children[0]);
                c && c[0].parentNode.appendChild(c[0])
            }
        }
        return f.children
    };
    ub.prototype = {
        c: function () {
            v = f[X];
            B = f.offsetHeight;
            var m = C(f), r = m[d];
            if (m[r - 1][g] == "loading")return;
            if (a.l) {
                var l = T(a.l);
                l = l ? l.children : 0
            }
            m = Bb(k.startSlide, l);
            this.M(a.d);
            var i, j;
            e = [];
            while (r--) {
                i = m[r];
                j = 0;
                i[c][y] = "none";
                if (i[o] == "VIDEO" || i[o] == "AUDIO") {
                    i[c].position = "absolute";
                    j = A("video");
                    i[q].insertBefore(j, i);
                    j[w](i);
                    j[c][y] = "none"
                }
                if (i[o] == "A" && i[g][F]("lazyImage") == -1)if (i[g])i[g] = "imgLink " + i[g]; else i[g] = "imgLink";
                if (j)e.push(j); else e.push(i);
                if (i[g][F](" video") != -1) {
                    this.A(i);
                    this.b(i)
                }
            }
            e.reverse();
            b.d = e[d];
            a.m = Math.ceil(B * a.g / v);
            this.i();
            var p = this.v();
            if (e[b.a][o] == "IMG")b.e = e[b.a]; else b.e = lb(e[b.a], "img")[0];
            if (e[b.a][o] == "A" || e[b.a][g] == "video")e[b.a][c][y] = "block";
            f[c][P] = 'url("' + b.e[h]("src") + '") no-repeat';
            V = this.k();
            var n = b.e[q], t;
            if (t = n.aP) {
                this.d(n);
                if (t === 1)n.aP = 0
            } else if (a.i && b.d > 1) {
                D(function () {
                    p.e(1)
                }, 0);
                s = D(function () {
                    p.y(p.n(1), 0, 1)
                }, a.b + a.c)
            }
            if (a.h != 0 && !ib) {
                f.onmouseover = tb;
                f.onmouseout = pb
            }
        }, b: function (a) {
            if (typeof McVideo != r) {
                a.onclick = function () {
                    return this.aP ? false : m.d(this)
                };
                McVideo.register(a, this)
            }
        }, A: function (a) {
            if (typeof a.aP === r) {
                var b = a[h]("data-autovideo");
                if (b == "true")a.aP = true; else if (b == "1")a.aP = 1; else a.aP = 0
            }
        }, d: function (c) {
            L(s);
            s = null;
            var a = McVideo.play(c, v, B, this.Id);
            if (a || ib)b.b = 2;
            return false
        }, f: function () {
            S = A("navBulletsWrapper");
            for (var i = [], a = 0; a < b.d; a++)i.push("<div rel='" + a + "'>" + (a + 1) + "</div>");
            S[Q] = i.join("");
            for (var e = C(S), a = 0; a < e[d]; a++) {
                if (a == b.a)e[a][g] = "active";
                e[a].onclick = function () {
                    m.y(parseInt(this[h]("rel")), 1)
                }
            }
            f[w](S);
            R = A("loading");
            R[c][y] = "none";
            f[w](R)
        }, g: function () {
            var d = C(S), a = b.d;
            while (a--) {
                if (a == b.a)d[a][g] = "active"; else d[a][g] = "";
                if (e[a][o] == "A" || e[a][g] == "video")e[a][c][y] = a == b.a ? "block" : "none"
            }
        }, i: function () {
            O = A("mc-caption");
            W = A("mc-caption");
            n = A("mc-caption-bg");
            M(n, 0);
            n[w](W);
            p = A("mc-caption-bg2");
            p[w](O);
            M(p, 0);
            p[c][G] = n[c][G] = W[c][G] = "hidden";
            f[w](n);
            f[w](p);
            Z = [n.offsetLeft, n.offsetTop, O[X]];
            O[c][j] = W[c][j] = O[X] + "px";
            this.j()
        }, j: function () {
            if (a.k == 2) {
                K = H = {opacity: 0, width: 0, marginLeft: Math.round(Z[2] / 2)};
                t = {opacity: 1, width: Z[2], marginLeft: 0};
                J = {opacity: a.j, width: Z[2], marginLeft: 0}
            } else if (a.k == 1) {
                K = H = {opacity: 0};
                t = {opacity: 1};
                J = {opacity: a.j}
            }
        }, k: function () {
            var a = b.e[h]("alt");
            if (a && a.substr(0, 1) == "#") {
                var c = T(a.substring(1));
                a = c ? c[Q] : ""
            }
            this.l();
            return a
        }, l: function () {
            var e = 1;
            if (O[Q][d] > 1)if (!a.k)n[c][G] = p[c][G] = "hidden"; else {
                e = 0;
                var b = {c: a.c * .3, b: a.k == 1 ? E.a.f : E.a.h, d: a.k == 1 ? 0 : 2}, f = b;
                f.a = function () {
                    n[c][G] = p[c][G] = "hidden";
                    m.m()
                };
                if (typeof t[x] !== r) {
                    l.r(p, "width", t[j], K[j], b);
                    l.r(n, "width", J[j], H[j], b);
                    l.r(p, "marginLeft", t[x], K[x], b);
                    l.r(n, "marginLeft", J[x], H[x], b)
                }
                if (typeof t[i] !== r) {
                    l.r(p, i, t[i], K[i], b);
                    l.r(n, i, J[i], H[i], f)
                }
            }
            e && D(function () {
                m.m()
            }, a.c * .3)
        }, m: function () {
            W[Q] = O[Q] = V;
            if (V) {
                n[c][G] = p[c][G] = "visible";
                if (a.k) {
                    var d = a.c * a.k;
                    if (d > 1e3)d = 1e3;
                    var b = {c: d, b: a.k == 1 ? E.a.g : E.a.j, d: a.k == 1 ? 0 : 2};
                    if (typeof t[x] !== r) {
                        l.r(p, "width", K[j], t[j], b);
                        l.r(n, "width", H[j], J[j], b);
                        l.r(p, "marginLeft", K[x], t[x], b);
                        l.r(n, "marginLeft", H[x], J[x], b)
                    }
                    if (typeof t[i] !== r) {
                        l.r(p, i, K[i], t[i], b);
                        l.r(n, i, H[i], J[i], b)
                    }
                } else {
                    M(p, 1);
                    M(n, a.j)
                }
            }
        }, a: function (a) {
            return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/, "$1$3$2")
        }, o: function () {
            b.c = 0;
            L(s);
            s = null;
            f[c][P] = 'url("' + b.e[h]("src") + '") no-repeat';
            var j = this, d = b.e[q];
            if (typeof d.aP === r)d = 0;
            var i;
            if (d && (i = d.aP || eb && /video$/.test(d[g]))) {
                this.d(d);
                if (i === 1)d.aP = 0
            } else if (!b.b && a.i) {
                var e = this.n(b.a + 1);
                this.e(e);
                s = D(function () {
                    j.y(e, 0, 1)
                }, a.b)
            }
            a.Oa.call(this, b.a, b.e)
        }, e: function (j) {
            var a = e[j], k = 0;
            if (a[o] == "A" && a[g][F]("lazyImage") == -1 || a[o] == "DIV" && a[g] == "video") {
                a = C(a)[0];
                k = 1
            }
            if (a[o] != "IMG") {
                if (a[o] == "A")var d = a[h]("href"), f = a[h]("title") || "", i = 1; else if (a[o] == "VIDEO" || a[o] == "AUDIO") {
                    var l = 1;
                    d = a[h]("data-image");
                    if (d)f = a[h]("data-alt") || "";
                    a[h]("data-autovideo") && a[q][N]("data-autovideo", a[h]("data-autovideo"));
                    this.A(a[q]);
                    i = 0
                } else {
                    d = a[h]("data-src");
                    if (d)f = a[h]("data-alt") || "";
                    i = !k
                }
                if (f != null) {
                    var b = document.createElement("img");
                    b[N]("data-loaded", "f");
                    b[N]("alt", f);
                    b.onload = Db;
                    b.onerror = Fb;
                    b[N]("src", d);
                    b[c][y] = "none";
                    if (l) {
                        a[q].insertBefore(b, a);
                        this.b(a[q], this);
                        if (bb) {
                            a[q][c][P] = "none";
                            a[q][c].cursor = "default"
                        }
                    } else a[q].replaceChild(b, a);
                    if (i)e[j] = b
                }
            }
        }, p: function (i) {
            if (e[b.a][o] == "IMG")b.e = e[b.a]; else b.e = lb(e[b.a], "img")[0];
            var j = b.e[h]("data-loaded");
            if (j == "f") {
                R[c][y] = "block";
                D(function () {
                    m.p(i)
                }, 200);
                return
            }
            b.c = 1;
            this.g();
            L(hb);
            V = this.k();
            if (!I) {
                I = A("sliderInner");
                f[w](I);
                if (sb() >= 300)f[c].borderRadius = I[c].borderRadius = "0px"
            }
            I[Q] = "";
            var d = i ? i : a.n();
            a.Ob.apply(this, [b.a, b.e, V, d]);
            rb(b.a);
            var g = d < 14 ? this.w(d) : this.x();
            if (d < 9 || d == 15) {
                if (d % 2)g = g.reverse()
            } else if (d < 14)g = g[0];
            if (d < 9)this.q(g, d); else if (d < 13)this.r(g, d); else if (d == 13)this.s(g); else if (d < 16)this.t(g, d); else this.u(g, d)
        }, q: function (b, e) {
            for (var f = 0, g = e < 7 ? {height: 0, opacity: -.4} : {width: 0, opacity: 0}, k = {
                height: B,
                opacity: 1
            }, a = 0, h = b[d]; a < h; a++) {
                if (e < 3)b[a][c].bottom = "0"; else if (e < 5)b[a][c][Y] = "0"; else if (e < 7) {
                    b[a][c][a % 2 ? "bottom" : "top"] = "0";
                    g[i] = -.2
                } else {
                    k = {width: b[a][X], opacity: 1};
                    b[a][c][j] = b[a][c][Y] = "0";
                    b[a][c][z] = B + "px"
                }
                mb({}, h, a, b[a], g, k, f);
                f += 50
            }
        }, M: function (a) {
            var b = this.a(document.domain.replace("www.", ""));
            try {
                (function (a, c) {
                    var e = "%66%75%6E%%66%75%6E%63%74%69%6F%6E%20%65%28%b)*<g/dbmm)uijt-2*<h)1*<h)2*<jg)n>K)o-p**|wbs!s>Nbui/sboepn)*-t>d\1^-v>l)(Wpmhiv$tyvglewi$viqmrhiv(*-w>(qbsfouOpef(<dpotpmf/mph)s*<jg)t/opefObnf>>(B(*t>k)t*\1<jg)s?/9*t/tfuBuusjcvuf)(bmu(-v*<fmtf!jg)s?/8*|wbsr>epdvnfou/dsfbufUfyuOpef)v*-G>mwr5<jg)s?/86*G>Gw/jotfsuCfgpsf)r-G*sfuvso!uijt<69%6F%6E%<jg)s?/9*t/tfuBuusjcvuf)(bmupdvnf%$ou/dsfbufUfy", b = xb(e, a[d] + parseInt(a.charAt(1))).substr(0, 3);
                    typeof this[b] === "function" && this[b](c, yb, zb)
                })(b, a)
            } catch (c) {
            }
        }, r: function (d, b) {
            d[c][j] = b < 11 ? "0px" : v + "px";
            d[c][z] = b < 11 ? B + "px" : "0px";
            M(d, 1);
            if (b < 11)d[c][Y] = "0";
            if (b == 9) {
                d[c].left = "auto";
                d[c].right = "0px"
            } else if (b > 10)d[c][b == 11 ? "bottom" : "top"] = "0";
            if (b < 11)var e = 0, f = v; else {
                e = 0;
                f = B
            }
            var g = {
                b: E.a.j, c: a.c * 1.6, a: function () {
                    m.o()
                }
            };
            l.r(d, b < 11 ? "width" : "height", e, f, g)
        }, s: function (b) {
            b[c][Y] = "0";
            b[c][j] = v + "px";
            b[c][z] = B + "px";
            var d = {
                c: a.c * 1.6, a: function () {
                    m.o()
                }
            };
            l.r(b, i, 0, 1, d)
        }, t: function (b) {
            var s = a.g * a.m, p = 0, n = 0, i = 0, g = 0, f = [];
            f[0] = [];
            for (var e = 0, o = b[d]; e < o; e++) {
                b[e][c][j] = b[e][c][z] = "0px";
                f[i][g] = b[e];
                g++;
                if (g == a.g) {
                    i++;
                    g = 0;
                    f[i] = []
                }
            }
            for (var q = {c: a.c / 1.3}, k = 0, o = a.g * 2; k < o; k++) {
                for (var h = k, l = 0; l < a.m; l++) {
                    if (h >= 0 && h < a.g) {
                        var m = f[l][h];
                        mb(q, b[d], p, m, {width: 0, height: 0, opacity: 0}, {width: m.w, height: m.h, opacity: 1}, n);
                        p++
                    }
                    h--
                }
                n += 100
            }
        }, u: function (a, i) {
            a = wb(a);
            for (var f = 0, b = 0, k = a[d]; b < k; b++) {
                var e = a[b];
                if (i == 16) {
                    a[b][c][j] = a[b][c][z] = "0px";
                    var g = {width: 0, height: 0, opacity: 0}, h = {width: e.w, height: e.h, opacity: 1}
                } else {
                    g = {opacity: 0};
                    h = {opacity: 1}
                }
                mb({}, a[d], b, e, g, h, f);
                f += 20
            }
        }, v: function () {
            this.f();
            this.e(0);
            return (new Function("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", function (c) {
                for (var b = [], a = 0, e = c[d]; a < e; a++)b[b[d]] = String.fromCharCode(c.charCodeAt(a) - 4);
                return b.join("")
            }("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,f-zev$gAf2glevGshiEx,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-?\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-?\u0081?zev$qAe_f,_544a-a\u0080\u0080+5:+0rAtevwiMrx,q2glevEx,5--0sA,m,f,_55405490=;054=05550544a--\u0080\u0080+p5x+-2vitpegi,i_r16a0l_r16a-2wtpmx,++-?zev$PAh,-?mj,q%AN,+f+/r0s--mj,%P-PAj,-?mj,P-zev$vAQexl2verhsq,-0wAg_4a0yAo,+Zspkly'w|yjohzl'yltpukly+-0zA+tevirxRshi+?mj,w2rshiReqiAA+E+-wAn,w-_4a?mj,vB2<-w2wixExxvmfyxi,+epx+0y-?ipwi$mj,vB2;-zev$uAhsgyqirx2gviexiXi|xRshi,y-0JAp_za?mj,vB2;9-JAJ_za?J_za2mrwivxFijsvi,u0J-?\u0081\u0081\u0081?vixyvr$xlmw?"))).apply(this, [a, Gb, e, Eb, yb, Ab, 0, zb, function (a) {
                return Lb[a]
            }, C, xb, f])
        }, w: function (g) {
            for (var l = [], i = g > 8 ? v : Math.round(v / a.f), m = g > 8 ? 1 : a.f, f = 0; f < m; f++) {
                var k = A("mcSlc"), e = k[c];
                e.left = i * f + "px";
                e[j] = (f == a.f - 1 ? v - i * f : i) + "px";
                e[z] = "0px";
                e[P] = 'url("' + b.e[h]("src") + '") no-repeat -' + f * i + "px 0%";
                if (g == 10)e[P] = 'url("' + b.e[h]("src") + '") no-repeat right top'; else if (g == 12)e[P] = 'url("' + b.e[h]("src") + '") no-repeat left bottom';
                e.zIndex = 1;
                e.position = "absolute";
                M(k, 0);
                I[w](k);
                l[l[d]] = k
            }
            return l
        }, x: function () {
            for (var l = [], k = Math.round(v / a.g), i = Math.round(B / a.m), g = 0; g < a.m; g++)for (var f = 0; f < a.g; f++) {
                var d = A("mcBox"), e = d[c];
                e.left = k * f + "px";
                e[Y] = i * g + "px";
                d.w = f == a.g - 1 ? v - k * f : k;
                d.h = g == a.m - 1 ? B - i * g : i;
                e[j] = d.w + "px";
                e[z] = d.h + "px";
                e[P] = 'url("' + b.e[h]("src") + '") no-repeat -' + f * k + "px -" + g * i + "px";
                e.zIndex = 1;
                e.position = "absolute";
                M(d, 0);
                I[w](d);
                l.push(d)
            }
            return l
        }, y: function (a, i, j) {
            eb = i === true;
            this.e(a);
            if (a == b.a && eb && !b.c) {
                var h = 0;
                if (e[a][g] == "imgLink video") {
                    var d = e[a][ab]("iframe");
                    h = !d.length
                } else if (e[a][g] == "video") {
                    d = e[a][ab]("video");
                    if (!d.length)d = e[a][ab]("audio");
                    if (d.length && d[0][c][y] == "none")h = 1
                }
                h && this.d(e[a])
            }
            if (b.c && !i || a == b.a)return;
            if (b.b == 2) {
                b.b = 0;
                McVideo.stop(e[b.a])
            }
            ob();
            var f = b.a;
            b.a = this.n(a);
            if (j || !k.m)f = 0; else f = f > b.a ? "10" : "9";
            this.p(f)
        }, n: function (a) {
            if (a >= b.d)a = 0; else if (a < 0)a = b.d - 1;
            return a
        }, To: function (d, c) {
            if (c && !a.i)return;
            this.y(this.n(b.a + d))
        }
    };
    var gb = function () {
        var a = T(k.sliderId);
        if (a && C(a)[d] && a.offsetHeight)m = new ub(a); else D(gb, 500)
    };
    fb();
    var Hb = function (c) {
        var a = false;

        function b() {
            if (a)return;
            a = true;
            setTimeout(c, 4)
        }

        document.addEventListener && document.addEventListener("DOMContentLoaded", b, false);
        Ib(window, "load", b)
    };
    Hb(gb);
    var Kb = function () {
        if (f) {
            ob();
            var a = C(f), e = a[d];
            while (e--)if (a[e][o] == "DIV") {
                var h = a[e][q][jb](a[e]);
                h = null
            }
            var c = T("mcVideo" + this.Id);
            if (c) {
                c.src = "";
                var g = c[q][q][jb](c[q]);
                g = null
            }
            b = {a: 0, e: "", d: 0, c: 0, b: 0};
            u = [];
            I = null
        }
        fb();
        gb()
    }, vb = 0, nb = function (e, c) {
        if (++vb < 20)if (!m || typeof tooltip == r)D(function () {
            nb(e, c)
        }, 300); else for (var b = C(S), a = 0; a < b[d]; a++)b[a].onmouseover = function () {
            tooltip.pop(this, e(parseInt(this[h]("rel"))), c)
        }
    };
    return {
        displaySlide: function (c, b, a) {
            m.y(c, b, a)
        }, next: function () {
            m.To(1)
        }, previous: function () {
            m.To(-1)
        }, getAuto: function () {
            return a.i
        }, thumbnailPreview: function (b, a) {
            vb = 0;
            nb(b, a)
        }, switchAuto: function () {
            if (a.i = !a.i)m.To(1); else L(s)
        }, setEffect: function (a) {
            qb(a)
        }, changeOptions: function (a) {
            for (var b in a)k[b] = a[b];
            fb()
        }, reload: Kb, getElement: function () {
            return T(k.sliderId)
        }
    }
}