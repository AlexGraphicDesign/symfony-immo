<script setup lang="ts">
  import { RouterLink, RouterView } from 'vue-router'
  import Login from '@back/pages/Login.vue'
</script>

<template>
  <header>
    <div class="wrapper">
      <Login msg="Bienvenue sur le Login" />

      <RouterLink to="/admin">
        Admin
      </RouterLink>
    </div>
  </header>

<RouterView />
</template>
