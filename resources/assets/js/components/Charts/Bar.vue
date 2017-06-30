<script>
    import {Bar, mixins} from 'vue-chartjs'
    const {reactiveProp} = mixins

    export default Bar.extend({
        mixins: [reactiveProp],
        props: ['chartData'],
        data(){
            return {
                options: {
                    legend: {
                        display: true
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        },
        mounted(){
//            console.log(this.chartData);
            this.renderChart(this.chartData, this.options);

        }
    })
</script>