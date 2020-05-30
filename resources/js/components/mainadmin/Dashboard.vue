<template>
  <div>
    <h1>Halaman Dashboard</h1>
    <p>{{ welcome }}</p>
    <table>
      <thead>
        <tr>
          <th>#id</th>
          <th>Name</th>
          <th>Salary</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="dt in info" :key="dt.id">
          <td>{{ dt.id }}</td>
          <td>{{ dt.employee_name }}</td>
          <td>{{ dt.employee_salary }}</td>
          <td>{{ dt.employee_age }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
// import M from "materialize-css";
import axios from "axios";
export default {
  name: "dashboard",
  data() {
    return {
      info: null
    };
  },
  computed: {
    welcome() {
      return this.$store.state.welcomeMessage;
    }
  },
  mounted() {
    var tes = localStorage.getItem("tes");
    tes = JSON.parse(tes);
    // console.log(tes);
    this.info = tes.data;
    // console.log(this.info);
    // if (tes == null) {
    // axios
    //   .get("http://dummy.restapiexample.com/api/v1/employees")
    //   .then(response => {
    //     // localStorage.setItem("tes", JSON.stringify(response.data));
    //     this.info = response;
    //     // console.log(JSON.stringify(response.data));
    //   })
    //   .catch(error => {
    //     console.log(error);
    //   });
    // } else{
    //   this.info = tes
    // }
  }
};
</script>

<style>
</style>