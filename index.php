<!DOCTYPE html>
<html>
    <head>
        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script language="JavaScript" src="//ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
        <script type="text/javascript" src="webcamjs/webcam.min.js"></script>
        <!-- CSS -->
        <style>
        #my_camera{
        width: 320px;
        height: 240px;
        border: 1px solid black;
        }
    </style>

<div id="my_camera"></div>
<input type=button value="Take Snapshot" onClick="take_snapshot()">
 
<div id="results" ></div>
<input type="hidden" name="image" id="results" >
 
<!-- Webcam.min.js -->


<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
 Webcam.set({
  width: 320,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 90
 });
 Webcam.attach( '#my_camera' );


function take_snapshot() {
 
 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
  // display results in page
  document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
  document.getElementById('image').innerHTML = '<input type="hidden" name="image" value="<img src="'+data_uri+'"/>';
  
  } );
}
</script>