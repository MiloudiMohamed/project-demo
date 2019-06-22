<template>
  <div>
    <team v-for="team in teams" :team="team" :key="team.id"></team>
  </div>
</template>

<script>
  export default {
    props: ['teams'],

    data () {
      return {}
    },

    methods: {}
  }
</script>
