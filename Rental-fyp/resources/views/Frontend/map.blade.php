{{-- @extends('layouts/header-footer')
@section('content') --}}

<h1>Maps</h1>
<div id="map" style="height: 400px; width:100%;"></div>

@foreach ($property as $item)
 {{-- @php
     dd($item);
 @endphp --}}

    {{ $item->latitude }}
    {{ $item->longitude }}
@endforeach

<script>
    function initMap() {
        //Map options
        var options = {
            zoom:10,
            center: {lat:27.7172, lng:85.3240 }
        }

        //New map
        var map = new google.maps.Map(document.getElementById('map'), options);

        //Add marker
        // var marker = new google.maps.Marker({
        //     position: {lat:27.7172, lng:85.3240 },
        //     map:map
        // });

        // var infoWindow = new google.maps.InfoWindow({
        //     content: 'abc'
        // });

        // marker.addListener('click', function(){
        //     infoWindow.open(map, marker);
        // });
       

        @foreach ($property as $item)
            addMarker({{{ $property->latitude }}, {{ $property->longitude }} }); 
        @endforeach
       
        // addMarker({lat:27.7172, lng:85.3240 }); 
        //Add marker function
        function addMarker(coords) {
            var marker = new google.maps.Marker({
             position: coords,
             map:map
         });
        }
    }
</script>

@foreach ($property as $item)
    {{ $item->lat }}
    {{ $item->lng }}
@endforeach

{{-- <script type="text/javascript" src="{{ asset('js/map.js') }}"></script> --}}

<script 
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDh_VUkJzFhwkfxlR8slOC9bSLOV8mZ9jw&callback=initMap&v=weekly"
async>

</script>
{{-- @endsection --}}