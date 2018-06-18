<template>
    <tile :position="position" modifiers="overflow">
        <match v-for="(match, index) in matches" :info="match" :key="index"></match>
    </tile>
</template>

<script>
    import Tile from '../atoms/Tile';
    import Match from './Match';
    import axios from 'axios';

    export default {
        components: {
            Tile,
            Match
        },

        props: ['position'],

        data: function () {
            return {
                matches: [
                    {
                        "venue": "Nizhny Novgorod",
                        "location": "Nizhny Novgorod Stadium",
                        "status": "future",
                        "time": null,
                        "fifa_id": "300331499",
                        "home_team_statistics": null,
                        "away_team_statistics": null,
                        "datetime": "2018-06-18T12:00:00Z",
                        "last_event_update_at": null,
                        "last_score_update_at": "2018-06-18T07:57:39Z",
                        "home_team": {
                            "country": "Sweden",
                            "code": "SWE",
                            "goals": 0
                        },
                        "away_team": {
                            "country": "Korea Republic",
                            "code": "KOR",
                            "goals": 0
                        },
                        "winner": null,
                        "winner_code": null,
                        "home_team_events": [],
                        "away_team_events": []
                    },
                    {
                        "venue": "Volgograd",
                        "location": "Volgograd Arena",
                        "status": "future",
                        "time": null,
                        "fifa_id": "300331554",
                        "home_team_statistics": null,
                        "away_team_statistics": null,
                        "datetime": "2018-06-18T18:00:00Z",
                        "last_event_update_at": null,
                        "last_score_update_at": "2018-06-18T07:57:39Z",
                        "home_team": {
                            "country": "Tunisia",
                            "code": "TUN",
                            "goals": 0
                        },
                        "away_team": {
                            "country": "England",
                            "code": "ENG",
                            "goals": 0
                        },
                        "winner": null,
                        "winner_code": null,
                        "home_team_events": [],
                        "away_team_events": []
                    }
                ]
            }
        },

        mounted() {
            setInterval(this.handler, 1000 * 60);
        },
        handler(){
            let vm = this;
            axios.get('https://world-cup-json.herokuapp.com/matches/today')
                .then(function (response) {
                    if (response.data.length > 0){
                        vm.matches = response.data;
                    }
                });
        }
    }
</script>