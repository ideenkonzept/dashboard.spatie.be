<template>
    <tile :position="position" :modifiers="modifiers">
        <section class="github-file">
            <h1 class="github-file__title">{{ teamMember }}</h1>
            <div class="github-file__content">
                <ul class="tasks">
                    <li v-for="task in tasks">{{task}}</li>
                </ul>
            </div>
        </section>
    </tile>
</template>

<script>
import echo from '../mixins/echo';
import Tile from './atoms/Tile';
import saveState from 'vue-save-state';

export default {
    components: {
        Tile,
    },

    mixins: [echo, saveState],

    props: ['teamMember', 'position','base_modifiers'],

    data() {
        return {
            tasks: '',
        };
    },
    computed : {
        modifiers : function() {
            if(typeof this.base_modifiers !== 'undefined'){
                return `overflow ${this.base_modifiers}`;
            }

            return 'overflow';
        }
    },
    methods: {
        getEventHandlers() {
            return {
                'Tasks.TasksFetched': response => {
                    this.tasks = response.tasks[this.teamMember];
                },
            };
        },

        getSaveStateConfig() {
            return {
                cacheKey: `tasks-${this.teamMember}`,
            };
        },
    },
};
</script>

<style>
    ul.tasks > li {
        font-size: 14px;
    }
</style>
