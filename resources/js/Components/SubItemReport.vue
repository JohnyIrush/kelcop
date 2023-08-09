<template>
<table class="table">
  <thead>
    <tr >
      <th scope="col">Item</th>
      <th scope="col">Description</th>
      <th scope="col">Budget for FY</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(expenseItem, index) in expenseitems" :key="index">
      <th scope="row">{{ expenseItem.item.Item }}</th>
      <td>{{ expenseItem.item.Description }}</td>
      <td>{{ expenseItem.totalBudget }}</td>
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
            expenseitems: []
        };
    },
    methods: {
        getExpenseItems() {
            axios.get('/api/expenseitem/index')
                .then((response) => {
                    this.expenseitems = response.data
                    //console.log(response)
                })
        },
    },
    mounted() {
       // this.changeRecord(this.records[0])
       this.getExpenseItems()
    },
};
</script>
  
<style>

</style>
