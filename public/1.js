webpackJsonp([1],{

/***/ 176:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(12);
var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


// import EditProduct from './EditProduct'


/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      curEditId: ''
    };
  },
  computed: _extends({}, __WEBPACK_IMPORTED_MODULE_0_vuex__["d" /* mapState */](['tours'])),
  created: function created() {
    this.actGetAllTours();
  },
  methods: _extends({}, __WEBPACK_IMPORTED_MODULE_0_vuex__["b" /* mapActions */](['actGetAllTours'])),
  components: {
    // EditProduct
  }
});

/***/ }),

/***/ 177:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "panel panel-default" }, [
      _c("div", { staticClass: "panel-body" }, [
        _c(
          "div",
          { staticStyle: { "margin-bottom": "10px" } },
          [
            _c(
              "router-link",
              {
                staticClass: "btn btn-primary",
                attrs: { to: { name: "create_product" }, tag: "a" }
              },
              [_vm._v("Create New Tour")]
            )
          ],
          1
        ),
        _vm._v(" "),
        _c("table", { staticClass: "table table-striped table-hover" }, [
          _vm._m(0),
          _vm._v(" "),
          _c(
            "tbody",
            _vm._l(_vm.tours, function(tour) {
              return _c("tr", { key: tour.id }, [
                _c("td", [
                  _vm._v("\n            " + _vm._s(tour.id) + "\n           ")
                ]),
                _vm._v(" "),
                _c("td", [
                  _vm._v(
                    "\n           " + _vm._s(tour.tour_name) + "\n          "
                  )
                ]),
                _vm._v(" "),
                _c(
                  "td",
                  [
                    _c(
                      "router-link",
                      {
                        attrs: {
                          to: {
                            name: "edit_product",
                            params: { tourId: tour.id }
                          }
                        }
                      },
                      [
                        _c("button", { staticClass: "btn btn-primary" }, [
                          _vm._v("Edit")
                        ])
                      ]
                    )
                  ],
                  1
                )
              ])
            })
          )
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { staticClass: "col-lg-2" }, [_vm._v("Tour Id")]),
        _vm._v(" "),
        _c("th", { staticClass: "col-lg-8" }, [_vm._v("Tour Name")]),
        _vm._v(" "),
        _c("th", { staticClass: "col-lg-2" }, [_vm._v("Actions")])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-2a4eece2", module.exports)
  }
}

/***/ }),

/***/ 50:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(176)
/* template */
var __vue_template__ = __webpack_require__(177)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources\\assets\\js\\components\\contents\\products\\ProductsList.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2a4eece2", Component.options)
  } else {
    hotAPI.reload("data-v-2a4eece2", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ })

});