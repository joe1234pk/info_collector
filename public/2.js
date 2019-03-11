webpackJsonp([2],{

/***/ 61:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(5)
/* script */
var __vue_script__ = __webpack_require__(64)
/* template */
var __vue_template__ = __webpack_require__(65)
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
Component.options.__file = "resources\\assets\\js\\components\\contents\\products\\EditProduct.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-cf0005b0", Component.options)
  } else {
    hotAPI.reload("data-v-cf0005b0", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 64:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vuex__ = __webpack_require__(23);
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



/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      tour: {}
    };
  },
  props: {
    tourId: Number
  },
  computed: _extends({}, __WEBPACK_IMPORTED_MODULE_0_vuex__["c" /* mapGetters */](['getTourWithId'])),
  // watch:{
  //     tourId:function(){
  //         if(this.tourId){
  //           this.getTourWithId(this.tourId);
  //         }
  //         else{
  //             this.tour = {};
  //         }
  //     },
  // },
  // created:function(){
  //    if(this.tourId){
  //           this.tourWithId(this.tourId);
  //         }
  //         else{
  //             this.tour = {};
  //         }
  // },
  created: function created() {
    //  actions.Store;
    this.tour = this.getTourWithId(this.tourId);
  },
  methods: {
    saveProduct: function saveProduct() {}

  }
});

/***/ }),

/***/ 65:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", { staticClass: "panel" }, [
    _c("div", { staticClass: "panel-body" }, [
      _c(
        "form",
        {
          staticClass: "form-horizontal",
          attrs: { action: "", method: "POST" }
        },
        [
          _c("div", { staticClass: "form-group" }, [
            _c("input", {
              attrs: { type: "hidden", name: "id" },
              domProps: { value: _vm.tour.id }
            })
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group " }, [
            _c("label", { staticClass: "col-lg-2 control-label" }, [
              _vm._v("\r\n              Tour Name:\r\n            ")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-10" }, [
              _c("input", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.tour.name,
                    expression: "tour.name"
                  }
                ],
                staticClass: "form-control",
                attrs: { name: "name" },
                domProps: { value: _vm.tour.name },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.tour, "name", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _c("span", { staticClass: "help-block" })
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "form-group " }, [
            _c("label", { staticClass: "col-lg-2 control-label" }, [
              _vm._v("\r\n              Itinerary:\r\n            ")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-lg-10" }, [
              _c("textarea", {
                directives: [
                  {
                    name: "model",
                    rawName: "v-model",
                    value: _vm.tour.itinerary,
                    expression: "tour.itinerary"
                  }
                ],
                staticClass: "form-control",
                attrs: { name: "itinerary" },
                domProps: { value: _vm.tour.itinerary },
                on: {
                  input: function($event) {
                    if ($event.target.composing) {
                      return
                    }
                    _vm.$set(_vm.tour, "itinerary", $event.target.value)
                  }
                }
              }),
              _vm._v(" "),
              _c("span", { staticClass: "help-block" })
            ])
          ]),
          _vm._v(" "),
          _vm._m(0),
          _vm._v(" "),
          _vm._m(1)
        ]
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h4", [
      _vm._v("Tour available Dates\r\n             "),
      _c("div", { staticClass: "pull-right" }, [
        _c(
          "a",
          {
            staticClass: "btn btn-primary",
            attrs: { href: "javascript:void(0);", id: "add_date_btn" }
          },
          [_vm._v("Add Date")]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("table", { staticClass: "table table-striped table-hover" }, [
      _c("thead", { staticClass: "bg-success" }, [
        _c("tr", [
          _c("th", { staticClass: "col-lg-8" }, [_vm._v("Date")]),
          _vm._v(" "),
          _c("th", { staticClass: "col-lg-4" }, [_vm._v("Action")])
        ])
      ]),
      _vm._v(" "),
      _c("tbody", { attrs: { id: "dates_wrapper" } }, [
        _c(
          "tr",
          { staticClass: "dates_wrapper", attrs: { name: "tour_dates" } },
          [
            _c("td", [
              _c("input", {
                attrs: { type: "hidden", name: "tour_dates", value: "" }
              })
            ]),
            _vm._v(" "),
            _c("td", [
              _c("input", { attrs: { type: "hidden", name: "", value: "" } }),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "btn btn-danger btn-date-status",
                  attrs: { href: "javascript:void(0);" }
                },
                [_vm._v("Disable")]
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "btn btn-success btn-date-status",
                  attrs: { href: "javascript:void(0);" }
                },
                [_vm._v("Enable")]
              )
            ])
          ]
        )
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-cf0005b0", module.exports)
  }
}

/***/ })

});