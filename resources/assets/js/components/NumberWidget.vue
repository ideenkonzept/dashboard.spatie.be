<template>
    <tile :position="position" modifiers="overflow">
        <section class="statistics">
            <h1>Statistics</h1>
            <ul>
                <li class="statistic">
                    <span class="statistic__label">Firmen Data 1</span>
                    <span class="statistic__count">{{ numberWithCommas(firmenData1)}}</span>
                </li>
                <li class="statistic">
                    <span class="statistic__label">Firmen Data 2</span>
                    <span class="statistic__count">{{ numberWithCommas(firmenData2)}}</span>
                </li>
                <li class="statistic">
                    <span class="statistic__label">Firmen Data 3</span>
                    <span class="statistic__count">{{ numberWithCommas(firmenData3)}}</span>
                </li>
                <li class="statistic">
                <span class="statistic__label">Partyzettel Downloads</span>
                <span class="statistic__count">{{ numberWithCommas(zettelCount) }}</span>
                </li>
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
                firmenData1: 0,
                firmenData2: 0,
                firmenData3: 0,
                zettelCount : 0
            }
        },
        mounted() {
            setInterval(this.handler, 1000 * 60);
        },
        methods: {
            handler() {
                let vm = this;

                axios.get('https://firmen-daten.kunden.domains/ajax/count')
                    .then(function (response) {
                        vm.firmenData1 = response.data.count;
                    });

                axios.get('https://firmen-daten2.kunden.domains/ajax/count')
                    .then(function (response) {
                        vm.firmenData2 = response.data.count;
                    });

                axios.get('https://firmen-daten3.kunden.domains/ajax/count')
                    .then(function (response) {
                        vm.firmenData3 = response.data.count;
                    });

                axios.get('https://partyzettel.org/api/statistics')
                    .then(function (response) {
                        vm.zettelCount = response.data.data.default_download;
                    });
            },
            numberWithCommas(x) {
                x = x.toString();
                var pattern = /(-?\d+)(\d{3})/;
                while (pattern.test(x))
                    x = x.replace(pattern, "$1.$2");
                return x;
            }
        }

    }
</script>