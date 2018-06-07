<template>
    <div class="match">
        <span class="time" v-text="formattedTime">

        </span>

        <div class="result">
            <span class="team" v-text="info.home_team.country"></span>

            <span class="goal" v-text="info.home_team.goals"></span>
            <span>-</span>
            <span class="goal" v-text="info.away_team.goals"></span>

            <span class="team" v-text="info.away_team.country"></span>
        </div>
    </div>
</template>

<script>
    import moment from 'moment-timezone';

    export default {
        props : ['info'],

        computed : {
            formattedTime () {
                return moment(this.info.datetime).format('HH:mm');
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
                font-size: 30px;
                margin: 0 10px;
            }

            .goal {
                font-size: 20px;
            }
        }
    }
</style>