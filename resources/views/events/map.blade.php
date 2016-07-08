@extends('app')
@section('content')
<style media="screen">
/**
*  Demo styles
*/
*,
*:after,
*:before {
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
font-smoothing: antialiased;
text-rendering: optimizeLegibility;
}

body {
padding: 0;
margin: 0;
font-family: sans-serif;
}

a {
text-decoration: none;
}

.map {
width: 100%;
margin-top:70px;
height:75%
}

.map__frame {
position: relative;
display: block;
width: 100%;
height: 120px;
overflow: hidden;
cursor: pointer;
}

/* Google Map (static) */
.map__frame img {
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
width: 100%;
height: auto;
}

/* Google Map (dynamic) */
.gm-style {
width: 100%;
min-height: 300px;
}

/* Google Map (dynamic) - info window */
.gm-style-iw {
font-size: 12px;
line-height: 18px;
}

.map__print,
.map__legend {
display: none;
}

.map__frame + .map__legend {
display: none;
height: 240px;
overflow-y: scroll;
-webkit-overflow-scrolling: touch;
font-size: 12px;
line-height: 18px;
}

.map__title,
.map__address,
.map__description {
display: block;
color: #000;
}

.map__title {
margin: 0;
font-weight: bold;
font-size: 14px;
}

.map__address {
margin: 0 0 10px;
font-weight: bold;
}

.map__legend ul {
margin: 0;
padding: 0;
overflow: auto;
}

.map__legend ul li {
position: relative;
width: 100%;
padding: 12px 10px 11px 38px;
margin-bottom:1em
border-bottom: 1px solid #eeeeee;
}

.map__marker {
position: absolute;
left: 10px;
top: 13px;
width: 19px;
height: 300px;
font-size: 24px;
padding:3em;
line-height: 24px;
text-align: center;
}

@media only screen and (min-width: 768px) {
.map {
  height: 100%;
  height: 100vh;
}

.map__legend {
  display: none;
  width: 30%;
  height: auto;
  overflow-y: auto;
  padding: 5px 10px;
  margin: 0 0 5px;
  background: #fff;
  color: #444;
  font-size:16px;
  line-height: 25px;
  border: 1px solid #bbb;
}

.map > .map__legend {
  display: none;
}

.map__legend strong {
  color: #000;
}

.map__legend a {
  color: #000;
}

.map__legend a:hover {
  color: #ff6600;
}

.map__frame {
  min-height: 100%;
  background: #fff;
}

.map__frame + .map__legend {
  display: none;
}

.map__print {
  position: absolute;
  left: 30px;
  bottom: 30px;
  z-index: 1;
  display: inline-block;
  padding: 6px 12px;
  background: #ff6600;
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
}
}
.fh5co-light-white-section{
  margin-top:50px;
}
</style>

<div class="">
  <div class="col-md-7">
    <br><br><br><br>
    <form >
      <div class="row">
        <div class="form-group col-md-6">
          <input name="search" class="form-control input-sm" id="exampleInputEmail1" placeholder="Venue,Artist,Neighborhood">
        </div>

      </div>

    </form>
    <div id="fh5co-work-section" class="fh5co-light-white-section" >
      <div class="row">
        @foreach($events as $event)
        <?php
          $event_link=str_replace(' ', '-', $event->title);
          $name_link=str_replace(' ', '-', $event->name);
        ?>
        <div class="@if($events->count() < 6) col-md-12 @else col-md-6 @endif  animate-box" >
          <a href="{{url('Events/'.$event_link.'/'.$name_link.'')}}" class="item-grid text-center">
            <div class="image" style="background-image: url({{$event->image_url}});height:150px"></div>
            <div class="v-align" style="height:10em">
              <div class="v-align-middle">
                <h3 class="title">{{$event->name}} @ {{$event->title}}</h3>
                <h5 class="category">
                  <strong>{{date('D M d, Y h:i',strtotime($event->date))}}</strong>
                </h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
  </div>
  </div>
  <div class="col-md-5 pull-right" style="position:fixed;right:0">
    <div class="map"></div>
  </div>
</div>
<script type="text/javascript">
/**
*  This demo uses Google Map Generator plugin
*  https://github.com/clintioo/google-maps-generator
*/
function googleMapGenerator(h){if(!(this instanceof googleMapGenerator)){return new googleMapGenerator(h)}var x=googleMapGenerator.options,o=document.querySelectorAll("."+x.containerClass)[0],p,A,z;if(h){x=w(googleMapGenerator.options,h)}u();function u(){if(!q()&&x.docWidth>=x.breakpointDynamicMap){t();return false}if(x.docWidth<x.breakpointDynamicMap&&x.isStaticMap){g(x.docWidth,x.docWidth);d()}else{r()}window.onresize=function(){f()}}function f(){var D=document.body.clientWidth;if(x.docWidth<x.breakpointDynamicMap&&D>=x.breakpointDynamicMap&&!j()){t()}if(x.docWidth>=x.breakpointDynamicMap&&D<x.breakpointDynamicMap){n()}if(q()){C()}return x.docWidth=D}function r(){x.isStaticMap=false;x.markerAnimation=google.maps.Animation.DROP;z={zoom:x.mapZoom,center:new google.maps.LatLng(x.mapLat,x.mapLng),mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.ROADMAP,"map_style"]}};if(c()){p=document.querySelectorAll("."+x.frameClass)[0];A=new google.maps.Map(p,z)}else{var D=document.createElement("div");D.setAttribute("class",x.frameClass);o.appendChild(D);A=new google.maps.Map(D,z)}if(x.hasLegend){a()}if(x.styles){e()}if(x.locations){b()}if(x.hasPrint){l()}return A}function a(){var D=document.createElement("div");if(!document.querySelectorAll("."+x.legendClass)[0]){o.insertAdjacentHTML("beforeend",v())}D.setAttribute("class",x.legendClass);o.appendChild(D);x.legend=i(o,x.legendClass);return A.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(x.legend)}function v(){var D="",F=x.locations.length;if(x.hasLegend){D+='<div class="'+x.legendClass+'"><ul>';for(var E=0;E<F;E++){D+='<li><span class="map__marker">'+B(E)+"</span> <strong>"+x.locations[E][0]+"</strong><br>"+x.locations[E][1]+"</li>"}D+="</ul></div>"}return D}function e(){var D=new google.maps.StyledMapType(x.styles,{name:"Styled Map"});A.mapTypes.set("map_style",D);return A.setMapTypeId("map_style")}function k(){var E="",D=x.styles.length;for(var H=0;H<D;H++){E+="&amp;style=feature:"+x.styles[H].featureType+"%7Celement:"+x.styles[H].elementType;for(var F=0,I=x.styles[H].stylers.length;F<I;F++){var K=x.styles[H].stylers[F];for(var G in K){var J=K[G].toString().replace("#","0x");E+="%7C"+G+":"+J}}}return E}function b(){var E=window.scrollY||document.documentElement.scrollTop,F=[];if(!q()){return false}if(x.markersAdded){return false}if(x.markerLoad==="scroll"&&o.offsetTop>E){return false}if(x.isStaticMap===true){return false}if(x.hasInfoWindow){var G=null;G=new google.maps.InfoWindow({content:"",maxWidth:240})}for(var J=0,D=x.locations.length;J<D;J++){var N=x.locations[J],I=new google.maps.LatLng(N[3],N[4]),K;if(x.hasMarkerIcon){if(N[6]){x.markerIcon={url:N[6]}}else{x.markerIcon="http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld="+B(J)+"|"+x.markerIconHexBackground+"|"+x.markerIconHexColor}}K=new google.maps.Marker({position:I,map:A,icon:x.markerIcon,animation:x.markerAnimation,title:N[0],html:'<div><span class="map__title">'+N[0]+'</span><span class="map__address">'+N[1]+'</span><span class="map__description">'+N[2]+"</span></div>",zIndex:N[5]});F.push(K);if(x.hasLegend){var L=document.createElement("div");L.setAttribute("class","map__legend__item");L.innerHTML="<strong>"+x.markerIconLabel+'</strong>&nbsp;&nbsp;<a href="#">'+N[0]+"</a>";x.legend.appendChild(L)}if(x.hasInfoWindow){google.maps.event.addListener(K,"click",function(){G.setContent(this.html);G.open(A,this)});google.maps.event.addListener(A,"click",function(){G.close(A,this)})}}if(x.hasLegend){var H=document.querySelectorAll("."+x.legendClass+" a"),M=H.length;for(var J=0;J<M;J++){(function(O){H[J].onclick=function(P){P.preventDefault();google.maps.event.trigger(F[O],"click")}})(J)}}return x.markersAdded=true}function s(){var I="",H="",J="size:"+x.markerIconSize,G=x.locations.length;if(x.markerIconHexBackground){H="%7Ccolor:0x"+x.markerIconHexBackground}for(var F=0;F<G;F++){var E="%7Clabel:"+B(F),D="%7C"+x.locations[F][3]+","+x.locations[F][4];if(x.hasMarkerIcon&&location[6]&&G<=5){}else{I+="&amp;markers="+J+H+E+D}}return I}function l(){var D=document.createElement("a");D.setAttribute("class",x.printClass);D.setAttribute("href","#");D.innerHTML="Print";o.appendChild(D);x.print=i(o,x.printClass);x.print.onclick=function(){m();return false}}function g(E,D){return o.innerHTML=y(E,D)+v()}function y(D,M){var D=D||640,M=M||640,E="",N="",I="",L="http://maps.googleapis.com/maps/api/staticmap?",F="center="+x.mapLat+","+x.mapLng,H="&amp;size="+D+"x"+M,G="&amp;zoom="+x.mapZoom,K="",J="";if(x.key){E="&amp;key="+x.key}if(x.styles){J=k()}if(x.locations){K=s()}N='<div class="'+x.frameClass+'"><img style="-webkit-user-select: none" src="'+L+F+G+E+H+K+J+'"></div>';return N}function d(){var D=document.querySelectorAll("."+x.frameClass)[0];D.onclick=function(E){if(!j()){n();t();return false}}}function c(){return document.querySelectorAll("."+x.frameClass)[0]}function j(){return document.querySelectorAll("."+x.mapDynamicClass)[0]}function n(){if(!x.hasResizedMap){var D=document.querySelectorAll("."+x.frameClass)[0];x.hasResizedMap=true;return D.style.height=D.offsetHeight*2.5+"px"}}function C(){var D=A.getCenter();google.maps.event.trigger(A,"resize");return A.setCenter(D)}function t(){var D=document.createElement("script");googleMapGenerator.options.isStaticMap=false;googleMapGenerator.options.markerLoad="load";D.type="text/javascript";D.src="https://maps.googleapis.com/maps/api/js?v=3.exp&callback=googleMapGenerator";return document.body.appendChild(D)}function q(){return typeof google==="object"&&typeof google.maps==="object"&&typeof google.maps.InfoWindow==="function"}function B(D){switch(x.markerIconType){case"alpha":x.markerIconLabel=String.fromCharCode(97+D).toUpperCase();break;case"numeric":x.markerIconLabel=D+1;break}return x.markerIconLabel}function m(){/* Remove this function - document.write conflict on Codepen*/ /*var D=window.open("","mapWin","width=640,height=640");D.focus();D.document.write("<style>body { margin:0 } img { width: 100%; height: auto; } .map__legend ul { padding: 0; margin: 1.5em 0 0; } .map__legend ul li { float: left; width: 50%; list-style: none; margin: 0 0 1em; font: 12px sans-serif; }</style>"+y()+v()+"<script>setTimeout(function () { window.focus(); window.print(); }, 1500);<\/script>");D.document.close();return D*/}function w(M,L){var O,F,D,E,J,K,I=arguments[0]||{},H=1,G=arguments.length,N=false;if(typeof I==="boolean"){N=I;I=arguments[1]||{};H=2}if(typeof I!=="object"&&!jQuery.isFunction(I)){I={}}if(G===H){I=this;--H}for(;H<G;H++){if((O=arguments[H])!=null){for(F in O){D=I[F];E=O[F];if(I===E){continue}if(N&&E&&(jQuery.isPlainObject(E)||(J=jQuery.isArray(E)))){if(J){J=false;K=D&&jQuery.isArray(D)?D:[]}else{K=D&&jQuery.isPlainObject(D)?D:{}}I[F]=jQuery.extend(N,K,E)}else{if(E!==undefined){I[F]=E}}}}}return I}function i(K,J){var I;for(var H=0,D=K.childNodes.length;H<D;H++){var G=(K.childNodes[H].className!=undefined)?K.childNodes[H].className.split(" "):[];for(var E=0,F=G.length;E<F;E++){if(G[E]==J){I=K.childNodes[H]}}}return I}return{init:u,onWindowResize:f,addGoogleMapDynamic:r,addGoogleMapDynamicLegend:a,addGoogleMapDynamicStyle:e,addGoogleMapDynamicMarkers:b,addGoogleMapDynamicPrintBtn:l,addGoogleMapStaticStyle:k,addGoogleMapStaticMarkers:s,addGoogleMapStatic:g,generateGoogleMapStatic:y,eventsGoogleMapStatic:d,addGoogleMapStaticLegend:v,hasGoogleMap:c,hasGoogleMapDynamic:j,resizeGoogleMapFrame:n,centerGoogleMapDynamic:C,loadGoogleMapJs:t,hasGoogleMapsJS:q,getGoogleMapMarkerLabel:B,printGoogleMap:m,extend:w,getChildByClass:i}}googleMapGenerator.options={containerClass:"map",frameClass:"map__frame",printClass:"map__print",legendClass:"map__legend",mapDynamicClass:"gm-style",apiKey:null,legend:null,print:null,mapLat:-33.85,mapLng:151.24,mapZoom:12,isStaticMap:true,hasResizedMap:false,hasInfoWindow:true,hasLegend:true,hasPrint:true,hasMarkerIcon:true,markerAnimation:null,markerLoad:"load",markerIconType:"alpha",markerIconLabel:"",markerIconHexColor:"ffffff",markerIconHexBackground:"cc0000",markerIconSize:"large",markerIcon:null,markersAdded:false,locations:[],styles:[],docWidth:document.body.clientWidth,breakpointDynamicMap:768};

/**
*  Plugin config and init
*/

// Config
// Breakpoint in px (below breakpoint -> load static map, above breakpoint -> load dynamic map)
googleMapGenerator.options.breakpointDynamicMap = 768;
googleMapGenerator.options.mapLat = 41.8781;
googleMapGenerator.options.mapLng = -87.6298;
googleMapGenerator.options.mapZoom = 12;
googleMapGenerator.options.markerIconType = 'numeric';
googleMapGenerator.options.markerIconHexBackground = '00E5EE';
googleMapGenerator.options.markerIconHexColor = '000000';
googleMapGenerator.options.hasPrint = false;
googleMapGenerator.options.locations = [
  @foreach($events as $event)

  ['{{$event->name}} @ {{$event->title}}', '{{$event->city}}, {{$event->region}}',
  '<img class="image" style="height:200px" src="{{$event->image_url}}">',
    {{$event->lat}},
   {{$event->lon}}, 1],
  @endforeach
];
googleMapGenerator.options.styles =
[
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#000000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#00fff6"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#00fff6"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "-50"
            },
            {
                "lightness": "-25"
            },
            {
                "color": "#00fff6"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#00fff6"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#000000"
            },
            {
                "lightness": -100
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "lightness": 100
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#00fff6"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#eeeeee"
            }
        ]
    }
];

// Init
var map = new googleMapGenerator();
</script>
@stop
