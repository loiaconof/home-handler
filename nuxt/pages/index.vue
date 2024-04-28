<script setup lang="ts">
const route = useRoute()
const { data } = await useFetch('/test', { baseURL: 'http://localhost:8000'})
</script>

<template>
  <div>
    <h1>Nuxt prova!</h1>
    data: {{ data }}
    <p>Current route: {{ route.path }}</p>
    <a href="https://nuxt.com/docs/getting-started/routing" target="_blank">Learn more about Nuxt Routing</a>
  </div>
</template>
