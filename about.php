<?php
require('includes/application_top.php');
require(DIR_WS_INCLUDES . 'template_top.php');

$content_query = tep_db_query("
    select * from content
    where status = 1 and language_id = '" . $_SESSION['languages_id'] . "' and page_id = 1
    order by id desc
  ");
$content_array = array();
while($content = tep_db_fetch_array($content_query)){
    $content_array[] = $content;
}

?>
<div class="container">

    <!-- Marketing Icons Section -->

    <div class="row" style="margin-top:2px;">

<div class="col-sm-3">
    <div class="leftHalf">
        <!-- facbook --->
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLucky-Salon-Spa-280393978778604%2F%3Ffref%3Dts&tabs=timeline&width=350&height=225&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="200" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        <!-- close facbook-->
        <!--- video ---->
        <div class="embed-responsive embed-responsive-16by9">
            <object width="425" height="400">
                <param name="movie" value="http://www.youtube.com/v/KEowmVZwX8A&hl=en&fs=1"></param>
                <param name="allowFullScreen" value="true"></param>

                <embed src="http://www.youtube.com/v/KEowmVZwX8A&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" style="top:14%; width:100%; height:150px;">
                </embed>
            </object>

        </div><!--close embed-responsive-16by9--->
        <div class="embed-responsive embed-responsive-16by9">
            <object width="425" height="400">
                <param name="movie" value="http://www.youtube.com/v/KEowmVZwX8A&hl=en&fs=1"></param>
                <param name="allowFullScreen" value="true"></param>

                <embed src="http://www.youtube.com/v/KEowmVZwX8A&hl=en&fs=1" type="application/x-shockwave-flash" allowfullscreen="true" style="top:12%; width:100%; height:150px;">
                </embed>
            </object>

        </div><!--close embed-responsive-16by9--->
        <!-- close video ---->

        <a href="#" class="thumbnail" style="margin-top:10%;">
            <img src="images/common area.jpg" alt="..." style="width:100%; height:124px;">
        </a>
        <a href="#" class="thumbnail">
            <img src="images/common area.jpg" alt="..." style="width:100%; height:124px;">
        </a>
        <a href="#" class="thumbnail">
            <img src="images/common area.jpg" alt="..." style="width:100%; height:124px;">
        </a>

    </div>
</div>

    <div class="col-sm-9" style="background:non; height:40px; color:#103a71;">
        <h3 style="margin-top:5px;">About Lucky Mall</h3>
    </div>
    <div class="col-sm-5" style="margin-top:2%;">
        <a href="#" class="thumbnail">
            <img src="images/lucky-burger.jpg" alt="..." style="width:100%; height:350px;">
        </a>

    </div>
    <div class="col-sm-4" style="margin-top:2%;">
        <p>Lucky Mall is the leading Market Expansion Services in cambodia. Our Ckients and Customers bdndfit from intergrated and tailor-made services along the entire value chain, offter any combination of sourcing,marketing,seles;distribution and after-sal support services.</p>
        <p>A holding company eith a select portfoli o representing meny of the Group's non listed Asian businesses,principally in engineering and constaution and IT services.(100%)Hong Kong,Macauand the united kingdom, and with a large and growin</p>
        <p>A holding company eith a select portfoli o representing meny of the Group's non listed Asian businesses,principally in engineering and constaution and IT services.(100%)Hong Kong,Macauand the united kingdom, and with a large and growin</p>
    </div>
</div>
</div>
<?php
require(DIR_WS_INCLUDES . 'template_bottom.php');
require(DIR_WS_INCLUDES . 'application_bottom.php');
?>
