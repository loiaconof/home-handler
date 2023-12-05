<script setup lang="ts">
const { data: count } = await useFetch('http://localhost:8000/default')
</script>

<template>
  {{count}}
</template>
