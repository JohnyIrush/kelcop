<template>
<table class="table">
  <thead>
    <tr>
      <th scope="col">RefCode</th>
      <th scope="col">Activity</th>
      <th scope="col">Officer</th>
      <th scope="col">Units</th>
      <th scope="col">Taget</th>
      <th scope="col">When</th>
      <th scope="col">Budget</th>
      <th scope="col">Financier</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(mainactivity, index) in mainActivities" :key="index">
      <th scope="row">{{ mainactivity.RefCode }}</th>
      <td>
        <van-row>
                <van-col span="10">
                    Subcomponent
                </van-col>
                <van-col span="14">
                    {{ mainactivity.reference_code.Output }}
                </van-col>
            </van-row>
            <van-row>
                <van-col span="24">
                    {{ mainactivity.reference_code.mainactivity }}
                </van-col>
            </van-row>
      </td>
      <td>{{ mainactivity.Officer }}</td>
      <td>
        
        <ul>
          <li v-for="(unit, reference_code_unitindex) in mainactivity.reference_code_units" :key="reference_code_unitindex">{{ unit.Unit }}</li>
        </ul>
      </td>
      <td>
            <van-checkbox-group v-model="checked" direction="horizontal">
                <van-checkbox name="a" :value="Boolean(mainactivity.Q1 == 'true')" disabled>Q1</van-checkbox>
                <van-checkbox name="b" :value="Boolean(mainactivity.Q2 == 'true')" disabled>Q2</van-checkbox>
                <van-checkbox name="c" :value="Boolean(mainactivity.Q3 == 'true')" disabled>Q3</van-checkbox>
                <van-checkbox name="d" :value="Boolean(mainactivity.Q4 == 'true')" disabled>Q4</van-checkbox>
            </van-checkbox-group>
      </td>
      <td>{{ mainactivity.FY}}</td>
      <td>{{ calculateSubtotal(mainactivity.sub_activities) }}</td>
      <td>{{(mainactivity.financing.Description) }}</td>
      <td>{{ mainactivity.Cat }}</td>

      <div class="row">
        <!--<div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Item Description</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Qty</th>
                            <th scope="col">UnitCost</th>
                            <th scope="col">Budget</th>
                            <th scope="col">SubItem</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(subactivity, index) in mainactivity.sub_activities" :key="index">
                            <th scope="row">{{ subactivity.id }}</th>
                            <td>
                                {{ subactivity.SubActivity }}
                            </td>
                            <td>

                                {{ subactivity.Unit }}
                            </td>
                            <td>

                                {{ subactivity.Qty }}
                            </td>
                            <td>

                                {{ subactivity.UnitCost }}
                            </td>
                            <td>

                                {{ subactivity.Budget }}
                            </td>
                            <td>
                                {{ subactivity.Item }}
                            </td>
                            <td>
                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>-->
      </div>
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
            mainActivities: []
        };
    },
    methods: {
       //calculate subtotal
       calculateSubtotal(data)
       {
         return data.reduce((total, obj) => total + (obj['Budget'] || 0), 0);
       },
      //fetch subactivities records
        getMainActivities() {
            axios.get('/api/mainactivity/index')
                .then((response) => {
                    this.mainActivities = response.data
                    //console.log(response)
                })
        },
    },
    mounted() {
       // this.changeRecord(this.records[0])
       this.getMainActivities()
    },
};
</script>
  
<style>

</style>
