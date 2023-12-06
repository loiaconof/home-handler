<script setup lang="ts">
const { data: count } = await useFetch('http://localhost:8000/default')
</script>

<template>
  <div>
    {{count}}
  </div>
  <div>
    <UButton icon="i-heroicons-magnifying-glass" />
  </div>
</template>
