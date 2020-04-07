<template>
        <div>
            <div class="form-group row">
                <div class="col-md-4">都道府県</div>
                <div class="col-md-8">
                    <select class="form-control" v-model="pref" @change="getData">
                        <option v-for="p in prefs" :value="p">{{p}}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">市区町村1</div>
                <div class="col-md-8">
                    <select class="form-control" v-model="city" @change="getData">
                        <option v-for="c in cities" :value="c">{{c}}</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">市区町村2</div>
                <div class="col-md-8">
                    <select class="form-control" v-model="subcity" @change="getData">
                        <option v-for="c in subcities" :value="c">{{c}}</option>
                    </select>
                </div>
            </div>
           <!--  <p>緯度：{{lat}}</p>
            <p>経度：{{lng}}</p> -->
            <div v-if="lat > 0 && lng > 0">
                <form class="form-horizontal" method="POST" action="/pref2">
                    <input type="hidden" name="_token" :value="csrf">

                    <input type="hidden" name="code" :value="code">
                    <input type="hidden" name="lat" :value="lat">
                    <input type="hidden" name="lng" :value="lng">
                    <button type="submit" class="btn btn-sm btn-primary">
                        検索
                    </button>
                </form>
            </div>
        </div>
    
</template>

<script>
    export default {
        data() {
            return {
                csrf:'',
                code:'',
                pref:'',
                city:'',
                subcity:'',
                lat:0,
                lng:0,
                prefs:[],
                cities:[],
                subcities:[],
            }
        },
        created() {
            this.getData();
            this.csrf = document.head.querySelector('meta[name="csrf-token"]').content;
        },
        methods: {
            async getData() {
                var path = "/api/post/prefs";
                await axios.post(path,{
                    pref:this.pref,
                    city:this.city,
                    subcity:this.subcity,
                },{ 
                    withCredentials: true
                }).then((response) => {
                    console.log(response.data)
                    this.code = response.data.code;
                    this.prefs = response.data.prefs;
                    this.cities = response.data.cities;
                    this.subcities = response.data.subcities;
                    this.lat = response.data.lat;
                    this.lng = response.data.lng;
                });
            },
        }
    }
</script>