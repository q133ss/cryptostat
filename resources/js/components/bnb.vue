<template>
    <div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body" v-for="el in currency">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">{{ el.symbol }}
                                <select name="" @change="onChange($event)">
                                    <option value="USDT">USDT</option>
                                    <option value="RUB">RUB</option>
                                    <option value="EUR">EUR</option>
                                </select>
                            </p>
                            <h4 class="my-1">{{ el.lastPrice }}</h4>
                            <p class="mb-0 font-13 text-danger" v-if="(el.priceChangePercent.includes('-'))"><i class="bx bxs-down-arrow align-middle"></i>{{ el.priceChangePercent }}%</p>
                            <p class="mb-0 font-13 text-success" v-else><i class='bx bxs-up-arrow align-middle'></i>{{ el.priceChangePercent }}%</p>

                        </div>
                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='bx bxs-wallet'></i>
                        </div>
                    </div>
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: "bnb",
    data: () => ({
        currency: []
    }),
    mounted() {
        this.getTicker('USDT');
    },
    methods:{
        getTicker(cur){
            axios.get('/api/ticker/BNB/'+cur)
                .then(res => {
                    this.currency = res.data;
                });

            console.log(this.currency);
        },
        onChange(event){
            this.getTicker(event.target.value);
        }
    }

}
</script>

<style scoped>

</style>
