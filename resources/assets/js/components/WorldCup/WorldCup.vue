<template>
    <tile :position="position" modifiers="overflow">

    </tile>
</template>

<script>
    import Tile from '../atoms/Tile';

    export default {
        components: {
            Tile,
        },

        props: ['position'],

        mounted() {

        }
    }
</script>