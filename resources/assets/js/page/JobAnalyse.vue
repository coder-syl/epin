<template>
    <div>
        <h1>行业分析</h1>
        {{ positions }}

    </div>

</template>

<script>
    export default {
        name: "analyse",
        data() {
            return {
                positions: '',
            }
        },
        mounted() {
            var app = this;
            axios.get('api/analyseData').then(function (response) {
                console.log(response.data);
                app.positions = response.data;
            }).catch(function (response) {
                console.log(response);
                alert("Could not load position");
            });
        }
    }
</script>

<style scoped>

</style>