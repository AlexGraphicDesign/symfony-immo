<script setup lang="ts">
defineProps<{
  msg: string
}>()
</script>

<template>
    <div class="m-4">
        <h1>{{ msg }}</h1>
    </div>
</template>