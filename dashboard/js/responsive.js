/*!
   Copyright 2014-2021 SpryMedia Ltd. This source file is free software, available under the following license:
   MIT license - http://datatables.net/license/mit This source file is distributed in the hope that it will be useful, but
 WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 or FITNESS FOR A PARTICULAR PURPOSE. See the license files for details. For details please refer to: http://www.datatables.net
 Responsive 2.2.9
 2014-2021 SpryMedia Ltd - datatables.net/license
*/
var $jscomp = $jscomp || {};
$jscomp.scope = {};
$jscomp.findInternal = function(b, k, m) { b instanceof String && (b = String(b)); for (var n = b.length, p = 0; p < n; p++) { var y = b[p]; if (k.call(m, y, p, b)) return { i: p, v: y } } return { i: -1, v: void 0 } };
$jscomp.ASSUME_ES5 = !1;
$jscomp.ASSUME_NO_NATIVE_MAP = !1;
$jscomp.ASSUME_NO_NATIVE_SET = !1;
$jscomp.SIMPLE_FROUND_POLYFILL = !1;
$jscomp.ISOLATE_POLYFILLS = !1;
$jscomp.defineProperty = $jscomp.ASSUME_ES5 || "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, k, m) { if (b == Array.prototype || b == Object.prototype) return b;
    b[k] = m.value; return b };
$jscomp.getGlobal = function(b) { b = ["object" == typeof globalThis && globalThis, b, "object" == typeof window && window, "object" == typeof self && self, "object" == typeof global && global]; for (var k = 0; k < b.length; ++k) { var m = b[k]; if (m && m.Math == Math) return m } throw Error("Cannot find global object"); };
$jscomp.global = $jscomp.getGlobal(this);
$jscomp.IS_SYMBOL_NATIVE = "function" === typeof Symbol && "symbol" === typeof Symbol("x");
$jscomp.TRUST_ES6_POLYFILLS = !$jscomp.ISOLATE_POLYFILLS || $jscomp.IS_SYMBOL_NATIVE;
$jscomp.polyfills = {};
$jscomp.propertyToPolyfillSymbol = {};
$jscomp.POLYFILL_PREFIX = "$jscp$";
var $jscomp$lookupPolyfilledValue = function(b, k) { var m = $jscomp.propertyToPolyfillSymbol[k]; if (null == m) return b[k];
    m = b[m]; return void 0 !== m ? m : b[k] };
$jscomp.polyfill = function(b, k, m, n) { k && ($jscomp.ISOLATE_POLYFILLS ? $jscomp.polyfillIsolated(b, k, m, n) : $jscomp.polyfillUnisolated(b, k, m, n)) };
$jscomp.polyfillUnisolated = function(b, k, m, n) { m = $jscomp.global;
    b = b.split("."); for (n = 0; n < b.length - 1; n++) { var p = b[n]; if (!(p in m)) return;
        m = m[p] }
    b = b[b.length - 1];
    n = m[b];
    k = k(n);
    k != n && null != k && $jscomp.defineProperty(m, b, { configurable: !0, writable: !0, value: k }) };
$jscomp.polyfillIsolated = function(b, k, m, n) {
    var p = b.split(".");
    b = 1 === p.length;
    n = p[0];
    n = !b && n in $jscomp.polyfills ? $jscomp.polyfills : $jscomp.global;
    for (var y = 0; y < p.length - 1; y++) { var z = p[y]; if (!(z in n)) return;
        n = n[z] }
    p = p[p.length - 1];
    m = $jscomp.IS_SYMBOL_NATIVE && "es6" === m ? n[p] : null;
    k = k(m);
    null != k && (b ? $jscomp.defineProperty($jscomp.polyfills, p, { configurable: !0, writable: !0, value: k }) : k !== m && ($jscomp.propertyToPolyfillSymbol[p] = $jscomp.IS_SYMBOL_NATIVE ? $jscomp.global.Symbol(p) : $jscomp.POLYFILL_PREFIX + p, p =
        $jscomp.propertyToPolyfillSymbol[p], $jscomp.defineProperty(n, p, { configurable: !0, writable: !0, value: k })))
};
$jscomp.polyfill("Array.prototype.find", function(b) { return b ? b : function(k, m) { return $jscomp.findInternal(this, k, m).v } }, "es6", "es3");
(function(b) { "function" === typeof define && define.amd ? define(["jquery", "datatables.net"], function(k) { return b(k, window, document) }) : "object" === typeof exports ? module.exports = function(k, m) { k || (k = window);
        m && m.fn.dataTable || (m = require("datatables.net")(k, m).$); return b(m, k, k.document) } : b(jQuery, window, document) })(function(b, k, m, n) {
    function p(a, c, d) { var f = c + "-" + d; if (A[f]) return A[f]; var g = [];
        a = a.cell(c, d).node().childNodes;
        c = 0; for (d = a.length; c < d; c++) g.push(a[c]); return A[f] = g }    function y(a, c, d) {
        var f = c + "-" +
            d;
        if (A[f]) { a = a.cell(c, d).node();
            d = A[f][0].parentNode.childNodes;
            c = []; for (var g = 0, l = d.length; g < l; g++) c.push(d[g]);
            d = 0; for (g = c.length; d < g; d++) a.appendChild(c[d]);
            A[f] = n }
    }
    var z = b.fn.dataTable,
        u = function(a, c) {
            if (!z.versionCheck || !z.versionCheck("1.10.10")) throw "DataTables Responsive requires DataTables 1.10.10 or newer";
            this.s = { dt: new z.Api(a), columns: [], current: [] };
            this.s.dt.settings()[0].responsive || (c && "string" === typeof c.details ? c.details = { type: c.details } : c && !1 === c.details ? c.details = { type: !1 } : c &&
                !0 === c.details && (c.details = { type: "inline" }), this.c = b.extend(!0, {}, u.defaults, z.defaults.responsive, c), a.responsive = this, this._constructor())
        };
    b.extend(u.prototype, {
        _constructor: function() {
            var a = this,
                c = this.s.dt,
                d = c.settings()[0],
                f = b(k).innerWidth();
            c.settings()[0]._responsive = this;
            b(k).on("resize.dtr orientationchange.dtr", z.util.throttle(function() { var g = b(k).innerWidth();
                g !== f && (a._resize(), f = g) }));
            d.oApi._fnCallbackReg(d, "aoRowCreatedCallback", function(g, l, h) {
                -1 !== b.inArray(!1, a.s.current) && b(">td, >th",
                    g).each(function(e) { e = c.column.index("toData", e);!1 === a.s.current[e] && b(this).css("display", "none") })
            });
            c.on("destroy.dtr", function() { c.off(".dtr");
                b(c.table().body()).off(".dtr");
                b(k).off("resize.dtr orientationchange.dtr");
                c.cells(".dtr-control").nodes().to$().removeClass("dtr-control");
                b.each(a.s.current, function(g, l) {!1 === l && a._setColumnVis(g, !0) }) });
            this.c.breakpoints.sort(function(g, l) { return g.width < l.width ? 1 : g.width > l.width ? -1 : 0 });
            this._classLogic();
            this._resizeAuto();
            d = this.c.details;
            !1 !==
                d.type && (a._detailsInit(), c.on("column-visibility.dtr", function() { a._timer && clearTimeout(a._timer);
                    a._timer = setTimeout(function() { a._timer = null;
                        a._classLogic();
                        a._resizeAuto();
                        a._resize(!0);
                        a._redrawChildren() }, 100) }), c.on("draw.dtr", function() { a._redrawChildren() }), b(c.table().node()).addClass("dtr-" + d.type));
            c.on("column-reorder.dtr", function(g, l, h) { a._classLogic();
                a._resizeAuto();
                a._resize(!0) });
            c.on("column-sizing.dtr", function() { a._resizeAuto();
                a._resize() });
            c.on("preXhr.dtr", function() {
                var g = [];
                c.rows().every(function() { this.child.isShown() && g.push(this.id(!0)) });
                c.one("draw.dtr", function() { a._resizeAuto();
                    a._resize();
                    c.rows(g).every(function() { a._detailsDisplay(this, !1) }) })
            });
            c.on("draw.dtr", function() { a._controlClass() }).on("init.dtr", function(g, l, h) { "dt" === g.namespace && (a._resizeAuto(), a._resize(), b.inArray(!1, a.s.current) && c.columns.adjust()) });
            this._resize()
        },
        _columnsVisiblity: function(a) {
            var c = this.s.dt,
                d = this.s.columns,
                f, g = d.map(function(t, v) { return { columnIdx: v, priority: t.priority } }).sort(function(t,
                    v) { return t.priority !== v.priority ? t.priority - v.priority : t.columnIdx - v.columnIdx }),
                l = b.map(d, function(t, v) { return !1 === c.column(v).visible() ? "not-visible" : t.auto && null === t.minWidth ? !1 : !0 === t.auto ? "-" : -1 !== b.inArray(a, t.includeIn) }),
                h = 0;
            var e = 0;
            for (f = l.length; e < f; e++) !0 === l[e] && (h += d[e].minWidth);
            e = c.settings()[0].oScroll;
            e = e.sY || e.sX ? e.iBarWidth : 0;
            h = c.table().container().offsetWidth - e - h;
            e = 0;
            for (f = l.length; e < f; e++) d[e].control && (h -= d[e].minWidth);
            var r = !1;
            e = 0;
            for (f = g.length; e < f; e++) {
                var q = g[e].columnIdx;
                "-" === l[q] && !d[q].control && d[q].minWidth && (r || 0 > h - d[q].minWidth ? (r = !0, l[q] = !1) : l[q] = !0, h -= d[q].minWidth)
            }
            g = !1;
            e = 0;
            for (f = d.length; e < f; e++)
                if (!d[e].control && !d[e].never && !1 === l[e]) { g = !0; break }
            e = 0;
            for (f = d.length; e < f; e++) d[e].control && (l[e] = g), "not-visible" === l[e] && (l[e] = !1); - 1 === b.inArray(!0, l) && (l[0] = !0);
            return l
        },
        _classLogic: function() {
            var a = this,
                c = this.c.breakpoints,
                d = this.s.dt,
                f = d.columns().eq(0).map(function(h) {
                    var e = this.column(h),
                        r = e.header().className;
                    h = d.settings()[0].aoColumns[h].responsivePriority;
                    e = e.header().getAttribute("data-priority");
                    h === n && (h = e === n || null === e ? 1E4 : 1 * e);
                    return { className: r, includeIn: [], auto: !1, control: !1, never: r.match(/\bnever\b/) ? !0 : !1, priority: h }
                }),
                g = function(h, e) { h = f[h].includeIn; - 1 === b.inArray(e, h) && h.push(e) },
                l = function(h, e, r, q) {
                    if (!r) f[h].includeIn.push(e);
                    else if ("max-" === r)
                        for (q = a._find(e).width, e = 0, r = c.length; e < r; e++) c[e].width <= q && g(h, c[e].name);
                    else if ("min-" === r)
                        for (q = a._find(e).width, e = 0, r = c.length; e < r; e++) c[e].width >= q && g(h, c[e].name);
                    else if ("not-" === r)
                        for (e =
                            0, r = c.length; e < r; e++) - 1 === c[e].name.indexOf(q) && g(h, c[e].name)
                };
            f.each(function(h, e) {
                for (var r = h.className.split(" "), q = !1, t = 0, v = r.length; t < v; t++) {
                    var B = r[t].trim();
                    if ("all" === B) { q = !0;
                        h.includeIn = b.map(c, function(w) { return w.name }); return }
                    if ("none" === B || h.never) { q = !0; return }
                    if ("control" === B || "dtr-control" === B) { q = !0;
                        h.control = !0; return }
                    b.each(c, function(w, D) {
                        w = D.name.split("-");
                        var x = B.match(new RegExp("(min\\-|max\\-|not\\-)?(" + w[0] + ")(\\-[_a-zA-Z0-9])?"));
                        x && (q = !0, x[2] === w[0] && x[3] === "-" + w[1] ? l(e,
                            D.name, x[1], x[2] + x[3]) : x[2] !== w[0] || x[3] || l(e, D.name, x[1], x[2]))
                    })
                }
                q || (h.auto = !0)
            });
            this.s.columns = f
        },
        _controlClass: function() { if ("inline" === this.c.details.type) { var a = this.s.dt,
                    c = b.inArray(!0, this.s.current);
                a.cells(null, function(d) { return d !== c }, { page: "current" }).nodes().to$().filter(".dtr-control").removeClass("dtr-control");
                a.cells(null, c, { page: "current" }).nodes().to$().addClass("dtr-control") } },
        _detailsDisplay: function(a, c) {
            var d = this,
                f = this.s.dt,
                g = this.c.details;
            if (g && !1 !== g.type) {
                var l = g.display(a,
                    c,
                    function() { return g.renderer(f, a[0], d._detailsObj(a[0])) });
                !0 !== l && !1 !== l || b(f.table().node()).triggerHandler("responsive-display.dt", [f, a, l, c])
            }
        },
        _detailsInit: function() {
            var a = this,
                c = this.s.dt,
                d = this.c.details;
            "inline" === d.type && (d.target = "td.dtr-control, th.dtr-control");
            c.on("draw.dtr", function() { a._tabIndexes() });
            a._tabIndexes();
            b(c.table().body()).on("keyup.dtr", "td, th", function(g) { 13 === g.keyCode && b(this).data("dtr-keyboard") && b(this).click() });
            var f = d.target;
            d = "string" === typeof f ? f : "td, th";
            if (f !== n || null !== f) b(c.table().body()).on("click.dtr mousedown.dtr mouseup.dtr", d, function(g) { if (b(c.table().node()).hasClass("collapsed") && -1 !== b.inArray(b(this).closest("tr").get(0), c.rows().nodes().toArray())) { if ("number" === typeof f) { var l = 0 > f ? c.columns().eq(0).length + f : f; if (c.cell(this).index().column !== l) return }
                    l = c.row(b(this).closest("tr")); "click" === g.type ? a._detailsDisplay(l, !1) : "mousedown" === g.type ? b(this).css("outline", "none") : "mouseup" === g.type && b(this).trigger("blur").css("outline", "") } })
        },
        _detailsObj: function(a) { var c = this,
                d = this.s.dt; return b.map(this.s.columns, function(f, g) { if (!f.never && !f.control) return f = d.settings()[0].aoColumns[g], { className: f.sClass, columnIndex: g, data: d.cell(a, g).render(c.c.orthogonal), hidden: d.column(g).visible() && !c.s.current[g], rowIndex: a, title: null !== f.sTitle ? f.sTitle : b(d.column(g).header()).text() } }) },
        _find: function(a) { for (var c = this.c.breakpoints, d = 0, f = c.length; d < f; d++)
                if (c[d].name === a) return c[d] },
        _redrawChildren: function() {
            var a = this,
                c = this.s.dt;
            c.rows({ page: "current" }).iterator("row",
                function(d, f) { c.row(f);
                    a._detailsDisplay(c.row(f), !0) })
        },
        _resize: function(a) {
            var c = this,
                d = this.s.dt,
                f = b(k).innerWidth(),
                g = this.c.breakpoints,
                l = g[0].name,
                h = this.s.columns,
                e, r = this.s.current.slice();
            for (e = g.length - 1; 0 <= e; e--)
                if (f <= g[e].width) { l = g[e].name; break }
            var q = this._columnsVisiblity(l);
            this.s.current = q;
            g = !1;
            e = 0;
            for (f = h.length; e < f; e++)
                if (!1 === q[e] && !h[e].never && !h[e].control && !1 === !d.column(e).visible()) { g = !0; break }
            b(d.table().node()).toggleClass("collapsed", g);
            var t = !1,
                v = 0;
            d.columns().eq(0).each(function(B,
                w) {!0 === q[w] && v++; if (a || q[w] !== r[w]) t = !0, c._setColumnVis(B, q[w]) });
            t && (this._redrawChildren(), b(d.table().node()).trigger("responsive-resize.dt", [d, this.s.current]), 0 === d.page.info().recordsDisplay && b("td", d.table().body()).eq(0).attr("colspan", v));
            c._controlClass()
        },
        _resizeAuto: function() {
            var a = this.s.dt,
                c = this.s.columns;
            if (this.c.auto && -1 !== b.inArray(!0, b.map(c, function(e) { return e.auto }))) {
                b.isEmptyObject(A) || b.each(A, function(e) { e = e.split("-");
                    y(a, 1 * e[0], 1 * e[1]) });
                a.table().node();
                var d = a.table().node().cloneNode(!1),
                    f = b(a.table().header().cloneNode(!1)).appendTo(d),
                    g = b(a.table().body()).clone(!1, !1).empty().appendTo(d);
                d.style.width = "auto";
                var l = a.columns().header().filter(function(e) { return a.column(e).visible() }).to$().clone(!1).css("display", "table-cell").css("width", "auto").css("min-width", 0);
                b(g).append(b(a.rows({ page: "current" }).nodes()).clone(!1)).find("th, td").css("display", "");
                if (g = a.table().footer()) {
                    g = b(g.cloneNode(!1)).appendTo(d);
                    var h = a.columns().footer().filter(function(e) { return a.column(e).visible() }).to$().clone(!1).css("display",
                        "table-cell");
                    b("<tr/>").append(h).appendTo(g)
                }
                b("<tr/>").append(l).appendTo(f);
                "inline" === this.c.details.type && b(d).addClass("dtr-inline collapsed");
                b(d).find("[name]").removeAttr("name");
                b(d).css("position", "relative");
                d = b("<div/>").css({ width: 1, height: 1, overflow: "hidden", clear: "both" }).append(d);
                d.insertBefore(a.table().node());
                l.each(function(e) { e = a.column.index("fromVisible", e);
                    c[e].minWidth = this.offsetWidth || 0 });
                d.remove()
            }
        },
        _responsiveOnlyHidden: function() {
            var a = this.s.dt;
            return b.map(this.s.current,
                function(c, d) { return !1 === a.column(d).visible() ? !0 : c })
        },
        _setColumnVis: function(a, c) { var d = this.s.dt;
            c = c ? "" : "none";
            b(d.column(a).header()).css("display", c);
            b(d.column(a).footer()).css("display", c);
            d.column(a).nodes().to$().css("display", c);
            b.isEmptyObject(A) || d.cells(null, a).indexes().each(function(f) { y(d, f.row, f.column) }) },
        _tabIndexes: function() {
            var a = this.s.dt,
                c = a.cells({ page: "current" }).nodes().to$(),
                d = a.settings()[0],
                f = this.c.details.target;
            c.filter("[data-dtr-keyboard]").removeData("[data-dtr-keyboard]");
            "number" === typeof f ? a.cells(null, f, { page: "current" }).nodes().to$().attr("tabIndex", d.iTabIndex).data("dtr-keyboard", 1) : ("td:first-child, th:first-child" === f && (f = ">td:first-child, >th:first-child"), b(f, a.rows({ page: "current" }).nodes()).attr("tabIndex", d.iTabIndex).data("dtr-keyboard", 1))
        }
    });
    u.breakpoints = [{ name: "desktop", width: Infinity }, { name: "tablet-l", width: 1024 }, { name: "tablet-p", width: 768 }, { name: "mobile-l", width: 480 }, { name: "mobile-p", width: 320 }];
    u.display = {
        childRow: function(a, c, d) {
            if (c) {
                if (b(a.node()).hasClass("parent")) return a.child(d(),
                    "child").show(), !0
            } else { if (a.child.isShown()) return a.child(!1), b(a.node()).removeClass("parent"), !1;
                a.child(d(), "child").show();
                b(a.node()).addClass("parent"); return !0 }
        },
        childRowImmediate: function(a, c, d) { if (!c && a.child.isShown() || !a.responsive.hasHidden()) return a.child(!1), b(a.node()).removeClass("parent"), !1;
            a.child(d(), "child").show();
            b(a.node()).addClass("parent"); return !0 },
        modal: function(a) {
            return function(c, d, f) {
                if (d) b("div.dtr-modal-content").empty().append(f());
                else {
                    var g = function() {
                            l.remove();
                            b(m).off("keypress.dtr")
                        },
                        l = b('<div class="dtr-modal"/>').append(b('<div class="dtr-modal-display"/>').append(b('<div class="dtr-modal-content"/>').append(f())).append(b('<div class="dtr-modal-close">&times;</div>').click(function() { g() }))).append(b('<div class="dtr-modal-background"/>').click(function() { g() })).appendTo("body");
                    b(m).on("keyup.dtr", function(h) { 27 === h.keyCode && (h.stopPropagation(), g()) })
                }
                a && a.header && b("div.dtr-modal-content").prepend("<h2>" + a.header(c) + "</h2>")
            }
        }
    };
    var A = {};
    u.renderer = {
        listHiddenNodes: function() { return function(a, c, d) { var f = b('<ul data-dtr-index="' + c + '" class="dtr-details"/>'),
                    g = !1;
                b.each(d, function(l, h) { h.hidden && (b("<li " + (h.className ? 'class="' + h.className + '"' : "") + ' data-dtr-index="' + h.columnIndex + '" data-dt-row="' + h.rowIndex + '" data-dt-column="' + h.columnIndex + '"><span class="dtr-title">' + h.title + "</span> </li>").append(b('<span class="dtr-data"/>').append(p(a, h.rowIndex, h.columnIndex))).appendTo(f), g = !0) }); return g ? f : !1 } },
        listHidden: function() {
            return function(a,
                c, d) { return (a = b.map(d, function(f) { var g = f.className ? 'class="' + f.className + '"' : ""; return f.hidden ? "<li " + g + ' data-dtr-index="' + f.columnIndex + '" data-dt-row="' + f.rowIndex + '" data-dt-column="' + f.columnIndex + '"><span class="dtr-title">' + f.title + '</span> <span class="dtr-data">' + f.data + "</span></li>" : "" }).join("")) ? b('<ul data-dtr-index="' + c + '" class="dtr-details"/>').append(a) : !1 }
        },
        tableAll: function(a) {
            a = b.extend({ tableClass: "" }, a);
            return function(c, d, f) {
                c = b.map(f, function(g) {
                    return "<tr " + (g.className ?
                        'class="' + g.className + '"' : "") + ' data-dt-row="' + g.rowIndex + '" data-dt-column="' + g.columnIndex + '"><td>' + g.title + ":</td> <td>" + g.data + "</td></tr>"
                }).join("");
                return b('<table class="' + a.tableClass + ' dtr-details" width="100%"/>').append(c)
            }
        }
    };
    u.defaults = { breakpoints: u.breakpoints, auto: !0, details: { display: u.display.childRow, renderer: u.renderer.listHidden(), target: 0, type: "inline" }, orthogonal: "display" };
    var C = b.fn.dataTable.Api;
    C.register("responsive()", function() { return this });
    C.register("responsive.index()",
        function(a) { a = b(a); return { column: a.data("dtr-index"), row: a.parent().data("dtr-index") } });
    C.register("responsive.rebuild()", function() { return this.iterator("table", function(a) { a._responsive && a._responsive._classLogic() }) });
    C.register("responsive.recalc()", function() { return this.iterator("table", function(a) { a._responsive && (a._responsive._resizeAuto(), a._responsive._resize()) }) });
    C.register("responsive.hasHidden()", function() {
        var a = this.context[0];
        return a._responsive ? -1 !== b.inArray(!1, a._responsive._responsiveOnlyHidden()) :
            !1
    });
    C.registerPlural("columns().responsiveHidden()", "column().responsiveHidden()", function() { return this.iterator("column", function(a, c) { return a._responsive ? a._responsive._responsiveOnlyHidden()[c] : !1 }, 1) });
    u.version = "2.2.9";
    b.fn.dataTable.Responsive = u;
    b.fn.DataTable.Responsive = u;
    b(m).on("preInit.dt.dtr", function(a, c, d) {
        "dt" === a.namespace && (b(c.nTable).hasClass("responsive") || b(c.nTable).hasClass("dt-responsive") || c.oInit.responsive || z.defaults.responsive) && (a = c.oInit.responsive, !1 !== a && new u(c,
            b.isPlainObject(a) ? a : {}))
    });
    return u
});