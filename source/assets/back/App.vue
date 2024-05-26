<script setup lang="ts">
  import { RouterView } from 'vue-router'
</script>

<template>
    <div class="wrapper">
      <nav>
        <RouterLink to="/login" class="link">Login</RouterLink>
        <RouterLink to="/admin" class="link">Admin</RouterLink>
      </nav>
      <RouterView />
    </div>
</template>
