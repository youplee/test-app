<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('css/login.css')}}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form>
      <input type="text" v-model="email" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" v-model="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="button" @click="login" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
<script type="text/javascript" src="https://d3cvj7tn6vbtyk.cloudfront.net/js/vue.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var vuePage = new Vue({ el:'#formContent',
    data:{
        email : '',
        password : ''

    },
    methods: {
        login : function(){
            axios.post('api/login',{email : this.email,password : this.password})
                    .then(
                    (response) => {
                        console.log(response);
                    if(response.data){
                        localStorage.setItem('tkn', response.data.authorisation.token);
                        window.location.replace("/listing-film");
                        
                    }
                    
                    });
        }
    },
    mounted:function (){

    } });
 </script>