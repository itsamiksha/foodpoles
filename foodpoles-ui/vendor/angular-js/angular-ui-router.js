/**
 * Created by STG on 10/10/14.
 */
/**
 * State-based routing for AngularJS
 * @version v0.2.11
 * @link http://angular-ui.github.com/
 * @license MIT License, http://www.opensource.org/licenses/MIT
 */
"undefined" != typeof module && "undefined" != typeof exports && module.exports === exports && (module.exports = "ui.router"), function (a, b, c) {
    "use strict";
    function d(a, b) {
        return J(new (J(function () {
        }, {prototype: a})), b)
    }

    function e(a) {
        return I(arguments, function (b) {
            b !== a && I(b, function (b, c) {
                a.hasOwnProperty(c) || (a[c] = b)
            })
        }), a
    }

    function f(a, b) {
        var c = [];
        for (var d in a.path) {
            if (a.path[d] !== b.path[d])break;
            c.push(a.path[d])
        }
        return c
    }

    function g(a) {
        if (Object.keys)return Object.keys(a);
        var c = [];
        return b.forEach(a, function (a, b) {
            c.push(b)
        }), c
    }

    function h(a, b) {
        if (Array.prototype.indexOf)return a.indexOf(b, Number(arguments[2]) || 0);
        var c = a.length >>> 0, d = Number(arguments[2]) || 0;
        for (d = 0 > d ? Math.ceil(d) : Math.floor(d), 0 > d && (d += c); c > d; d++)if (d in a && a[d] === b)return d;
        return-1
    }

    function i(a, b, c, d) {
        var e, i = f(c, d), j = {}, k = [];
        for (var l in i)if (i[l].params && (e = g(i[l].params), e.length))for (var m in e)h(k, e[m]) >= 0 || (k.push(e[m]), j[e[m]] = a[e[m]]);
        return J({}, j, b)
    }

    function j(a, b, c) {
        if (!c) {
            c = [];
            for (var d in a)c.push(d)
        }
        for (var e = 0; e < c.length; e++) {
            var f = c[e];
            if (a[f] != b[f])return!1
        }
        return!0
    }

    function k(a, b) {
        var c = {};
        return I(a, function (a) {
            c[a] = b[a]
        }), c
    }

    function l(a, b) {
        var d = 1, f = 2, g = {}, h = [], i = g, j = J(a.when(g), {$$promises: g, $$values: g});
        this.study = function (g) {
            function k(a, c) {
                if (o[c] !== f) {
                    if (n.push(c), o[c] === d)throw n.splice(0, n.indexOf(c)), new Error("Cyclic dependency: " + n.join(" -> "));
                    if (o[c] = d, F(a))m.push(c, [function () {
                        return b.get(a)
                    }], h); else {
                        var e = b.annotate(a);
                        I(e, function (a) {
                            a !== c && g.hasOwnProperty(a) && k(g[a], a)
                        }), m.push(c, a, e)
                    }
                    n.pop(), o[c] = f
                }
            }

            function l(a) {
                return G(a) && a.then && a.$$promises
            }

            if (!G(g))throw new Error("'invocables' must be an object");
            var m = [], n = [], o = {};
            return I(g, k), g = n = o = null, function (d, f, g) {
                function h() {
                    --s || (t || e(r, f.$$values), p.$$values = r, p.$$promises = !0, delete p.$$inheritedValues, o.resolve(r))
                }

                function k(a) {
                    p.$$failure = a, o.reject(a)
                }

                function n(c, e, f) {
                    function i(a) {
                        l.reject(a), k(a)
                    }

                    function j() {
                        if (!D(p.$$failure))try {
                            l.resolve(b.invoke(e, g, r)), l.promise.then(function (a) {
                                r[c] = a, h()
                            }, i)
                        } catch (a) {
                            i(a)
                        }
                    }

                    var l = a.defer(), m = 0;
                    I(f, function (a) {
                        q.hasOwnProperty(a) && !d.hasOwnProperty(a) && (m++, q[a].then(function (b) {
                            r[a] = b, --m || j()
                        }, i))
                    }), m || j(), q[c] = l.promise
                }

                if (l(d) && g === c && (g = f, f = d, d = null), d) {
                    if (!G(d))throw new Error("'locals' must be an object")
                } else d = i;
                if (f) {
                    if (!l(f))throw new Error("'parent' must be a promise returned by $resolve.resolve()")
                } else f = j;
                var o = a.defer(), p = o.promise, q = p.$$promises = {}, r = J({}, d), s = 1 + m.length / 3, t = !1;
                if (D(f.$$failure))return k(f.$$failure), p;
                f.$$inheritedValues && e(r, f.$$inheritedValues), f.$$values ? (t = e(r, f.$$values), p.$$inheritedValues = f.$$values, h()) : (f.$$inheritedValues && (p.$$inheritedValues = f.$$inheritedValues), J(q, f.$$promises), f.then(h, k));
                for (var u = 0, v = m.length; v > u; u += 3)d.hasOwnProperty(m[u]) ? h() : n(m[u], m[u + 1], m[u + 2]);
                return p
            }
        }, this.resolve = function (a, b, c, d) {
            return this.study(a)(b, c, d)
        }
    }

    function m(a, b, c) {
        this.fromConfig = function (a, b, c) {
            return D(a.template) ? this.fromString(a.template, b) : D(a.templateUrl) ? this.fromUrl(a.templateUrl, b) : D(a.templateProvider) ? this.fromProvider(a.templateProvider, b, c) : null
        }, this.fromString = function (a, b) {
            return E(a) ? a(b) : a
        }, this.fromUrl = function (c, d) {
            return E(c) && (c = c(d)), null == c ? null : a.get(c, {cache: b}).then(function (a) {
                return a.data
            })
        }, this.fromProvider = function (a, b, d) {
            return c.invoke(a, null, d || {params: b})
        }
    }

    function n(a, d) {
        function e(a) {
            return D(a) ? this.type.decode(a) : p.$$getDefaultValue(this)
        }

        function f(b, c, d) {
            if (!/^\w+(-+\w+)*$/.test(b))throw new Error("Invalid parameter name '" + b + "' in pattern '" + a + "'");
            if (n[b])throw new Error("Duplicate parameter name '" + b + "' in pattern '" + a + "'");
            n[b] = J({type: c || new o, $value: e}, d)
        }

        function g(a, b, c) {
            var d = a.replace(/[\\\[\]\^$*+?.()|{}]/g, "\\$&");
            if (!b)return d;
            var e = c ? "?" : "";
            return d + e + "(" + b + ")" + e
        }

        function h(a) {
            if (!d.params || !d.params[a])return{};
            var b = d.params[a];
            return G(b) ? b : {value: b}
        }

        d = b.isObject(d) ? d : {};
        var i, j = /([:*])(\w+)|\{(\w+)(?:\:((?:[^{}\\]+|\\.|\{(?:[^{}\\]+|\\.)*\})+))?\}/g, k = "^", l = 0, m = this.segments = [], n = this.params = {};
        this.source = a;
        for (var q, r, s, t, u; (i = j.exec(a)) && (q = i[2] || i[3], r = i[4] || ("*" == i[1] ? ".*" : "[^/]*"), s = a.substring(l, i.index), t = this.$types[r] || new o({pattern: new RegExp(r)}), u = h(q), !(s.indexOf("?") >= 0));)k += g(s, t.$subPattern(), D(u.value)), f(q, t, u), m.push(s), l = j.lastIndex;
        s = a.substring(l);
        var v = s.indexOf("?");
        if (v >= 0) {
            var w = this.sourceSearch = s.substring(v);
            s = s.substring(0, v), this.sourcePath = a.substring(0, l + v), I(w.substring(1).split(/[&?]/), function (a) {
                f(a, null, h(a))
            })
        } else this.sourcePath = a, this.sourceSearch = "";
        k += g(s) + (d.strict === !1 ? "/?" : "") + "$", m.push(s), this.regexp = new RegExp(k, d.caseInsensitive ? "i" : c), this.prefix = m[0]
    }

    function o(a) {
        J(this, a)
    }

    function p() {
        function a() {
            return{strict: f, caseInsensitive: e}
        }

        function b(a) {
            return E(a) || H(a) && E(a[a.length - 1])
        }

        function c() {
            I(h, function (a) {
                if (n.prototype.$types[a.name])throw new Error("A type named '" + a.name + "' has already been defined.");
                var c = new o(b(a.def) ? d.invoke(a.def) : a.def);
                n.prototype.$types[a.name] = c
            })
        }

        var d, e = !1, f = !0, g = !0, h = [], i = {"int": {decode: function (a) {
            return parseInt(a, 10)
        }, is: function (a) {
            return D(a) ? this.decode(a.toString()) === a : !1
        }, pattern: /\d+/}, bool: {encode: function (a) {
            return a ? 1 : 0
        }, decode: function (a) {
            return 0 === parseInt(a, 10) ? !1 : !0
        }, is: function (a) {
            return a === !0 || a === !1
        }, pattern: /0|1/}, string: {pattern: /[^\/]*/}, date: {equals: function (a, b) {
            return a.toISOString() === b.toISOString()
        }, decode: function (a) {
            return new Date(a)
        }, encode: function (a) {
            return[a.getFullYear(), ("0" + (a.getMonth() + 1)).slice(-2), ("0" + a.getDate()).slice(-2)].join("-")
        }, pattern: /[0-9]{4}-(?:0[1-9]|1[0-2])-(?:0[1-9]|[1-2][0-9]|3[0-1])/}};
        p.$$getDefaultValue = function (a) {
            if (!b(a.value))return a.value;
            if (!d)throw new Error("Injectable functions cannot be called at configuration time");
            return d.invoke(a.value)
        }, this.caseInsensitive = function (a) {
            e = a
        }, this.strictMode = function (a) {
            f = a
        }, this.compile = function (b, c) {
            return new n(b, J(a(), c))
        }, this.isMatcher = function (a) {
            if (!G(a))return!1;
            var b = !0;
            return I(n.prototype, function (c, d) {
                E(c) && (b = b && D(a[d]) && E(a[d]))
            }), b
        }, this.type = function (a, b) {
            return D(b) ? (h.push({name: a, def: b}), g || c(), this) : n.prototype.$types[a]
        }, this.$get = ["$injector", function (a) {
            return d = a, g = !1, n.prototype.$types = {}, c(), I(i, function (a, b) {
                n.prototype.$types[b] || (n.prototype.$types[b] = new o(a))
            }), this
        }]
    }

    function q(a, b) {
        function d(a) {
            var b = /^\^((?:\\[^a-zA-Z0-9]|[^\\\[\]\^$*+?.()|{}]+)*)/.exec(a.source);
            return null != b ? b[1].replace(/\\(.)/g, "$1") : ""
        }

        function e(a, b) {
            return a.replace(/\$(\$|\d{1,2})/, function (a, c) {
                return b["$" === c ? 0 : Number(c)]
            })
        }

        function f(a, b, c) {
            if (!c)return!1;
            var d = a.invoke(b, b, {$match: c});
            return D(d) ? d : !0
        }

        function g(b, c, d, e) {
            function f(a, b, c) {
                return"/" === m ? a : b ? m.slice(0, -1) + a : c ? m.slice(1) + a : a
            }

            function g(a) {
                function c(a) {
                    var c = a(d, b);
                    return c ? (F(c) && b.replace().url(c), !0) : !1
                }

                if (!a || !a.defaultPrevented) {
                    var e, f = i.length;
                    for (e = 0; f > e; e++)if (c(i[e]))return;
                    j && c(j)
                }
            }

            function l() {
                return h = h || c.$on("$locationChangeSuccess", g)
            }

            var m = e.baseHref(), n = b.url();
            return k || l(), {sync: function () {
                g()
            }, listen: function () {
                return l()
            }, update: function (a) {
                return a ? void(n = b.url()) : void(b.url() !== n && (b.url(n), b.replace()))
            }, push: function (a, c, d) {
                b.url(a.format(c || {})), d && d.replace && b.replace()
            }, href: function (c, d, e) {
                if (!c.validates(d))return null;
                var g = a.html5Mode(), h = c.format(d);
                if (e = e || {}, g || null === h || (h = "#" + a.hashPrefix() + h), h = f(h, g, e.absolute), !e.absolute || !h)return h;
                var i = !g && h ? "/" : "", j = b.port();
                return j = 80 === j || 443 === j ? "" : ":" + j, [b.protocol(), "://", b.host(), j, i, h].join("")
            }}
        }

        var h, i = [], j = null, k = !1;
        this.rule = function (a) {
            if (!E(a))throw new Error("'rule' must be a function");
            return i.push(a), this
        }, this.otherwise = function (a) {
            if (F(a)) {
                var b = a;
                a = function () {
                    return b
                }
            } else if (!E(a))throw new Error("'rule' must be a function");
            return j = a, this
        }, this.when = function (a, c) {
            var g, h = F(c);
            if (F(a) && (a = b.compile(a)), !h && !E(c) && !H(c))throw new Error("invalid 'handler' in when()");
            var i = {matcher: function (a, c) {
                return h && (g = b.compile(c), c = ["$match", function (a) {
                    return g.format(a)
                }]), J(function (b, d) {
                    return f(b, c, a.exec(d.path(), d.search()))
                }, {prefix: F(a.prefix) ? a.prefix : ""})
            }, regex: function (a, b) {
                if (a.global || a.sticky)throw new Error("when() RegExp must not be global or sticky");
                return h && (g = b, b = ["$match", function (a) {
                    return e(g, a)
                }]), J(function (c, d) {
                    return f(c, b, a.exec(d.path()))
                }, {prefix: d(a)})
            }}, j = {matcher: b.isMatcher(a), regex: a instanceof RegExp};
            for (var k in j)if (j[k])return this.rule(i[k](a, c));
            throw new Error("invalid 'what' in when()")
        }, this.deferIntercept = function (a) {
            a === c && (a = !0), k = a
        }, this.$get = g, g.$inject = ["$location", "$rootScope", "$injector", "$browser"]
    }

    function r(a, e) {
        function f(a) {
            return 0 === a.indexOf(".") || 0 === a.indexOf("^")
        }

        function h(a, b) {
            if (!a)return c;
            var d = F(a), e = d ? a : a.name, g = f(e);
            if (g) {
                if (!b)throw new Error("No reference point given for path '" + e + "'");
                for (var h = e.split("."), i = 0, j = h.length, k = b; j > i; i++)if ("" !== h[i] || 0 !== i) {
                    if ("^" !== h[i])break;
                    if (!k.parent)throw new Error("Path '" + e + "' not valid for state '" + b.name + "'");
                    k = k.parent
                } else k = b;
                h = h.slice(i).join("."), e = k.name + (k.name && h ? "." : "") + h
            }
            var l = v[e];
            return!l || !d && (d || l !== a && l.self !== a) ? c : l
        }

        function l(a, b) {
            w[a] || (w[a] = []), w[a].push(b)
        }

        function m(b) {
            b = d(b, {self: b, resolve: b.resolve || {}, toString: function () {
                return this.name
            }});
            var c = b.name;
            if (!F(c) || c.indexOf("@") >= 0)throw new Error("State must have a valid name");
            if (v.hasOwnProperty(c))throw new Error("State '" + c + "'' is already defined");
            var e = -1 !== c.indexOf(".") ? c.substring(0, c.lastIndexOf(".")) : F(b.parent) ? b.parent : "";
            if (e && !v[e])return l(e, b.self);
            for (var f in y)E(y[f]) && (b[f] = y[f](b, y.$delegates[f]));
            if (v[c] = b, !b[x] && b.url && a.when(b.url, ["$match", "$stateParams", function (a, c) {
                u.$current.navigable == b && j(a, c) || u.transitionTo(b, a, {location: !1})
            }]), w[c])for (var g = 0; g < w[c].length; g++)m(w[c][g]);
            return b
        }

        function n(a) {
            return a.indexOf("*") > -1
        }

        function o(a) {
            var b = a.split("."), c = u.$current.name.split(".");
            if ("**" === b[0] && (c = c.slice(c.indexOf(b[1])), c.unshift("**")), "**" === b[b.length - 1] && (c.splice(c.indexOf(b[b.length - 2]) + 1, Number.MAX_VALUE), c.push("**")), b.length != c.length)return!1;
            for (var d = 0, e = b.length; e > d; d++)"*" === b[d] && (c[d] = "*");
            return c.join("") === b.join("")
        }

        function p(a, b) {
            return F(a) && !D(b) ? y[a] : E(b) && F(a) ? (y[a] && !y.$delegates[a] && (y.$delegates[a] = y[a]), y[a] = b, this) : this
        }

        function q(a, b) {
            return G(a) ? b = a : b.name = a, m(b), this
        }

        function r(a, e, f, l, m, p, q) {
            function r(b, c, d, f) {
                var g = a.$broadcast("$stateNotFound", b, c, d);
                if (g.defaultPrevented)return q.update(), A;
                if (!g.retry)return null;
                if (f.$retry)return q.update(), B;
                var h = u.transition = e.when(g.retry);
                return h.then(function () {
                    return h !== u.transition ? y : (b.options.$retry = !0, u.transitionTo(b.to, b.toParams, b.options))
                }, function () {
                    return A
                }), q.update(), h
            }

            function w(a, c, d, h, i) {
                var j = d ? c : k(g(a.params), c), n = {$stateParams: j};
                i.resolve = m.resolve(a.resolve, n, i.resolve, a);
                var o = [i.resolve.then(function (a) {
                    i.globals = a
                })];
                return h && o.push(h), I(a.views, function (c, d) {
                    var e = c.resolve && c.resolve !== a.resolve ? c.resolve : {};
                    e.$template = [function () {
                        return f.load(d, {view: c, locals: n, params: j}) || ""
                    }], o.push(m.resolve(e, n, i.resolve, a).then(function (f) {
                        if (E(c.controllerProvider) || H(c.controllerProvider)) {
                            var g = b.extend({}, e, n);
                            f.$$controller = l.invoke(c.controllerProvider, null, g)
                        } else f.$$controller = c.controller;
                        f.$$state = a, f.$$controllerAs = c.controllerAs, i[d] = f
                    }))
                }), e.all(o).then(function () {
                    return i
                })
            }

            var y = e.reject(new Error("transition superseded")), z = e.reject(new Error("transition prevented")), A = e.reject(new Error("transition aborted")), B = e.reject(new Error("transition failed"));
            return t.locals = {resolve: null, globals: {$stateParams: {}}}, u = {params: {}, current: t.self, $current: t, transition: null}, u.reload = function () {
                u.transitionTo(u.current, p, {reload: !0, inherit: !1, notify: !1})
            }, u.go = function (a, b, c) {
                return u.transitionTo(a, b, J({inherit: !0, relative: u.$current}, c))
            }, u.transitionTo = function (b, c, f) {
                c = c || {}, f = J({location: !0, inherit: !1, relative: null, notify: !0, reload: !1, $retry: !1}, f || {});
                var m, n = u.$current, o = u.params, v = n.path, A = h(b, f.relative);
                if (!D(A)) {
                    var B = {to: b, toParams: c, options: f}, C = r(B, n.self, o, f);
                    if (C)return C;
                    if (b = B.to, c = B.toParams, f = B.options, A = h(b, f.relative), !D(A)) {
                        if (!f.relative)throw new Error("No such state '" + b + "'");
                        throw new Error("Could not resolve '" + b + "' from state '" + f.relative + "'")
                    }
                }
                if (A[x])throw new Error("Cannot transition to abstract state '" + b + "'");
                f.inherit && (c = i(p, c || {}, u.$current, A)), b = A;
                var E = b.path, F = 0, G = E[F], H = t.locals, I = [];
                if (!f.reload)for (; G && G === v[F] && j(c, o, G.ownParams);)H = I[F] = G.locals, F++, G = E[F];
                if (s(b, n, H, f))return b.self.reloadOnSearch !== !1 && q.update(), u.transition = null, e.when(u.current);
                if (c = k(g(b.params), c || {}), f.notify && a.$broadcast("$stateChangeStart", b.self, c, n.self, o).defaultPrevented)return q.update(), z;
                for (var L = e.when(H), M = F; M < E.length; M++, G = E[M])H = I[M] = d(H), L = w(G, c, G === b, L, H);
                var N = u.transition = L.then(function () {
                    var d, e, g;
                    if (u.transition !== N)return y;
                    for (d = v.length - 1; d >= F; d--)g = v[d], g.self.onExit && l.invoke(g.self.onExit, g.self, g.locals.globals), g.locals = null;
                    for (d = F; d < E.length; d++)e = E[d], e.locals = I[d], e.self.onEnter && l.invoke(e.self.onEnter, e.self, e.locals.globals);
                    return u.transition !== N ? y : (u.$current = b, u.current = b.self, u.params = c, K(u.params, p), u.transition = null, f.location && b.navigable && q.push(b.navigable.url, b.navigable.locals.globals.$stateParams, {replace: "replace" === f.location}), f.notify && a.$broadcast("$stateChangeSuccess", b.self, c, n.self, o), q.update(!0), u.current)
                }, function (d) {
                    return u.transition !== N ? y : (u.transition = null, m = a.$broadcast("$stateChangeError", b.self, c, n.self, o, d), m.defaultPrevented || q.update(), e.reject(d))
                });
                return N
            }, u.is = function (a, d) {
                var e = h(a);
                return D(e) ? u.$current !== e ? !1 : D(d) && null !== d ? b.equals(p, d) : !0 : c
            }, u.includes = function (a, b) {
                if (F(a) && n(a)) {
                    if (!o(a))return!1;
                    a = u.$current.name
                }
                var d = h(a);
                return D(d) ? D(u.$current.includes[d.name]) ? j(b, p) : !1 : c
            }, u.href = function (a, b, c) {
                c = J({lossy: !0, inherit: !0, absolute: !1, relative: u.$current}, c || {});
                var d = h(a, c.relative);
                if (!D(d))return null;
                c.inherit && (b = i(p, b || {}, u.$current, d));
                var e = d && c.lossy ? d.navigable : d;
                return e && e.url ? q.href(e.url, k(g(d.params), b || {}), {absolute: c.absolute}) : null
            }, u.get = function (a, b) {
                if (0 === arguments.length)return g(v).map(function (a) {
                    return v[a].self
                });
                var c = h(a, b);
                return c && c.self ? c.self : null
            }, u
        }

        function s(a, b, c, d) {
            return a !== b || (c !== b.locals || d.reload) && a.self.reloadOnSearch !== !1 ? void 0 : !0
        }

        var t, u, v = {}, w = {}, x = "abstract", y = {parent: function (a) {
            if (D(a.parent) && a.parent)return h(a.parent);
            var b = /^(.+)\.[^.]+$/.exec(a.name);
            return b ? h(b[1]) : t
        }, data: function (a) {
            return a.parent && a.parent.data && (a.data = a.self.data = J({}, a.parent.data, a.data)), a.data
        }, url: function (a) {
            var b = a.url, c = {params: a.params || {}};
            if (F(b))return"^" == b.charAt(0) ? e.compile(b.substring(1), c) : (a.parent.navigable || t).url.concat(b, c);
            if (!b || e.isMatcher(b))return b;
            throw new Error("Invalid url '" + b + "' in state '" + a + "'")
        }, navigable: function (a) {
            return a.url ? a : a.parent ? a.parent.navigable : null
        }, params: function (a) {
            return a.params ? a.params : a.url ? a.url.params : a.parent.params
        }, views: function (a) {
            var b = {};
            return I(D(a.views) ? a.views : {"": a}, function (c, d) {
                d.indexOf("@") < 0 && (d += "@" + a.parent.name), b[d] = c
            }), b
        }, ownParams: function (a) {
            if (a.params = a.params || {}, !a.parent)return g(a.params);
            var b = {};
            I(a.params, function (a, c) {
                b[c] = !0
            }), I(a.parent.params, function (c, d) {
                if (!b[d])throw new Error("Missing required parameter '" + d + "' in state '" + a.name + "'");
                b[d] = !1
            });
            var c = [];
            return I(b, function (a, b) {
                a && c.push(b)
            }), c
        }, path: function (a) {
            return a.parent ? a.parent.path.concat(a) : []
        }, includes: function (a) {
            var b = a.parent ? J({}, a.parent.includes) : {};
            return b[a.name] = !0, b
        }, $delegates: {}};
        t = m({name: "", url: "^", views: null, "abstract": !0}), t.navigable = null, this.decorator = p, this.state = q, this.$get = r, r.$inject = ["$rootScope", "$q", "$view", "$injector", "$resolve", "$stateParams", "$urlRouter"]
    }

    function s() {
        function a(a, b) {
            return{load: function (c, d) {
                var e, f = {template: null, controller: null, view: null, locals: null, notify: !0, async: !0, params: {}};
                return d = J(f, d), d.view && (e = b.fromConfig(d.view, d.params, d.locals)), e && d.notify && a.$broadcast("$viewContentLoading", d), e
            }}
        }

        this.$get = a, a.$inject = ["$rootScope", "$templateFactory"]
    }

    function t() {
        var a = !1;
        this.useAnchorScroll = function () {
            a = !0
        }, this.$get = ["$anchorScroll", "$timeout", function (b, c) {
            return a ? b : function (a) {
                c(function () {
                    a[0].scrollIntoView()
                }, 0, !1)
            }
        }]
    }

    function u(a, c, d) {
        function e() {
            return c.has ? function (a) {
                return c.has(a) ? c.get(a) : null
            } : function (a) {
                try {
                    return c.get(a)
                } catch (b) {
                    return null
                }
            }
        }

        function f(a, b) {
            var c = function () {
                return{enter: function (a, b, c) {
                    b.after(a), c()
                }, leave: function (a, b) {
                    a.remove(), b()
                }}
            };
            if (i)return{enter: function (a, b, c) {
                i.enter(a, null, b, c)
            }, leave: function (a, b) {
                i.leave(a, b)
            }};
            if (h) {
                var d = h && h(b, a);
                return{enter: function (a, b, c) {
                    d.enter(a, null, b), c()
                }, leave: function (a, b) {
                    d.leave(a), b()
                }}
            }
            return c()
        }

        var g = e(), h = g("$animator"), i = g("$animate"), j = {restrict: "ECA", terminal: !0, priority: 400, transclude: "element", compile: function (c, e, g) {
            return function (c, e, h) {
                function i() {
                    k && (k.remove(), k = null), m && (m.$destroy(), m = null), l && (q.leave(l, function () {
                        k = null
                    }), k = l, l = null)
                }

                function j(f) {
                    var j, k = w(h, e.inheritedData("$uiView")), r = k && a.$current && a.$current.locals[k];
                    if (f || r !== n) {
                        j = c.$new(), n = a.$current.locals[k];
                        var s = g(j, function (a) {
                            q.enter(a, e, function () {
                                (b.isDefined(p) && !p || c.$eval(p)) && d(a)
                            }), i()
                        });
                        l = s, m = j, m.$emit("$viewContentLoaded"), m.$eval(o)
                    }
                }

                var k, l, m, n, o = h.onload || "", p = h.autoscroll, q = f(h, c);
                c.$on("$stateChangeSuccess", function () {
                    j(!1)
                }), c.$on("$viewContentLoading", function () {
                    j(!1)
                }), j(!0)
            }
        }};
        return j
    }

    function v(a, b, c) {
        return{restrict: "ECA", priority: -400, compile: function (d) {
            var e = d.html();
            return function (d, f, g) {
                var h = c.$current, i = w(g, f.inheritedData("$uiView")), j = h && h.locals[i];
                if (j) {
                    f.data("$uiView", {name: i, state: j.$$state}), f.html(j.$template ? j.$template : e);
                    var k = a(f.contents());
                    if (j.$$controller) {
                        j.$scope = d;
                        var l = b(j.$$controller, j);
                        j.$$controllerAs && (d[j.$$controllerAs] = l), f.data("$ngControllerController", l), f.children().data("$ngControllerController", l)
                    }
                    k(d)
                }
            }
        }}
    }

    function w(a, b) {
        var c = a.uiView || a.name || "";
        return c.indexOf("@") >= 0 ? c : c + "@" + (b ? b.state.name : "")
    }

    function x(a, b) {
        var c, d = a.match(/^\s*({[^}]*})\s*$/);
        if (d && (a = b + "(" + d[1] + ")"), c = a.replace(/\n/g, " ").match(/^([^(]+?)\s*(\((.*)\))?$/), !c || 4 !== c.length)throw new Error("Invalid state ref '" + a + "'");
        return{state: c[1], paramExpr: c[3] || null}
    }

    function y(a) {
        var b = a.parent().inheritedData("$uiView");
        return b && b.state && b.state.name ? b.state : void 0
    }

    function z(a, c) {
        var d = ["location", "inherit", "reload"];
        return{restrict: "A", require: ["?^uiSrefActive", "?^uiSrefActiveEq"], link: function (e, f, g, h) {
            var i = x(g.uiSref, a.current.name), j = null, k = y(f) || a.$current, l = "FORM" === f[0].nodeName, m = l ? "action" : "href", n = !0, o = {relative: k, inherit: !0}, p = e.$eval(g.uiSrefOpts) || {};
            b.forEach(d, function (a) {
                a in p && (o[a] = p[a])
            });
            var q = function (b) {
                if (b && (j = b), n) {
                    var c = a.href(i.state, j, o), d = h[1] || h[0];
                    return d && d.$$setStateInfo(i.state, j), null === c ? (n = !1, !1) : void(f[0][m] = c)
                }
            };
            i.paramExpr && (e.$watch(i.paramExpr, function (a) {
                a !== j && q(a)
            }, !0), j = e.$eval(i.paramExpr)), q(), l || f.bind("click", function (b) {
                var d = b.which || b.button;
                if (!(d > 1 || b.ctrlKey || b.metaKey || b.shiftKey || f.attr("target"))) {
                    var e = c(function () {
                        a.go(i.state, j, o)
                    });
                    b.preventDefault(), b.preventDefault = function () {
                        c.cancel(e)
                    }
                }
            })
        }}
    }

    function A(a, b, c) {
        return{restrict: "A", controller: ["$scope", "$element", "$attrs", function (d, e, f) {
            function g() {
                h() ? e.addClass(m) : e.removeClass(m)
            }

            function h() {
                return"undefined" != typeof f.uiSrefActiveEq ? a.$current.self === k && i() : a.includes(k.name) && i()
            }

            function i() {
                return!l || j(l, b)
            }

            var k, l, m;
            m = c(f.uiSrefActiveEq || f.uiSrefActive || "", !1)(d), this.$$setStateInfo = function (b, c) {
                k = a.get(b, y(e)), l = c, g()
            }, d.$on("$stateChangeSuccess", g)
        }]}
    }

    function B(a) {
        return function (b) {
            return a.is(b)
        }
    }

    function C(a) {
        return function (b) {
            return a.includes(b)
        }
    }

    var D = b.isDefined, E = b.isFunction, F = b.isString, G = b.isObject, H = b.isArray, I = b.forEach, J = b.extend, K = b.copy;
    b.module("ui.router.util", ["ng"]), b.module("ui.router.router", ["ui.router.util"]), b.module("ui.router.state", ["ui.router.router", "ui.router.util"]), b.module("ui.router", ["ui.router.state"]), b.module("ui.router.compat", ["ui.router"]), l.$inject = ["$q", "$injector"], b.module("ui.router.util").service("$resolve", l), m.$inject = ["$http", "$templateCache", "$injector"], b.module("ui.router.util").service("$templateFactory", m), n.prototype.concat = function (a, b) {
        return new n(this.sourcePath + a + this.sourceSearch, b)
    }, n.prototype.toString = function () {
        return this.source
    }, n.prototype.exec = function (a, b) {
        var c = this.regexp.exec(a);
        if (!c)return null;
        b = b || {};
        var d, e, f, g = this.parameters(), h = g.length, i = this.segments.length - 1, j = {};
        if (i !== c.length - 1)throw new Error("Unbalanced capture group in route '" + this.source + "'");
        for (d = 0; i > d; d++)f = g[d], e = this.params[f], j[f] = e.$value(c[d + 1]);
        for (; h > d; d++)f = g[d], e = this.params[f], j[f] = e.$value(b[f]);
        return j
    }, n.prototype.parameters = function (a) {
        return D(a) ? this.params[a] || null : g(this.params)
    }, n.prototype.validates = function (a) {
        var b, c, d = !0, e = this;
        return I(a, function (a, f) {
            e.params[f] && (c = e.params[f], b = !a && D(c.value), d = d && (b || c.type.is(a)))
        }), d
    }, n.prototype.format = function (a) {
        var b = this.segments, c = this.parameters();
        if (!a)return b.join("").replace("//", "/");
        var d, e, f, g, h, i, j = b.length - 1, k = c.length, l = b[0];
        if (!this.validates(a))return null;
        for (d = 0; j > d; d++)g = c[d], f = a[g], h = this.params[g], (D(f) || "/" !== b[d] && "/" !== b[d + 1]) && (null != f && (l += encodeURIComponent(h.type.encode(f))), l += b[d + 1]);
        for (; k > d; d++)g = c[d], f = a[g], null != f && (i = H(f), i && (f = f.map(encodeURIComponent).join("&" + g + "=")), l += (e ? "&" : "?") + g + "=" + (i ? f : encodeURIComponent(f)), e = !0);
        return l
    }, n.prototype.$types = {}, o.prototype.is = function () {
        return!0
    }, o.prototype.encode = function (a) {
        return a
    }, o.prototype.decode = function (a) {
        return a
    }, o.prototype.equals = function (a, b) {
        return a == b
    }, o.prototype.$subPattern = function () {
        var a = this.pattern.toString();
        return a.substr(1, a.length - 2)
    }, o.prototype.pattern = /.*/, b.module("ui.router.util").provider("$urlMatcherFactory", p), q.$inject = ["$locationProvider", "$urlMatcherFactoryProvider"], b.module("ui.router.router").provider("$urlRouter", q), r.$inject = ["$urlRouterProvider", "$urlMatcherFactoryProvider"], b.module("ui.router.state").value("$stateParams", {}).provider("$state", r), s.$inject = [], b.module("ui.router.state").provider("$view", s), b.module("ui.router.state").provider("$uiViewScroll", t), u.$inject = ["$state", "$injector", "$uiViewScroll"], v.$inject = ["$compile", "$controller", "$state"], b.module("ui.router.state").directive("uiView", u), b.module("ui.router.state").directive("uiView", v), z.$inject = ["$state", "$timeout"], A.$inject = ["$state", "$stateParams", "$interpolate"], b.module("ui.router.state").directive("uiSref", z).directive("uiSrefActive", A).directive("uiSrefActiveEq", A), B.$inject = ["$state"], C.$inject = ["$state"], b.module("ui.router.state").filter("isState", B).filter("includedByState", C)
}(window, window.angular);