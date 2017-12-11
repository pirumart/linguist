<template>
    <div>
        <div v-for="topic in topics" class="list-group__wrap">
            <a class="list-group-item media" href="/topics/topic.id" data-toggle="modal">
                <div class="pull-left">
                    <div class="avatar-char mdc-bg-amber-400">T</div>
                </div>
                <div class="media-body list-group__text">
                    <h4>{{ topic.name }}</h4>
                    <i>{{ topic.description }}</i>
                    <br><br>
                    <div class="col-sm-12">
                        <span><h5>Sub-topics: </h5></span>
                        <div v-for="subTopic in topic.subTopics" class="list-group__attrs">
                            <div>{{ ucfirst(subTopic.name) }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Topics',
        props: {
            topics: {
                type: Array,
                required: true,
            },
        },
        data() {
            return {

            }
        },
        computed: {

        },
        methods: {

        },
        created() {

        },
    }
</script>
<style scoped>
</style>