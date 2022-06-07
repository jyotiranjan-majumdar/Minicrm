@extends('layout.app')

@section('content')


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&libraries=places">
</script>
<div>
    <input type="text" id="location">
<script type="text/javascript">
    $(document).ready(function(){ 
        var autocomplete;
        var id = 'location';

        autocomplete = new google.maps.places.Autocomplete((document.getElementById(id)),{
            type:['geocode'],
        })
    });
</script>
</div> --}}

<div class="flex justify-center" >
    <div class="w-8/12 bg-white p-6 rounded-lg">

       <b> <p> we can do this through Google api but for that we have to set billing so that we are doing this manually in some citys <p></b>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" class="m-6">
    <div>
        <label for="To">From:</label>
        <select name="fr" class="form-control">
        <option >1.DELHI</option>
        <option>2.MUMBAI</option>
        <option>3.KOLKATA</option>
        <option>4.CHENAI</option>
        </select>
    </div>

    <div>
        <label for="Latitude">Latitude:</label>
        <select name="lat1" class="form-control">
        <option value="28.7041">DELHI Latitute</option>
        <option value="19.0760">MUMBAILatitute</option>
        <option value="22.5726">KOLKATA Latitute</option>
        <option value="13.0827">CHENAI Latitute</option>
        </select>
    </div>
    <div>
        <label for="Longitude">Longitude:</label>
        <select name="long1" class="form-control">
        <option value="77.1025">DELHI Longitude</option>
        <option value="72.8777">MUMBAI Longitude</option>
        <option value="88.3639">KOLKATA Longitude</option>
        <option value="80.2707">CHENAI Longitude</option>
        </select>
    </div>

    <br><br>

    <div>
        <label for="To">Destination:</label>
        <select name="desti" id="from" class="form-control">
        <option>1.DELHI</option>
        <option>2.MUMBAI</option>
        <option>3.KOLKATA</option>
        <option>4.CHENAI</option>
        </select>
    </div>
    <div>
        <label for="Latitude">Latitude:</label>
        <select name="lat2" class="form-control">
            <option value="28.7041">DELHI Latitute</option>
            <option value="19.0760">MUMBAILatitute</option>
            <option value="22.5726">KOLKATA Latitute</option>
            <option value="13.0827">CHENAI Latitute</option>
        </select>
    </div>
    <div>
        <label for="Longitude">Longitude:</label>
        <select name="long2" class="form-control">
            <option value="77.1025">DELHI Longitude</option>
            <option value="72.8777">MUMBAI Longitude</option>
            <option value="88.3639">KOLKATA Longitude</option>
            <option value="80.2707">CHENAI Longitude</option>
        </select>
    </div>
    <br>
    <br>
    <input type="submit" name="submit">

</form>

</div>
</div>

<?php



function calculateDistance($lat1, $long1, $lat2, $long2){
$theta = $long1 - $long2;
$miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
$miles = acos($miles);
$miles = rad2deg($miles);
$result['miles'] = $miles * 60 * 1.1515;
$result['feet'] = $result['miles']*5280;
$result['yards'] = $result['feet']/3;
$result['kilometers'] = $result['miles']*1.609344;
$result['meters'] = $result['kilometers']*1000;
return $result;
}

if(isset($_GET['submit']))
{
$lat1 = $_GET['lat1'];
$long1 = $_GET['long1'];
$lat2 = $_GET['lat2'];
$long2 = $_GET['long2'];


echo json_encode(calculateDistance($_GET['lat1'],$_GET['long1'],$_GET['lat2'],$_GET['long2']));

}



?>







@endsection