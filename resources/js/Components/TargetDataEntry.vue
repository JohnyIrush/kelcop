<template>
    <van-row>
        <van-col span="3">
            <label>AccNo: {{ currentMainActivity.AcNo }}</label>
        </van-col>
        <van-col span="5">
            <label>Refcode Subactivity: {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.RefCode
                : '' }}</label>
        </van-col>
        <van-col span="3">
            <label>Category: {{ currentMainActivity.Cat }}</label>

            <p>{{ (currentMainActivity.category) ? currentMainActivity.category.cat_description : '' }}</p>
        </van-col>
        <van-col span="4">
            <label>Financing: {{ currentMainActivity.Donor }}</label>
            <label>{{ (currentMainActivity.financing) ? currentMainActivity.financing.Description : '' }}</label>
        </van-col>
        <van-col span="3">
            <label>Centre: {{ currentMainActivity.Centre }}</label>
            <label>{{ (currentMainActivity.center) ? currentMainActivity.center.Description : '' }}</label>
        </van-col>
    </van-row>
    <van-row>
        <van-col span="4">
            <p> Where: {{ currentMainActivity.Location }}</p>
        </van-col>
        <van-col span="3">
            <p>Officer: {{ currentMainActivity.Officer }}</p>
        </van-col>
        <van-col span="8">
            <van-checkbox-group v-model="checked" direction="horizontal">
                <van-checkbox name="a" :value="Boolean(currentMainActivity.Q1 == 'true')" disabled>Q1</van-checkbox>
                <van-checkbox name="b" :value="Boolean(currentMainActivity.Q2 == 'true')" disabled>Q2</van-checkbox>
                <van-checkbox name="c" :value="Boolean(currentMainActivity.Q3 == 'true')" disabled>Q3</van-checkbox>
                <van-checkbox name="d" :value="Boolean(currentMainActivity.Q4 == 'true')" disabled>Q4</van-checkbox>
            </van-checkbox-group>
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Component
        </van-col>
        <van-col span="12">
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Component : '' }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Sub Component
        </van-col>
        <van-col span="12">
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Output : '' }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Major Activity
        </van-col>
        <van-col span="12">
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.ActivityMain : '' }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            RefCode Activity
        </van-col>
        <van-col span="12">
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.RefCodeCategory : '' }}
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.ActivityCategory : '' }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="6">
            Sub Activity
        </van-col>
        <van-col span="12">
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.RefCode : '' }}
            {{ (currentMainActivity.reference_code) ? currentMainActivity.reference_code.Activity : '' }}
        </van-col>
    </van-row>
    <van-row>
        <van-col span="20">
            <h3>Detail Budget Entry</h3>
            <div class="table-responsive">
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
                        <tr v-for="(subactivity, index) in currentMainActivity.sub_activities" :key="index">
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
            </div>
        </van-col>
        <van-col span="4">
            <h3>Activity Targets Entry</h3>
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Units</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(reference_code_unit, index) in currentMainActivity.reference_code_units" :key="index">
                        <td>{{ reference_code_unit.Unit }}</td>
                    </tr>
                </tbody>
            </table>
        </van-col>
    </van-row>
    <div class="row">
        <div class="col-6">
            <van-row>
                <van-col span="6">

                </van-col>
                <van-col span="6">
                </van-col>
            </van-row>
        </div>
        <div class="col-6">
            <van-row>
                <pagination :records="mainActivities" @newRecord="filterMainActivities($event.AcNo)"></pagination>
            </van-row>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Why is activity required and expected
                    benefits</label>
                <textarea class="form-control" :value="currentMainActivity.Why_benefits" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">How will the activity be undertaken, what are
                    the steps</label>
                <textarea class="form-control" :value="currentMainActivity.How_done" rows="5"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">What are benefiaciaries roles and output</label>
                <textarea class="form-control" :value="currentMainActivity.Ben_role" rows="5"></textarea>
            </div>
        </div>
    </div>
    <van-action-sheet v-model:show="showDataEntryForm" title="Title">
        <div class="content">Content</div>
        <data-entry />
    </van-action-sheet>
</template>
  
<script>

import { handleError } from 'vue';
import { defineComponent, ref, inject } from 'vue'
import Pagination from "../Components/Pagination.vue";
import DataEntry from "../Components/DataEntry.vue";


export default defineComponent({
    components: {
        Pagination,
        DataEntry
    },
    setup(props, context) {

        const columns = [
            { text: 'Delaware', value: 'Delaware' },
            { text: 'Florida', value: 'Florida' },
            { text: 'Wenzhou', value: 'Wenzhou' },
            { text: 'Indiana', value: 'Indiana' },
            { text: 'Maine', value: 'Maine' },
        ];
        const onConfirm = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onChange = ({ selectedValues }) => {
            showToast(`Value: ${selectedValues.join(',')}`);
        };
        const onCancel = () => showToast('Cancel');

        const showPicker = ref(false);
        const showDataEntryForm = ref(false);

        return {
            columns,
            onChange,
            onCancel,
            onConfirm,
            showPicker,
            showDataEntryForm
        };
    },
    computed: {
        initialReferenceCode() {
            return this.referenceCodes[0];
        },
        /*initialSubActivity()
        {
            return this.subActivities[0];
        }*/
    },
    data() {
        return {
            subActivities: [], // store subactivities
            selectedSubactivity: [], // store selected subactivity
            currentSubActivies: [], // current filtered subactivities displayed 
            referenceCodes: [], // store referenceCodes
            selectedReferenceCode: [], // store selected referenceCode
            currentReferenceCode: {}, // current filtered referenceCodes displayed 
            categories: [], //store categories fetched
            selectedCategory: {}, //current selected category
            financing: [], //store financing fetched
            selectedFinancing: {}, //current selected financing
            centres: [], //store centres fetched
            selectedCentre: {}, //current selected centre
            expenseitems: [], // fetch expense items
            expenseitems: [], // fetch expense items

            mainActivities: [], //store main activities
            currentMainActivity: {} // current activity
        }

    },
    methods: {
        //filter  mainactivities by AcNo
        filterMainActivities(value) {
            //alert(value)
            this.currentMainActivity = this.mainActivities.filter((mainactivity) => {
                return mainactivity.AcNo == value;
            })[0]
            console.log(this.currentMainActivity)
        },
        // capture subactivity selection
        mainActivitySelected(value) {
            //alert(value);
            //console.log(value)
            this.filterMainActivities(value)
        },
        //fetch subactivities records
        getMainActivities() {
            axios.get('/api/mainactivity/index')
                .then((response) => {
                    this.mainActivities = response.data
                    //console.log(response)
                })
        },
        getItemDescription(Item) {
            //alert(Item)
            var expenseItem = this.expenseitems.filter((expenseItem) => { return expenseItem.Item == Item; })
            console.log(expenseItem)
            return expenseItem.Description;
        },
        //fetch centres
        getExpenseItems() {
            axios.get('/api/expenseitem/index')
                .then((response) => {
                    this.expenseitems = response.data
                    //console.log(response)
                })
        },
        //fetch centres
        getCentres() {
            axios.get('/api/centre/index')
                .then((response) => {
                    this.centres = response.data
                    //console.log(response)
                })
        },
        //fetch financing
        getFinancing() {
            axios.get('/api/financing/index')
                .then((response) => {
                    this.financing = response.data
                    //console.log(response)
                })
        },
        //fetch categories
        getCategories() {
            axios.get('/api/category/index')
                .then((response) => {
                    this.categories = response.data
                    //console.log(response)
                })
        },
        filterReferenceCode(value) {
            const result = this.referenceCodes.filter((referencecode) => {
                return referencecode.RefCode == value;
            })

            //this.currentReferenceCode = JSON.parse(JSON.stringify(result))[0]
            //currentReferenceCode

            //console.log('filter',this.currentReferenceCode)
        },
        // capture subactivity selection
        referenceCodeSelected(value) {
            //alert(value);
            //console.log(value)
            this.filterReferenceCode(value)
        },
        //fetch reference codes records
        getReferenceCodes() {
            axios.get('/api/referencecode/targetdataentry')
                .then((response) => {
                    this.referenceCodes = response.data
                    //console.log(response)
                })
        },
        //filter subactivities by AcNo
        filterSubActivities(value) {
            this.currentSubActivies = this.subActivities.filter((subactivity) => {
                return subactivity.AcNo == value;
            })
            //console.log(this.currentSubActivies)
        },
        // capture subactivity selection
        subActivitySelected(value) {
            //alert(value);
            //console.log(value)
            this.filterSubActivities(value)
        },
        //fetch subactivities records
        getSubActivities() {
            axios.get('/api/subactivity/index')
                .then((response) => {
                    this.subActivities = response.data
                    //console.log(response)
                })
        }
    },
    mounted() {
        this.getSubActivities();
        this.getReferenceCodes();
        this.getCategories()
        this.getFinancing()
        this.getCentres()
        this.getExpenseItems()

        this.getMainActivities()

        
    },
    created() {

    },
    updated() {
        //this.currentMainActivity = this.mainActivities[0]
    },
    watch: {
        selectedSubactivity: {
            handler(newValue, oldValue) {
                this.subActivitySelected(newValue)
            },
            immediate: true
        },
        selectedReferenceCode: {
            handler(newValue, oldValue) {
                //this.referenceCodeSelected(newValue)
            },
            immediate: true
        },
        mainActivities: {
            handler(newValue, oldValue) {
                //console.log('mainActivities',newValue[0])
                //this.currentMainActivity = newValue[0]
            },
            immediate: true
        }
    },
})
</script>
  
  
<style scoped></style>