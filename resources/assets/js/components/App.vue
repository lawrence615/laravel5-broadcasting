<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">UchaguziTally</div>

                    <div class="panel-body">
                        <bar-chart :chart-data="datacollection"></bar-chart>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Bar from './Charts/Bar.vue';

    export default{
        name: 'app',
        components: {
            barChart: Bar
        },
        data(){
            return {
                backgroundColor: null,
                candidate: null,
                votes: null,
                datacollection: {}
            }
        },
        created(){

        },
        mounted(){
            this.fillData()
            this.listenForResultsReported()
        },
        methods: {
            fillData(){
                axios.get('/api/candidates/data')
                    .then(response => {
                        let results = response.data.data

                        let backgroundcolorresult = results.map(a => a.backgroundColor)
                        let candidateresult = results.map(a => a.candidate)
                        let votesresult = results.map(a => a.votes)


                        this.backgroundColor = backgroundcolorresult
                        this.candidate = candidateresult
                        this.votes = votesresult

                        this.datacollection = {
                            labels: this.candidate,
                            datasets: [
                                {
                                    backgroundColor: this.backgroundColor,
                                    data: this.votes
                                }
                            ]
                        }

                    })
                    .catch(error => {
                        console.log(error)
                    })
            },
            listenForResultsReported(){
                Echo.channel('results-reported')
                    .listen('ResultsReported', (data) => {

                        let _results = data.newResults

                        let backgroundcolorresult = _results.map(a => a.backgroundColor)
                        let candidateresult = _results.map(a => a.candidate)
                        let votesresult = _results.map(a => a.votes)


                        this.backgroundColor = backgroundcolorresult
                        this.candidate = candidateresult
                        this.votes = votesresult

                        this.datacollection = {
                            labels: this.candidate,
                            datasets: [
                                {
                                    backgroundColor: this.backgroundColor,
                                    data: this.votes
                                }
                            ]
                        }
                    })
            }
        }
    }

</script>

<style>
    .container {
        padding-top: 40px;
    }
</style>
