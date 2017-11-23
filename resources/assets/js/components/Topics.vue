<template>
    <div>
        <div v-for="topic in topics" class="list-group__wrap">
            <a class="list-group-item media" href="#view-contact" data-toggle="modal">
                <div class="pull-left">
                    <div class="avatar-char mdc-bg-amber-400">T</div>
                </div>
                <div class="media-body list-group__text">
                    <h4>{{ topic.name }}</h4>
                    <i>{{ topic.description }}</i>
                    <br><br>

                    <div v-for="subTopic in topic.subTopics" class="list-group__attrs">
                        <div>{{ ucfirst(subTopic.name) }}</div>
                    </div>
                </div>
            </a>
            <div class="actions list-group__actions">
                <div class="dropdown">
                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                    <ul class="dropdown-menu pull-right">
                        <li><a href="#add-to-group" data-toggle="modal">Add sub-topic</a></li>
                        <li><a href="">Edit</a></li>
                        <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                    </ul>
                </div>
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