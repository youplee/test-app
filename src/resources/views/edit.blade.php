<!DOCTYPE html>
<html class=''>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/ryanparag/pen/LLrVbo?depth=everything&order=popularity&page=10&q=movie&show_forks=false" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
        <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    </head>
<body>
    <div class="heading">
        <P CLASS="H">EDIT MOVIE</P>
    </div>
    <div class="form" id="edit_page">

    <form action="">
        <label for="name">Movie title :</label>
        <br>
        <input type="text" v-model="film.title" name="name" placeholder="Your Full Name" maxlength="30" required autofocus autocomplete="off">

        <br><br>

        <label for="message">Overview :</label>
        <br>
        <textarea name="message" v-model="film.overview" placeholder="Your Message to Us" rows="8" cols="120" required></textarea>
   
        <br><br>
        <input type="button" @click="saveFilm" value="Edit">
    </form>
    </div>
    <script type="text/javascript" src="https://d3cvj7tn6vbtyk.cloudfront.net/js/vue.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
 var vuePage = new Vue({ el:'#edit_page',
    data:{
        film : {
            title : '',
            overview : ''
        },
        id : '',
        urlApp : ''

 },
    methods: {
        getFilm : function(){
            axios.get(this.urlApp+'/api/detail-film/'+this.id,{
                headers: {
                    Authorization: 'Bearer '+this.token
                }
            })
                    .then(
                    (response) => {
                        console.log(response);
                        if(response.data){
                            this.film = response.data
                            
                        }else{
                            localStorage.removeItem('tkn');
                        }
                    
                    }).catch(error => {
                        localStorage.removeItem('tkn');
					});
        },
        saveFilm : function(){
            axios.post(this.urlApp+'/api/save-film/'+this.id,{title : this.film.title, overview : this.film.overview},{
                headers: {
                    Authorization: 'Bearer '+this.token
                }
            })
                    .then(
                    (response) => {
                        console.log(response);
                        if(response.data){
                            
                            window.location.replace("/listing-film");
                            
                        }else{
                            localStorage.removeItem('tkn');
                            window.location.replace("/login");
                        }
                    
                    }).catch(error => {
                        localStorage.removeItem('tkn');
                        window.location.replace("/login");
					});
        }
    },
    mounted:function (){

        this.urlApp = "{{env("APP_URL")}}"
        this.token = localStorage.getItem('tkn');
        this.id = {!! json_encode($id) !!}
        this.getFilm()
    } });
 </script>
</body>
</html>