<template>
    <div class="match">
        <span class="time" v-text="formattedTime"></span>

        <div class="result">

            <div class="team" v-text="info.home_team.code" style="text-align: left"></div>

            <div class="goals">{{info.home_team.goals}} - {{info.away_team.goals}}</div>

            <div class="team" v-text="info.away_team.code" style="text-align: right"></div>
        </div>
        <hr>
    </div>
</template>

<script>
    import moment from 'moment-timezone';
    import de from 'moment/locale/de';

    export default {
        props : ['info'],

        computed : {
            formattedTime () {
                return `${moment(this.info.datetime).format('HH:mm')} (${moment.duration(moment(this.info.datetime).diff(moment())).locale('de').humanize(true)})`;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .match {
        height: auto;
        text-align: center;
        margin : 4px;

        .time {
            font-size: 20px;
        }

        .result {
            .team {
                font-size: 25px;
                margin: 0 5px;
                width: 30%;
                display: inline-block;
            }

            .goals {
                font-size: 20px;
                font-weight: bold;
                display: inline-block;
                width: 20%;
                text-align: center
            }
        }
    }
</style>