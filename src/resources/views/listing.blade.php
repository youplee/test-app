<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html><html class=''>
<head>
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/ryanparag/pen/LLrVbo?depth=everything&order=popularity&page=10&q=movie&show_forks=false" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
<style >

</style></head><body>
<p class="intro">Based from <b><a href="https://dribbble.com/shots/2241918-Movie-Ticket-Card-Sketch-freebie" target="_blank">Soumya's Movie Ticket Card</a></b><p>
	
<div class="container" id="listing_page">
    <template v-for="(film, index) in films">
        <div class="movie-card">
            <div :class="'movie-header '+film.id " :style="{'background': 'url(' +urlImage+ film.poster_path + ')'}">
                <div class="header-icon-container">
                    <a href="#">
                        <i class="material-icons header-icon"></i>
                    </a>
                </div>
            </div><!--movie-header-->
            <div class="movie-content">
                <div class="movie-content-header">
                    <a href="#">
                        <h3 class="movie-title">@{{film.title}}</h3>
                    </a>
                </div>
                <div class="movie-info">
                    <div class="info-section">
                        <label>Date</label>
                        <span>@{{film.release_date}}</span>
                    </div><!--date,time-->
                    <div class="info-section">
                        <label>Vote Average</label>
                        <span>@{{film.vote_average}}</span>
                    </div><!--screen-->
                    <div class="info-section">
                        <label>Vote Count</label>
                        <span>@{{film.vote_count}}</span>
                    </div><!--row-->
                    <div class="info-section">
                        <label>Type Media</label>
                        <span>@{{film.media_type}}</span>
                    </div><!--seat-->
                </div>
            </div><!--movie-content-->
        </div><!--movie-card-->
    </template>

	
</div><!--container-->
<script type="text/javascript" src="https://d3cvj7tn6vbtyk.cloudfront.net/js/vue.min.js"></script> 
<script> 
 var vuePage = new Vue({ el:'#listing_page',
    data:{
        films : [],
        urlImage : '',

 },
 methods: { }, 
 mounted:function (){ 
    this.urlImage = "{{env("PATH_IMAGE_FILM")}}"
    this.films = {!! json_encode($films) !!}
    } });
 </script>
</body></html>