<template>
  <div class="card">
    <div class="card-content">
      <h3 class="card-title">Login</h3>
      <form action="#" @submit.prevent="login">
        <div class="input-field">
          <input type="text" name="username" id="username" v-model="username" />
          <label for="username">Username</label>
        </div>
        <div class="input-field">
          <input type="text" name="password" id="password" v-model="password" />
          <label for="password">Password</label>
        </div>
        <div class="card-action">
          <button type="submit" class="waves-effect waves-green btn">Login</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script >
export default {
  name: "login",
  data() {
    return {
      username: "",
      password: ""
    };
  },
  methods: {
    login() {
      this.$store.dispatch("retrieveToken", {
        username: this.username,
        password: this.password
      });
    }
  }
};
</script>

<style lang="stylus" scoped></style>