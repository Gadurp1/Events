import Vue from 'vue';
import Graph from './components/Graph'
(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
"use strict";
new Vue({
  el:'body',
  components: {Graph}

});
var chart2 = AmCharts.makeChart("donut", {
  "type": "pie",
  "startDuration": 0,
  "theme": "light",
  "addClassNames": false,
  "urlField": "url",
  "innerRadius": "40%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },

  "dataProvider": [{
    country: "Requesting",
    litres: 177,
    url: "http://localhost/Reporting/Checks?status=Requesting"
  }, {
    country: "Allocation",
    litres: 217,
    url: "http://localhost/Reporting/Checks?status=Allocation"
  }, {
    country: "Mailed",
    litres: 575,
    url: "http://localhost/Reporting/Checks?status=Mailed"
  }, {
    country: "Processing",
    litres: 65,
    url: "http://localhost/Reporting/Checks?status=Processing"
  }],
  "valueField": "litres",
  "titleField": "country",
  "export": {
    "enabled": true
  }

});

chart2.addListener("init", handleInit);

chart2.addListener("rollOverSlice", function (e) {
  handleRollOver(e);
});

function handleInit() {
  chart2.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e) {
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}

},{}]},{},[1]);

//# sourceMappingURL=main.js.map
