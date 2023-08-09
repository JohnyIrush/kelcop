<template>

<table class="table">
  <thead>
    <tr >
      <th scope="col">Category</th>
      <th scope="col">Financier</th>
      <th scope="col">Budget for FY</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(report, index) in reports" :key="index">
      <th scope="row">{{ index }}</th>
      <td>
      <!--<div v-for="(donor, index) in report.Donors" :key="index">
       <p> <span>{{ report[0].mainactivity.Donor }}</span> <span>{{ report[0].mainactivity.financing.Description }}</span> </p>
       <p>{{report[0].mainactivity.category.Description}}</p>
      </div>-->

<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(donor, index) in report.Donors" :key="index">
      <th scope="row">{{index}}</th>
      <td>{{donor.mainactivity.financing.Description}}</td>
      <td>{{donor.Total}}</td>

    </tr>
  </tbody>
</table>
      </td>
      <td>{{ report.Total}}</td>
    </tr>
  </tbody>
</table>
</template>
  
<script>
export default {
    props: {

    },
    data() {
        return {
            reports: []
        };
    },
    methods: {
        getCategoryFinancingReport() {
            axios.get('/api/category/report/index')
                .then((response) => {
                    this.reports = response.data
                    //console.log(response)
                })
        },
    },
    mounted() {
       // this.changeRecord(this.records[0])
       this.getCategoryFinancingReport()
    },
};
</script>
  
<style>

</style>
