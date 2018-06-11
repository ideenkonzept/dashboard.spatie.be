<template>
    <tile :position="position" modifiers="overflow">
        <section class="statistics">
            <h1>Statistics</h1>
            <ul>
                <li class="statistic">
                    <span class="statistic__label">Firmen Data</span>
                    <span class="statistic__count">{{firmenData}}</span>
                </li>
                <li class="statistic">
                <span class="statistic__label">Partyzettel Downloads</span>
                <span class="statistic__count">{{ ZettelCount }}</span>
                </li>
                <!--<li class="statistic">-->
                <!--<span class="statistic__label">Total</span>-->
                <!--<span class="statistic__count">{{ formatNumber(total) }}</span>-->
                <!--</li>-->
            </ul>
        </section>
    </tile>
</template>

<script>
    import Tile from './atoms/Tile';
    import axios from 'axios';

    export default {
        components: {
            Tile
        },

        props: ['position'],
        data: function () {
            return {
                firmenData: 0,
                ZettelCount : 0
            }
        },
        mounted() {

            let vm = this;

            axios.get('http://firmen-daten.kunden.domains/ajax/count')
                .then(function (response) {
                    vm.firmenData = response.data.count;
                });

            setInterval(this.handler, 1000 * 60);


        },
        methods: {
            handler() {
                let vm = this;

                axios.get('http://firmen-daten.kunden.domains/ajax/count')
                    .then(function (response) {
                        vm.firmenData = response.data.count;
                    });

                // axios.get('https://partyzettel.org/api/statistics')
                //     .then(function (response) {
                //         vm.ZettelCount = response.data.default_download;
                //     });
            }
        }

    }
</script>