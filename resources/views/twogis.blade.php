@extends('layouts.app')
@section('title')
About
@endsection
@section('content')
<h1>2GIS</h1>    
<div id="map" style="width:500px; height:400px"></div>  
<script type="text/javascript">
    var map;

DG.then(function () {
    map = DG.map('map', {
        center: [54.98, 82.89],
        zoom: 13
    });

    DG.marker([54.98, 82.89]).addTo(map);
});
</script>
@endsection