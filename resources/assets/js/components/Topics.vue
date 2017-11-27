<template>
    <div>
        <div v-for="topic in topics" class="list-group__wrap">
            <a class="list-group-item media" data-toggle="modal">
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
            <div class="actions list-group__actions">
                <b-button-group>
                    <b-dropdown right text=":">
                        <b-dropdown-item><a href="#add-to-group" data-toggle="modal">Add sub-topic</a></b-dropdown-item>
                        <b-dropdown-item><a href="">Edit</a></b-dropdown-item>
                    </b-dropdown>
                </b-button-group>
            </div>
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