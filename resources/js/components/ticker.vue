<template>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div>
                        <p class="mb-0 text-secondary">Revenue</p>
                        <h4 class="my-1">$4805</h4>
                        <p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$34 Since last week</p>
                    </div>
                    <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                    </div>
                </div>
                <div id="chart1"></div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
name: "ticker",
data: ()=>{
 resp:[]
},
mounted() {
    this.getTicker()
},
methods:{
    getTicker(){
        axios.get('http://www.binance.com/api/v3/ticker/24hr', {
            symbol: 'BNBUSDT'
        })
            .then(function (res) {
                this.resp = res.data;
            })
            .catch(function (error) {
                console.log(error);
            });
        //alert(this.resp);
    }
}
//https://www.binance.com/api/v3/ticker/24hr
//symbol=BNBUSDT
}
</script>

<style scoped>

</style>
