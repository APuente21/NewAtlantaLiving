<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("../head.php");?>
        <script type="text/javascript" src="../js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="../js/jquery.fancybox.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.min.css"/>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEOkEWL1XMpD-rH0pAGFFv5OuyXIbbl48&callback=initMap"></script>
        <script>
            var map;
            var latlng_rest = new google.maps.LatLng(33.812443, -84.355212);
          
            function initialize_map() {
                var mapOptions = {
                    zoom: 16,
                    center: latlng_rest
                };
                map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
                var marker = new google.maps.Marker({
                    position: latlng_rest,
                    map: map,
                    title: 'Chion Cultural Hall'
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize_map);
        </script>
    </head>
    <body>
        <div class="page_wrapper">
            <header class="page_header">
                <?php include("../nav_bar.php");?>
            </header>
            <div id="map-canvas"></div>
            <div class="container">
                <h2>Amazing Ethiopian Restaurant</h2>
                <div id="post_date"><small>Thursday, April 13, 2017</small></div><br>
                <div id="map-canvas"></div>
                <img src="../img/Veggi_platter.jpg" class="img-responsive" alt="Responsive image">
                <p>A couple of weeks ago a friend of ours invited us to this small Ethiopian restaurant called Chion Cultural Hall over by the Morningside Nature Preserver, and it was AMAZING!!!<br/><br/></p>
                <p>For those of you that are not very familiar with Ethiopian food, their cuisine consists mostly of vegetables and often very spicy meat dishes, served atop a large sourdough flatbread. Their cuisine has extensive vegan dishes, which I discovered (thanks Wikipedia!) is in part to the large Orthodox population they have– there are over 180 fasting days which are obligatory for all Orthodox Christians, which includes every Wednesday and Friday (except those following Easter).
                My husband and I arrived a bit early, which allowed me plenty of time to scope out the place. The décor, while simple, was elegant and it helped give the place a sense of authenticity and charm that both my husband and I liked. One thing that took me by surprise was how empty the restaurant was, my husband and I were the only ones there, which I thought was strange given that it was around 7pm – our friend later told us that he’s had the same experience, no matter if he stops by for lunch or dinner. <br/><br/>
                    
                When our friend arrived we agreed pretty quickly to share a large veggie platter. The platter itself was about fifty inches in diameter and was covered with an assortment of lentils, potatoes, lettuce, and some kale. The platter was accompanied with the sourdough flatbread, mentioned above, which is what we used to scoop up the contents of the platter – the platter was so big we ended up having to order some additional flatbread. The flatbread itself resembles a rolled up, thin pancake - I found it to be a bitter and chewy, but it complemented the dishes on the platter.<br/><br/>
                The evening progressed rather well. Our friend told us of all the places he had visited, and we shared our experiences of Atlanta since our arrival to the city. Just as we were getting ready to leave, I mentioned to the waitress that I really enjoyed the food and I asked her if they held any events – there was a small platform with some musical equipment, so I kind of assumed they might have some live music sometime. To our surprise, she said that they don’t have live music, but she mentioned that right next door to them, a new hookah place had just opened and that they might have some events there. She took us through the back and it looked like a fun place to visit for some drinks.<br/><br/>
                So boys and girls, if you haven’t already tried Etheopian food, of if you are fasting and are looking for some good food, definitely stop by Chion Cultural Hall.
                </p>
            </div>
        </div>
        <div class="push"></div>
        <?php include("../footer.php");?>
    </body>
</html>