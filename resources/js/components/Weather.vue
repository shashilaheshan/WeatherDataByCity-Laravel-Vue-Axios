<template>
    <div>
        <h1 class="text-center">Weather Data By City</h1>
        <hr>
        <div class="container">
            <div class="form-group">
                <input type="text" placeholder="Country" v-model="city" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-block" @click="GetWeather(city)">GET</button>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h3>Info</h3>
                    <h5>Country: {{info.country}}</h5><br>
                    <h5>LatLng : {{info.lat}} ,{{info.lon}}</h5><br>
                    <h5>LocalTime: {{info.localtime}}</h5><br>
                    <h5>City: {{info.name}}</h5><br>
                    <h5>Region: {{info.region}}</h5><br>


                </div>
                <div class="col-md-6">
                    <h3>Current Weather</h3>
                    <h5>Cloud: {{weather.cloud}}</h5><br>
                    <h5>Condition: </h5>
                    <img v-bind:src="imageurl"><br>
                    <h5>Temperature (C): {{weather.temp_c}}</h5><br>
                    <h5>Temperature (F): {{weather.temp_f}}</h5><br>
                    <h5>Humidity: {{weather.humidity}}</h5><br>
                    <h5>Pressure: {{weather.pressure_in}}</h5><br>
                    <h5>U/V: {{weather.uv}}</h5><br>

                </div>
            </div>
        </div>

    </div>


</template>

<script>
    export default {
        data(){
            return{
                city:'',
                info:[],
                weather:[],
                imageurl:''
            }
        },
 methods:{

     GetWeather(city){
         this.city=city;
           //console.log(this.city);
           axios.get('http://api.apixu.com/v1/current.json?key=your_api_key&q='+this.city).then(res=>{

                  if(res){
                      this.info=res.data.location;
                      this.weather=res.data.current;
                      this.imageurl=res.data.current.condition.icon;
                  }




             // console.log(res);
           });
   console.log(this.imageurl);
     }
 }
    }
</script>

<style scoped>

</style>