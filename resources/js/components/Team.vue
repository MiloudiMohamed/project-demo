<template>
    <div class="w-1/4 border rounded-lg">
        <div class="flex flex-col items-center py-2 bg-gray-200">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10 h-10 -mt-6 border-2 border-teal-200 rounded-full icon-user-group"><path class="primary" d="M12 13a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v3a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1 1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3zM7 9a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm10 0a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path><path class="secondary" d="M12 13a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm-3 1h6a3 3 0 0 1 3 3v3a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3a3 3 0 0 1 3-3z"></path></svg>
            </p>
            <p class="mt-2">{{ team.name }}</p>
            <p class="mt-2">{{ team.theme }}</p>
            <p class="mt-2">{{ 5 + 1 }} members</p>
            <div class="flex">
                <div v-for="member in team.members">
                    <img
                        :src="member.avatar" :alt="member.name"
                        :title="member.name"
                        class="-ml-2 mt-2 w-6 h-6 border-2 border-teal-100 rounded-full"
                        >
                </div>
            </div>
        </div>
        <div class="text-center py-2 bg-gray-300 text-teal-700">
            <a href="#">Manage</a>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['team'],

    data () {
      return {}
    },
  }
</script>
